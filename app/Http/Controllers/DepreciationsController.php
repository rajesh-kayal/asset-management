<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssetClass;
use App\Models\Asset;
use App\Models\Depreciations;
use App\Models\DepcritationCalculation;
use App\Models\Depreciation_in_it_act;
use Carbon\Carbon;

class DepreciationsController extends Controller
{
    private function daysToNextFinancialYear($purchaseDate)
    {
        $currentDate = Carbon::parse($purchaseDate);

        $nextFinancialYearStart = $currentDate->copy()->addYear()->startOfYear()->addMonths(3);

        $endOfFinancialYear = $nextFinancialYearStart->copy()->subDay();

        $daysToFinancialYearEnd = $currentDate->diffInDays($endOfFinancialYear);

        return $daysToFinancialYearEnd;
    }

    private function saveAssetAndDepreciation(Request $request)
    {
        $fileName = null;

        if ($request->hasFile('invoice')) {
            $fileName = time() . '_' . $request->file('invoice')->getClientOriginalName();
            $request->file('invoice')->move(public_path('uploads'), $fileName);
        }

        $asset = new Asset();
        $asset->Fixed_asset_no = $request->Fixed_asset_no;
        $asset->Class_code = $request->Class_code;
        $asset->asset_type = $request->asset_type;
        $asset->asset_description = $request->asset_description;
        $asset->asset_vendor = $request->asset_vendor;
        $asset->location = $request->location;
        $asset->quantity = $request->quantity;
        $asset->purchase_date = $request->purchase_date;
        $asset->purchase_cost = $request->purchase_cost;
        $asset->invoice = $fileName;

        $assetClass = AssetClass::where('class_id', $request->Class_code)->first();

        $depreciation = new Depreciations();
        $depreciation->class_id = $request->Class_code;
        $depreciation->purchase_date = $request->purchase_date;
        $depreciation->purchase_cost = $request->purchase_cost;

        $purchaseDate = $depreciation->purchase_date;

        try {
            $purchaseDate = Carbon::parse($purchaseDate)->format('Y-m-d');
        } catch (\Exception $e) {
            return redirect()->back()->with(['message' => 'error', 'error' => 'Invalid purchase date format']);
        }

        $purchaseDays = $this->daysToNextFinancialYear($purchaseDate);

        $rateCompanyAct = $assetClass->Rate_of_def_c_act / 100;
        $rateItAct = $assetClass->Rate_of_def_it_act / 100;

        $companyCurrentYearDepreciation = round($request->purchase_cost * $rateCompanyAct * $purchaseDays / 365, 2);
        $companyAccumulatedDepreciation = round($request->purchase_cost - $companyCurrentYearDepreciation, 2);
        // IT Act Depreciation
        $itCurrentYearDepreciation = round($request->purchase_cost * $rateItAct, 2);
        $itAccumulatedDepreciation = round($request->purchase_cost - $itCurrentYearDepreciation, 2);

        $depreciation = new Depreciations();
        $depreciation->class_id = $request->Class_code;
        $depreciation->purchase_date = $request->purchase_date;
        $depreciation->purchase_cost = $request->purchase_cost;
        $depreciation->purchase_days = $purchaseDays;
        $depreciation->company_current_year_depreciation = $companyCurrentYearDepreciation;
        $depreciation->company_accumulated_depreciation = $companyAccumulatedDepreciation;

        $depreciation->it_current_year_depreciation = $itCurrentYearDepreciation;
        $depreciation->it_accumulated_depreciation = $itAccumulatedDepreciation;

        $depreciationCompnay = ($depreciation->company_accumulated_depreciation * $rateCompanyAct);
        $depreciation->Company_opening_balance = $depreciation->company_accumulated_depreciation;
        $depreciation->Company_closing_balance = $depreciation->Company_opening_balance - $depreciationCompnay;

        $depreciation->save();


        $depreciationCompnay = ($companyAccumulatedDepreciation * $rateCompanyAct);
        $depreciation->Company_opening_balance = $companyAccumulatedDepreciation;
        $depreciation->Company_closing_balance = ($depreciation->Company_opening_balance - $depreciationCompnay);
    //  dd($depreciation->Company_closing_balance);
    //  die();

while ($depreciation->Company_closing_balance > 0) {
    $companyCurrentYearDepreciation = round($asset->purchase_cost * $rateCompanyAct * $purchaseDays / 365, 2);
    $companyAccumulatedDepreciation = round($asset->purchase_cost - $companyCurrentYearDepreciation, 2);

    $depreciation->it_current_year_depreciation = $itCurrentYearDepreciation;
    $depreciation->it_accumulated_depreciation = $itAccumulatedDepreciation;

    $depreciation = new Depreciations();
    $depreciation->class_id = $request->Class_code;
    $depreciation->purchase_date = $request->purchase_date;
    $depreciation->purchase_cost = $request->purchase_cost;
    $depreciation->purchase_days = $purchaseDays;
    $depreciation->company_current_year_depreciation = $companyCurrentYearDepreciation;
    $depreciation->company_accumulated_depreciation = $companyAccumulatedDepreciation;

    $depreciation->it_current_year_depreciation = $itCurrentYearDepreciation;
    $depreciation->it_accumulated_depreciation = $itAccumulatedDepreciation;

    $depreciationCompnay = ($depreciation->company_accumulated_depreciation * $rateCompanyAct);
    $depreciation->Company_opening_balance = $depreciation->company_accumulated_depreciation;
    $depreciation->Company_closing_balance = $depreciation->Company_opening_balance - $depreciationCompnay;

    $depreciationCompnay = ($depreciation->company_accumulated_depreciation * $rateCompanyAct);
    $depreciation->Company_opening_balance = $depreciation->Company_closing_balance;
    $depreciation->Company_closing_balance =  $depreciationCompnay - $depreciation->Company_opening_balance;
    $depreciation->save();
    return true;
}


        return true;

    }

    public function store(Request $request)
    {
        $result = $this->saveAssetAndDepreciation($request);
    }

}






<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssetClass;
use App\Models\Asset;
use App\Models\Depreciations;
use Carbon\Carbon;


class DepreciationsController extends Controller
{

    private function daysToNextFinancialYear($purchaseDate)
    {
        // Get the purchase date
        $currentDate = Carbon::parse($purchaseDate);

        // Adjust the purchase date to the next financial year start date (April 1st)
        $nextFinancialYearStart = $currentDate->copy()->addYear()->startOfYear()->addMonths(3);

        // Calculate the end of the financial year (March 31st)
        $endOfFinancialYear = $nextFinancialYearStart->copy()->subDay();

        // Calculate the number of days to the end of the financial year
        $daysToFinancialYearEnd = $currentDate->diffInDays($endOfFinancialYear);

        // Return the result
        return $daysToFinancialYearEnd;
    }


    public function DepreciationsSave(Request $request)
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
        $asset->save();

        // Retrieve AssetClass record based on Class_code
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
        } // for to convert into numeric

        $purchaseDays = $this->daysToNextFinancialYear($purchaseDate);

        // dd($purchaseDays);
        // die();
        // new another table assetclass
        // Update calculations for Company Act and IT Act Depreciation
        $rateCompanyAct = $assetClass->Rate_of_def_c_act / 100;
        $rateItAct = $assetClass->Rate_of_def_it_act / 100;

        $companyAccumulatedDepreciation = $request->purchase_cost;


        $companyCurrentYearDepreciation = round($asset->purchase_cost * $rateCompanyAct * $purchaseDays / 365, 2);
        $companyAccumulatedDepreciation = round($asset->purchase_cost - $companyCurrentYearDepreciation, 2);

        $itCurrentYearDepreciation = round($asset->purchase_cost * $rateItAct, 2);
        $itAccumulatedDepreciation = round($asset->purchase_cost - $itCurrentYearDepreciation, 2);


        $depreciation->purchase_days = $purchaseDays;
        $depreciation->company_current_year_depreciation = $companyCurrentYearDepreciation;
        $depreciation->company_accumulated_depreciation = $companyAccumulatedDepreciation;
        $depreciation->it_current_year_depreciation = $itCurrentYearDepreciation;
        $depreciation->it_accumulated_depreciation = $itAccumulatedDepreciation;
        // dd();
        // die();

        $depreciation->save();

        $result = $asset->Class_code && $depreciation->class_id;

        if ($result) {
            return redirect('/asset')->with(['message' => 'success']);
        } else {
            return redirect()->back()->with(['message' => 'error']);
        }
    }







    // public function getDayOfFinancialYear($dateString)
    // {
    //     // Given date
    //     $date = Carbon::createFromFormat('m/d/Y', $dateString);

    //     // Financial year start and end dates
    //     $financialYearStart = Carbon::create($date->year, 4, 1); // April 1st
    //     $financialYearEnd = Carbon::create($date->year + 1, 3, 31); // March 31st of the next year

    //     // Check if the given date is within the financial year
    //     if ($date->gte($financialYearStart) && $date->lte($financialYearEnd)) {
    //         // Calculate the day of the financial year
    //         $dayOfFinancialYear = $date->diffInDays($financialYearStart) + 1;

    //         // Return the result
    //         return "Given date: $dateString, Day of Financial Year: $dayOfFinancialYear";
    //     } else {
    //         return "Given date is not within the financial year.";
    //     }
    // }


    // public function showFinancialYearDayCount()
    // {
    //     //Example usage
    //     $dateString = '5/26/2023';
    //     $result = $this->getDayOfFinancialYear($dateString);

    //     // Output the result using echo
    //     echo $result;
    // }
    // private function calculatePurchaseDays($purchaseDate, $financialYearStart)
    // {
    //     $date = '5/26/2023';
    //     // Convert purchase date and financial year start date to Unix timestamps
    //     $purchaseDateTime = strtotime($purchaseDate);
    //     $financialYearStartDateTime = strtotime($financialYearStart);
    //     // Ensure purchase date is not before the financial year start date
    //     $purchaseDateTime = max($purchaseDateTime, $financialYearStartDateTime);
    //     // Get the current date and time
    //     $currentDate = now();
    //     $currentDateTime = strtotime($currentDate);
    //     // Calculate the difference in seconds between the current date and purchase date
    //     $differenceInSeconds = $currentDateTime - $purchaseDateTime;
    //     // Convert the difference to days and round up to the nearest whole day
    //     $purchaseDays = ceil($differenceInSeconds / (60 * 60 * 24));
    //     // Return the calculated number of purchase days
    //     return $purchaseDays;
    // }

}

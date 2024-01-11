<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssetClass;
use App\Models\Asset;
use App\Models\Depreciations;
use App\Models\DepcritationCalculation;
use Carbon\Carbon;

class Next_year_Depreciations extends Controller
{
    public function edit_depreciations($id)
    {
        $Asset = Asset::where('id', $id)->first();

        return view('depreciations.edit_depreciations')->with(['asset' => $Asset]);
    }

    public function NextyearDepreciationsSave(Request $request)
    {
        $DepcritationCalculation = new DepcritationCalculation();
        $DepcritationCalculation->opening_blance = $request->Company_accumulated_depreciation;
        $DepcritationCalculation->class_id = $request->Class_code;
        $DepcritationCalculation->depreciations_input_value = $request->depreciations;
        $DepcritationCalculation->purchase_cost = $request->purchase_cost;
        $update_purchase_cost = $DepcritationCalculation->actuall_depreciation = ($DepcritationCalculation->purchase_cost - $DepcritationCalculation->depreciations_input_value);


        // Update Asset
        $asset = Asset::where('Class_code', $request->Class_code)->first();
        $asset->purchase_cost = $update_purchase_cost;
        
        $DepcritationCalculation->closing_blance = ( $DepcritationCalculation->opening_blance - $asset->purchase_cost );
        $asset->Company_accumulated_depreciation = $DepcritationCalculation->closing_blance;
        // dd($DepcritationCalculation);
        // dd($asset);
        // die();
        $asset->save();
        $DepcritationCalculation->save();

        return redirect('/asset')->with(['message' => 'success']);
    }
}

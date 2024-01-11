<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use App\Models\AssetClass;
use App\Models\Depreciations;
use App\Models\DepcritationCalculation;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function AllReport()
    {
        $assets = AssetClass::select(
            'asset_classes.class_description as Class',
            'asset_classes.asset_life as Life',
            'assets.Fixed_asset_no',
            'assets.quantity as Quantity',
            'assets.purchase_date',
            'assets.asset_description',
            'depreciations.Company_accumulated_depreciation as Beginning_Depreciation',
            'depreciationcalculaction.actuall_depreciation',
            'depreciationcalculaction.opening_blance as Current_year_Depreciation',
            'depreciationcalculaction.closing_blance as Accumulated_Depreciation'
        )
        ->join('assets', 'asset_classes.class_id', '=', 'assets.Class_code')
        ->join('depreciations', 'assets.Class_code', '=', 'depreciations.class_id')
        ->join('depreciationcalculaction', 'depreciations.class_id', '=', 'depreciationcalculaction.class_id')
        ->get();

            // dd($assets);

            // die();

        return view('report', compact('assets'));
    }

    // public function getAllReport()
    // {
    //     $reports = Depreciations::get();
    //     return view('report')->with(['reports' => $reports]);
    // }
}

// $assets = Asset::join('asset_classes', 'assets.Class_code', '=', 'asset_classes.class_id')
//             ->select(
//                 'assets.Fixed_asset_no',
//                 'assets.quantity',
//                 'assets.asset_description',
//                 'asset_classes.class_description',
//                 'asset_classes.asset_life',
//                 'assets.purchase_cost',
//                 \DB::raw('DATEDIFF(CURRENT_DATE, assets.purchase_date) AS days_since_purchase'),
//                 \DB::raw('assets.purchase_cost * DATEDIFF(CURRENT_DATE, assets.purchase_date) * asset_classes.Rate_of_def / 365 AS current_year_depreciation'),
//                 \DB::raw('(SELECT IFNULL(SUM(b.purchase_cost * DATEDIFF(CURRENT_DATE, b.purchase_date) * ac.Rate_of_def / 365), 0)
//                         FROM assets b
//                         JOIN asset_classes ac ON ac.class_id = b.Class_code
//                         WHERE b.id = assets.id AND b.purchase_date < assets.purchase_date)
//                         + (assets.purchase_cost * DATEDIFF(CURRENT_DATE, assets.purchase_date) * asset_classes.Rate_of_def / 365) AS accumulated_depreciation')
//             )
//             ->get();

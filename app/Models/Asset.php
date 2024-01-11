<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'Fixed_asset_no',
        'Class_code',
        'asset_type',
        'asset_description',
        'asset_vendor',
        'location',
        'quantity',
        'purchase_date',
        'purchase_cost',
        'Company_accumulated_depreciation',
        'invoice'

        ];
        public function AssetClass()
        {
            return $this->belongsTo(AssetClass::class, "class_id", "Class_code");
        }


}

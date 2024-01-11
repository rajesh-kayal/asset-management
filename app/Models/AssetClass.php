<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_id',
        'class_description',
        'asset_life',
        'Rate_of_def_c_act',
        'Rate_of_def_it_act' 
    ];
    public function Asset()
    {
        return $this->hasMany(Asset::class, "Class_code", "class_id");
    }
}

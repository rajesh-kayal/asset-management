<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depreciation_in_it_act extends Model
{
    protected $table = 'depreciation_in_it_act';
    protected $primaryKey = 'id';
    protected $fillable = [
        'Rate_of_def_it_act',
        'It_current_year_depreciation',
        'It_accumulated_depreciation',
        'created_at',
        'updated_at'
    ];
    use HasFactory;
    // public $timestamps = false;
}

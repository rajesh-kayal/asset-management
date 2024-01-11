<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depreciations extends Model
{
    protected $table = 'depreciations';
    protected $primaryKey = 'id';
    protected $fillable = [
        'class_id',
        'purchase_date',
        'purchase_cost',
        'purchase_days',
        'Company_current_year_depreciation',
        'Company_accumulated_depreciation',
        'Company_opening_balance',
        'Company_closing_balance',
        'It_current_year_depreciation',
        'It_accumulated_depreciation',
        'It_opening_balance'
    ];

    use HasFactory;


}

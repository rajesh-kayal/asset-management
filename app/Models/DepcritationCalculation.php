<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepcritationCalculation extends Model
{
    protected $table = 'depreciationcalculaction';
    protected $primaryKey = 'id';
    protected $fillable = [
        'class_id',
        'purchase_cost',
        'depreciations_input_value',
        'actuall_depreciation',
        'opening_blance',
        'closing_blance'
    ];
    use HasFactory;

    
}

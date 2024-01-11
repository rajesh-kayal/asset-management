<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendor_name',
        'phone',
        'mobile',
        'primary_contact',
        'email',
        'description',
        'address_line1',
        'city',
        'state',
        'address_line2',
        'country',
        'zip_code',
    ];
}

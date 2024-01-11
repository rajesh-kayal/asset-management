<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = 'logins';
    protected $primaryKey = 'id';
    protected $fillable = [
        'userid',
        'username',
        'password'
    ];

    use HasFactory;
}


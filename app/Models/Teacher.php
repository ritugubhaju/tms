<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'name',
        'gender',
        'phone',
        'email',
        'address',
        'nationality',
        'dob',
        'faculty'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable =[
        'name',
        'email',
        'mobile_number',
        'city_village',
        'gender',
        'date_of_join',
        'date_of_leave',
    ];
    
}

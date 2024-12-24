<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class patiant_list extends Model
{
    protected $table = 'patiant_lists'; // Ensure this matches your table name
    protected $fillable =[
        'name',
        'email',
        'phone',
        'village',
        'gender',
        'treatment',
        'treatment_status',
        'totle_fees',
        'paid_fees',
        'pending_fees',
        'next_schedule_date',
        'progress',
    ];
}

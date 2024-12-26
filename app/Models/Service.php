<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'process',
        'duration',
        'pros',
        'cons',
    ];

    protected $casts = [
        'process' => 'array',
        'duration' => 'array',
        'pros' => 'array',
        'cons' => 'array',
    ];
}

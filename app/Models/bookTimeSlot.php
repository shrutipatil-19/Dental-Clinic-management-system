<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookTimeSlot extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'slot',
        'is_booked', // Field added for mass assignment
        
    ];

    /**
     * Get the appointments for the time slot.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appointments()
    {
        return $this->hasMany(bookAppointment::class);
    }
}

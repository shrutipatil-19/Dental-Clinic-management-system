<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookTimeSlot extends Model
{
    use HasFactory;

    protected $fillable = [
        'slot',
        'is_booked',
    ];

    /**
     * Get the appointments for the time slot.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appointments()
    {
        return $this->hasMany(bookAppointment::class, 'time_slot_id');
    }

    /**
     * Check if the time slot is booked for a specific date.
     *
     * @param string $date
     * @return bool
     */
    public function isBookedForDate($date)
    {
        return $this->appointments()->where('date', $date)->exists();
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookAppointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'time_slot_id', // Field added for mass assignment
        'name',
        'email',
        'city',
        'village',
        'mobile',
        'date',

    ];
    /**
     * Get the time slot that owns the appointment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function timeSlot()
    {
        return $this->belongsTo(bookTimeSlot::class);
    }
}

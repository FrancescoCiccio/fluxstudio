<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Slot extends Model
{
    use HasFactory;

    protected $fillable = ['start_time', 'end_time', 'is_available'];

    public function weekdays()
    {
        return $this->belongsToMany(Weekday::class, 'slot_weekday', 'slot_id', 'day_of_week');
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class); // Relazione uno-a-molti
    }
}

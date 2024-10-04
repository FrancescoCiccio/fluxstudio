<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Slot extends Model
{
    use HasFactory;

    protected $fillable = ['start_time', 'end_time', 'is_available', 'days_of_week'];

    protected $casts = [
        'days_of_week'  => 'array'
    ];

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class); // Relazione uno-a-molti
    }
}

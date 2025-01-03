<?php

namespace App\Http\Controllers\Api;

use App\Models\Slot;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    //

    public function getSlots(Request $request): ?Collection
    {
        $date = $request->query('date');

        if (!$date) {
            return collect([]);
        }

        try {
            $date = Carbon::parse($date);
        } catch (\Exception $e) {
            return collect([]);
        }

        // Ottieni il giorno della settimana in formato inglese (es. 'Monday')
        $dayOfWeek = $date->dayOfWeek;

        $availableSlots = Slot::whereJsonContains('days_of_week', $dayOfWeek)
            ->whereDoesntHave('bookings', function ($query) use ($date) {
                $query->whereDate('date', $date->toDateString());
            })
            ->get();

        return $availableSlots;
    }
}

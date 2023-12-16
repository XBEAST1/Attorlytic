<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profiledatasend;

class Bookingcontroller extends Controller
{
    public function booking($id)
    {
        $booking = profiledatasend::find($id);

        if (!$booking) {
            abort(404);
        }

        return view('booking', compact('booking'));
    }
}

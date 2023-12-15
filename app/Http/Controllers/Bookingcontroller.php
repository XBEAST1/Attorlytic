<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datasend;

class Bookingcontroller extends Controller
{
    public function booking($id)
    {
        $booking = datasend::find($id);

        if (!$booking) {
            abort(404);
        }

        return view('booking', compact('booking'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\FormData;

class Bookingcontroller extends Controller
{
    public function booking($id)
    {
        $booking = FormData::find($id);

        if (!$booking) {
            abort(404);
        }

        return view('booking', compact('booking'));
    }
}

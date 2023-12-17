<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;
use App\Models\Booking;

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

    public function deletebooking($id){
        Booking::destroy($id);
        return back();
    }

    public function appointment(Request $request)
    {
        $validatedData = $request->validate([
            'days' => 'required|array',
            'days.*' => 'in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday',
            'time' => 'required|in:8-9,9-10,10-11,11-12,1-2,2-3,3-4,4-5,5-6,6-7,7-8',
            'user_id' => 'required|exists:users,id',
        ]);
        
        Booking::create([
            'user_id' => $validatedData['user_id'],
            'day' => implode(', ', $validatedData['days']),
            'time' => $validatedData['time'],
        ]);
    
        return redirect()->route('home')->with('success', 'Appointment Booked Successfully!');
    }
}

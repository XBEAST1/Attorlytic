<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Bookingcontroller extends Controller
{
    public function booking($id)
    {
        $booking = FormData::find($id);

        if (!$booking) {
            abort(404);
        }

        return view('booking', compact('booking', 'id'));
    }

    public function appointment(Request $request, $id)
    {
        $clientid = Auth::user()->id;
        $selectedDay = $request->input('selected_day');
        $selectedTime = $request->input('selected_time');
    
        $user_id = $id;
        $formData = FormData::find($user_id);
        $lawyerId = $formData->user_id;
    
        $day_validator = Validator::make($request->all(), [
            'selected_day' => 'required',
        ]);
    
        $time_validator = Validator::make($request->all(), [
            'selected_time' => 'required',
        ]);

        if ($day_validator->fails()) {
            return redirect()->back()->with('status', 'dayerror')->with('message', 'Please Select a Day');
        }

        if ($time_validator->fails()) {
            return redirect()->back()->with('status', 'timeerror')->with('message', 'Please Select a Time');
        }

        Booking::create([
            'client_id' => $clientid,
            'lawyer_id' => $lawyerId,
            'day' => $selectedDay,
            'time' => $selectedTime,
        ]);
    
        return redirect()->back()->with('status', 'success')->with('message', 'Appointment Booked Successfully!');
    }

    public function deletebooking($id)
    {
        Booking::destroy($id);
        return back();
    }
}

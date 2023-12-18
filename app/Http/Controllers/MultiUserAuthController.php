<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;

class MultiUserAuthController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::id()){
            $usertype = Auth()->user()->usertype;
            if ($usertype == 'user'){
                $lawyercards = User::all();
                return view('index', compact('lawyercards'));
            } else if ($usertype == 'admin'){
                $lawyer_id = Auth::user()->id;
                $bookings = Booking::with('client_relation')->where('lawyer_id', $lawyer_id)->get();
                return view('admin.dashboard', compact('bookings'));
            }
        }
    }
}

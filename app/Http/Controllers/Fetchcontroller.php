<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\profiledatasend;

class Fetchcontroller extends Controller
{
    public function indexlawyercards()
    {
        $lawyercards = profiledatasend::all();
        return view('index', compact('lawyercards'));
    }
    public function aboutlawyercards()
    {
        $lawyercards = profiledatasend::all();
        return view('about-us', compact('lawyercards'));
    }
    public function appointmentlawyercards()
    {
        $lawyercards = profiledatasend::all();
        return view('appointment', compact('lawyercards'));
    }
    public function search(Request $request)
    {
        $search = $request['search'] ?? "";
        
        if ($search != ""){
            $lawyercards = profiledatasend::where('firstname', 'LIKE', "%$search%")
            ->orWhere('lastname', 'LIKE', "%$search%")
            ->get();
        } else {
            $lawyercards = profiledatasend::all();
        }
        
        $data = compact('lawyercards', 'search');
        return view('appointment')->with($data);
    }
    
}

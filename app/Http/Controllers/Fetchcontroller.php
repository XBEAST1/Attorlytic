<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\datasend;

class Fetchcontroller extends Controller
{
    public function indexlawyercards()
    {
        $lawyercards = datasend::all();
        return view('index', compact('lawyercards'));
    }
    public function aboutlawyercards()
    {
        $lawyercards = datasend::all();
        return view('about-us', compact('lawyercards'));
    }
    public function appointmentlawyercards()
    {
        $lawyercards = datasend::all();
        return view('appointment', compact('lawyercards'));
    }
    public function search(Request $request)
    {
        $search = $request['search'] ?? "";
        
        if ($search != ""){
            $lawyercards = datasend::where('firstname', 'LIKE', "%$search%")
            ->orWhere('lastname', 'LIKE', "%$search%")
            ->get();
        } else {
            $lawyercards = datasend::all();
        }
        
        $data = compact('lawyercards', 'search');
        return view('appointment')->with($data);
    }
    
}

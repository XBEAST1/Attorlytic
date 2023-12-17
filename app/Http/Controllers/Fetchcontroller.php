<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;

class Fetchcontroller extends Controller
{
    public function indexlawyercards()
    {
        $lawyercards = FormData::all();
        return view('index', compact('lawyercards'));
    }
    public function aboutlawyercards()
    {
        $lawyercards = FormData::all();
        return view('about-us', compact('lawyercards'));
    }
    public function appointmentlawyercards()
    {
        $lawyercards = FormData::all();
        return view('appointment', compact('lawyercards'));
    }
    public function search(Request $request)
    {
        $search = $request['search'] ?? "";
        
        if ($search != ""){
            $lawyercards = FormData::where('firstname', 'LIKE', "%$search%")
            ->orWhere('lastname', 'LIKE', "%$search%")
            ->get();
        } else {
            $lawyercards = FormData::all();
        }
        
        $data = compact('lawyercards', 'search');
        return view('appointment')->with($data);
    }
    
}

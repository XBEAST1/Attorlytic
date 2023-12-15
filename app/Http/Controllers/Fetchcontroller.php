<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}

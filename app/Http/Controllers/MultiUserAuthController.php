<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\FormData;

class MultiUserAuthController extends Controller
{
    public function index()
    {
        if (Auth::id()){
            $usertype = Auth()->user()->usertype;
            if ($usertype == 'user'){
                $lawyercards = FormData::all();
                return view('index', compact('lawyercards'));
            } else if ($usertype == 'admin'){
                return view('admin.dashboard');
            }
        }
    }
}

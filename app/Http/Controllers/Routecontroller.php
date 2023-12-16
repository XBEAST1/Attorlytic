<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Routecontroller extends Controller
{
    public function appointment(){
        return view('appointment');
    }
    public function blog(){
        return view('blog');
    }
    public function case(){
        return view('case');
    }
    public function consulation(){
        return view('consulation');
    }
    public function contactus(){
        return view('contact-us');
    }
    public function practicearea(){
        return view('practice-area');
    }
    public function businesslaw(){
        return view('business-law');
    }
    public function familylaw(){
        return view('family-law');
    }
    public function criminallaw(){
        return view('criminal-law');
    }
    public function realestate(){
        return view('real-estate-law');
    }
    public function personalinjury(){
        return view('personal-injury');
    }
    public function juriciallaw(){
        return view('juricial-law');
    }
    public function cybercrime(){
        return view('cyber-crime');
    }
    public function socialwork(){
        return view('social-work');
    }
    public function familyproblem(){
        return view('family-problem');
    }
    public function varitiescase(){
        return view('varities-case');
    }
    public function landcollected(){
        return view('land-collected');
    }
    public function divorcemaking(){
        return view('divorce-making');
    }
    public function categoryrealstate(){
        return view('category-real-state');
    }
    public function categorycriminaloffense(){
        return view('category-criminal-offense');
    }
    public function categorydisputeresoulation(){
        return view('category-dispute-resoulation');
    }
    public function raiseyourvoice(){
        return view('raise-your-voice');
    }
    public function allowmiles(){
        return view('allow-miles');
    }
    public function tosittingsubject(){
        return view('to-sitting-subject');
    }
    public function fancyshestuff(){
        return view('fancy-she-stuff');
    }
    public function updateprofile(){
        return view('admin.update');
    }
}
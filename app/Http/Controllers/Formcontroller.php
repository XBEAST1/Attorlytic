<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\FormData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class Formcontroller extends Controller
{
    function addprofile(Request $request)
    {
        $user = $request->user();
        
        $validator = Validator::make($request->all(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'description' => 'required',
            'gender' => 'required|in:Male,Female',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:8192',
            'fee' => 'required|numeric',
            'category' => 'required',
            'country' => 'required',
            'city' => 'required',
            'educationinfo' => 'required',
            'additionalinfo' => 'required',
            'specializeinfo' => 'required',
            'about' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('status', 'error');
        }

        $existingProfile = FormData::where('user_id', $user->id)->first();

        if ($existingProfile) {
            $validator = Validator::make([], []);
            $validator->errors()->add('user_id', 'You can only add one profile.');
            return redirect()->back()->with('status', 'exist');
        }

        $data = new FormData();
        
        $data->user_id = $user->id;
        $data->firstname = $request->input('firstname');
        $data->lastname = $request->input('lastname');
        $data->description = $request->input('description');
        $data->gender = $request->input('gender');
        $data->fee = $request->input('fee');
        $data->category = $request->input('category');
        $data->country = $request->input('country');
        $data->city = $request->input('city');
        $data->educationinfo = $request->input('educationinfo');
        $data->additionalinfo = $request->input('additionalinfo');
        $data->specializeinfo = $request->input('specializeinfo');
        $data->about = $request->input('about');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $image_name = time() . "." . $ext;
            $image->move('images', $image_name);
            $data->image = $image_name;
        }

        $data->save();

        return redirect()->back()->with('status', 'success');
    }
    


    function updateprofile(Request $request)
    {
        $user_id = Auth::user()->id;
        $data = FormData::find($user_id);
    
        $validator = Validator::make($request->all(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'description' => 'required',
            'gender' => 'required|in:Male,Female',
            'fee' => 'required|numeric',
            'category' => 'required',
            'country' => 'required',
            'city' => 'required',
            'educationinfo' => 'required',
            'additionalinfo' => 'required',
            'specializeinfo' => 'required',
            'about' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:8192',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->with('status', 'error');
        }
    
        $data->firstname = $request->input('firstname');
        $data->lastname = $request->input('lastname');
        $data->description = $request->input('description');
        $data->gender = $request->input('gender');
        $data->fee = $request->input('fee');
        $data->category = $request->input('category');
        $data->country = $request->input('country');
        $data->city = $request->input('city');
        $data->educationinfo = $request->input('educationinfo');
        $data->additionalinfo = $request->input('additionalinfo');
        $data->specializeinfo = $request->input('specializeinfo');
        $data->about = $request->input('about');
    
        if ($request->hasFile('image')) {
            $imagepath = 'images/' . $data->image;
            if (File::exists($imagepath)) {
                File::delete($imagepath);
            }
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $image_name = time() . "." . $ext;
            $image->move('images', $image_name);
            $data->image = $image_name;
        }
    
        $data->save();
    
        return redirect()->back()->with('status', 'success');
    }    
    
    function deleteprofile() {
        $user_id = Auth::user()->id;
        $profile = FormData::find($user_id);
        if ($profile) {
            $imagePath = 'images/' . $profile->image;
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            $profile->delete();
        }
        return redirect()->route('home');
    }
}
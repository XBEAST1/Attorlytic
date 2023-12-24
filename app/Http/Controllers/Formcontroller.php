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
        
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'description' => 'required',
            'gender' => 'required|in:Male,Female',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp',
            'fee' => 'required|numeric',
            'category' => 'required',
            'country' => 'required',
            'city' => 'required',
            'educationinfo' => 'required',
            'additionalinfo' => 'required',
            'specializeinfo' => 'required',
            'about' => 'required',
        ],[
            'firstname.required' => 'The First Name Field Is Required',
            'lastname.required' => 'The Last Name Field Is Required',
            'description.required' => 'The Description Field Is Required',
            'gender.required' => 'Please Select a Gender',
            'image.required' => 'The Image Is Required',
            'fee.required' => 'The Fee Field Is Required',
            'category.required' => 'Please Select a Category',
            'country.required' => 'Please Select a Country Country',
            'city.required' => 'The City Field Is Required',
            'educationinfo.required' => 'These Fields Are Required',
            'about.required' => 'The About Field Is Required', 
        ]);

        $existingProfile = FormData::where('user_id', $user->id)->first();

        if ($existingProfile) {
            $validator = Validator::make([], []);
            $validator->errors()->add('user_id', 'Only One Profile Is Alowed For Each Account.');
            return redirect()->back()->with('status', 'exist')->with('message', 'Only One Profile Is Alowed For Each Account');
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

        return redirect()->back()->with('status', 'success')->with('message', 'Profile Added Successfully');
    }


    function updateprofile(Request $request)
    {
        $user_id = Auth::user()->id;
        $data = FormData::find($user_id);
    

        $request->validate ([
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
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ],[
            'firstname.required' => 'The First Name Field Is Required',
            'lastname.required' => 'The Last Name Field Is Required',
            'description.required' => 'The Description Field Is Required',
            'gender.required' => 'Please Select a Gender',
            'image.required' => 'The Image Is Required',
            'fee.required' => 'The Fee Field Is Required',
            'category.required' => 'Please Select a Category',
            'country.required' => 'Please Select a Country Country',
            'city.required' => 'The City Field Is Required',
            'educationinfo.required' => 'These Fields Are Required',
            'about.required' => 'The About Field Is Required', 
        ]);
    
        if (!$data) {
            return redirect()->back()->with('status', 'dontexist')->with('message', 'Profile Does Not Exist');
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
    
        return redirect()->back()->with('status', 'success')->with('message', 'Profile Updated Successfully');
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
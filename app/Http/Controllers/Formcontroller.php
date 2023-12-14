<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\FormData;

class Formcontroller extends Controller
{
    function store_data(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'description' => 'required',
            'gender' => 'required|in:male,female',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'fee' => 'required|numeric',
            'country' => 'required',
            'city' => 'required',
            'educationinfo' => 'required',
            'additionalinfo' => 'required',
            'specializeinfo' => 'required',
            'about' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('status', 'error')->with('message', 'Please Fill All Fields');
        }

        $data = new FormData();

        $data->firstname = $request->input('firstname');
        $data->lastname = $request->input('lastname');
        $data->description = $request->input('description');
        $data->gender = $request->input('gender');
        $data->fee = $request->input('fee');
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

        return redirect()->back()->with('status', 'success')->with('message', 'Data submitted successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Validator;


class ContactusController extends Controller
{
    //
    public function index() {
        return view("homeComponents/contactus");
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'firstname' => 'required', // Assuming folder_id is required
                'lastname' => 'required',
                'email' => 'required',
                'message' => 'max:255',
                'captcha' => 'required|captcha',
            ],
            [
                'required' => 'Field is required',
            ]
        );

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['message' => 'Oops! Something went wrong with your submission.', 'errors' => $validator->errors()], 422);
        }

        $data = new ContactUs;
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->email = $request->email;
        $data->message = $request->message;
        $data->captcha = $request->captcha;
        $data->save();
        return redirect('contact')->with('status', 'Saved Successfully');
    
    }

    
}

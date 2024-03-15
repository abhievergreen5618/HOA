<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Headings;
use Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
class SettingController extends Controller
{
    //
    public function index()
    {

    $smtpHost = env('MAIL_HOST');
    $smtpPort = env('MAIL_PORT');
    $username = env('MAIL_USERNAME');
    $password = env('MAIL_PASSWORD');
    $fromMailAddress = env('MAIL_FROM_ADDRESS');
    $encryption = env('MAIL_ENCRYPTION');
    
    
    $heading1 = Headings::find(1);
    $heading2 = Headings::find(2);
    $heading3 = Headings::find(3);
    $heading4 = Headings::find(4);
    $heading5 = Headings::find(5);
    $heading6 = Headings::find(6);

    return view('pages/setting', compact('smtpHost', 'smtpPort', 'username', 'password', 'fromMailAddress', 'encryption' , 'heading1', 'heading2','heading3', 'heading4','heading5', 'heading6'));

    }
    
   public function save(Request $request)
{
    // Validate the form data
    // $request->validate([
    //     'smtp_host' => 'required',
    //     'smtp_port' => 'required',
    //     'username' => 'required',
    //     'password' => 'required',
    //     'from_mail_address' => 'required|email',
    //     'encryption' => 'required',
    // ]);

    // Update the .env file with the entered SMTP details
    $envFile = base_path('.env');

    // Read the existing content of the .env file
    $envContent = file_get_contents($envFile);


    // Update or add the SMTP configuration
    $envContent = preg_replace("/MAIL_HOST=.*/", "MAIL_HOST=" . $request->input('smtp_host'), $envContent);
    $envContent = preg_replace("/MAIL_PORT=.*/", "MAIL_PORT=" . $request->input('smtp_port'), $envContent);
    $envContent = preg_replace("/MAIL_USERNAME=.*/", "MAIL_USERNAME=" . $request->input('username'), $envContent);
    $envContent = preg_replace("/MAIL_PASSWORD=.*/", "MAIL_PASSWORD=" . $request->input('password'), $envContent);
    $envContent = preg_replace("/MAIL_FROM_ADDRESS=.*/", "MAIL_FROM_ADDRESS=" . $request->input('from_mail_address'), $envContent);
    $envContent = preg_replace("/MAIL_ENCRYPTION=.*/", "MAIL_ENCRYPTION=" . $request->input('encryption'), $envContent);

    // Write the updated content back to the .env file
    file_put_contents($envFile, $envContent);

    return redirect()->route('setting')->with('status', 'Saved SMTP Details Successfully');
    
    
         // Set success message in the session
    // session()->flash('status', ' Saved successfully');
    

    // Redirect back to the previous page or any desired page
    // return redirect()->back();
}


public function update(Request $request)
{
    $request->validate([
        'files.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        // 'password' => 'required|confirmed|min:8',
    ]);

    $user = Auth::user();
    $user->name = $request->name;
    $user->email = $request->email;
    // $user->password = Hash::make($request->password);
        
   

    // Check if new files are provided
    if ($request->hasFile('files')) {
        $filenames = [];
        foreach ($request->file('files') as $file) {
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move('uploads/', $filename);
            $filenames[] = 'uploads/' . $filename;
        }

        // Update user's image field with the new filenames
        $user->image = $filenames;
    }

    $user->save();

    return redirect()->route('setting')->with('status', 'Profile Updated Successfully');
}


public function updatepassword(Request $request) 
{
    $request->validate([
        'password' => 'required|confirmed|min:8',
    ]);

    $user = Auth::user();
    
    $user->password = Hash::make($request->password);
    $user->remember_token = Str::random(60);  

    $user->save();
//dd($user,$request->password);
    return redirect()->route('setting')->with('status', 'Password Updated Successfully');

}

public function updateHeading1(Request $request) {
    // Find the record with id 1
    $data = Headings::find(1);

    // Set the heading attribute to the updated value from the request
    $data->heading = $request->heading1;

    // Save the changes
    $data->save();

    return redirect()->route('setting')->with('status', 'Heading1 Updated Successfully');
}


public function updateHeading2(Request $request) {
    // Find the record with id 1
    $data = Headings::find(2);

    // Set the heading attribute to the updated value from the request
    $data->heading = $request->heading2;

    // Save the changes
    $data->save();

    return redirect()->route('setting')->with('status', 'Heading2 Updated Successfully');
}

public function updateURLHeading(Request $request)
{
    // Assuming the IDs are provided in the request
    $id3 = 3;
    $id4 = 4;
    $id5 = 5;
    $id6 = 6;

    // Update data for ID 3
    $data3 = Headings::find($id3);
    $data3->heading = $request->heading3;
    $data3->save();

    // Update data for ID 4
    $data4 = Headings::find($id4);
    $data4->heading = $request->heading4;
    $data4->save();
    
     // Update data for ID 5
    $data3 = Headings::find($id5);
    $data3->heading = $request->heading5;
    $data3->save();

    // Update data for ID 6
    $data4 = Headings::find($id6);
    $data4->heading = $request->heading6;
    $data4->save();


    return redirect()->route('setting')->with('status', 'Updated Data Successfully');
}


 
}

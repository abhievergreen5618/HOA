<?php

namespace App\Http\Controllers;

use App\Models\UserHOA;
use App\Models\HOA;
use Illuminate\Http\Request;
use App\Mail\FormSubmitted;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class UserHOAController extends Controller
{

    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
    'email' => 'required',
    'hoa_name' => 'required',
    'city' => 'required',
    'state' => 'required',
    'zip' => 'required',
]);

        $uploadedFiles = $request->file('files');
        // dd($request->file);
        $filenames = [];
 
        if ($uploadedFiles) {
            foreach ($uploadedFiles as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move('uploads/', $filename);
                $filenames[] = 'uploads/' . $filename;
            }
        }

        $data = new UserHOA();
        $data->name = $request->name;
        $data->hoa_name = $request->hoa_name;
        $data->contact_person = $request->contact_person;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->city = $request->city;
        $data->state = $request->state;
        $data->zip = $request->zip;
        $data->comments = $request->comments;
        $data->photos = $filenames;
        $data->save();

        // dd($request->all());

        // return response()->json(['message' => 'Data saved successfully']);
        
         // Send email to admin
        $adminEmail = User::pluck('email')->first();
        
        $subject = 'New Form Submission';
        $message = "A new form has been submitted:<br><br>";
        $message .= "Your Name: {$data->name}<br>";
        $message .= "HOA Name: {$data->hoa_name}<br>";
        $message .= "Your Email Address: {$data->email}<br>";
        $message .= "HOA Contact Person: {$data->contact_person}<br>";
        $message .= "HOA Phone Number: {$data->phone}<br>";
        $message .= "HOA City: {$data->city}<br>";
        $message .= "State: {$data->state}<br>";
        $message .= "Zip: {$data->zip}<br>";
        $message .= "Comments: {$data->comments}<br>";
        $message .= "Click Here to See it in Dashboard: <a href='https://myhoamailboxes.com/view-user-hoa/{$data->id}'>View Enquiry</a><br>";        
        

        Mail::html($message, function ($mail) use ($adminEmail, $subject) {
            $mail->to($adminEmail)->subject($subject);
        });

        return redirect('/response')->with('status', 'Form submitted successfully');

    }

    public function show()
    {
        $userhoaData = UserHOA::orderBy('id', 'desc')->paginate(10);
        
        
        if($userhoaData->isEmpty()) {
             abort(404);
        return view('errors/404');
        }

        return view('pages/userhoaList', compact('userhoaData'));
    }
    

public function view($id)
{
    $userHOA = UserHOA::find($id);
    
    return view('pages/userHoaView',['item' => $userHOA]);
}

    public function destroy($id)
    {
        $item = UserHOA::find($id);

        if ($item) {
            $item->delete();
        }
        return redirect('/user-hoa-list')->with('success', 'Item deleted successfully');
    }
    
    // public function copyData($id)
    // {
    //     $user_hoa = UserHOA::find($id);
        
    //         // $item->replicate()->setTable('h_o_a_s')->save();
            
    //         // $item->delete();
            
            
    //         return redirect('/hoa-list')->with('success', 'Data Copied successfully');
 
    // }
    
    
 public function search(Request $request)
{
    $searchHoaName = $request->input('searchHoaName');
    
    $userhoaData = UserHOA::where('hoa_name', 'like', "%$searchHoaName%")->paginate(10); // Assuming 10 records per page
   
    return view('pages/userhoaList', compact('userhoaData'));
}


  
public function deleteMultiple(Request $request)
{
    $ids = $request->ids;
    if(UserHOA::whereIn('id',explode(",",$ids))->delete())
    {
      return response()->json(['status' => 'success', 'message' => 'Item deleted successfully']);  
    }else{
        return response()->json(['status' => 'false', 'message' => 'Item not deleted successfully']);
    }
    
    // return redirect('/user-hoa-list')->with('success', 'Item deleted successfully');
  
}



}

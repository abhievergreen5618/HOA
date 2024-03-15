<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquirySubmitted;
use App\Models\HOA;
use App\Models\User;

class InquiryController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            ]);
        
        $data = new Inquiry();
        $data->hoaID = $request->hoaID;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        $data->save();
        
        
          $adminEmail = User::pluck('email')->first();
        // // dd($adminEmail);

        $subject = 'New Enquiry Submission';
        
        $message = "New Enquiry has been submitted:<br><br>";
        $message .= "Name: {$data->name}<br>";
        $message .= "Email Address: {$data->email}<br>";
        $message .= "Phone Number: {$data->phone}<br>";
        $message .= "Click Here to See it in Dashboard: <a href='https://myhoamailboxes.com/enquiry-view/{$data->id}'>View Enquiry</a><br>";        

        Mail::html($message, function ($mail) use ($adminEmail, $subject) {
            $mail->to($adminEmail)->subject($subject);
        });


         return response()->json(['success' => true]);
    }


    public function response()
    {
        return view('user/receivePage');
    }

    public function show()
    {
        $enquiry = Inquiry::orderBy('id', 'desc')->paginate(10);
        
        if($enquiry->isEmpty()) {
            abort(404);
             return view('errors/404');
        }

        return view('pages/enquiryList', compact('enquiry'));
    }
    
    public function edit($id)
    {
        $item = Inquiry::find($id);
        
        return view('pages/editEnquiryList ',['item' => $item]);
    }
    
    
     public function view($id)
    {
        
        $item = Inquiry::where('id', $id)->first();
        if($item==null) {
            abort(404);
             return view('errors/404');
        }
        $hoaitem = HOA::find($item->hoaID);
        return view('pages/enquiryView', compact('hoaitem', 'item'));
    }
   
    
    //
    public function update(Request $request, $id)
    {
        $data = Inquiry::find($id);
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');

        $data->save();

    //     Mail::to($request->input('email'))
    // ->send(new EnquirySubmitted());   

        return redirect('/enquiry-list')->with("success",'Form Updated Successfully');
    }
   public function search(Request $request)
{
    $searchData = $request->input('searchData');
    
    $enquiry = Inquiry::where('name', 'like', "%$searchData%")->paginate(10); // Assuming 10 records per page

    return view('pages/enquiryList', compact('enquiry'));
}

    public function destroy($id)
    {
        $item = Inquiry::find($id);

        if ($item) {
            $item->delete();
        }
        return redirect('/enquiry-list')->with('success', 'Item deleted successfully');
    }
    
    
public function deleteMultiple(Request $request)
{
    $ids = $request->ids;
    
    if(Inquiry::whereIn('id',explode(",",$ids))->delete()) {
        
    return response()->json(['status' => 'success', 'message' => 'Item deleted successfully']);  
    } else {
        return response()->json(['status' => 'false', 'message' => 'Item not deleted successfully']);
    } 
    
    // return redirect('/enquiry-list')->with('success', 'Item deleted successfully');
  
}



}

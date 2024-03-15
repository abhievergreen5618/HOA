<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquirySubmitted; 
use App\Models\Inquiry;
use App\Models\UserHOA;

class MailController extends Controller
{
    //
    
    public function index($id)
    {
        $item = Inquiry::find($id);
        
        return view('pages/enquiryMail',['item' => $item]);
    }
    
   public function sendEmail(Request $request)
{
    
    
    // Retrieve recipient email and other data from the request
        $recipientEmail = $request->email;
        
        $subjectValue = $request->subject;
        
        $contentValue = $request->content;

    // Validate email and subject
    if (!$recipientEmail || !$subjectValue) {
        return response()->json(['error' => 'Invalid email or subject.']);
    }

    // Send the email using the TestMail Mailable
    Mail::send('emails.enquiry-submitted', ['data' => $request], function ($message) use ($recipientEmail, $subjectValue) {
        $message->to($recipientEmail)->subject($subjectValue);
    });

    // return response()->json(['message' => 'Email sent successfully']);
    
     return redirect()->back();
}


    
     
    public function hoamail($id)
    {
        $item = UserHOA::find($id);
        
        return view('pages/hoaMail',['item' => $item]);
    }
    
    public function sendHoamail(Request $request)
    {
        
         // Retrieve recipient email and other data from the request
        $recipientEmail = $request->email;
        
        $subjectValue = $request->subject;
        
        $contentValue = $request->content;

        // Send the email using the TestMail Mailable
       Mail::send('emails.formSubmitted', ['data' => $request], function($message) use($recipientEmail, $subjectValue) {
        $message->to($recipientEmail)->subject($subjectValue);
    });

        // Set success message in the session
    // session()->flash('status', 'Email sent successfully');

    // Redirect back to the previous page or any desired page
    return redirect()->back();
    
    }
    

}

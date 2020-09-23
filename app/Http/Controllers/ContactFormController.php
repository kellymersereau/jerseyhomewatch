<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;

class ContactFormController extends Controller
{
    //
    
    public $contactForm = [];
    public $error = []; // Variable to hold any errors to be passed back in json response
    public $emailSent = false; // Variable to hold whether an email was successfully sent
    
    public function saveForm(Request $request)
    {
        $contactForm = "<p style='font-size: 14px;'><strong>A new Contact Us form has been received.</strong></p><p><strong>Name:</strong> ".$request->firstname."  ".$request->lastname."</p><p><strong>Address:</strong> ".$request->address.", ".$request->city.", ".$request->state." ".$request->zip."</p><p><strong>Email:</strong> ".$request->email."</p><p><strong>Phone:</strong> ".$request->phone."</p><strong>Preferred Contact Method:</strong> ".$request->contactmethod."</p><p><strong>Message:</strong> ".$request->message."</p><p><strong>Referred By:</strong> ".$request->referral."</p>";
    
        $this->emailSent = $this->email($contactForm);
        
        return response()->json([
            'contactForm'=>$contactForm,
            'emailSent'=> $this->emailSent,
            'error' => $this->error
        ]);
    }
    
    private function email($message) {
        
        $e = new Email;
        $result = $e->sendEmail($message);
        
        if($result == "") {
            return true;
        } else {
            array_push($this->error, $result);
            return false;
        }
        
        
        
    }
}

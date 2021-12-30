<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Mail\NotifyAdmin;
use Illuminate\Http\Request;
use App\Notifications\NewMessage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Notifications\Notification;

class ContactController extends Controller
{
    public function sendMessage(Request $request){
        // dd($request->all());
        
        $validation_result = $request->validate([
            "name" => 'regex:/^[a-zA-Z ]+$/|min:2|max:255',
            "email" => "required|email",
            "message" => "required"
        ]);

        if($validation_result){
            Contact::create($request->all());

            // send email to admin
            // $fromEmail = $request->email;
            // $fromName = $request->name;
            // $subject = $request->subject;
            // // $message = $request->message;
            // $message = array( 'message' => $request->message);

            // $toEmail = "info@trsutklusbedrijif.nl";
            // $toEmail = "lamisyat@gmail.com";
            // $toName = "Mr. Mustafa Al-Ahmad";

            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->subject = $request->subject;
            $contact->message = $request->message;

            // Mail::send(new NotifyAdmin($contact));
            $user = User::find(3);
            $user->notify(new NewMessage($contact));

            // Mail::send('emails.message', $message, function($message) use ($toEmail, $toName, $fromEmail, $fromName, $subject){

            //     $message->to($toEmail, $toName);
    
            //     $message->from($fromEmail, $fromName);
    
            //     $message->subject($subject);
            // });


        
            return redirect()->back()->with('message',__('lang.contact_success_message'));
        }
        else{
            return redirect()->back()->withErrors($validation_result);
        }
        
    }
}

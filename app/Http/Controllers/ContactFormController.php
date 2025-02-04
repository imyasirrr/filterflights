<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    function post_messege(Request $request){
        
        //Form VAlidation
        $request->validate([
            'email'=>  'required|email'
        ]);
        // dd($request);

        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message

        ];

        //send email to admin

        Mail::to('yasir.hussain@codeoptimalsolutions.com')->send(new ContactFormMail($data));
        
        // dump("first");
        
        // Mail::to('yashpreet.singh@codeoptimalsolutions.com')->send(new ContactFormMail($data));
        // dump("econd");
        
        // Mail::to('yashpreet56@gmail.com')->send(new ContactFormMail($data));
        // dump("thirsd");


        return back()->with('msg','Thanks for Reaching out. your messege has sent succesfully');
        
        //mail to user
        // return back()->with('msg','Thanks for Reaching out. User');

    }
}

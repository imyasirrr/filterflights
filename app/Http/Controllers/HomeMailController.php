<?php

namespace App\Http\Controllers;

use App\Mail\HomeFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeMailController extends Controller
{
    public function home_mail(Request $request)
    {

        // $data = $request->all();

        //Form VAlidation
        $request->validate([
            'from' =>  'required',
            'to' => 'required',
            'start' => 'required',
            'adults' => 'required'

        ]);
        // dd($request);

        $data = [
            'from' => $request->from,
            'to' => $request->to,
            'start' => $request->start,
            'adults' => $request->adults,
            'return' => $request->return,
            'child' => $request->child,

        ];


        //mail to admin
        Mail::to('yasir.hussain@codeoptimalsolutions.com')->send(new HomeFormMail($data));
  
        //mail to user
        // Mail::to($request->from)->send(new HomeFormMail($data));
        // dd($data);
        // return redirect()->back()->with('success', 'Mail Sent Successfully');
        



        return back()->with('messege', 'Thanks for Reaching out. your messege has sent succesfully');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function test_view(){
        return view('mails.contact-mail');
    }
}

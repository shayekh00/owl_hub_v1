<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Commons extends Controller
{
    function contactus()
    {
        //   redirects to contact us page
        return view('commons.contactus');
    }

    public function about(){
        return view('commons.about');
    }

    public function faq(){
        return view('commons.faq');
    }
}

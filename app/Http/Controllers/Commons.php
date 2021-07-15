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

    function how_it_works()
    {
        //   redirects to contact us page
        return view('commons.how_it_works');
    }


    public function about(){
        return view('commons.about');
    }

    public function faq(){
        return view('commons.faq');
    }

    public function not_accept(){
        return view('commons.not_accept');
    }

    // public function not_teacher(){
    //     return view('commons.not_teacher_message');
    // }

    // public function not_student(){
    //     return view('commons.not_student_message');
    // }
}

<?php

namespace App\Http\Controllers;
Use App\Models\courseexpert;
Use App\Models\course;
Use App\Models\courseexpert_time;
use Illuminate\Support\Facades\Auth;
use DB;

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

    public function index(){
        return view('commons.landing_new');
    }

    public function about_us(){
        return view('commons.about_us');
    }

    public function blog(){
        return view('commons.blog');
    }

    public function contact(){
        return view('commons.contact');
    }

    // public function testt(){
    //     return view('courseexperts.test');
    // }

    // public function addtestt(Request $request){

    //     $courseexpert_time = new courseexpert_time;
    //     $courseexpert_id = AUTH::guard('courseexpert')->user()->courseexpert_id;
    //     foreach($request->input('day') as $key =>$courseexpert_time){
    //         courseexpert_time::insert([
    //                 'courseexpert_id' =>Auth::guard('courseexpert')->user()->courseexpert_id,
    //                 'day'=> $request->day[$key],
    //                 'time'=>$request->time[$key],
    //             ]);
    //     }
        
    //     return view('courseexperts.test');
    // }

    // public function not_teacher(){
    //     return view('commons.not_teacher_message');
    // }

    // public function not_student(){
    //     return view('commons.not_student_message');
    // }
}

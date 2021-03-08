<?php

namespace App\Http\Controllers;
Use App\Models\courseexpert;
Use App\Models\course;
use Illuminate\Support\Facades\Auth;
use DB;
use Fomvasss\Youtube\Facades\Youtube;



use Illuminate\Http\Request;
// use App\User;

class TeacherController extends Controller
{
    public function courseExpertCourses(){
        return view('courseexperts.courseexpertcourses');
    }

    public function courseExpertTiming(){
        return view('courseexperts.courseexperttiming');
    }

     

    public function addCourseExpertCourses(Request $request){
        $course = new course;
        foreach($request->input('course_code1') as $key =>$course){
                course::insert([
                    'courseexpert_id' =>Auth::guard('courseexpert')->user()->courseexpert_id,
                    'course_code1'=> $request->course_code1[$key],
                    'university_name1'=>$request->university_name1[$key],
                ]);
        }
        
        
    }

    public function addCourseExpertTiming(Request $request){
        
        $coursetime1=$request->course_timing_saturday;
        $coursetime2=$request->course_timing_sunday;
        $coursetime3=$request->course_timing_monday;
        $coursetime4=$request->course_timing_tuesday;
        $coursetime5=$request->course_timing_wednesday;
        $coursetime6=$request->course_timing_thursday;
        $coursetime7=$request->course_timing_friday;
        $courseexpert_id = AUTH::guard('courseexpert')->user()->courseexpert_id;
        
        $update = DB::update('update courseexperts set course_timing_saturday =? where courseexpert_id= ? ',[$coursetime1,$courseexpert_id]);
        $update = DB::update('update courseexperts set course_timing_sunday =? where courseexpert_id= ? ',[$coursetime2,$courseexpert_id]);
        $update = DB::update('update courseexperts set course_timing_monday =? where courseexpert_id= ? ',[$coursetime3,$courseexpert_id]);
        $update = DB::update('update courseexperts set course_timing_tuesday =? where courseexpert_id= ? ',[$coursetime4,$courseexpert_id]);
        $update = DB::update('update courseexperts set course_timing_wednesday =? where courseexpert_id= ? ',[$coursetime5,$courseexpert_id]);
        $update = DB::update('update courseexperts set course_timing_thursday =? where courseexpert_id= ? ',[$coursetime6,$courseexpert_id]);
        $update = DB::update('update courseexperts set course_timing_friday =? where courseexpert_id= ? ',[$coursetime7,$courseexpert_id]);

    }

     public function skypeLink(){

        return view('courseexperts.skypeLink');
    
    }


    public function addskypeLink(Request $request){
        
        $skypeLink=$request->skype_link;
        $courseexpert_id = AUTH::guard('courseexpert')->user()->courseexpert_id;
        $update = DB::update('update courseexperts set teachers_skype_link =? where courseexpert_id= ? ',[$skypeLink,$courseexpert_id]);
        
    }

}
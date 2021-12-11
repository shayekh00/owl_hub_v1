<?php

namespace App\Http\Controllers;
Use App\Models\courseexpert;
Use App\Models\course;
Use App\Models\courseexpert_time;
use Illuminate\Support\Facades\Auth;
use DB;
use Fomvasss\Youtube\Facades\Youtube;




use Illuminate\Http\Request;
// use App\Http\Requests;
use App\Http\Controllers\Controller;
 use app\User;
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
        
        return redirect()->action('TeacherController@viewExpertCourses')->with('status','Course Added!');


    }


    // public function testt(Request $request){

    //     $course = new course;
    //     $courseexpert_id = AUTH::guard('courseexpert')->user()->courseexpert_id;
    //     foreach($request->input('course_code1') as $key =>$course){
    //             course::insert([
    //                 'courseexpert_id' =>Auth::guard('courseexpert')->user()->courseexpert_id,
    //                 'course_code1'=> $request->course_code1[$key],
    //                 'university_name1'=>$request->university_name1[$key],
    //             ]);
    //     }
        
    //     return redirect()->action('TeacherController@viewExpertCourses')->with('status','Course Added!');


    // }

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

        return redirect()->action('TeacherController@viewExpertTiming')->with('status','Time Added!');


    }

     public function skypeLink(){

        return view('courseexperts.skypeLink');
    
    }


    public function addskypeLink(Request $request){
        
        $skypeLink=$request->skype_link;
        $varification_drive_link=$request->varification_drive_link;
        $appointment_drive_link=$request->appointment_drive_link;
        
        $courseexpert_id = AUTH::guard('courseexpert')->user()->courseexpert_id;
        $update = DB::update('update courseexperts set teachers_skype_link =? where courseexpert_id= ? ',[$skypeLink,$courseexpert_id]);
        $update = DB::update('update courseexperts set varification_drive_link =? where courseexpert_id= ? ',[$varification_drive_link,$courseexpert_id]);
        $update = DB::update('update courseexperts set appointment_drive_link =? where courseexpert_id= ? ',[$appointment_drive_link,$courseexpert_id]);

        return redirect()->action('TeacherController@viewExpertProfile')->with('status','link Added!');


        
    }


    // function expertProfile(){
    
    //     $users = DB::select('select * from courseexperts');
    //     return view('courseexperts.expertprofile',['users'=>$users]);
    
    // }

    // function expertProfile(){

    //     $users = DB::table('users')
    //         ->join('contacts', 'users.id', '=', 'contacts.user_id')
    //         ->join('orders', 'users.id', '=', 'orders.user_id')
    //         ->select('users.*', 'contacts.phone', 'orders.price')
    //         ->get();
    
    //     return view('courseexperts.profile');
    
    // }


    function viewExpertProfile(){


        // $user = auth()->user();
        // $expert = DB::table('courses')->where('courseexpert_id', Auth::id())->get();
        
        return view('courseexperts.expertProfile');
    
    }

    function updateExpertProfile(){
    
        return view('courseexperts.updateExpertProfile');

    }
    





    function updateExpertProfilePost(Request $request){
    
        // $expert_id = Auth::guard('courseexpert')->user()->courseexpert_id;
        // $user = User:: findorFail($expert_id);

        // $user->name = $request->input('name');
        // $user->email = $request->input('email');
        // $user->phone = $request->input('phone');


        // $user->update();
        // return redirect()->back()->with('status','Profile updated');


        
        $name=$request->name;
        // $email=$request->email;
        $phone=$request->phone;
        $teachers_skype_link=$request->teachers_skype_link;
        $varification_drive_link=$request->varification_drive_link;
        $appointment_drive_link=$request->appointment_drive_link;

        $courseexpert_id = AUTH::guard('courseexpert')->user()->courseexpert_id;
        
        $update = DB::update('update courseexperts set name =? where courseexpert_id= ? ',[$name,$courseexpert_id]);
        // $update = DB::update('update courseexperts set email =? where courseexpert_id= ? ',[$email,$courseexpert_id]);
        $update = DB::update('update courseexperts set phone =? where courseexpert_id= ? ',[$phone,$courseexpert_id]);
        $update = DB::update('update courseexperts set teachers_skype_link =? where courseexpert_id= ? ',[$teachers_skype_link,$courseexpert_id]);
        $update = DB::update('update courseexperts set varification_drive_link =? where courseexpert_id= ? ',[$varification_drive_link,$courseexpert_id]);
        $update = DB::update('update courseexperts set appointment_drive_link =? where courseexpert_id= ? ',[$appointment_drive_link,$courseexpert_id]);

        return redirect()->action('TeacherController@viewExpertProfile')->with('status','Profile updated');


    }


    public function viewExpertTiming(){

        
        $courseexpert_id  =Auth::guard('courseexpert')->user()->courseexpert_id;

        $courseexpert_times = DB::table('courseexpert_times')
        ->where('courseexpert_id', '=', $courseexpert_id)
        ->get();


        return view('courseexperts.viewExpertTiming', 
                ['courseexpert_times' => $courseexpert_times] );
    
    }


    public function viewExpertCourses(){

        $courseexpert_id  =Auth::guard('courseexpert')->user()->courseexpert_id;

        $courses = DB::table('courses')
        ->where('courseexpert_id', '=', $courseexpert_id)
        ->get();


        return view('courseexperts.viewExpertCourses', 
                ['courses' => $courses] );

    }

    public function welcomeMessage(){

        return view('commons.welcome');

    }


    public function updateExpertCourses(){


        $courseexpert_id  =Auth::guard('courseexpert')->user()->courseexpert_id;

        $courses = DB::table('courses')
        ->where('courseexpert_id', '=', $courseexpert_id)
        ->get();


        return view('courseexperts.updateexpertcourses', 
                ['courses' => $courses] );
    }
    
    

    public function deleteCourse($course_id){

            $datacourse = course::find($course_id);
            $datacourse -> delete();

            return redirect('update_expert_courses')->with('status','Course successfully deleted');
       
    }

    public function updateExpertTimes(){


        $courseexpert_id  =Auth::guard('courseexpert')->user()->courseexpert_id;

        $courseexpert_times = DB::table('courseexpert_times')
        ->where('courseexpert_id', '=', $courseexpert_id)
        ->get();



        return view('courseexperts.updateexperttimes', 
                ['courseexpert_times' => $courseexpert_times] );
    } 

    public function deleteTime($time_id){

        $data = courseexpert_time::find($time_id);
        $data -> delete();

        return redirect('delete_expert_time')->with('status','Time successfully deleted');
   
}
    
 

    public function myAppointments()
    {
        $courseexpert_id  =Auth::guard('courseexpert')->user()->courseexpert_id;

            $accepted_appointments = DB::table('accepted_appointments')
                ->where('courseexpert_id', '=', $courseexpert_id)
                ->get();


            $courses_data = DB::select("SELECT DISTINCT A.accepted_appointment_id,A.course_id,A.appointment_timing,A.problem_text,A.drive_link,A.is_accepted,B.course_id,B.course_code1
            FROM accepted_appointments AS A , courses AS B
            WHERE A.course_id = B.course_id
            AND A.is_accepted = 1
            AND A.courseexpert_id = $courseexpert_id");
    
    
            return view('courseexperts.appointments', 
                    ['accepted_appointments' => $courses_data] );

    }


    public function experttime(){
        return view('courseexperts.expert_time');
    }

    public function addexperttime(Request $request){

        $courseexpert_time = new courseexpert_time;
        $courseexpert_id = AUTH::guard('courseexpert')->user()->courseexpert_id;
        foreach($request->input('day') as $key =>$courseexpert_time){
            courseexpert_time::insert([
                    'courseexpert_id' =>Auth::guard('courseexpert')->user()->courseexpert_id,
                    'day'=> $request->day[$key],
                    'time'=>$request->time[$key],
                ]);
        }
        
        return redirect()->action('TeacherController@viewExpertTiming')->with('status','Time Added!');
    }
   

}
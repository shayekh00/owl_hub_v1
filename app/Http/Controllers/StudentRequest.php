<?php

namespace App\Http\Controllers;
use App\Models\accepted_appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Mail\MyTestMail;
use Mail;

class StudentRequest extends Controller
{

    function index()
    {
    
        $courseexpert_id  =Auth::guard('courseexpert')->user()->courseexpert_id;
        // $courseexpert_id=1;    
        
        $appointment_images_data = DB::select("SELECT DISTINCT C.course_code1, A.problem_text ,A.is_accepted,A.accepted_appointment_id, A.drive_link
        FROM accepted_appointments AS A , courses AS C
        WHERE A.course_id = C.course_id
        AND A.is_accepted =0
        AND A.courseexpert_id = $courseexpert_id");

        // dd($appointment_images_data);

        return view('courseexperts.studentrequest',
        ['appointment_images_data' => $appointment_images_data    ]);

    }

    function allrequest()
    {
        $student_id  =Auth::guard('student')->user()->student_id;

        $accepted_appointments = DB::table('accepted_appointments')
        ->where('student_id', '=', $student_id)
        ->get();

        $appointment_images_data = DB::select("SELECT DISTINCT A.accepted_appointment_id, 
        A.courseexpert_id,A.is_accepted, A.appointment_transaction_id , A.is_confirmed,
        C.course_code1, A.problem_text
        FROM accepted_appointments AS A, courses AS C
        WHERE A.course_id = C.course_id
        AND A.student_id = $student_id");

        //dd($appointment_images_data);
        return view('students.allstudentrequests', 
                ['accepted_appointments' => $appointment_images_data ] );

    }

    function transaction_id(Request $request , $accepted_appointment_id )
    {
        $data = $request->all();
        // dd($data['transaction_id']);

        $email = "pritthi17@gmail.com";

        // $email = "shayekhnavid20@gmail.com";

        $myEmail = $email;
        $message = "Transaction Key Entered, please confirm for accepted_appointment_id =" . $accepted_appointment_id ;
        $url = config('app.url'). '/' ;
        
        $details = [
            'title' => 'New appointment request received.',
            'url' => $url,
            'message' => $message
        ];

        Mail::to($myEmail)->send(new MyTestMail($details));

        // accepted_appointment::where('accepted_appointment_id', '=', $accepted_appointment_id )
        // ->update( array(
        //                 'is_accepted' => 1
        //         ) );
        
        accepted_appointment::where('accepted_appointment_id', '=', $accepted_appointment_id )
        ->update( array(
                        'appointment_transaction_id' => $data['transaction_id']
                ) );

        
        return view('students.appointment_thank_you');
    }


    public function StudentProfile(){

        return view('students.studentprofile');
    
    }



    function updateStudentProfile(){


        $user = auth()->user();
        $expert = DB::table('courses')->where('courseexpert_id', Auth::id())->get();
        
        return view('students.editstudentprofile');
    
    }
    


    
    function updateStudentProfilePost(Request $request){
        
        $name=$request->name;
        $phone=$request->phone;

        $student_id = AUTH::guard('student')->user()->student_id;
        
        $update = DB::update('update students set name =? where student_id= ? ',[$name,$student_id]);
        $update = DB::update('update students set phone =? where student_id= ? ',[$phone,$student_id]);

        return redirect()->action('StudentRequest@StudentProfile')->with('status','Profile updated');
    }


        public function studentAppointments(){

            $student_id  =Auth::guard('student')->user()->student_id;

            $accepted_appointments = DB::table('accepted_appointments')
                ->where('student_id', '=', $student_id)
                ->get();


            $courses_data = DB::select("SELECT DISTINCT A.accepted_appointment_id,A.is_confirmed,A.course_id,A.appointment_timing,
            B.course_id,B.course_code1
            FROM accepted_appointments AS A , courses AS B
            WHERE A.course_id = B.course_id
            AND A.is_confirmed = 1
            AND A.student_id = $student_id");
    
    
            return view('students.studentAppointments', 
                    ['accepted_appointments' => $courses_data] );

        }


    

}

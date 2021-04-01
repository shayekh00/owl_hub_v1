<?php

namespace App\Http\Controllers;
use App\Models\accepted_appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class StudentRequest extends Controller
{

    function index()
    {
    
        $courseexpert_id  =Auth::guard('courseexpert')->user()->courseexpert_id;
        // $courseexpert_id=1;    
        
        $appointment_images_data = DB::select("SELECT DISTINCT C.course_code1, B.problem_text ,A.accepted_appointment_id
        FROM accepted_appointments AS A , appointment_images AS B, courses AS C
        WHERE A.accepted_appointment_id = B.accepted_appointment_id
        AND A.course_id = C.course_id
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
        C.course_code1, B.problem_text
        FROM accepted_appointments AS A , appointment_images AS B, courses AS C
        WHERE A.accepted_appointment_id = B.accepted_appointment_id
        AND A.course_id = C.course_id
        AND A.student_id = $student_id");

        return view('students.allstudentrequests', 
                ['accepted_appointments' => $appointment_images_data ] );

    }

    function transaction_id(Request $request , $accepted_appointment_id )
    {
        $data = $request->all();
        // dd($data['transaction_id']);

        accepted_appointment::where('accepted_appointment_id', '=', $accepted_appointment_id )
        ->update( array(
                        'appointment_transaction_id' => $data['transaction_id']
                ) );

        
        return view('students.appointment_thank_you');
    }


}

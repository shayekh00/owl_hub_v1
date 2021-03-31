<?php
namespace App\Http\Controllers;
use App\Models\appointment_images;
use App\Models\accepted_appointment;
use Illuminate\Support\Facades\Auth;
use DB;


class EachRequestController extends Controller
{
    public function eachrequest()
    {
        $accepted_appointment = DB::table('accepted_appointments')->get();
        $appointment_images = DB::table('appointment_images')->get();

        return view('courseexperts.eachrequest', ['accepted_appointments' => $accepted_appointment,'appointment_images' => $appointment_images]);
    }

    public function index($course_id , $problem_text ,$accepted_appointment_id)
    {
        $accepted_appointment_timing = DB::table('accepted_appointments')
                            // ->select('appointment_timing')
                                ->where('accepted_appointment_id', '=' , $accepted_appointment_id)
                                ->get();

        
        $appointment_images = DB::table('appointment_images')->get();

        //dd( $accepted_appointment_timing );

        $course_name= $course_id;
        // $course_name = DB::table('courses')
        //             ->select('course_code1')
        //             ->where('course_id', '=', $course_id)
        //             ->get();
        

        return view('courseexperts.eachrequest',
        ['accepted_appointment_timing' => $accepted_appointment_timing,
        'appointment_images' => $appointment_images,
        'course_name' => $course_name,
        'problem_text' => $problem_text
        ]
        
        );

        // dd($problem_text);
    }

  //  public function imagerequest()
  //  {
      //  $appointment_images = DB::table('appointment_images')->get();

      //  return view('courseexperts.eachrequest', ['appointment_images' => $appointment_images]);
  //  }
    
 //   return view('students.courseexpertlist', 
 //   ['courseexperts_table_data' => $courseexperts_table_data , 'university_name1'=>$university_name1,'course_code'=>$course_code   ]);
 /*public function store(Request $request)
 {
 $pages = new Appsetting();

        $pages->title = $request->input('title');
        $pages->description = $request->input('description');

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/appsetting/', $filename);

//see above line.. path is set.(uploads/appsetting/..)->which goes to public->then create
//a folder->upload and appsetting, and it wil store the images in your file.

            $pages->image = $filename;
        } else {
            return $request;
            $pages->image = '';
        }
       $pages->save();

       return redirect('pagesurl')->with('success', 'App Setting Added');
 } */
}

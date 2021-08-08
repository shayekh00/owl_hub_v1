<?php
namespace App\Http\Controllers;
use App\Models\appointment_images;
use App\Models\accepted_appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Mail\MyTestMail;
use Mail;

class UploadController extends Controller
{

    public function uploadResourcesPage(Request $request, $courseexpert_id, $course_id )
    {
        //  dd($request->appointment_timing);
        // echo("<script>console.log('PHP: " . $courseexpert_id . "');</script>");

        $selected_appointment = $request->appointment_timing;
        $timing_string = "";
        if( $selected_appointment == 1){
            $timing = DB::table('courseexperts')
            ->where('courseexpert_id', '=', $courseexpert_id)
            ->select('course_timing_saturday')
            ->get();

            $timing_string = "Saturday: ".$timing[0]->course_timing_saturday;
            // dd($timing_string);

        }else if($selected_appointment == 2){
            $timing = DB::table('courseexperts')
            ->where('courseexpert_id', '=', $courseexpert_id)
            ->select('course_timing_sunday')
            ->get();

            $timing_string = "Sunday: ".$timing[0]->course_timing_sunday;
        }else if($selected_appointment == 3){
            $timing = DB::table('courseexperts')
            ->where('courseexpert_id', '=', $courseexpert_id)
            ->select('course_timing_monday')
            ->get();

            $timing_string = "Monday: ".$timing[0]->course_timing_monday;
        }else if($selected_appointment == 4){
            $timing = DB::table('courseexperts')
            ->where('courseexpert_id', '=', $courseexpert_id)
            ->select('course_timing_tuesday')
            ->get();

            $timing_string = "Tuesday: ".$timing[0]->course_timing_tuesday;
        }else if($selected_appointment == 5){
            $timing = DB::table('courseexperts')
            ->where('courseexpert_id', '=', $courseexpert_id)
            ->select('course_timing_wednesday')
            ->get();

            $timing_string = "Wednesday: ".$timing[0]->course_timing_wednesday;
        }else if($selected_appointment == 6){
            $timing = DB::table('courseexperts')
            ->where('courseexpert_id', '=', $courseexpert_id)
            ->select('course_timing_thursday')
            ->get();

            $timing_string = "Thursday: ".$timing[0]->course_timing_thursday;
        }else {
            $timing = DB::table('courseexperts')
            ->where('courseexpert_id', '=', $courseexpert_id)
            ->select('course_timing_friday')
            ->get();

            $timing_string = "Friday: ".$timing[0]->course_timing_friday;
        }

        // dd($timing[0]->course_timing_sunday);
        
        return view('students.upload_resources', 
        ['courseexpert_id' => $courseexpert_id ,'course_id'=> $course_id,'seletion' => $selected_appointment, 'appointment_timing' => $timing  ]);
    }

    public function submitResources(Request $request,$courseexpert_id,$course_id,$selection)
    {
        $selected_appointment = $selection;
        $timing_string = "";

        if( $selected_appointment == 1){
            $timing = DB::table('courseexperts')
            ->where('courseexpert_id', '=', $courseexpert_id)
            ->select('course_timing_saturday')
            ->get();

            $timing_string = "Saturday: ".$timing[0]->course_timing_saturday;
            // dd($timing_string);

        }else if($selected_appointment == 2){
            $timing = DB::table('courseexperts')
            ->where('courseexpert_id', '=', $courseexpert_id)
            ->select('course_timing_sunday')
            ->get();

            $timing_string = "Sunday: ".$timing[0]->course_timing_sunday;
        }else if($selected_appointment == 3){
            $timing = DB::table('courseexperts')
            ->where('courseexpert_id', '=', $courseexpert_id)
            ->select('course_timing_monday')
            ->get();

            $timing_string = "Monday: ".$timing[0]->course_timing_monday;
        }else if($selected_appointment == 4){
            $timing = DB::table('courseexperts')
            ->where('courseexpert_id', '=', $courseexpert_id)
            ->select('course_timing_tuesday')
            ->get();

            $timing_string = "Tuesday: ".$timing[0]->course_timing_tuesday;
        }else if($selected_appointment == 5){
            $timing = DB::table('courseexperts')
            ->where('courseexpert_id', '=', $courseexpert_id)
            ->select('course_timing_wednesday')
            ->get();

            $timing_string = "Wednesday: ".$timing[0]->course_timing_wednesday;
        }else if($selected_appointment == 6){
            $timing = DB::table('courseexperts')
            ->where('courseexpert_id', '=', $courseexpert_id)
            ->select('course_timing_thursday')
            ->get();

            $timing_string = "Thursday: ".$timing[0]->course_timing_thursday;
        }else {
            $timing = DB::table('courseexperts')
            ->where('courseexpert_id', '=', $courseexpert_id)
            ->select('course_timing_friday')
            ->get();

            $timing_string = "Friday: ".$timing[0]->course_timing_friday;
        }

        



        $items = accepted_appointment::create([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ]);


        accepted_appointment::where('accepted_appointment_id', '=', $items->accepted_appointment_id )
                            ->update( array('student_id' => Auth::guard('student')->user()->student_id,
                                            'course_id' => $course_id,
                                            'courseexpert_id' => $courseexpert_id,
                                            'deadline_date' => $request->deadline_date,
                                            'drive_link' => $request->drive_link,
                                            'problem_text' => $request->problem_text,
                                            'appointment_timing' => $timing_string
                                    ) );

        // $email = DB::table('courseexperts')
        // ->where('courseexpert_id', '=', $courseexpert_id)
        // ->select('email')
        // ->get();

        // $myEmail = $email;
        // $message = "You have received a new request for a course on OwlHubBD.com, please log into your account to confirm.";
        // $url = config('app.url'). '/' ;
        
        // $details = [
        //     'title' => 'New appointment request received.',
        //     'url' => $url,
        //     'message' => $message
        // ];

        // Mail::to($myEmail)->send(new MyTestMail($details));

        //Main finished

        // //SMS Started
        $phone  = DB::table('courseexperts')
        ->where('courseexpert_id', '=', $courseexpert_id)
        ->select('phone')
        ->get();

        //Adding 0 to the number
        $num = $phone[0]->phone;
        $num = "0{$num}";
        $num = rawurlencode($num);
        $message = "You have received a new request for a course on OwlHubBD.com, please log into your account to confirm.";
        $message= rawurlencode($message);

        // dd('http://api.greenweb.com.bd/api.php?token=2da4132046e8848440c4973dcebaab7e&to='.$num.'&message='.$message');

        $get_data = $this->callAPI('GET', 'http://api.greenweb.com.bd/api.php?token=2da4132046e8848440c4973dcebaab7e&to='.$num.'&message='.$message,false);
        $response = json_decode($get_data, true);
        



        return redirect()->route('student.allrequest')->with('status', 'Successfully Requested!');

    }



public function uploadForm($courseexpert_id, $course_id)
{
    // dd($course_id);
    // echo("<script>console.log('PHP: " . $courseexpert_id . "');</script>");

    return view('students.upload_form', 
    ['courseexpert_id' => $courseexpert_id ,'course_id'=> $course_id ]);
}

public function uploadSubmit(Request $request,$courseexpert_id,$course_id)
{
        // dd($course_id);
        
        $this->validate($request, [
        'name' => 'required',
        'photos'=>'required',
        ]);

        //checking if the files are empty or not and checking if the extensions of the files are allowed
        if($request->hasFile('photos'))
        {
                $allowedfileExtension=['pdf','jpg','png','docx'];
                $files = $request->file('photos');

                $allow = 0;
                foreach($files as $file){

                    $filename = $file->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();
                    $check=in_array($extension,$allowedfileExtension);

                    //dd($check);
                    // dd($request->name);
                    if($check)
                    {
                        $allow=1;
                        //$items= appointment_images::create($request->all());
                    }
                    else
                    {
                    echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg , doc</div>';
                    }
               }

        if($allow==1){
            // dd($allow);
            $items = accepted_appointment::create([
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                ]);


            accepted_appointment::where('accepted_appointment_id', '=', $items->accepted_appointment_id )
                                ->update( array('student_id' => Auth::guard('student')->user()->student_id,
                                                'course_id' => $course_id,
                                                'courseexpert_id' => $courseexpert_id
                                        ) );

            foreach ($request->photos as $photo) {
                //   dd(gettype($request->photos));
                    $filename = $photo->store('student_resources');
                    
                    appointment_images::insert([
                        'accepted_appointment_id' =>$items->accepted_appointment_id,
                        'problem_text' => $request->name,
                        'filename' => $filename
                    ]);

            }



            echo "Upload Successfully";


        }



    }
}

 function callAPI($method, $url, $data){
   $curl = curl_init();
   switch ($method){
      case "POST":
         curl_setopt($curl, CURLOPT_POST, 1);
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
         break;
      case "PUT":
         curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
         break;
      default:
         if ($data)
            $url = sprintf("%s?%s", $url, http_build_query($data));
   }
   // OPTIONS:
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'APIKEY: 111111111111111111111',
      'Content-Type: application/json',
   ));
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
   // EXECUTE:
   $result = curl_exec($curl);
   if(!$result){die("Connection Failure");}
   curl_close($curl);
   return $result;
}

}

?>
<?php
namespace App\Http\Controllers;
use App\Models\appointment_images;
use App\Models\accepted_appointment;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Mail\MyTestMail;
use Mail;

class EachRequestController extends Controller
{
    public function eachrequest()
    {
        $accepted_appointment = DB::table('accepted_appointments')->get();
        $appointment_images = DB::table('appointment_images')->get();

        return view('courseexperts.eachrequest', ['accepted_appointments' => $accepted_appointment,'appointment_images' => $appointment_images]);
    }

    public function index($course_id ,$accepted_appointment_id )
    {
        $accepted_appointment = DB::table('accepted_appointments')
                            // ->select('appointment_timing')
                                ->where('accepted_appointment_id', '=' , $accepted_appointment_id)
                                ->get();


        $course_name= $course_id;

        // dd($accepted_appointment);
        return view('courseexperts.eachrequest', ['accepted_appointment' => $accepted_appointment ,'course_name' => $course_name ] ) ;
        // return view('courseexperts.eachrequest',
        // ['accepted_appointment_timing' => $accepted_appointment_timing,
        //   'accepted_appointment_id' => $accepted_appointment_id,
        // 'course_name' => $course_name,
        // 'problem_text' => $problem_text,
        // 'drive_link' => $drive_link
        // ]
        
        

    }

    function accepted($accepted_appointment_id)
    {



        $email = DB::select("SELECT DISTINCT S.email
        FROM accepted_appointments AS A , students AS S
        WHERE A.student_id = S.student_id
        AND  A.accepted_appointment_id = $accepted_appointment_id");

        // $myEmail = $email;
        // $message = "Your request has been accepted on OwlHubBD.com, please log into your account to pay and confrim.";
        // $url = config('app.url'). '/' ;
        
        // $details = [
        //     'title' => 'New appointment request received.',
        //     'url' => $url,
        //     'message' => $message
        // ];

        // Mail::to($myEmail)->send(new MyTestMail($details));

        accepted_appointment::where('accepted_appointment_id', '=', $accepted_appointment_id )
        ->update( array(
                        'is_accepted' => 1
                ) );

        //SMS Started

        $phone = DB::select("SELECT DISTINCT S.phone
        FROM accepted_appointments AS A , students AS S
        WHERE A.student_id = S.student_id
        AND  A.accepted_appointment_id = $accepted_appointment_id");

        // dd($phone);

        
        $num = $phone[0]->phone;
        // $num = "0{$num}";
        $num = rawurlencode($num);
        // dd($num);
        $message = "Your request has been accepted on OwlHubBD.com, please log into your account to pay and confrim.";
        $message= rawurlencode($message);

        $get_data = $this->callAPI('GET', 'http://api.greenweb.com.bd/api.php?token=2da4132046e8848440c4973dcebaab7e&to='.$num.'&message='.$message,false);
        $response = json_decode($get_data, true);
                

        return redirect('studentrequest')->with('status','Appointment accepted successfully!');

        // dd($accepted_appointment_id);
    }

    function rejected($accepted_appointment_id)
    {

                
        // $email = DB::select("SELECT DISTINCT S.email
        // FROM accepted_appointments AS A , students AS S
        // WHERE A.student_id = S.student_id
        // AND  A.accepted_appointment_id = $accepted_appointment_id");

        // $myEmail = $email;
        // $message = "Your request has been rejected on OwlHubBD.com by a course expert, please log into your account to request again.";
        // $url = config('app.url'). '/' ;
        
        // $details = [
        //     'title' => 'New appointment request received.',
        //     'url' => $url,
        //     'message' => $message
        // ];

        // Mail::to($myEmail)->send(new MyTestMail($details));    

        accepted_appointment::where('accepted_appointment_id', '=', $accepted_appointment_id )
        ->update( array(
                        'is_accepted' => -1
                ) );
        
        
        //SMS Started
        $phone = DB::select("SELECT DISTINCT S.phone
        FROM accepted_appointments AS A , students AS S
        WHERE A.student_id = S.student_id
        AND  A.accepted_appointment_id = $accepted_appointment_id");

        // dd($phone);
        
        
        $num = $phone[0]->phone;
        // $num = "0{$num}";
        $num = rawurlencode($num);
        $message = "Your request has been rejected on OwlHubBD.com, please log into your account to request another appointment.";
        $message= rawurlencode($message);

        $get_data = $this->callAPI('GET', 'http://api.greenweb.com.bd/api.php?token=2da4132046e8848440c4973dcebaab7e&to='.$num.'&message='.$message,false);
        $response = json_decode($get_data, true);

        return redirect('studentrequest')->with('status','Appointment rejected successfully!');

        
        
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

<?php
namespace App\Http\Controllers;
use App\Models\appointment_images;
use App\Models\accepted_appointment;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Mail\MyTestMail;
use Mail;
use Illuminate\Http\Request;

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

    function accepted($accepted_appointment_id , $meeting_link)
    {


        $email = DB::select("SELECT DISTINCT S.email
        FROM accepted_appointments AS A , students AS S
        WHERE A.student_id = S.student_id
        AND  A.accepted_appointment_id = $accepted_appointment_id");


        accepted_appointment::where('accepted_appointment_id', '=', $accepted_appointment_id )
        ->update( array(
                        'is_accepted' => 1,
                        'appointment_link'=> $meeting_link

                ) );

        // //SMS Started

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


    }

    function rejected($accepted_appointment_id)
    {


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


    public function decide( Request $request ,$accepted_appointment_id ){

        switch ($request->input('action')) {
            case 'accept':

                // echo "ACEEETPTTTTT";
                $meeting_link = $request->meeting_link;
                //echo($meeting_link);
                $this->accepted($accepted_appointment_id , $meeting_link);
                
                break;
    
            case 'reject':
                $this->rejected($accepted_appointment_id);
                break;

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

<?php
namespace App\Http\Controllers;
use App\Models\appointment_images;
use App\Models\accepted_appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{

    public function uploadResourcesPage($courseexpert_id, $course_id)
    {
        // dd($course_id);
        // echo("<script>console.log('PHP: " . $courseexpert_id . "');</script>");

        return view('students.upload_resources', 
        ['courseexpert_id' => $courseexpert_id ,'course_id'=> $course_id ]);
    }

    public function submitResources(Request $request,$courseexpert_id,$course_id)
    {
        // dd(  $request->problem_text );

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
                                            'problem_text' => $request->problem_text
                                    ) );

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



}
?>
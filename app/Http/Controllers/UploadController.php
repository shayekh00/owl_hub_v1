<?php
namespace App\Http\Controllers;
use App\Models\appointment_images;
use App\Models\accepted_appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
public function uploadForm()
{
return view('students.upload_form');
}
public function uploadSubmit(Request $request)
{
    echo("<script>console.log('New Test 22');</script>");
        $this->validate($request, [
        'name' => 'required',
        'photos'=>'required',
        ]);

        if($request->hasFile('photos'))
        {
                $allowedfileExtension=['pdf','jpg','png','docx'];
                $files = $request->file('photos');
                foreach($files as $file){

                    $filename = $file->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();
                    $check=in_array($extension,$allowedfileExtension);

                    //dd($check);
                    // dd($request->name);
                    if($check)
                    {
                        $items= appointment_images::create($request->all());

                        foreach ($request->photos as $photo) {
                            $filename = $photo->store('student_resources');                            
                        }

                        accepted_appointment::insert([
                        'appointment_images_id' => $items->appointment_images_id,
                        'problem_text' => $request->name,
                        'student_id' =>Auth::guard('student')->user()->student_id,
                        'filename' => $filename,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                        ]);

                        echo "Upload Successfully";
                    }
                    else
                    {
                    echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg , doc</div>';
                    }
        }
    }
}



}
?>
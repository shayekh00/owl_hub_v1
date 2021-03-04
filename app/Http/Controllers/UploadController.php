<?php
namespace App\Http\Controllers;
use App\Models\appointment_images;
use App\Models\accepted_appointment;
use Illuminate\Http\Request;
class UploadController extends Controller
{
public function uploadForm()
{
return view('students.upload_form');
}
public function uploadSubmit(Request $request)
{
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
            if($check)
            {
                $items= appointment_images::create($request->all());
                //dd($items);
                foreach ($request->photos as $photo) {
                    $filename = $photo->store('student_resources');

                    accepted_appointment::create([
                    'appointment_images_id' => $items->appointment_images_id,
                    'filename' => $filename
                    ]);
                }

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
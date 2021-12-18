<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use DB;
use Illuminate\Support\Facades\DB;

class LiveSearch extends Controller
{

    function index()
    {
     return view('students/live_search');
    }

function action(Request $request)
    {
    
    
     if($request->ajax())
     {
        
        

        $output = '';
        $query = $request->get('query');

        


        if($query != '')
        {
            $data = DB::table('courses')
                ->where('course_code1', 'like', '%'.$query.'%')
                ->where('is_verified',1)
                ->orWhere('university_name1', 'like', '%'.$query.'%')
                ->get();

           
            
        }
        else
        {
            // $data = DB::table('courses')
            //     ->orderBy('course_code1', 'desc')
            //     ->get();

            $output .= '
            <tr>
                <td> " Nothing to Display" </td>
                <td>" Nothing to Display"</td>
            </tr>
            ';
        }


        $total_row = $data->count();
        if($total_row > 0)
        {
            
            foreach($data as $row)
            {   
                // If the course instructor at least has one timing filled

                if( $this->timing_is_filled($row->courseexpert_id) == 1   ){
                    $output .= '
                    <tr>
                        <td>'.$row->course_code1.'</td>
                        <td>'.$row->university_name1.'</td>
                        <td >
                            <a class= "btn btn-success" href= "  '.route('course_expert_list.create_list',
                                        ['course_code1' => $row->course_code1,'university_name1' => $row->university_name1,
                                            'course_id' => $row->course_id ,'courseexpert_id' => $row->courseexpert_id, ]   ) .  '  "      "role="button"  > SELECT NOW </a>
    
                        </td>
    
                    </tr>
                    ';
                }

            }
        }
        else
        {
            $output = '
            <tr>
                <td align="center" colspan="5"> No Courses Found. Text us on our Facebook Page.
                    <a href="https://www.facebook.com/theowlhubbd"> Click Here </a>
                </td>
            </tr>
            ';
            }


            $data = array(
            'table_data'  => $output,
            'total_data'  => $total_row
            );

            echo json_encode($data);
     }


    }



function list($course_code , $university_name1,$course_id ,$courseexpert_id){
    
    $courseexperts_table_data = DB::table('courseexperts')
        ->join('courseexpert_times', 'courseexperts.courseexpert_id', '=', 'courseexpert_times.courseexpert_id')
        ->where('courseexpert_times.courseexpert_id', '=', $courseexpert_id)
        ->inRandomOrder()
        ->limit(5)
        ->select('courseexperts.courseexpert_id','courseexpert_times.*')
        ->distinct()
        ->get();

    //dd($courseexperts_table_data);

    return view('students.courseexpertlist', 
        ['courseexperts_table_data' => $courseexperts_table_data , 'university_name1'=>$university_name1,'course_code'=>$course_code,
            'course_id'=>$course_id   ]);

}


public  function timing_is_filled( $courseexpert_id_parameter ){

    $courseexpert_id  = $courseexpert_id_parameter;

    $courseexpert_times = DB::table('courseexpert_times')
        ->where('courseexpert_id', '=', $courseexpert_id)
        ->get()
        ->first();

        $check = 0;
        if( $courseexpert_times ){
        $check = 1;
        }

        return $check;

    // Returning 1 means one of the timing field was filled
}



}
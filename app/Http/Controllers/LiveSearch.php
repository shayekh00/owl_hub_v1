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
                // ->orWhere('Address', 'like', '%'.$query.'%')
                // ->orWhere('City', 'like', '%'.$query.'%')
                // ->orWhere('PostalCode', 'like', '%'.$query.'%')
                // ->orWhere('Country', 'like', '%'.$query.'%')
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
                $output .= '
                <tr>
                    <td>'.$row->course_code1.'</td>
                    <td>'.$row->university_name1.'</td>
                    <td >
                        <a class= "btn btn-success" href= "  '.route('course_expert_list.create_list',
                                    ['course_code1' => $row->course_code1,'university_name1' => $row->university_name1,
                                        'course_id' => $row->course_id ]   ) .  '  "      "role="button"  > SELECT NOW </a>

                    </td>

                </tr>
                ';
            }
        }
        else
        {
            $output = '
            <tr>
                <td align="center" colspan="5">No Data Found</td>
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



function list($course_code , $university_name1,$course_id ){
    
 
    $courseexperts_table_data = DB::table('courseexperts')
        ->join('courses', 'courseexperts.courseexpert_id', '=', 'courses.courseexpert_id')
        ->where('courses.course_code1', '=', $course_code)
        ->inRandomOrder()
        ->limit(5)
        ->select('courseexperts.*')
        ->distinct()
        ->get();

    // dd($courseexperts_table_data);

    return view('students.courseexpertlist', 
        ['courseexperts_table_data' => $courseexperts_table_data , 'university_name1'=>$university_name1,'course_code'=>$course_code,
            'course_id'=>$course_id   ]);

}



}
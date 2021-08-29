<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
// Use App\User;
Use App\Models\courseexpert;
Use App\Models\student;
Use App\Models\admin_settings;
Use App\Models\course;
use App\Models\user_logs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use DB;

class AuthController extends Controller
{
    protected $loginPath = '/login_signup';

    public function index()
    {
        return view('login');
    }  
 
    public function register()
    {
        return view('register');
    }
     
    // public function postLogin(Request $request)
    // {
    //     request()->validate([
    //     'email' => 'required',
    //     'password' => 'required',
    //     ]);

    //     switch ($request->input('action')) {
    //         case 'student':
    //             $student = student::where('email', $request->email)->first();
        
    //             if (!$student) {
    //                 echo('Not a Student');
    //             }

    //             //login in student
    //             if (Hash::check($request->password, $student->password)) {
    //                 Auth::guard('student')->login($student);
    //                 return view('students.live_search');
    //             }
        
    //             return redirect($this->loginPath)
    //                 ->withInput($request->only('email', 'remember'))
    //                 ->withErrors(['email' => 'Incorrect email address or password']);

    //             break;
    
    //         case 'courseexpert' || 'both':
    //             // echo('courseexpert clicked');
    //             $courseexpert = courseexpert::where('email', $request->email)->first();
        
    //             if (!$courseexpert) {
    //                 echo('Not a Course Expert');
    //             }

    //             //login in courseexpert
    //             if (Hash::check($request->password, $courseexpert->password)) {
    //                 Auth::guard('student')->login($courseexpert);
    //                 return view('course_expert.studentrequest');
    //             }
                
    //             //if login fails redirect back to the login page
    //             return redirect($this->loginPath)
    //                 ->withInput($request->only('email', 'remember'))
    //                 ->withErrors(['email' => 'Incorrect email address or password']);

    //             break;
    //     }



    // }

    public function postLogin2(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);
        
        switch ($request->input('action')) {
            case 'student':
                $student = student::where('email', $request->email)->first();
        
                if (!$student) {
                    return view('commons.not_student_message');
                }

                //login in student
                if (Hash::check($request->password, $student->password)) {
 
                    if (Auth::guard('student')->attempt(['email' => $request->email  , 'password' => $request->password ] )) {
                        // dd(Auth::guard('courseexpert')->user()->name);
                        // return view('commons.registrationcompleted');

                        //LOG LOGIN DATA
                        // Takes in $current_id ,$user_type , $page_visited ,$action_done
                        $current_id  = Auth::guard('student')->user()->student_id; 
                        $user_type = "Student";
                        $page_visited = "Live Search Page";
                        $action_done = "Logged in";
                        $this->log_user_data( $current_id ,$user_type , $page_visited ,$action_done );

                        return view('students.live_search');
                    }
                 }

                // if (Hash::check($request->password, $student->password)) {
                //     Auth::guard('student')->login($student);
                    
                //     return view('commons.registrationcompleted');
                // }
        
                return redirect($this->loginPath)
                    ->withInput($request->only('email', 'remember'))
                    ->withErrors(['email' => 'Incorrect email address or password']);

                break;
    
            case 'courseexpert' || 'both':
                // echo('courseexpert clicked');
                $courseexpert = courseexpert::where('email', $request->email)->first();
                
                // $email = strtolower($request->email);

                $email = $request->email ;
                //dd($email);
                if (!$courseexpert) {
                    return view('commons.not_teacher_message');
                }
                
                $password = $request->password;
                $hashed_db_password = $courseexpert->password;
                //dd(Hash::make($password));
                //login in courseexpert
                //dd(Hash::check($password , $courseexpert->password));
                 if (Hash::check($request->password, $courseexpert->password)) {
                    
                    if (Auth::guard('courseexpert')->attempt(['email' => $email  , 'password' => $request->password ] )) {
                        $current_id  = Auth::guard('courseexpert')->user()->student_id; 
                        $user_type = "Course Expert";
                        $page_visited = "Live Search Page";
                        $action_done = "Logged in";
                        $this->log_user_data( $current_id ,$user_type , $page_visited ,$action_done );

                        return redirect()->route( 'student_request.index' );
                    }



                 }
                //  else{
                //     dd($request->password);   
                //  }
                
                //if login fails redirect back to the login page
                return redirect($this->loginPath)
                    ->withInput($request->only('email', 'remember'))
                    ->withErrors(['email' => 'Incorrect email address or password']);

                break;
        }

    }
 
    public function postRegister(Request $request)
    { 
        //dd($request->all());

        $data = DB::table('admin_settings')->select('accepting_course_expert')->get();

        switch ($request->input('action')) {
            case 'student':
                
                request()->validate([
                    'name' => 'required',
                    'email' => 'required|email|unique:students',
                    'phone' => 'required|numeric|unique:students',
                    'password' => 'required|min:6',
                ]);

                $data = $request->all();
                $check = $this->createStudent($data);
                return view('commons.welcome');
                break;     

            case 'courseexpert' || 'both':

                if( $data != '[{"accepting_course_expert":0}]' )
                {

                    request()->validate([
                        'name' => 'required',
                        'email' => 'required|email|unique:courseexperts',
                        'phone' => 'required|numeric|unique:courseexperts',
                        'password' => 'required|min:6',
                    ]);
                    $data = $request->all();
                    $check = $this->createCourseExpert($data);

                    return view('commons.welcome');
                   
                    
                    
                }
                
                else{

                   
                    return view('commons.not_accept');

                    
                }
           
                break;
       
        }
       

       
        

    }

    
    public function createCourseExpert(array $data)
    {
      return courseexpert::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function createStudent(array $data)
    {
      return student::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'password' => Hash::make($data['password'])
      ]);
    }
    
    function log_user_data( $current_id ,$user_type , $page_visited ,$action_done ){
        $items = user_logs::create([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ]);

            user_logs::where('id', '=', $items->id )
                       ->update( array('user_id' => $current_id,
                                            'user_type' => $user_type,
                                            'page_visited' => $page_visited,
                                            'action_done' => $action_done,
            ) );
    }
 

     
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('/login_signup');
    }


}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
// Use App\User;
Use App\Models\courseexpert;
Use App\Models\student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

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
                    echo('Not a Student');
                }

                //login in student
                if (Hash::check($request->password, $student->password)) {
 
                    if (Auth::guard('student')->attempt(['email' => $request->email  , 'password' => $request->password ] )) {
                        // dd(Auth::guard('courseexpert')->user()->name);
                        // return view('commons.registrationcompleted');
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
                    echo('Not a Course Expert');
                }
                
                $password = $request->password;
                $hashed_db_password = $courseexpert->password;
                //dd(Hash::make($password));
                //login in courseexpert
                //dd(Hash::check($password , $courseexpert->password));
                 if (Hash::check($request->password, $courseexpert->password)) {
                    
                    if (Auth::guard('courseexpert')->attempt(['email' => $email  , 'password' => $request->password ] )) {
                        return redirect()->route( 'student_request.index' );
                    }

                    if (Auth::guard('courseexpert')->attempt(['email' => $email  , 'password' => $request->password ] )) {
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
        
        switch ($request->input('action')) {
            case 'student':
                // error_log('From student');
                // echo("student");
                request()->validate([
                    'name' => 'required',
                    'email' => 'required|email|unique:students',
                    'phone' => 'required|numeric|unique:students',
                    'password' => 'required|min:6',
                ]);
                $data = $request->all();
                $check = $this->createStudent($data);
                break;     

            case 'courseexpert' || 'both':
                // echo("courseexpert");
                request()->validate([
                    'name' => 'required',
                    'email' => 'required|email|unique:courseexperts',
                    'phone' => 'required|numeric|unique:courseexperts',
                    'password' => 'required|min:6',
                ]);
                $data = $request->all();
                $check = $this->createCourseExpert($data);
                break;
       
        }

        return view('commons.welcome');

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
    
 

     
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('/login_signup');
    }


}

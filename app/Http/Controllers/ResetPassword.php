<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Support\Facades\Password; 
use Illuminate\Http\Request;

use DB;
use Auth;
use Hash;
use Carbon\Carbon;
Use App\Models\courseexpert;
use Illuminate\Support\Str;

class ResetPassword extends Controller
{
    //STUDENT PASSWORD RESET
    public function index_StudentResetPage(){

        return view('commons.student_password_reset_emailPage');
    
    }


    
    public function sendPasswordResetToken(Request $request)
    {
        $user = student::where ('email', $request->email)->first();
        if ( !$user ) return redirect()->back()->withErrors(['error' => '404']);
    
        //create a new token to be sent to the user. 
        DB::table('password_reset')->insert([
            'email' => $request->email,
            'token' => Str::random(60), //change 60 to any length you want
            'created_at' => Carbon::now()
        ]);
    
        $tokenData = DB::table('password_reset')
        ->where('email', $request->email)->first();
    
       $token = $tokenData->token;
       $email = $request->email; // or $email = $tokenData->email;
    
       /**
        * Send email to the email above with a link to your password reset
        * something like url('password-reset/' . $token)
        * Sending email varies according to your Laravel version. Very easy to implement
        */

        return view('commons.reset_email_sent');
    }
    /**
     * Assuming the URL looks like this 
     * http://localhost/password-reset/random-string-here
     * You check if the user and the token exist and display a page
     */

    public function showPasswordResetForm($token)
    {
        
        $tokenData = DB::table('password_reset')
                    ->where('token','=', $token)->get()->first();
        // dd($tokenData);
        
        if ( !$tokenData ) return redirect()->to('/'); //redirect them anywhere you want if the token does not exist.
        return view('commons.student_password_reset_PasswordPage', ['token' => $token ]);
    }
    public function resetPassword(Request $request, $token)
    {
        //some validation

        $password = $request->password;
        $tokenData = DB::table('password_reset')
        ->where('token', $token)->first();
   
        $user = student::where('email', $tokenData->email)->first();
        if ( !$user ) return redirect()->to('landing'); //or wherever you want
   
        $user->password = Hash::make($password);
        $user->update(); //or $user->save();
   
        //do we log the user directly or let them login and try their password for the first time ? if yes 
        Auth::login($user);
   
       // If the user shouldn't reuse the token later, delete the token 
       DB::table('password_reset')->where('email', $user->email)->delete();
       return redirect('/')->with('status','Password Successfuly Updated');
       //redirect where we want according to whether they are logged in or not.
    }

    //COURSE EXPERT RESET FUNCTIONS
    public function index_CourseExpertResetPage(){
        return view('commons.courseexpert_password_reset_emailPage');
    }

    public function send_CourseExpertPasswordResetToken(Request $request){
        $user = courseexpert::where ('email', $request->email)->first();
        if ( !$user ) return redirect()->back()->withErrors(['error' => '404']);
    
        //create a new token to be sent to the user. 
        DB::table('password_reset')->insert([
            'email' => $request->email,
            'token' => Str::random(60), //change 60 to any length you want
            'created_at' => Carbon::now()
        ]);
    
        $tokenData = DB::table('password_reset')
        ->where('email', $request->email)->first();
    
       $token = $tokenData->token;
       $email = $request->email; // or $email = $tokenData->email;
    
       /**
        * Send email to the email above with a link to your password reset
        * something like url('password-reset/' . $token)
        * Sending email varies according to your Laravel version. Very easy to implement
        */

        return view('commons.reset_email_sent');
    }

    public function showCourseExpertPasswordResetForm($token)
    {
        
        $tokenData = DB::table('password_reset')
                    ->where('token','=', $token)->get()->first();
        // dd($tokenData);
        
        if ( !$tokenData ) return redirect()->to('/'); //redirect them anywhere you want if the token does not exist.
        return view('commons.courseexpert_password_reset_PasswordPage', ['token' => $token ]);
    }

    public function resetCourseExpertPassword(Request $request, $token)
    {
        //some validation

        $password = $request->password;
        $tokenData = DB::table('password_reset')
        ->where('token', $token)->first();
   
        $user = courseexpert::where('email', $tokenData->email)->first();
        if ( !$user ) return redirect()->to('landing'); //or wherever you want
   
        $user->password = Hash::make($password);
        $user->update(); //or $user->save();
   
        //do we log the user directly or let them login and try their password for the first time ? if yes 
        Auth::login($user);
   
       // If the user shouldn't reuse the token later, delete the token 
       DB::table('password_reset')->where('email', $user->email)->delete();
       return redirect('/')->with('status','Password Successfuly Updated');
       //redirect where we want according to whether they are logged in or not.
    }
}

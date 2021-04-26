<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MyTestMail;
use Mail;

class MailController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function myTestMail($email ,$url, $message)
    {
        $myEmail = $email;

        $details = [
            'title' => 'Mail Test from Nicesnippets.com',
            'url' => 'https://www.nicesnippets.com',
            'message' => $message
        ];

        dd($email);
        Mail::to($myEmail)->send(new MyTestMail($details));
   
        dd("Mail Send Successfully");
        return redirect('/')->with('status','Password Reset Email Sent Successfuly Updated');
    }
}

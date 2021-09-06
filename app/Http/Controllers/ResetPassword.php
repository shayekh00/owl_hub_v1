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
use App\Mail\MyTestMail;
use App\Mail\OwlMail;
use Mail;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// require 'vendor/autoload.php';


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
        $message = "Messssage!!";
        $url = config('app.url'). '/student/reset-password/' . $token;

        // dd($url);
        // postEmail($email , $url , $message);
        $myEmail = $email;
        $message = "We received a request to reset the password for the Owl Hub account associated with this e-mail address.
                    Click the button below to reset your password using our secure server.";
                    
        // $details = [
        //     'title' => 'Password Reset Email from OwlHubBD.com',
        //     'url' => $url,
        //     'message' => $message
        // ];
        $details = [
            'title' => 'Mail from OwlHubBd.com',
            'body' => 'Please click on the link below to reset your password.',
            'url' => $url
        ];

        Mail::to($myEmail)->send(new OwlMail($details));
        //$this->senddraw_mail();

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
        $message = "We received a request to reset the password for the Owl Hub account associated with this e-mail address.
                    Click the button below to reset your password using our secure server.";

        $url = config('app.url'). '/courseexpert/reset-password/' . $token;

        // dd($url);
        // postEmail($email , $url , $message);
        $myEmail = $email;

        // $details = [
        //     'title' => 'Password Reset Email from OwlHubBD.com',
        //     'url' => $url,
        //     'message' => $message
        // ];

        // Mail::to( $myEmail )->send(new OwlMail( $url ));
        

        $details = [
            'title' => 'Mail from OwlHubBd.com',
            'body' => 'Please click on the link below to reset your password.',
            'url' => $url
        ];

                
        Mail::to($myEmail)->send(new OwlMail($details));

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


    public function senddraw_mail(){
        $sender = 'shayekhnavid@gmail.com';
        $senderName = 'Sender Name';

        // Replace recipient@example.com with a "To" address. If your account
        // is still in the sandbox, this address must be verified.
        $recipient = 'shayekhnavid@gmail.com';

        // Replace smtp_username with your Amazon SES SMTP user name.
        $usernameSmtp = 'AKIA3HSDLMVJCKKUVNEH';

        // Replace smtp_password with your Amazon SES SMTP password.
        $passwordSmtp = 'BOKERno+oaaWrpBCOtvBbXd7ZHgN37QEGXp1e/zk344B';

        // Specify a configuration set. If you do not want to use a configuration
        // set, comment or remove the next line.
        $configurationSet = 'ConfigSet';

        // If you're using Amazon SES in a region other than US West (Oregon),
        // replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
        // endpoint in the appropriate region.
        $host = 'email-smtp.ap-southeast-1.amazonaws.com';
        $port = 25;

        // The subject line of the email
        $subject = 'Amazon SES test (SMTP interface accessed using PHP)';

        // The plain-text body of the email
        $bodyText =  "Email Test\r\nThis email was sent through the
            Amazon SES SMTP interface using the PHPMailer class.";

        // The HTML-formatted body of the email
        $bodyHtml = '<h1>Email Test</h1>
            <p>This email was sent through the
            <a href="https://aws.amazon.com/ses">Amazon SES</a> SMTP
            interface using the <a href="https://github.com/PHPMailer/PHPMailer">
            PHPMailer</a> class.</p>';

        $mail = new PHPMailer(true);

        try {
            // Specify the SMTP settings.
            $mail->isSMTP();
            $mail->setFrom($sender, $senderName);
            $mail->Username   = $usernameSmtp;
            $mail->Password   = $passwordSmtp;
            $mail->Host       = $host;
            $mail->Port       = $port;
            $mail->SMTPAuth   = true;
            $mail->SMTPSecure = 'tls';
            // $mail->addCustomHeader('X-SES-CONFIGURATION-SET', $configurationSet);

            // Specify the message recipients.
            $mail->addAddress($recipient);
            // You can also add CC, BCC, and additional To recipients here.

            // Specify the content of the message.
            $mail->isHTML(true);
            $mail->Subject    = $subject;
            $mail->Body       = $bodyHtml;
            $mail->AltBody    = $bodyText;
            $mail->Send();
            echo "Email sent!" , PHP_EOL;
        } catch (phpmailerException $e) {
            echo "An error occurred. {$e->errorMessage()}", PHP_EOL; //Catch errors from PHPMailer.
        } catch (Exception $e) {
            echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.
        }
    }


}

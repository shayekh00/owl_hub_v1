<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Commons
// Route::get('/', 'HomeController@index')->name('new_landing');
Route::get('/about', 'Commons@about')->name('about');
Route::get('/new_faq', 'Commons@faq')->name('new_faq');

Route::get('/', 'Commons@index')->name('new_landing');
Route::get('/about_us', 'Commons@about_us')->name('about_us');
Route::get('/faq', 'Commons@blog')->name('faq');
Route::get('/contact_us', 'Commons@contact')->name('contact_us');;



Route::get('/not', 'Commons@not_accept');
Route::get('contactus', 'Commons@contactus')->name('contactus');
Route::get('/login_signup', function () {
        return view('commons.landing');
})->name('landing');;

Route::get('/not_a_teacher', 'Commons@not_teacher');
Route::get('/not_a_student', 'Commons@not_student');

// Route::get('/requests', 'students@not_student');
Route::get('/requests', 'StudentRequest@requests');
// Route::get('/test', 'Commons@test');

// Route::get('/test', 'Commons@testt');
// Route::post('/test', 'Commons@addtestt');



Route::get('/how_it_works', 'Commons@how_it_works')->name('how_it_works');
Route::get('my-Test-mail/{email}/{url}/{message}','MailController@myTestMail')->name('sendEmail');

//Routes for authentication from LANDING PAGE
    //login
Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin2')->name('post-login'); 

    //Register
Route::post('postregister', 'AuthController@postRegister')->name('postregister'); 
Route::get('logout', 'AuthController@logout')->name('logout');

    // Password Reset
Route::get('student/password_reset', 'ResetPassword@index_StudentResetPage');
Route::post('student/reset_password_without_token', 'ResetPassword@validatePasswordRequest')->name('validate_student_password_request');

Route::get('student/password-reset', 'ResetPassword@index_StudentResetPage')->name('reset_student_password_request');
Route::post('student/password-reset', 'ResetPassword@sendPasswordResetToken');
Route::get('student/reset-password/{token}/', 'ResetPassword@showPasswordResetForm');
Route::post('student/reset-password/{token}/', 'ResetPassword@resetPassword');

Route::get('courseexpert/password-reset', 'ResetPassword@index_CourseExpertResetPage')->name('reset_courseexpert_password_request');
Route::post('courseexpert/password-reset', 'ResetPassword@send_CourseExpertPasswordResetToken');
Route::get('courseexpert/reset-password/{token}/', 'ResetPassword@showCourseExpertPasswordResetForm');
Route::post('courseexpert/reset-password/{token}/', 'ResetPassword@resetCourseExpertPassword');


 //COURSE_EXPERT ROUTES
//  Route::get('/man', 'TeacherController@not_accept');
//  Route::post('/man', 'TeacherController@not_accept_post');



Route::group(['middleware' => ['auth:courseexpert'] ], function () {
    

    Route::get('/expert_time', 'TeacherController@experttime');
    Route::post('/expert_time', 'TeacherController@addexperttime');

   
    Route::get('/expertcourses', 'TeacherController@courseExpertCourses')->name('TeacherController.courseExpertCourses');
    Route::get('/experttiming', 'TeacherController@courseExpertTiming')->name('TeacherController.courseExpertTiming');
    Route::post('/expertcourses', 'TeacherController@addCourseExpertCourses')->name('TeacherController.courseExpertCourses');
    Route::post('/experttiming', 'TeacherController@addCourseExpertTiming')->name('TeacherController.courseExpertTiming');
    Route::get('/skypeLink', 'TeacherController@skypeLink')->name('skypeLink');
    Route::post('/skypeLink', 'TeacherController@addskypeLink')->name('skypeLink');
    Route::get('/view_timing', 'TeacherController@viewExpertTiming');
    Route::get('/view_timing', 'TeacherController@viewExpertTiming');
    Route::get('/view_courses', 'TeacherController@viewExpertCourses');
    
    // Route::get('/update_courses', 'TeacherController@updateExpertCourses');
    // Route::post('/update_courses', 'TeacherController@updatecourses');
    
    Route::get('/welcome', 'TeacherController@welcomeMessage');
    Route::get('/expert_profile', 'TeacherController@viewExpertProfile')->name('courseexperts.expertProfile');
    Route::get('/update_expert_profile', 'TeacherController@updateExpertProfile');
    Route::post('/update_expert_profile', 'TeacherController@updateExpertProfilePost');
    
    Route::get('/delete_expert_time', 'TeacherController@updateExpertTimes');
    Route::get('/delete/{time_id}', 'TeacherController@deleteTime');
    
    Route::get('/update_expert_courses', 'TeacherController@updateExpertCourses');
    Route::get('/deletes/{course_id}', 'TeacherController@deleteCourse');
    
    Route::get('/appointments', 'TeacherController@myAppointments');
    Route::get('/studentrequest', 'StudentRequest@index')->name('student_request.index');
    // Route::get('/studentrequest', 'StudentRequest@index')->name('student_request.index');
    Route::get('/courseexperts/eachrequest', 'EachRequestController@eachrequest')->name('courseexperts.eachrequest');
    Route::get('/courseexperts/eachrequest/{course_id}/{accepted_appointment_id}/', 'EachRequestController@index')->name('courseexperts.eachrequest');
    // Route::get('/student/accepted/{accepted_appointment_id}/', 'EachRequestController@accepted')->name('multiuploads.accepted');
    // Route::get('/student/rejected/{accepted_appointment_id}/', 'EachRequestController@rejected')->name('multiuploads.rejected');

    Route::post('/student/decision/{accepted_appointment_id}', 'EachRequestController@decide')->name('multiuploads.decide');

});

//STUDENT ROUTES

Route::group(['middleware' => ['auth:student'] ], function () {

    Route::get('/student_profile', 'StudentRequest@StudentProfile');
    Route::get('/student_profile_update', 'StudentRequest@UpdateStudentProfile');
    Route::post('/student_profile_update', 'StudentRequest@UpdateStudentProfilePost');
    Route::get('/Appointments', 'StudentRequest@studentAppointments');
    
    Route::get('/requestcourseexpert', function () {
        //    return view('search');
        return view('students.requestcourseexpert');
            });

    Route::get('/live_search', 'LiveSearch@index')->name('live_search.index');
    Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');
    Route::get('/course_expert_list/{course_code1}/{university_name1}/{course_id}/{courseexpert_id}', 'LiveSearch@list')->name('course_expert_list.create_list');
    Route::get('/multiuploads/{courseexpert_id}/{course_id}/', 'UploadController@uploadResourcesPage')->name('multiuploads.uploadResourcesPage');
    Route::post('/multiuploads/{courseexpert_id}/{course_id}/{seletion}/', 'UploadController@submitResources')->name('multiuploads.submitResources');
    Route::get('/allstudentrequest', 'StudentRequest@allrequest')->name('student.allrequest');
    Route::post('/students/thankyou/{accepted_appointment_id}', 'StudentRequest@transaction_id')->name('student.transaction_id');;
});

//Admin
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Route::get('my-Test-mail','HomeController@myTestMail');

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
Route::get('/', 'HomeController@index')->name('new_landing');
Route::get('/about', 'Commons@about')->name('about');
Route::get('/faq', 'Commons@faq')->name('faq');
Route::get('contactus', 'Commons@contactus')->name('contactus');
Route::get('/login_signup', function () {
        return view('commons.landing');
})->name('landing');;

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
Route::group(['middleware' => ['auth:courseexpert'] ], function () {

   
    Route::get('/expertcourses', 'TeacherController@courseExpertCourses')->name('TeacherController.courseExpertCourses');
    Route::get('/experttiming', 'TeacherController@courseExpertTiming')->name('TeacherController.courseExpertTiming');
    Route::post('/expertcourses', 'TeacherController@addCourseExpertCourses')->name('TeacherController.courseExpertCourses');
    Route::post('/experttiming', 'TeacherController@addCourseExpertTiming')->name('TeacherController.courseExpertTiming');
    Route::get('/skypeLink', 'TeacherController@skypeLink')->name('skypeLink');
    Route::post('/skypeLink', 'TeacherController@addskypeLink')->name('skypeLink');
    Route::get('/view_timing', 'TeacherController@viewExpertTiming');
    Route::get('/view_timing', 'TeacherController@viewExpertTiming');
    Route::get('/view_courses', 'TeacherController@viewExpertCourses');
    Route::get('/update_courses', 'TeacherController@updateExpertCourses');
    Route::post('/update_courses', 'TeacherController@updatecourses');
    Route::get('/welcome', 'TeacherController@welcomeMessage');
    Route::get('/expert_profile', 'TeacherController@viewExpertProfile')->name('courseexperts.expertProfile');
    Route::get('/update_expert_profile', 'TeacherController@updateExpertProfile');
    Route::post('/update_expert_profile', 'TeacherController@updateExpertProfilePost');
    Route::get('/update_expert_course', 'TeacherController@updateExpertCourses');
    Route::get('/delete/{course_id}', 'TeacherController@deleteCourse');
    Route::get('/appointments', 'TeacherController@myAppointments');
    Route::get('/studentrequest', 'StudentRequest@index')->name('student_request.index');
    Route::get('/studentrequest', 'StudentRequest@index')->name('student_request.index');
    Route::get('/courseexperts/eachrequest', 'EachRequestController@eachrequest')->name('courseexperts.eachrequest');
    Route::get('/courseexperts/eachrequest/{course_id}/{accepted_appointment_id}/', 'EachRequestController@index')->name('courseexperts.eachrequest');
    Route::get('/student/accepted/{accepted_appointment_id}/', 'EachRequestController@accepted')->name('multiuploads.accepted');
    Route::get('/student/rejected/{accepted_appointment_id}/', 'EachRequestController@rejected')->name('multiuploads.rejected');

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
    Route::get('/course_expert_list/{course_code1}/{university_name1}/{course_id}', 'LiveSearch@list')->name('course_expert_list.create_list');
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

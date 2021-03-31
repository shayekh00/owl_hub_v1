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

//Routes for authentication from LANDING PAGE
    //login
Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin2')->name('post-login'); 

    //register
Route::post('postregister', 'AuthController@postRegister')->name('postregister'); 

Route::get('logout', 'AuthController@logout')->name('logout');

Route::get('contactus', 'Commons@contactus')->name('contactus');



//COURSE_EXPERT
Route::get('/expertcourses', 'TeacherController@courseExpertCourses')->name('expertcourses');
Route::get('/experttiming', 'TeacherController@courseExpertTiming')->name('experttiming');
Route::post('/expertcourses', 'TeacherController@addCourseExpertCourses')->name('expertcourses');
Route::post('/experttiming', 'TeacherController@addCourseExpertTiming')->name('experttiming');
Route::get('/skypelink', 'TeacherController@skypeLink')->name('skypelink');
Route::post('/skypeLink', 'TeacherController@addskypeLink')->name('skypeLink');
// Route::get('/profile', 'TeacherController@expertProfile');
Route::get('/expert_profile', 'TeacherController@expertProfile');
Route::post('/profile-update', 'TeacherController@updateExpertProfile');
Route::get('/view_timing', 'TeacherController@viewExpertTiming');
Route::get('/view_timing', 'TeacherController@viewExpertTiming');
Route::get('/view_courses', 'TeacherController@viewExpertCourses');
Route::get('/update_courses', 'TeacherController@updateExpertCourses');
Route::post('/update_courses', 'TeacherController@updatecourses');
Route::get('/profile', 'TeacherController@viewProfile');
Route::get('/welcome', 'TeacherController@welcomeMessage');



// Route::get('/welcome', function () {

//     return view('commons.welcome');
    
//     });

 

//EachRequest
Route::get('/courseexperts/eachrequest', 'EachRequestController@eachrequest')->name('courseexperts.eachrequest');
Route::get('/courseexperts/eachrequest/{course_id}/{problem_text}/', 'EachRequestController@index')->name('courseexperts.eachrequest');


Route::get('/', function () {
//return view('welcome');
    return view('commons.landing');

})->name('landing');;

// Route::get('/courseexperts.studentrequest', 'PagesController@studentsearch')->name('courseexperts.studentrequest');
Route::get('/studentrequest', 'StudentRequest@index')->name('student_request.index');

Route::get('/studentrequest', 'StudentRequest@index')->name('student_request.index');

// Route::get('/students.requestcourseexpert', 'PagesController@studentsearch')->name('students.requestcourseexpert');
 
Route::get('/requestcourseexpert', function () {
    //    return view('search');
       return view('students.requestcourseexpert');
         });


Route::get('/live_search', 'LiveSearch@index')->name('live_search.index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');

Route::get('/course_expert_list/{course_code1}/{university_name1}/{course_id}', 'LiveSearch@list')->name('course_expert_list.create_list');

Route::get('/multiuploads/{courseexpert_id}/{course_id}/', 'UploadController@uploadForm')->name('multiuploads.uploadForm');
Route::post('/multiuploads/{courseexpert_id}/{course_id}', 'UploadController@uploadSubmit')->name('multiuploads.uploadSubmit');

Route::get('/allstudentrequest', 'StudentRequest@allrequest')->name('student.allrequest');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

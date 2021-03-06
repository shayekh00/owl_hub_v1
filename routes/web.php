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
Route::post('post-login', 'AuthController@postLogin2'); 

    //register
Route::post('postregister', 'AuthController@postRegister'); 

Route::get('logout', 'AuthController@logout');


//COURSE_EXPERT
Route::get('/expertcourses', 'TeacherController@courseExpertCourses');
Route::get('/experttiming', 'TeacherController@courseExpertTiming');
Route::post('/expertcourses', 'TeacherController@addCourseExpertCourses');
Route::post('/experttiming', 'TeacherController@addCourseExpertTiming');
















// Route::get('/students.studentsearch', 'PagesController@studentsearch')->name('students.studentsearch');
 
Route::get('/studentsearch', function () {
    //    return view('search');
       return view('students.studentsearch');
         });
         
Route::get('/courseexpertlist', function () {
//    return view('search');
    return view('students.courseexpertlist');

});

Route::get('/', function () {
//return view('welcome');
    return view('commons.landing');

});

// Route::get('/courseexperts.studentrequest', 'PagesController@studentsearch')->name('courseexperts.studentrequest');
 
Route::get('/studentrequest', function () {
    //    return view('search');
       return view('courseexperts.studentrequest');
         });

         // Route::get('/students.requestcourseexpert', 'PagesController@studentsearch')->name('students.requestcourseexpert');
 
Route::get('/requestcourseexpert', function () {
    //    return view('search');
       return view('students.requestcourseexpert');
         });


Route::get('/live_search', 'LiveSearch@index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');

Route::get('/course_expert_list/{course_code1}/{university_name1}', 'LiveSearch@list')->name('course_expert_list.create_list');

Route::get('/multiuploads/{courseexpert_id}', 'UploadController@uploadForm')->name('multiuploads.uploadForm');
Route::post('/multiuploads/{courseexpert_id}', 'UploadController@uploadSubmit');
         
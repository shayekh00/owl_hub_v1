<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
//    return view('welcome');
    return view('commons.landing');

})->name('commons.landing');
Route::get('/students.studentsearch', 'PagesController@studentsearch')->name('students.studentsearch');
 
Route::get('/', function () {
    //    return view('search');
       return view('students.studentsearch');
         });
     Route::get('/', function () {
       //    return view('search');
           return view('students.courseexpertlist');
        
       });
//Routes for authentication from LANDING PAGE
    //login
Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin'); 

    //register
Route::post('postregister', 'AuthController@postRegister'); 

Route::get('logout', 'AuthController@logout');




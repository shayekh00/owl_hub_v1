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

//Routes for authentication from LANDING PAGE
    //login
Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin'); 

    //register
Route::post('postregister', 'AuthController@postRegister'); 

Route::get('logout', 'AuthController@logout');


Route::get('/expertcourses', function () {
    return view('courseexperts.courseexpertcourses');

});


Route::get('/experttiming', function () {
    return view('courseexperts.courseexperttiming');
});


Route::get('/', function () {
    //return view('welcome');
    return view('commons.landing');

});

Route::get('/expertcourses', function () {
    return view('courseexperts.courseexpertcourses');

});


Route::get('/experttiming', function () {
    return view('courseexperts.courseexperttiming');
});







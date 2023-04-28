<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});
|
*/
use Illuminate\Http\Request;

Route::get('/', 'HomeController@index');
Route::post('/submit_form', 'HomeController@submit_form')->name('submit_form');
Route::get('/register', 'HomeController@register');
Route::get('/login', 'HomeController@login');
Route::post('/login', 'HomeController@login');
 
Route::get('/token', function (Request $request) {
    $token = $request->session()->token();
 
    $token = csrf_token();
 
    // ...
});



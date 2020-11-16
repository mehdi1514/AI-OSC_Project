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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::resource('posts', 'PostsController');
Route::get('/doctors/search', 'DoctorsController@search');
Route::get('/appointments/mark_as_done/{id}', 'AppointmentsController@mark_as_done');
Route::get('/appointments/create/{doctor_id}/{timeslot}', 'AppointmentsController@create');
Route::resource('doctors', 'DoctorsController');
Route::resource('appointments', 'AppointmentsController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pay', function(){
    return view('payment');
});
Route::get('/heart', function(){
    return view('heart');
});
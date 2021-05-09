<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Auth\RegisterController;
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

// Route::get('/', function () {
//     return view('show');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin-panel', 'PagesController@mainpanel')->name('admin-panel');
Route::get('/admin-actions', 'PagesController@actions');

Route::post('/patient-info', 'PagesController@patientRegister')->name('moreInformation');
Route::get('/', 'PatientController@index');
Route::get('/admin-eye', 'PagesController@eyedoctor');
Route::get('/admin-cardiolog', 'PagesController@cardiolog');
Route::get('/admin-xray', 'PagesController@xray');

Route::post('dynamic_dependent/fetch', 'pagesController@fetch')->name('dynamicdependent.fetch'); 
Route::get('/add-doctor', 'PagesController@Doctor')->name('add-doctor');
Route::post('/add-doctor', 'DoctorController@store')->name('add-doctor-post');
Route::post('/patient-room', 'PatientController@store')->name('room-post');
Route::get('/patient-room', 'PagesController@room')->name('room-get');

Route::delete('/doctor/{id}', 'DoctorController@destroy')->name('doctor.destroy');
Route::patch('/doctor/{id}', 'DoctorController@update')->name('doctor.update');
Route::get('/doctor/{id}/edit', 'DoctorController@edit');

Route::get('/patient/{id}', 'PatientController@diagnosis');
Route::get('/patient/edit/{id}', 'PatientController@update');

Route::get('/newPatient', 'PatientController@newPatient');

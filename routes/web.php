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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth', 'admin'])->namespace('Admin')->group(function () {

	// rutas asociadas a Specialty
	Route::get('/specialties', 'SpecialtyController@index');//devuelve una vista con la lista de especialidades
	Route::get('/specialties/create', 'SpecialtyController@create'); // acceder al formulario de registro
	Route::get('/specialties/{specialty}/edit', 'SpecialtyController@edit');
	Route::post('/specialties', 'SpecialtyController@store'); //para enviar la informacion en la BD
	Route::put('/specialties/{specialty}', 'SpecialtyController@update');
	Route::delete('/specialties/{specialty}', 'SpecialtyController@destroy');

	// rutas asociadas a Doctors
	Route::resource('doctors','DoctorController');


	// rutas asociadas a Patients
	Route::resource('patients','PatientController');
   
});

Route::middleware(['auth', 'doctor'])->namespace('Doctor')->group(function () {

	Route::get('/schedule', 'ScheduleController@edit');
	Route::post('/schedule', 'ScheduleController@store');
   
});


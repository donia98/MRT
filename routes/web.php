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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group([ 'middleware'=>'auth'], function () {   

  
# Doctors
Route::get('/doctor/create', 'DoctorsController@create')->name('doctor.create');
Route::post('/doctor/store', 'DoctorsController@store')->name('doctor.store');
Route::get('/doctors', 'DoctorsController@index')->name('doctors');
Route::get('/doctor/edit/{id}', 'DoctorsController@edit')->name('doctor.edit');
Route::get('/doctor/delete/{id}', 'DoctorsController@destroy')->name('doctor.delete');
Route::post('/doctor/update/{id}', 'DoctorsController@update')->name('doctor.update');

# Patients
Route::get('/patient/create', 'PatientController@create')->name('patient.create');
Route::post('/patient/store', 'PatientController@store')->name('patient.store');
Route::get('/patients', 'PatientController@index')->name('patients');
Route::get('/patient/edit/{id}', 'PatientController@edit')->name('patient.edit');
Route::get('/patient/view/{id}', 'PatientController@view')->name('patient.view');

Route::get('/patient/delete/{id}', 'PatientController@destroy')->name('patient.delete');
Route::post('/patient/update/{id}', 'PatientController@update')->name('patient.update');

# Department 
Route::get('/departments', 'DepartmentController@index')->name('departments');
Route::get('/department/edit/{id}', 'DepartmentController@edit')->name('department.edit');
Route::get('/department/delete/{id}', 'DepartmentController@destroy')->name('department.delete');
Route::get('/department/create', 'DepartmentController@create')->name('department.create');
Route::post('/department/store', 'DepartmentController@store')->name('department.store');
Route::post('/department/update/{id}', 'DepartmentController@update')->name('department.update');

# medicines 
Route::get('/medicines', 'MedicineController@index')->name('medicines');
Route::get('/mdicine/edit/{id}', 'MedicineController@edit')->name('medicine.edit');
Route::get('/medicine/delete/{id}', 'MedicineController@destroy')->name('medicine.delete');
Route::get('/medicine/create', 'MedicineController@create')->name('medicine.create');
Route::post('/medicine/store', 'MedicineController@store')->name('medicine.store');
Route::post('/medicine/update/{id}', 'MedicineController@update')->name('medicine.update');



# Rooms 
Route::get('/rooms', 'RoomController@index')->name('rooms');
Route::get('/room/edit/{id}', 'RoomController@edit')->name('room.edit');
Route::get('/room/delete/{id}', 'RoomController@destroy')->name('room.delete');
Route::get('/room/create', 'RoomController@create')->name('room.create');
Route::post('/room/store', 'RoomController@store')->name('room.store');
Route::post('/room/update/{id}', 'RoomController@update')->name('room.update');

# treatments 
Route::get('/treatments', 'TreatmentController@index')->name('treatments');
Route::get('/treatment/edit/{id}', 'TreatmentController@edit')->name('treatment.edit');
Route::get('/treatment/delete/{id}', 'TreatmentController@destroy')->name('treatment.delete');
Route::get('/treatment/create', 'TreatmentController@create')->name('treatment.create');
Route::post('/treatment/store', 'TreatmentController@store')->name('treatment.store');
Route::post('/treatment/update/{id}', 'TreatmentController@update')->name('treatment.update');
});





Route::get('/muhammed', function(){
    // dd(App\Category::find(7)->posts());
    // return App\Post::find(4)->category  ;
    // return App\Tag::find(5)->posts  ;
    // return App\Post::find(9)->tags  ;
    //return App\User::find(1)->profile  ;
      return App\Patient::find(1)->treatment    ;
    })->name('muhammed'); 
    
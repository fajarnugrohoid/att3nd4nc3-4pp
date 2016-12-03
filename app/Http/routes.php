<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('home', 'HomeController@index');

Route::get('attendance', 'AttendanceController@index');

Route::get('employee', 'EmployeeController@index');


Route::get('/halamanku', 'WelcomeController@showHalaman');

Route::get('/cobamodel', function() 
{
    $anggota = App\Anggota::find(4); //Temukan anggota dengan id = 4
    $anggota->delete();      

});

Route::get('relasi', function() {
# Temukan anggota yang bernama xxx
$anggota = App\Anggota::where('nama', '=', 'xxx')->first();
echo $anggota->nama .' '.'hobinya :';
# Tampilkan seluruh data hobinya
foreach ($anggota->hobi as $list)
echo '<li> ' . $list->hobi ;
});

Route::get('/blade-sample', function(){

    return view('blade-sample');

});


Route::post('attendance/attend', 'AttendanceController@attend');
Route::post('attendance/addAgendaDay', 'AttendanceController@addAgendaDay');
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

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Admin\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Admin\AdminLoginController@login')->name('admin.login.submit');
    Route::delete('{id}','Admin\AdminController@delete')->name('admin.delete');
    Route::put('/{id}','Admin\AdminController@update')->name("admin.update");
    Route::get('/{id}/edit','Admin\AdminController@edit')->name("admin.edit");
    Route::post('/','Admin\AdminController@store')->name("admin.store");
    Route::get('/create','Admin\AdminController@create')->name("admin.create");
    Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/logout','Admin\AdminLoginController@logout')->name('admin.logout');
    Route::get('download','Admin\AdminController@ExportPDF')->name('ExportPDF.Admin');
    // Route::get('download',function(){
    //     $pdf= PDF::loadView('admin\pdf.show');
    //     return $pdf->stream();
    // });
});
Route::resource('user', 'Admin\UserController');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::get('/home', 'HomeController@index')->name('home');
//AQUI EMPIEZA EL USUARIO.....
Route::resource('inscripcion', 'InscripcionController');
Route::resource('anioescolar', 'AnioEscolarController');
Route::resource('alumno', 'AlumnoController');
Route::resource('representante', 'RepresentanteController');
Route::get('download/{id?}','HomeController@ExportarPDF')->name('ExportarPDF.USER');

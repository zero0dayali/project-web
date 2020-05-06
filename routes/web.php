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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'admin']], function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/role-register', 'Admin\DashboardController@registered');
    Route::get('/role-edit/{id}', 'Admin\DashboardController@registerEdit');
    Route::put('/role-register-update/{id}', 'Admin\DashboardController@registerUpdate');

    Route::get('/teachers', 'Admin\TeachersController@index');
    Route::post('/save-teachers', 'Admin\TeachersController@store');
    Route::get('/teachers/{id}', 'Admin\TeachersController@edit');
    Route::put('/teachers-update/{id}', 'Admin\TeachersController@update');
});

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::resource('/cauthu', 'CauthuController');
Route::resource('/sinhvien', 'SinhvienController');

//admin
Route::get('/admin/layouts', 'admin\DashboardController@index')->name('layouts');
Route::get('/admin/dashboard', 'admin\DashboardController@index')->name('dashboard');
Route::get('/admin/profile', 'admin\ProfileController@index')->name('profile');
Route::put('/admin/profile-update/{id}', 'admin\ProfileController@update')->name('update');
Route::resource('/admin/country', 'admin\CountryController');
Route::resource('/admin/blog', 'admin\BlogController');

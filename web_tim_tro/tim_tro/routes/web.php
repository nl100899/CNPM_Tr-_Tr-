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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'Front\FrontendController@index')->name('homepage');
Route::get('/listroom', 'Front\FrontendController@listroom');
Route::get('/about', 'Front\FrontendController@about');
Route::get('/contact', 'Front\FrontendController@contact');
Route::get('/thanhxuan','Front\FrontendController@thanhxuan');
Route::get('/caugiay','Front\FrontendController@caugiay');
Route::get('/badinh','Front\FrontendController@badinh');
Route::get('/don','Front\FrontendController@don');
Route::get('/doi','Front\FrontendController@doi');
Route::get('/da','Front\FrontendController@da');
Route::get('/postphong', 'Front\FrontendController@postroom');
Route::post('/postroom', 'Front\FrontendController@updateroom');

// admin router
Route::prefix('admin')->group(function ()
{
    Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
    
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
    // dang ki
    Route::get('/register', 'AdminController@create')->name('admin.register');
    Route::post('register', 'AdminController@store')->name('admin.register.store');
    // dang nhap
    Route::get('login', 'Auth\Admin\LoginController@login')->name('admin.auth.login');
    Route::post('login', 'Auth\Admin\LoginController@loginAdmin')->name('admin.auth.loginAdmin');
    // dang xuat
    Route::post('logout', 'Auth\Admin\loginController@logout')->name('admin.auth.logout');
    // document
    
    
    
    // room/repository
    Route::get('/room','Admin\AdminController@index');
    Route::get('/room/repository','Admin\RoomController@index');
    Route::get('/room/{id}/edit','Admin\RoomController@edit');
    Route::get('/room/{id}/delete','Admin\RoomController@delete');
    Route::post('/room/{id}/edit','Admin\RoomController@update');
    Route::post('/room/{id}/delete','Admin\RoomController@destroy');
    
   
   
    
    
});


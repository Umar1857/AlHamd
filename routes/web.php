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

/*/////////////////////////////////////*/
/*//////////FRONTEND ROUTES///////////*/
Route::get('/', function () {
    return view('user/home');
});

Route::get('/aboutus', function () {
    return view('user/aboutus');
});

Route::get('/our_hotels', function () {
    return view('user/our_hotels');
});

Route::get('/vacancies', function () {
    return view('user/vacancies');
});

Route::get('/vacancy_details', function () {
    return view('user/vacancy_details');
});

Route::get('/package_card', function () {
    return view('user/package_card');
});

Route::get('/packages', function () {
    return view('user/packages');
});

Route::get('/wellness', function () {
    return view('user/wellness');
});

Route::get('/wellness_card', function () {
    return view('user/wellness_card');
});

Route::get('/gifts', function () {
    return view('user/gifts');
});

Route::get('/meetings', function () {
    return view('user/meetings');
});

Route::get('/weddings', function () {
    return view('user/weddings');
});

Route::get('/events', function () {
    return view('user/events');
});

Route::get('/hotel', function () {
    return view('user/hotel');
});

Route::get('/conference', function () {
    return view('user/conference');
});

Route::get('/layout', function (){
   return view('layouts/admin');
});
/*/////////////////////////////////////*/
/*///////////BACKEND ROUTES///////////*/
Route::prefix('/admin')->group(function (){

    // Admin Panel Routes
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');

    Route::group(['middleware'  => 'auth:admin'], function(){

        // Resource Route For Customers
        Route::resource('/customers', 'UsersController');

        // Resource Route For Admins
        Route::resource('/administrators', 'AdminController');
    });

    //Admin Login Routes

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    //Admin Register Routes
    Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');

    //Admin Password Reset Routes
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

    //Admin Logout Route
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


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
Route::get('/', 'HomeController@home')->name('home');

Route::get('/about', function () {
    return view('user/aboutus');
});

Route::get('/contact', function () {
    return view('user/contactus');
});

Route::post('/contact', 'ContactController@create')->name('contact.submit');

Route::get('/quote', 'QuoteController@index')->name('quote.index');
Route::post('/quote', 'QuoteController@create')->name('quote.submit');

Route::get('/booking', 'BookingController@index')->name('booking.index');
Route::post('/booking', 'BookingController@create')->name('booking.submit');

Route::get('/blog', 'PostController@blog')->name('blog.index');
Route::get('/blog/{id}/{name}', 'PostController@singlePost')->name('blog.post');

Route::get('/projects', 'ProjectController@projects')->name('projects.index');

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

Route::get('/services', 'ServiceController@getServices');

Route::get('/service/{id}/{name}', 'ServiceController@getSingleService');

Route::get('/getServiceItems', 'ServiceController@getServiceItems');

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

// Shows account info and booking details etc...

/*//////////////////////////////////////////////////////////*/
/*///////////////ACCOUNT ROUTE AUTHENTICATION//////////////*/
Route::group(['middleware'  => 'auth'], function(){
    Route::get('/account', function (){
        return view('user/my_accounts');
    });
});


//////////////////////////////////////////////////////////////////////////////////////
/// ///////////////////////FRONTEND ROUTES END HERE//////////////////////////////////


/*/////////////////////////////////////*/
/*///////////BACKEND ROUTES///////////*/
Route::prefix('/admin')->group(function (){

    // Admin Routes Protection Middleware
    Route::group(['middleware'  => 'adminLogin'], function(){

        // Admin Panel Routes
        Route::group(['middleware'  => 'auth:admin'], function(){
            Route::get('/', function(){
                return redirect()->route('dashboard');
            });

            Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');

            // Resource Route For Customers
            Route::resource('/customers', 'UsersController');

            // Resource Route For Admins
            Route::resource('/administrators', 'AdminController');

            // Resource Route For Post
            Route::resource('/post', 'PostController');

            // Resource Route For Project
            Route::resource('/project', 'ProjectController');

            // Resource Route For Profile
            Route::resource('/profile', 'ProfileController');

            // Resource Route For Service
            Route::resource('/service', 'ServiceController');

            // Resource Route For Item
            Route::resource('/item', 'ItemController');

            Route::get('/booking/pending', 'BookingController@pendingBookings')->name('pending.bookings');
            Route::get('/booking/confirmed', 'BookingController@confirmedBookings')->name('confirmed.bookings');
            Route::get('/booking/completed', 'BookingController@completedBookings')->name('completed.bookings');
            Route::get('/booking/{id}', 'BookingController@show')->name('bookings.view');
            Route::post('/booking/update/status', 'BookingController@updateStatus')->name('booking.update');
            Route::post('/booking/reply', 'BookingController@sendReply')->name('booking.reply');

            Route::get('/quote', 'QuoteController@quotes')->name('quotes');
            Route::get('/quote/{id}', 'QuoteController@show')->name('quotes.view');
            Route::post('/quote/reply', 'QuoteController@sendReply')->name('quote.reply');

            Route::get('/contact', 'ContactController@index')->name('contacts');
            Route::get('/contact/{id}', 'ContactController@show')->name('contacts.view');
            Route::post('/contact/reply', 'ContactController@sendReply')->name('contact.reply');

            Route::get('/notification','NotificationController@index')->name('notification');

            Route::get('/notifications/markasread', 'NotificationController@markasread')->name('markasread');
        });

        //Admin Login Routes

        Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

        Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

        //Admin Register Routes
        /*Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
        Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');*/

        //Admin Password Reset Routes
        Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
        Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
        Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
        Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

        //Admin Logout Route
        Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    });

});



Auth::routes();

Route::get('/', 'HomeController@home')->name('home');

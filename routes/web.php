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
    return view('introduction');
});
Route::get('/start', function () {
    return view('start');
});
Route::get('/payment/donate', function () {
    return view('payment.donate');
});
Route::get('/pages/html', function () {
    return view('pages.html');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay'); 
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

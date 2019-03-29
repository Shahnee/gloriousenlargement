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
Route::middleware('page-cache')->get('/lp', 'PaymentController@front_page');
Route::get('/lp/payment', 'PaymentController@subscription');
Route::get('/lp/thank-you', 'PaymentController@open_thank_you_page');

Route::get('/', 'PaymentController@do_die');


Route::post('/', 'PaymentController@addSubscription');
Route::get('/thank-you-downloadyourbook', 'PaymentController@thankyou')->name('thank-you-downloadyourbook');
Route::get('/specialgift', 'PaymentController@special')->name('specialgift');
Route::get('/special', 'PaymentController@special')->name('special');

Route::get('/contact', 'PaymentController@contact')->name('contact');
Route::get('/terms', 'PaymentController@terms')->name('terms');
Route::get('/privacy', 'PaymentController@privacy')->name('privacy');


Route::get('/create_api_contact', 'PaymentController@create_api_contact');

//Route::get('/', function () {
//    return view('welcome');
//});

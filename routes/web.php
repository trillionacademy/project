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
// Route::get('captcha-form', 'CaptchaController@captchForm');
// Route::post('store-captcha-form', 'CaptchaController@storeCaptchaForm');
// Auth::routes([
//     'register' => false,
//     'verify' => true,
//     'reset' => false
//   ]);
// Route::post('/register', 'RegisterController@create');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/fee', 'RegistrationfeeController@index')->name('fee');
Route::post('/makepayment', 'RegistrationfeeController@makepayment')->name('makepayment');
Route::get('/skippayment', 'RegistrationfeeController@skippayment')->name('skippayment');

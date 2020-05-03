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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/', 'User\HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
  Route::get('/', function(){
    return redirect()->route('admin.dashboard');
  });
  Route::get('/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Admin\Auth\LoginController@login');
  Route::get('/logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');

  Route::get('/register', 'Admin\Auth\RegisterController@showRegistrationForm')->name('admin.register');
  Route::post('/register', 'Admin\Auth\RegisterController@register');

  Route::post('/password/email', 'Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.request');
  Route::post('/password/reset', 'Admin\Auth\ResetPasswordController@reset')->name('admin.password.email');
  Route::get('/password/reset', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.reset');
  Route::get('/password/reset/{token}', 'Admin\Auth\ResetPasswordController@showResetForm');
});

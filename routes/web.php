<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();




//前台
Route::group(['namespace'=>'Web'],function (){
    Route::get('pages/{id}', 'PagesController@show');
    Route::get('home', 'HomeController@index');
    Route::post('comment/store','CommentsController@store');
});



//后台
Route::group(['namespace' => 'Admin','prefix'=>'admin','middleware'=>'auth'],function (){

    Route::get('login','Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');

   /* //注册
    Route::get('register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('register', 'Auth\RegisterController@register');*/
    //登出
    Route::post('logout', 'Auth\LoginController@logout');

    Route::get('/', 'AdminHomeController@index');
    Route::get('pages/{id}', 'PagesController@show');

    Route::resource('pages','PagesController');
    Route::resource('comments','CommentsController');


    Route::post('logout', 'Auth\LoginController@logout');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');


});
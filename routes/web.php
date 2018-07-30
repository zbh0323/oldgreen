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

Route::get('/', 'PagesController@root')->name('root');

Auth::routes();

//登录中间件认证
Route::group(['middleware' => 'auth'], function (){
	Route::get('/email_verify_notice', 'PagesController@emailVerifyNotice')->name('email_verify_notice');
	//邮箱验证中间件
	Route::group(['middleware' => 'email_verified'], function() {
		Route::get('/test', function() {
			return 'you emial is verified';
		});
	});
});



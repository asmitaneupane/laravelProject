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

Route::get('/', function () {
    return view('index1');
});

Route::get('/set', function () {
    return view('setting');
});

Route::get('/test',function() {
	return view('yourname');
});
Route::get('/index',function() {
	return view('index');
});
Route::get('test','Test@index');

Route::get('hello/{fname}/{lname}','Test@printmsg');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth']],function()
{
	Route::match(['get','post'],'/admin','AdminController@login');

	Route::get('/logout', 'AdminController@logout');

	Route::match(['get','post'],'/update-psw','AdminController@updatePassword');
	Route::match(['get','post'],'/addcategory','CategoryController@addcategory');
});

// Route::get('/addcategory', function () {
//     return view('addcategory');
// });

Route::get('/listcategory', function () {
    return view('listcategory');
});



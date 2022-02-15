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

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//admin routes
Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {

	Route::get("addform", "FormController@addForm")->name('addForm');
	Route::post("addFromField", "FormController@addFromField")->name('addFromField');

	Route::get('form', "FormController@index")->name('form');
	Route::get('form/list', "FormController@fromList")->name('form.list');

});

// user routes
Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function () {
	Route::get('/', 'HomeController@user_dashboard')->name('user_dashboard');

});

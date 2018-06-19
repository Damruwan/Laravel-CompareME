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

// Authentication Routes...
Route::get('login', 'Auth\LoginController@index')->name('login');
Route::post('login', 'Auth\LoginController@authenticate')->name('authenticate');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/', 'UserController@index')->name('filter');
Route::get('item/{item_id}', 'UserController@viewItem')->name('view-item');

Route::get('compare/{item_id}','CompareController@index')->name('compare');
Route::get('/search-item', 'CompareController@searchItem');
Route::get('item-compare', 'CompareController@getCompareItem')->name('item-compare');

/**
 * Authenticate user 
 */
Route::group(['middleware' => ['auth']], function(){

	/**
	 * Check user roles after authentication
	 */
	Route::group(['prefix' => 'admin', 'middleware' => 'can:admin-authorized'], function(){
		Route::get('/items','ItemController@index')->name('items');
		Route::get('/advertisements','AdminController@viewAdvertisements')->name('advertisements');
		Route::get('/approve-advertisement/{ad_id}/{status}', 'AdminController@approveAdvertisement')->name('approve-ads');
		Route::get('/items-add/{category_id}', 'ItemController@create')->name('item-add');
		Route::post('/items-add/{category_id}', 'ItemController@store')->name('item-add');
		Route::get('/items-edit/{category_id}/{item_id}', 'ItemController@edit')->name('items-edit');
		Route::post('item-update/{item_id}','ItemController@update')->name('item-update');
		Route::get('item-delete/{item_id}', 'ItemController@destroy')->name('items-delete');

	});

	Route::group(['prefix' => 'user', 'middleware' => 'can:user-authorized'], function(){
		Route::get('/','UserController@index');
		Route::post('save-comment/{item_id}', 'UserController@saveComment')->name('comment');
		Route::post('save-add/{item_id}', 'UserController@saveAdvertisement')->name('advertisement');
	});

});
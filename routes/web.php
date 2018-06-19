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

Route::get('register', function () {
    return view('register');
});

Route::get('login', function () {
    return view('login');
});

Route::get('users', ['uses'=>'UserController@index']);

Route::get('admin', [
  'uses'=>'UserController@getAdminDB',
  'as'=>'ad'
])->middleware('auth');

Route::get('normal_seller', [
  'uses'=>'UserController@getNSDB',
  'as'=>'ns'
])->middleware('auth');

Route::get('store_seller', [
  'uses'=>'UserController@getSSDB',
  'as'=>'ss'
])->middleware('auth');


Route::get('signout', [
  'uses'=>'UserController@logout',
  'as'=>'signout'
]);


Route::post('register', [
  'uses'=>'UserController@RegisterUser',
  'as' => 'signup'
]);

Route::post('login', [
  'uses'=>'UserController@LoginUser',
  'as' => 'signin'
]);

Route::get('phone/create', [
  'uses'=>'PhoneController@index',
  'as'=>'create'
]);

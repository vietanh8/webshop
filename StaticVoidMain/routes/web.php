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


Route::get('home/', ['as'=>'home','uses'=>'mycontroller@showindex']);
Route::get('about',['as'=>'about','uses'=>'mycontroller@showabout']);
Route::get('contact', ['as'=>'contact','uses'=>'mycontroller@showcontact']);
Route::get('cart-{id}', ['as'=>'cart','uses'=>'mycontroller@showcart']);
Route::get('deletecart/{id}', ['deletecart'=>'cart','uses'=>'mycontroller@deletecart']);
Route::get('mycart', ['as'=>'mycart','uses'=>'mycontroller@cart']);
Route::get('update-{id}-{quantity}-{size}', ['as'=>'updateqty','uses'=>'mycontroller@updateqty']);
Route::get('info-{id}', ['as'=>'info','uses'=>'mycontroller@showinfo']);
Route::post('infocart-{id}', ['as'=>'infocart','uses'=>'mycontroller@infocart']);
Route::get('checkout', ['as'=>'checkout','uses'=>'mycontroller@showcheckout']);
Route::get('postcheckout', ['as'=>'postcheckout','uses'=>'mycontroller@postcheckout']);
Route::get('complete', ['as'=>'complete','uses'=>'mycontroller@showcomplete']);
Route::get('shoes', ['as'=>'shoes','uses'=>'mycontroller@showshoes']);
Route::get('register', ['as'=>'register','uses'=>'mycontroller@register']);
Route::post('postregister', ['as'=>'postregister','uses'=>'mycontroller@postRegister']);
Route::get('login', ['as'=>'login','uses'=>'mycontroller@login']);
Route::post('postlogin', ['as'=>'postlogin','uses'=>'mycontroller@postLogin']);
Route::get('logout', ['as'=>'logout','uses'=>'mycontroller@logout']);
Route::post('search', ['as'=>'search','uses'=>'mycontroller@search']);
Route::get('infouser', ['as'=>'infouser','uses'=>'mycontroller@infouser']);
Route::get('editinfo', ['as'=>'editinfo','uses'=>'mycontroller@editinfo']);
Route::post('avatar', ['as'=>'avatar','uses'=>'mycontroller@avatar']);
Route::post('changepass', ['as'=>'changepass','uses'=>'mycontroller@changepass']);
Route::post('sendmail', ['as'=>'sendmail','uses'=>'mycontroller@sendmail']);

//admim

Route::get('adminlogin', ['as'=>'adminlogin','uses'=>'adminController@adminlogin']);
Route::get('adminlogout', ['as'=>'adminlogout','uses'=>'adminController@adminlogout']);
Route::post('postadminlogin', ['as'=>'postadminlogin','uses'=>'adminController@postadminlogin']);

Route::group(['prefix'=>'/','middleware'=>'adminLogin'],function(){
	Route::get('adminpanel', ['as'=>'admin','uses'=>'adminController@admin']);

	Route::get('listproduct', ['as'=>'listproduct','uses'=>'adminController@listproduct']);

	Route::get('editProduct', ['as'=>'editProduct','uses'=>'adminController@editProduct']);

	Route::get('addproduct', ['as'=>'addproduct','uses'=>'adminController@addproduct']);

	Route::get('deleteproduct/{id}', ['as'=>'deleteproduct','uses'=>'adminController@deleteproduct']);

	Route::post('postaddproduct', ['as'=>'postaddproduct','uses'=>'adminController@postaddproduct']);

	Route::get('description/{id}', ['as'=>'description','uses'=>'adminController@description']);

	Route::post('savedescription/{id}', ['as'=>'savedescription','uses'=>'adminController@savedescription']);

	Route::get('member', ['as'=>'member','uses'=>'adminController@member']);
	Route::get('admininfo', ['as'=>'admininfo','uses'=>'adminController@admininfo']);
	Route::get('editinfoadmin', ['as'=>'editinfoadmin','uses'=>'adminController@editinfoadmin']);
	Route::post('avatar', ['as'=>'avatar','uses'=>'adminController@avatar']);
	Route::get('invoice/{id}', ['as'=>'invoice','uses'=>'adminController@invoice']);
	Route::get('generatepdf/{id}', ['as'=>'generatepdf','uses'=>'adminController@generatepdf']);
	Route::get('deletebill/{id}', ['as'=>'deletebill','uses'=>'adminController@deletebill']);
});

















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

Route::get('home', ['as'=>'home','uses'=>'mycontroller@showindex']);

Route::get('about',['as'=>'about','uses'=>'mycontroller@showabout']);

Route::get('contact', ['as'=>'contact','uses'=>'mycontroller@showcontact']);

Route::get('cart-{id}', ['as'=>'cart','uses'=>'mycontroller@showcart']);

Route::get('deletecart/{id}', ['deletecart'=>'cart','uses'=>'mycontroller@deletecart']);

Route::get('mycart', ['as'=>'mycart','uses'=>'mycontroller@cart']);

Route::get('update-{id}-{quantity}-{size}', ['as'=>'updateqty','uses'=>'mycontroller@updateqty']);

Route::get('info-{id}', ['as'=>'info','uses'=>'mycontroller@showinfo']);

Route::get('checkout', ['as'=>'checkout','uses'=>'mycontroller@showcheckout']);

Route::get('postcheckout', ['as'=>'postcheckout','uses'=>'mycontroller@postcheckout']);

Route::get('complete', ['as'=>'complete','uses'=>'mycontroller@showcomplete']);

Route::get('shoes', ['as'=>'shoes','uses'=>'mycontroller@showshoes']);


Route::get('register', ['as'=>'register','uses'=>'mycontroller@register']);
Route::get('login', ['as'=>'login','uses'=>'mycontroller@login']);
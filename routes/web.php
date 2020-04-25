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
    return view('index');
})->name('home');;
Route::get('get-start/',function(){
    return view('form');
})->name('get-start');

Route::get('text/',function(){
    
    return ['name'=>'pizza','age'=>25];
});

Route::post('register/', 'RegistrationController@store')->name('register');

Route::get('all-categories/',function(){


    return view('all-categories');

})->name('categories');
Route::post('login/', 'SessionsController@store')->name('sign-up');
Route::get('/logout', 'SessionsController@destroy')->name('logout');
Route::get('/prods', 'ProductController@yti')->name('ld');

Route::get('/cart', function(){
    
})->name('logout');

Route::get('/history', function(){
  return view('history');
})->name('history');

Route::get('/cart', function(){
    return view('cart');
  })->name('cart');
  

Route::resource('product', 'ProductController');


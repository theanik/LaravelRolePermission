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


Route::get('post','PostController@index')->name('post.index');
// Route::get('post/{id}','PostController@show')->name('post.view');


/**
 * SuperAdmin
 * add
 * edit
 * delete
 * view
 */

/**
 * admin
 * add
 * edit
 * view
 */


 /**
  * user
  * view
  */


/**
 admin এবং superAdmin উভয়  পোস্ট add ,edit  করতে পারবে। তাই এখানে admin ।superAdmin pass করসি। 
 */
Route::group(['middleware' => ['role:admin|superAdmin']], function () {
    Route::get('post/edit/{id}','PostController@edit')->name('post.edit');
    Route::put('post/{id}','PostController@update')->name('post.update');
    Route::get('post_create','PostController@create')->name('post.create');
    Route::post('post','PostController@store')->name('post.store');

});

/**
পোস্ট ডিলিট শুদু superAdmin করতে পরনে। 
তাই এই route গ্রুপে শুদু ডিলিট route .
 */

Route::group(['middleware' => ['role:superAdmin']], function () {
    Route::delete('post/{id}','PostController@delete')->name('post.delete');
});


/**
 পোস্ট সবাই ভিউ করতে পারবে। তাই এখানে সব রোল pass করসি। 
 */

Route::group(['middleware' => 'role:user|admin|superAdmin'], function () {
    Route::get('post/{id}','PostController@show')->name('post.view');
});


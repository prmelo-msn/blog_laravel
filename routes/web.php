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

Route::get('hello-world', 'HelloWorldController@index');

Route::get('/post/{slug}', function($slug) {
    return $slug;
})
->name('post.single');

Route::get('/user/{id}', function($slug) {
    return $slug;
})
->where(['id' => '[0-9]+']);

Route::resource('/users', 'UserController');

// Route::prefix('admin')->namespace('Admin')->group(function(){
    
// Route::prefix('posts')->name('posts.')->group(function(){

// Route::get('/create', 'PostController@create')->name('create');

// Route::post('/store', 'PostController@store')->name('store');

//     });
    
// });
Route::group(['middleware' => ['auth']], function(){

    Route::prefix('admin')->namespace('Admin')->group(function(){
        
        Route::resource('posts', 'PostController');
        Route::resource('categories', 'CategoryController');
        
    });

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



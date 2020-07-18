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

Route::get('/', function () { //that related to the url 
    return view('welcome');
});
Route::get("/post","c_post@showpost");
Route::get("/addpost","c_post@addpost");
Route::post("/insertpost","c_post@insertpost");

Route::get('/login',function(){
Auth::login();
return redirect('/auth.login');

});
Route::get('/logout',function(){
Auth::logout();
return redirect("./posts.posts");

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

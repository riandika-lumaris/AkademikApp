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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/index','TestController@index');
Route::get('/user/{name}','TestController@say_hello');
Route::get('/load_view','TestController@load_view');
Route::post('/login','TestController@do_login')->name("login_route");

Route::get('/add_session', 'SC_Controller@add_session');
Route::get('/get_session', 'SC_Controller@get_session');
Route::get('/add_cookie', 'SC_Controller@add_cookie');
Route::get('/get_cookie', 'SC_Controller@get_cookie');
Route::get('/show_home', 'SC_Controller@show_home');

Route::get("/master_mhs", "AkademikController@master_mhs");
Route::get("/search_mhs/{nrp}", "AkademikController@search_mhs");
Route::post("/insert_mhs", "AkademikController@insert_mhs");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

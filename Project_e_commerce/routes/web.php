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
    return view('login');
});
Route::get('/login.blade.php', function () {
    return view('login');
});
Route::get('/posts.blade.php', function () {
    return view('posts');
});
Route::get('/users.blade.php', function () {
    return view('users');
});
Route::get('/profile.blade.php', function () {
    return view('profile');
});
Route::get('/card.blade.php', function () {
    return view('card');
});

Route::get('/details.blade.php', function () {
    return view('details');
});
Route::get('/categories.blade.php', function () {
    return view('categories');
});
Route::get('/home1.blade.php', function () {
    return view('home1');
});
Route::get('/num/{n1}/{n2}/{n3}','num@number');
Route::get('/index.blade.php', function () {
    return view('index');
});
Route::get('/pro.blade.php', function () {
    return view('pro');
});

Route::get('/even/{n1}/{n2}','num@even_n');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/', function () {
    return view('home1');
});
Route::middleware(['auth'])
->group(function() {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });
});


Route::get('/user-edit', function () {
    return view('user-edit');
});

Route::get('/user-view', function () {
    return view('user-view');
});

Route::get('/user-list', function () {
    return view('user-list');
});

Route::get('/absen', function () {
    return view('absen');
});

Route::get('/dashboard-analytics', function () {
    return view('dashboard-analytics');
});

// Route::get('/login', function () {
//     return view('pengguna.login');
// });

// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/home', function () {
    return view('home');
});

Route::get('/kelas', function () {
    return view('kelas');
});

Route::get('/detailkelas', function () {
    return view('detailkelas');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/listkeranjang', function () {
    return view('listkeranjang');
});

// Route::get('/home', 'HomeController@index')->name('home');

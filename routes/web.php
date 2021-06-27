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


    Route::group(['prefix' => 'admin', 'middleware' => 'admin', 'name' => 'admin'], function () {
        Route::get('/', function () {
            return view('admin.dashboard');
        });
    });

    Route::group(['prefix' => 'siswa', 'middleware' => 'siswa', 'name' => 'siswa'], function () {
        Route::get('/', function () {
            return view('pengguna.dashboard');
        });

        Route::resource('profile', 'ProfileUserController');
        Route::put('/profile/pic/update/{id}', 'ProfileUserController@updateProfile');
    });

    Route::group(['prefix' => 'ortu', 'middleware' => 'ortu', 'name' => 'ortu'], function () {

    });








    Route::get('/profil', function () {
        return view('admin.profil');
    });


    // list siswa regular
    Route::get('/siswa-regular-sd', function () {
        return view('admin.siswa.kelas_regular.sd.index');
    });
    Route::get('/siswa-regular-smp', function () {
        return view('admin.siswa.kelas_regular.smp.index');
    });
    Route::get('/siswa-regular-sma_ips', function () {
        return view('admin.siswa.kelas_regular.sma_ips.index');
    });
    Route::get('/siswa-regular-sma_ipa', function () {
        return view('admin.siswa.kelas_regular.sma_ipa.index');
    });
    Route::get('/siswa-regular-sbmptn', function () {
        return view('admin.siswa.kelas_regular.sbmptn.index');
    });
    Route::get('/siswa-regular-kedinasan', function () {
        return view('admin.siswa.kelas_regular.kedinasan.index');
    });

    // list siswa terbatas
    Route::get('/siswa-terbatas-sd', function () {
        return view('admin.siswa.kelas_terbatas.sd.index');
    });
    Route::get('/siswa-terbatas-smp', function () {
        return view('admin.siswa.kelas_terbatas.smp.index');
    });
    Route::get('/siswa-terbatas-sma_ips', function () {
        return view('admin.siswa.kelas_terbatas.sma_ips.index');
    });
    Route::get('/siswa-terbatas-sma_ipa', function () {
        return view('admin.siswa.kelas_terbatas.sma_ipa.index');
    });
    Route::get('/siswa-terbatas-sbmptn', function () {
        return view('admin.siswa.kelas_terbatas.sbmptn.index');
    });
    Route::get('/siswa-terbatas-kedinasan', function () {
        return view('admin.siswa.kelas_terbatas.kedinasan.index');
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

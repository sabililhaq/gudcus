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
    return view('utama');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/artikel', function () {
    return view('artikel');
})->name('artikel');

Route::post('/mandor/pasangproyek/detailproyek', function(){
    return view('mandor.pasangproyek.detailproyek');
});

Route::post('/mandor/carikuli/detailkuli', function(){
    return view('mandor.carikuli.detailkuli');
});


Route::get('/kuli/cariproyek/detail', '\App\Http\Controllers\Kuli\CariProyekController@detail');

Route::get('/kuli/cariproyek/daftar', '\App\Http\Controllers\Kuli\CariProyekController@apply');

Route::post('/batal', '\App\Http\Controllers\Kuli\CariProyekController@cancel');

Route::get('/mandor/pasangproyek/detailproyek', '\App\Http\Controllers\Mandor\PasangProyekController@detail');

Route::post('/ready', '\App\Http\Controllers\Kuli\AjukanDiriController@ready');

Route::post('/cancel', '\App\Http\Controllers\Kuli\AjukanDiriController@cancel');

Route::post('/proyekbaru', '\App\Http\Controllers\Mandor\PasangProyekController@new');

Route::post('/hapusproyek', '\App\Http\Controllers\Mandor\PasangProyekController@delete');

Route::post('/mandor/carikuli/detailkuli', '\App\Http\Controllers\Mandor\CariKuliController@detail');

Route::post('/panggil', '\App\Http\Controllers\Mandor\CariKuliController@call');






Route::group(['middleware' => 'auth'], function () {
    // Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
    //     Route::resource('lessons', \App\Http\Controllers\Students\LessonController::class);
    // });

    Route::group(['middleware' => 'role:kuli', 'prefix' => 'kuli', 'as' => 'kuli.'], function () {
        Route::resource('ajukandiri', \App\Http\Controllers\Kuli\AjukanDiriController::class);
    });

    Route::group(['middleware' => 'role:kuli', 'prefix' => 'kuli', 'as' => 'kuli.'], function () {
        Route::resource('cariproyek', \App\Http\Controllers\Kuli\CariProyekController::class);
    });

    Route::group(['middleware' => 'role:mandor', 'prefix' => 'mandor', 'as' => 'mandor.'], function () {
        Route::resource('carikuli', \App\Http\Controllers\Mandor\CariKuliController::class);
    });

    Route::group(['middleware' => 'role:mandor', 'prefix' => 'mandor', 'as' => 'mandor.'], function () {
        Route::resource('pasangproyek', \App\Http\Controllers\Mandor\PasangProyekController::class);
    });

    Route::group(['middleware' => 'role:mandor', 'prefix' => 'mandor', 'as' => 'mandor.'], function () {
        Route::resource('kulianda', \App\Http\Controllers\Mandor\KuliAndaController::class);
    });


    // Route::group(['middleware' => 'role:mandor', 'prefix' => 'mandor', 'as' => 'mandor.'], function() {
    //     Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    // });
});

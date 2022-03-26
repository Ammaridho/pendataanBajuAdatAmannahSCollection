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

// Route::get('/', function () {
//     return view('welcome');
// });

// home
Route::get('/','homeController@index')->name('home');

// tabAtasan =============================================================================
Route::get('/tabAtasan','atasanController@tabAtasan')->name('tabAtasan');

    // store Atasan
    Route::post('/tabAtasan/store','atasanController@store')->name('storeAtasan');
    
    // form ukuran atasan
    Route::get('/tabAtasan/formUkuranAtasan','atasanController@formUkuranAtasan')->name('formUkuranAtasan');

    // detail Ukuran Atasan
    Route::get('/tabAtasan/detailUkuran','atasanController@detailUkuranAtasan')->name('detailUkuranAtasan');


// tabBawahan ============================================================================
Route::get('/tabBawahan','bawahanController@tabBawahan')->name('tabBawahan');

    // store Bawahan
    Route::post('/tabBawahan/store','bawahanController@store')->name('storeBawahan');
        
    // form ukuran bawahan
    Route::get('/tabBawahan/formUkuranBawahan','bawahanController@formUkuranBawahan')->name('formUkuranBawahan');

    // detail Ukuran Bawahan
    Route::get('/tabBawahan/detailUkuran','bawahanController@detailUkuranBawahan')->name('detailUkuranBawahan');


// tabAksesoris ==========================================================================
Route::get('/tabAksesoris','aksesorisController@tabAksesoris')->name('tabAksesoris');

    // store Aksesoris
    Route::post('/tabAksesoris/store','aksesorisController@store')->name('storeAksesoris');
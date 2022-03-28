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

// layout
Route::get('/','homeController@layout')->name('layout');

// home
Route::get('/home','homeController@indexHome')->name('indexHome');

// Utama INPUT DATA ============================================================================
Route::get('/inputData','homeController@inputData')->name('inputDataHome');

        // tabAtasan =============================================================================
        Route::get('/inputData/tabAtasan','atasanController@tabAtasan')->name('tabAtasan');

            // store Atasan
            Route::post('/inputData/tabAtasan/store','atasanController@store')->name('storeAtasan');
            
            // form ukuran atasan
            Route::get('/inputData/tabAtasan/formUkuranAtasan','atasanController@formUkuranAtasan')->name('formUkuranAtasan');

            // detail Ukuran Atasan
            Route::get('/inputData/tabAtasan/detailUkuran','atasanController@detailUkuranAtasan')->name('detailUkuranAtasan');


        // tabBawahan ============================================================================
        Route::get('/inputData/tabBawahan','bawahanController@tabBawahan')->name('tabBawahan');

            // store Bawahan
            Route::post('/inputData/tabBawahan/store','bawahanController@store')->name('storeBawahan');
                
            // form ukuran bawahan
            Route::get('/inputData/tabBawahan/formUkuranBawahan','bawahanController@formUkuranBawahan')->name('formUkuranBawahan');

            // detail Ukuran Bawahan
            Route::get('/inputData/tabBawahan/detailUkuran','bawahanController@detailUkuranBawahan')->name('detailUkuranBawahan');


        // tabAksesoris ==========================================================================
        Route::get('/inputData/tabAksesoris','aksesorisController@tabAksesoris')->name('tabAksesoris');

            // store Aksesoris
            Route::post('/inputData/tabAksesoris/store','aksesorisController@store')->name('storeAksesoris');

        // tabBeranda ===========================================================================
        Route::get('/inputData/tabBeranda','berandaController@tabBeranda')->name('tabBeranda');
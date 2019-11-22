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
    return view('dashboard');
});

Route::prefix('informasi_toko')->group(function(){
    Route::get('all', 'ProfilController@index');
    Route::get('add', 'ProfilController@create');
    Route::get('detail', 'ProfilController@show');
    Route::post('store', 'ProfilController@store');
});

Route::prefix('admin')->group(function(){
    Route::prefix('master')->group(function (){
        Route::get('/', 'ConfigMasterController@allinone');
        Route::get('/add', 'ConfigMasterController@create');
        Route::post('/proses', 'ConfigMasterController@store');
        Route::get('/{id}', 'ConfigMasterController@show');
        Route::get('/proses_detail', 'ConfigMasterController@update');
        Route::get('/delete/{id}', 'ConfigMasterController@show');
    });
    Route::prefix('produk')->group(function (){
        Route::get('/', 'ProdukController@index');
        Route::get('/add', 'ProdukController@create');
        Route::post('/proses', 'ProdukController@store');
        Route::get('/{id}', 'ProdukController@show');
        Route::put('/proses_detail', 'ProdukController@update');
        Route::delete('/delete/{id}', 'ProdukController@show');
    });
});

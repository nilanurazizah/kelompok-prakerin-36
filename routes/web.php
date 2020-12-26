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
    return view('welcome');
});

// Menu

Route::get('/profil', function(){
    return view('artikel/profil');
});

Route::get('/penggunaan',function(){
    return view('artikel/penggunaan');
});

Route::get('/keuntungan_konsumen',function(){
    return view('artikel/keuntungan_konsumen');
});

Route::get('/rekomendasi',function(){
    return view('artikel/rekomendasi');
});

Route::get('/keuntungan',function(){
    return view('artikel/keuntungan_bisnis1/keuntungan');
});

// KEUNTUNGAN
Route::get('/global',function(){
    return view('artikel/keuntungan_bisnis1/global');
});

Route::get('/interaction',function(){
    return view('artikel/keuntungan_bisnis1/interaction');
});

Route::get('/customization',function(){
    return view('artikel/keuntungan_bisnis1/customization');
});

Route::get('/collaboration',function(){
    return view('artikel/keuntungan_bisnis1/colaboration');
});

Route::get('/electronic',function(){
    return view('artikel/keuntungan_bisnis1/electronic');
});

Route::get('/integration',function(){
    return view('artikel/keuntungan_bisnis1/integration');
});


// KEKURANGAN
Route::get('/kekurangan',function(){
    return view('artikel/kekurangan_bisnis/kekurangan');
});

Route::get('/kekurangan1',function(){
    return view('artikel/kekurangan_bisnis/kekurangan1');
});

Route::get('/kekurangan2',function(){
    return view('artikel/kekurangan_bisnis/kekurangan2');
});

Route::get('/kekurangan3',function(){
    return view('artikel/kekurangan_bisnis/kekurangan3');
});

Route::get('/kekurangan4',function(){
    return view('artikel/kekurangan_bisnis/kekurangan4');
});

Route::get('/kekurangan5',function(){
    return view('artikel/kekurangan_bisnis/kekurangan5');
});

// KEUNGGULAN
Route::get('/keunggulan',function(){
    return view('artikel/keunggulan_bisnis/keunggulan');
});

Route::get('/keunggulan1',function(){
    return view('artikel/keunggulan_bisnis/keunggulan1');
});

Route::get('/keunggulan2',function(){
    return view('artikel/keunggulan_bisnis/keunggulan2');
});

Route::get('/keunggulan3',function(){
    return view('artikel/keunggulan_bisnis/keunggulan3');
});

Route::get('/keunggulan4',function(){
    return view('artikel/keunggulan_bisnis/keunggulan4');
});
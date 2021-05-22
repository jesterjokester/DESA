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

Route::get("dashboard", function(){
    return view("dashboard");
});

Route::get("dimensi_pendidikan", function(){
    return view('dimensi_pendidikan');
});

Route::get("dimensi_permukiman", function(){
    return view('dimensi_permukiman');
});

Route::get("aktivitas_desa", function(){
    return view('aktivitas_desa');
});

Route::get("desa", function(){
    return view('desa');
});

Route::get("dimensi_ekologi", function(){
    return view('dimensi_ekologi');
});

Route::get("dimensi_ekonomi", function(){
    return view('dimensi_ekonomi');
});

Route::get("dimensi_sosial", function(){
    return view('dimensi_sosial');
});

Route::get("geotop", function(){
    return view('geotop');
});

Route::get("pendatapan_dana", function(){
    return view('pendapatan_dana');
});

Route::get("tugas", function(){
    return view('tugas');
});
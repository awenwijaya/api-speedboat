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

Route::post('lihat-pelabuhan', 'App\Http\Controllers\ApiController@lihat_pelabuhan');
Route::post('lihat-kapal', 'App\Http\Controllers\ApiController@lihat_kapal');
Route::get('lihat-kapal-univ', 'App\Http\Controllers\ApiController@lihat_kapal_univ');
Route::post('lihat-jadwal', 'App\Http\Controllers\ApiController@lihat_jadwal');
Route::post('daftar-chat-id', 'App\Http\Controllers\ApiController@daftar_chat_id');
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('lihat-pelabuhan', 'App\Http\Controllers\ApiController@lihat_pelabuhan');
Route::post('lihat-kapal', 'App\Http\Controllers\ApiController@lihat_kapal');
Route::get('lihat-kapal-univ', 'App\Http\Controllers\ApiController@lihat_kapal_univ');
Route::post('lihat-jadwal', 'App\Http\Controllers\ApiController@lihat_jadwal');
Route::post('daftar-chat-id', 'App\Http\Controllers\ApiController@daftar_chat_id');
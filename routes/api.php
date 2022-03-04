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

Route::get('event/all','App\Http\Controllers\eventController@index');
Route::get('event/{id}/show','App\Http\Controllers\eventController@show');
Route::post('event/add','App\Http\Controllers\eventController@store');
Route::put('event/{id}/update','App\Http\Controllers\eventController@update');
Route::delete('event/{id}/delete','App\Http\Controllers\eventController@destroy');
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

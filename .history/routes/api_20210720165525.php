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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('budget', 'App\Http\Controllers\api\OrderController@index');
Route::post('budget/create', 'App\Http\Controllers\api\OrderController@store');
Route::delete('budget/delete/{id}', 'App\Http\Controllers\api\OrderController@destroy');
Route::put('budget/update/{id}', 'App\Http\Controllers\api\OrderController@update');
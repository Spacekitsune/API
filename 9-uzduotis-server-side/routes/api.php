<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//pridėti šitą nuorodą į klasę
use App\Http\Controllers\ClientControlller;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// aprašomas api controllerio kelias
Route::apiResource('clients', ClientControlller::class);

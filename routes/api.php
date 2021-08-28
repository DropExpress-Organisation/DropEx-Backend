<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mpesa\MPESAController;
use App\Http\Controllers\mpesa\MPESAResController;

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


Route::post('validation', [MPESAResController::class, 'validation']);
Route::post('confirmation', [MPESAResController::class, 'confirmation']);
Route::post('stkpush', [MPESAResController::class, 'stkPush']);

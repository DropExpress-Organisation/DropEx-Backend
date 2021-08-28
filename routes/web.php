<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mpesa\MPESAController;

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

Route::post('register-urls', [MPESAController::class, 'registerURLS']);
Route::post('get-token', [MPESAController::class, 'getAccessToken']);
Route::post('stkpush', [MPESAController::class, 'stkPush']);

Route::get('stk', function(){
    return view('stk');
});
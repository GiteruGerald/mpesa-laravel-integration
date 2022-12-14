<?php

use App\Http\Controllers\Payments\Mpesa\MpesaController;
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

Route::post('get-token', [MpesaController::class,'getAccessToken']);
Route::post('register-urls', [MpesaController::class,'registerURLS']);
Route::post('simulate', [MpesaController::class,'simulateTransaction']);
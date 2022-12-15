<?php

use App\Http\Controllers\Payments\Mpesa\MpesaResponsesController;
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

Route::post('validation', [MpesaResponsesController::class, 'validation']);
Route::post('confirmation', [MpesaResponsesController::class, 'confirmation']);
Route::post('stkpush', [MpesaResponsesController::class, 'stkPush']);
Route::post('b2ccallback', [MpesaResponsesController::class, 'b2cCallback']);
Route::post('transaction-status/result_url', [MpesaResponsesController::class, 'transactionStatusResponse']);
Route::post('reversal/result_url', [MpesaResponsesController::class, 'transactionReversal']);
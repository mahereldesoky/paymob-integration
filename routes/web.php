<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymobController;
use App\Http\Controllers\CheckOutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/






Route::get('/thankyou', function () {return view('thank-you');});

Route::get('/' , [CheckOutController::class, 'index']);


//Paymob Routes
Route::post('/credit', [PaymobController::class, 'credit'])->name('checkout'); // this route send all functions data to paymob
Route::get('/callback', [PaymobController::class, 'callback'])->name('callback'); // this route get all reponse data to paymob
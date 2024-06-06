<?php

use App\Http\Controllers\ApplicationFormController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ApplicationFormController::class, 'index'])->name('home');

Route::group(['prefix' => 'application'], function () {
Route::post('/submit/form', [ApplicationFormController::class, 'store'])->name('store.application');
Route::post('/form/payment', [ApplicationFormController::class, 'payment'])->name('payment.application');
Route::get('/payment/callback/confirmation/{id}', [ApplicationFormController::class, 'handleGatewayCallback'])->name('callback.payment.application');
});

<?php

use App\Http\Controllers\CheckoutController;

use Illuminate\Support\Facades\Route;
use Laravel\Cashier\Http\Controllers\WebhookController;


Route::get('/', function () {
    return redirect()->route('pricing');
});
Route::view('pricing', 'pricing')->name('pricing');
Route::view('success', 'success')->name('success');
Route::get('checkout/{plan?}', CheckoutController::class)->name('checkout');


Route::post('stripe/webhook', [WebhookController::class, 'handleWebhook'])->name('cashier.webhook');

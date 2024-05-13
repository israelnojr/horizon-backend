<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExternalBankAccountController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return response()->json([
        'user' => $request->user()
    ]);
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/external-bank-accounts', [ExternalBankAccountController::class, 'store']);
});


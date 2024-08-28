<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UsersAuthenticationController;
use App\Http\Controllers\Devices\DeviceDataController;

Route::post('tokens/create', [UsersAuthenticationController::class, 'createToken']);

Route::middleware('auth:sanctum')->prefix('environment/data')->group(function () {
    Route::post('store', [DeviceDataController::class, 'store']);
    Route::get('show', [DeviceDataController::class, 'show']);
});

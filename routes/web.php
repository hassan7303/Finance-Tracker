<?php

use App\Http\Controllers\FinanceTrackerController;
use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "v1"], function () {
    Route::group(["prefix" => "users"], function () {
        Route::get('/', [FinanceTrackerController::class, 'show']);
        Route::post('/', [FinanceTrackerController::class, 'create']);
        Route::put('/', [FinanceTrackerController::class, 'update']);
        Route::delete('/', [FinanceTrackerController::class, 'delete']);
    });
    Route::group(["prefix" => "finances"], function () {
        Route::get('/', [FinanceTrackerController::class, 'show']);
        Route::post('/', [FinanceTrackerController::class, 'create']);
        Route::put('/', [FinanceTrackerController::class, 'update']);
        Route::delete('/', [FinanceTrackerController::class, 'delete']);
    });
});


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Admin\StudentController;

Route::middleware('web')->prefix('api/v1/admin/students')->group(function () {
    Route::put('/{id}', [StudentController::class, 'update']);
    Route::post('', [StudentController::class, 'store']);
    Route::get('', [StudentController::class, 'index']);
    // Route::get('/{id}', [StudentController::class, 'show']);
    Route::delete('/{id}', [StudentController::class, 'destroy']);
});

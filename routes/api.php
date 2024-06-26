<?php

use App\Http\Controllers\API\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::prefix('v1')->group(function () {
Route::apiResource('/apinews', NewsController::class);
    // Route::get('/apinews', [NewsController::class, 'index'])->name('ne.api');
// });

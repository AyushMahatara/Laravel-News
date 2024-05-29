<?php

use App\Http\Controllers\API\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum')->name('asdf');

Route::middleware('auth:sanctum')->prefix('api')->group(function () {

    Route::apiResource('/news', NewsController::class);
});

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CosmeticController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\BrandController;
use App\Http\Controllers\Api\BookingTransactionController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/cosmetic/{cosmetic:slug}', [CosmeticController::class, 'show']);
Route::apiResource('/cosmetics', CosmeticController::class);
// index, show, edit, delete, etc...
// model binding, 1, 23, 55, etc...
// domain.com/product/lipstick-golden

Route::get('/category/{category:slug}', [CategoryController::class, 'show']);
Route::apiResource('/categories', CategoryController::class);

Route::get('/brand/{brand:slug}', [BrandController::class, 'show']);
Route::apiResource('/brands', BrandController::class);

Route::post('/booking-transaction', [BookingTransactionController::class, 'store']);

Route::post('/check-booking', [BookingTransactionController::class, 'booking_details']);

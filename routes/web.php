<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/service', function () {
    return view('service');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
use App\Http\Controllers\ServiceController;
use App\Http\Middleware\EnsureTokenIsValid;

// Group routes with middleware
Route::middleware(EnsureTokenIsValid::class)->group(function () {
    Route::post('/add-service', [ServiceController::class, 'addService'])->name('add.service');
    Route::post('/remove-service', [ServiceController::class, 'removeService'])->name('remove.service');
});

// Optional: Use middleware for validation-only routes
Route::post('/validate-key', function (Request $request) {
    return response()->json(['message' => 'Key is valid!'], 200);
})->middleware(EnsureTokenIsValid::class);

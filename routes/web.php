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


Route::get('/services', [ServiceController::class, 'getServices']); // Fetch services
Route::post('/get-service',[ServiceController::class,'getService']);//Fetch A Service By Id
Route::post('/add-service', [ServiceController::class, 'addService'])->middleware(EnsureTokenIsValid::class); // Add a service
Route::post('/remove-service', [ServiceController::class, 'removeService'])->middleware(EnsureTokenIsValid::class); // Remove a service
Route::post('/set-service',[ServiceController::class,'setService'])->middleware(EnsureTokenIsValid::class);//Update Existing Service Details



// Optional: Use middleware for validation-only routes
Route::post('/validate-key', function (Request $request) {
    return response()->json(['message' => 'Key is valid!'], 200);
})->middleware(EnsureTokenIsValid::class);

<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
Route::get('/',function(){return view('homepage');});
Route::get('/service',function(){return view('service');});
Route::get('/contact',function(){return view('contact');});
Route::get('/about',function(){return view('about');});
Route::get('/services',[ServiceController::class,'index']);

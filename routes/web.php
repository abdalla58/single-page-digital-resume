<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('resume');
});
Route::get('/resume',[\App\Http\Controllers\ResumeController::class,'show']);
Route::get('/md',[\App\Http\Controllers\ResumeController::class,'view']);

<?php

use Illuminate\Support\Facades\Route;

Route::get('/pdf', function () {
    return view('pdf');
});
Route::get('/resume',[\App\Http\Controllers\ResumeController::class,'show']);
Route::get('/md',[\App\Http\Controllers\ResumeController::class,'view']);
Route::get('/resume/download',[\App\Http\Controllers\ResumeController::class,'download'])->name('resume.download');

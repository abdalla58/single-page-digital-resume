<?php

use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pdf');
});
Route::get('/pdf', function () {
    return view('pdf');
});
Route::get('/resume', [ResumeController::class, 'show']);
Route::get('/md', [ResumeController::class, 'view']);
Route::get('/resume/download', [ResumeController::class, 'download'])->name('resume.download');

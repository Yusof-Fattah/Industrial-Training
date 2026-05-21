<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeekController;

Route::get('/weekly', [WeekController::class, 'index'])->name('weekly');

Route::get('/summary', function () {return view('mains.summary');})->name('summary');

Route::get('/weekly/{weeklyReport}', [WeekController::class, 'show'])->name('weekly.show');

Route::get('/', function () {return view('mainpage');});

Route::get('/mainpage', function () {return view('mainpage');})->name('mainpage');

Route::get('/company', function () {return view('mains/company');})->name('company');

// In web.php
Route::get('/technical', [\App\Http\Controllers\TechnicalController::class, 'technical'])->name('technical');
Route::get('/technical/{id}', [\App\Http\Controllers\TechnicalController::class, 'show'])->name('technical.show');

Route::get('/reference', function () {return view('statements/reference');})->name('reference');

Route::get('/conclusion', function () {return view('statements/conclusion');})->name('conclusion');
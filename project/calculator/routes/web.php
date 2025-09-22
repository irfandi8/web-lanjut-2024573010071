<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Calculatorcontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Calculator', [CalculatorController::class, 'index']);
Route::post('/Calculator', [CalculatorController::class, 'calculate'])->name('Calculator.calculate');
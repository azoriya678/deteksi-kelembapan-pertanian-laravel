<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HistoryController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/history', function () {
    return view('history');
})->name('history');

Route::get('/history', [HistoryController::class, 'index'])->name('history');
Route::post('/history/store', [HistoryController::class, 'store'])->name('history.store');
Route::post('/save-history', [HistoryController::class, 'store']);
Route::get('/history', [HistoryController::class, 'index']);
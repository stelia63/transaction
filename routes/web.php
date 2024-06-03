<?php


use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewpageController;
use App\Http\Controllers\NewadminController;


Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction.index');
Route::get('/pages', [NewpageController::class, 'index'])->name('pages.index');
Route::get('/', [NewadminController::class, 'index']);


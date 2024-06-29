<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/ideas', [IdeaController::class, 'store'])->name('ideas.store'); // ModelName.ActionTaken

Route::delete('/ideas/{id}', [IdeaController::class, 'store'])->name('ideas.destroy'); // ModelName.ActionTaken

Route::get('/terms', function() {
    return view('terms');
});

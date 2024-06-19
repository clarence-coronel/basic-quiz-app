<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\QuizController;

Route::get('/', function () {
    return view('quiz.show');
});

Route::get('/quiz', [QuizController::class, 'index'])->middleware('auth')->name('home');
Route::get('/quiz/create', [QuizController::class, 'create'])->middleware('auth');
Route::get('/quiz/{quiz}', [QuizController::class, 'show'])->middleware('auth');
Route::post('/quiz/create', [QuizController::class, 'store'])->middleware('auth');

Route::get('/login', [SessionController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');

Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('/register', [RegisteredUserController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisteredUserController::class, 'store'])->middleware('guest');



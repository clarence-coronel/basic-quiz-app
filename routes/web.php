<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionController;



Route::delete('/question/{question}', [QuestionController::class, 'destroy'])->middleware('auth');

Route::get('/quiz/{id}/question/create', [QuestionController::class, 'create'])->middleware('auth');
Route::post('/quiz/{id}/question/create', [QuestionController::class, 'store'])->middleware('auth');
Route::get('/question/{question}/edit', [QuestionController::class, 'edit'])->middleware('auth');
Route::put('/question/{question}/edit', [QuestionController::class, 'update'])->middleware('auth');

Route::get('/', [QuizController::class, 'index'])->middleware('auth');
Route::get('/quiz', [QuizController::class, 'index'])->middleware('auth')->name('home');
Route::get('/quiz/create', [QuizController::class, 'create'])->middleware('auth');
Route::post('/quiz/create', [QuizController::class, 'store'])->middleware('auth');
Route::get('/quiz/{quiz}', [QuizController::class, 'show'])->middleware('auth');
Route::delete('/quiz/{quiz}', [QuizController::class, 'destroy'])->middleware('auth');
Route::get('/quiz/{quiz}/edit', [QuizController::class, 'edit'])->middleware('auth');
Route::put('/quiz/{quiz}/edit', [QuizController::class, 'update'])->middleware('auth');

Route::get('/login', [SessionController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');

Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('/register', [RegisteredUserController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisteredUserController::class, 'store'])->middleware('guest');



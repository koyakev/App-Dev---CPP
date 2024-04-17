<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\QuizController;

Route::get('/', [UserController::class, 'index'])->name('index');

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

Route::get('/login', [UserController::class, 'login'])->name('login');

Route::get('/registration', [UserController::class, 'register'])->name('registration');

Route::post('/store', [UserController::class, 'store'])->name('store');

Route::post('/verify', [UserController::class, 'verify'])->name('verify');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');



Route::get('/lesson/introduction', [LessonController::class, 'introduction'])->name('introduction');

Route::get('/quiz/introduction', [QuizController::class, 'introduction'])->name('introductionQ');

Route::get('/introduction/score', [QuizController::class, 'introductionRate'])->name('introductionRate');

//

Route::get('/lesson/basicSyntax', [LessonController::class, 'syntax'])->name('syntax');

Route::get('/quiz/syntax', [QuizController::class, 'syntax'])->name('syntaxQ');

Route::get('/syntax/score', [QuizController::class, 'syntaxRate'])->name('syntaxRate');

//


Route::get('/lesson/variables', [LessonController::class, 'variables'])->name('variables');

Route::get('/quiz/variables', [QuizController::class, 'variables'])->name('variablesQ');

Route::get('/variables/score', [QuizController::class, 'variablesRate'])->name('variablesRate');

//

Route::get('/lesson/operators', [LessonController::class, 'operators'])->name('operators');

Route::get('/quiz/operators', [QuizController::class, 'operators'])->name('operatorsQ');

Route::get('/operators/score', [QuizController::class, 'operatorsRate'])->name('operatorsRate');

//

Route::get('/lesson/conditionals', [LessonController::class, 'conditionals'])->name('conditionals');

Route::get('/quiz/conditionals', [QuizController::class, 'conditionals'])->name('conditionalsQ');

Route::get('/conditionals/score', [QuizController::class, 'conditionalsRate'])->name('conditionalsRate');

//

Route::get('/lesson/loops', [LessonController::class, 'loops'])->name('loops');

Route::get('/quiz/loops', [QuizController::class, 'loops'])->name('loopsQ');

Route::get('/loops/score', [QuizController::class, 'loopsRate'])->name('loopsRate');

//

Route::get('/lesson/functions', [LessonController::class, 'functions'])->name('functions');

Route::get('/quiz/functions', [QuizController::class, 'functions'])->name('functionsQ');

Route::get('/functions/score', [QuizController::class, 'functionsRate'])->name('functionsRate');

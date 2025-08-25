<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

######################### quiz Route #####################################
Route::get('/quiz', [QuizController::class, 'quiz'])->name('quiz')->middleware('auth:web');

Route::group(['middleware' => 'auth:web', 'prefix' => 'quiz'], function () {
    Route::get('/css', [QuizController::class, 'cssquiz'])->name('cssQuiz');
    Route::post('/css-quiz' , [QuizController::class, 'cssquizAction'])->name('cssQuizAction');
    Route::get('/javascript', [QuizController::class, 'jsquiz'])->name('javascriptQuiz');
    Route::get('/python', [QuizController::class, 'pythonquiz'])->name('pythonQuiz');
    Route::get('/php', [QuizController::class, 'phpquiz'])->name('phpQuiz');
    Route::get('/nodejs', [QuizController::class, 'nodejsquiz'])->name('nodejsQuiz');
    Route::post('/nodejs-quiz', [QuizController::class, 'nodejsquizAction'])->name('nodejsQuizAction');
    Route::get('/bootstrap-5', [QuizController::class, 'bootstrapquiz'])->name('bootstrapQuiz');
    Route::post('/bootstrap 5-quiz', [QuizController::class, 'bootstrapquizAction'])->name('bootstrapQuizAction');
    Route::get('/jquery', [QuizController::class, 'jqueryquiz'])->name('jqueryQuiz');
    Route::post('/jquey-quiz', [QuizController::class, 'jqueyquizAction'])->name('jqueyQuizAction');
    Route::get('/vuejs', [QuizController::class, 'vuejsquiz'])->name('vuejsQuiz');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

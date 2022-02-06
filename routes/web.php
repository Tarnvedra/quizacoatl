<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Maintenance\MaintenanceController;
use App\Http\Controllers\Maintenance\QuestionController;
use App\Http\Controllers\Maintenance\QuizController;
use App\Http\Controllers\Maintenance\TopicController;
use App\Http\Controllers\Maintenance\UserController;
use Illuminate\Support\Facades\Route;

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

Route::post('/', [HomeController::class, 'logout'])->name('logout.app');
Route::get('/home', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/quiz-board', [DashboardController::class, 'quizBoard'])->name('quiz');

// Questions
Route::get('/maintenance/import-questions', [MaintenanceController::class, 'importQuestionsView'])->name('import-questions');
Route::get('/maintenance/your-questions', [MaintenanceController::class, 'questionsView'])->name('view-your-questions');
Route::get('/maintenance/all-questions', [MaintenanceController::class, 'allQuestionsView'])->name('all-questions');
Route::get('/maintenance/question/{question}', [MaintenanceController::class, 'questionView'])->name('view-question');
Route::get('/maintenance/add-question', [MaintenanceController::class, 'addQuestionView'])->name('add-question');

Route::post('/maintenance-save-question/{user}', [QuestionController::class, 'saveQuestion'])->name('save-question');

// Topics
Route::get('/maintenance/add-topic', [TopicController::class, 'addTopicView'])->name('add-topic');
Route::post('/maintenance/save-topic', [TopicController::class, 'saveTopic'])->name('save-topic');
Route::get('/maintenance/topics', [TopicController::class, 'topicsView'])->name('view-topics');

// User
Route::get('/maintenance/user-settings', [UserController::class, 'userSettingsView'])->name('user-settings');
Route::post('/maintenance/update-password/{user}', [UserController::class, 'updatePassword'])->name('update-password');

// Scores
Route::get('/scores', [QuizController::class, 'scores'])->name('scores');


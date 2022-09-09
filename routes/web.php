<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\QuestionController;
use App\Models\Question;
// use Illuminate\Support\Facades\Http;

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

Route::prefix('')->group(function () {
    Route::get('/', function () {
        return view('users.home');
    });
    Route::get('/mulai-test-mbti', function () {
        $question = Question::all();
        return view('users.dashboard',['questions' => $question]);
    });
    Route::post('/hasil', [QuestionController::class, 'calculate']);
    Route::get('/hasil', function(){
        redirect('/mulai-test-mbti');
    });
});
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return redirect('admin/login');
    });
    Route::get('/login', [AdminController::class, 'index'])->name('login')->withoutMiddleware('auth');
    Route::post('/login', [AdminController::class, 'login'])->withoutMiddleware('auth');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/report', function () {
        return view('admin.report');
    })->name('report');
    Route::get('/questions', function () {
        return view('admin.questions');
    })->name('questions');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController\Admindashboardcontroller;
use App\Http\Controllers\AdminController\Issuescontroller as AdminControllerIssuescontroller;
use App\Http\Controllers\AdminController\Resolvedcontroller;
use App\Http\Controllers\AdminController\Studentscontroller;
use App\Http\Controllers\UserController\Userdashboardcontroller;
use App\Http\Controllers\UserController\AskQuestionController;
use App\Http\Controllers\Usercontroller\Autoaskcontroller;
use App\Http\Controllers\usercontroller\developerscontroller;
use App\Http\Controllers\UserController\ReviewController;
use App\Http\Controllers\UserController\FasttrackController;
use App\Http\Controllers\userController\issuesController;
use App\Http\Controllers\userController\EditIssuesController;
use App\Http\Controllers\Usercontroller\Recyclecontroller;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/success', [App\Http\Controllers\HomeController::class, 'success']);
Route::prefix('user')->middleware(['auth','IsUser'])->group(function(){
    Route::get('/dashboard', [Userdashboardcontroller::class, 'index']);
    Route::get('/ask', [AskQuestionController::class, 'ask'])->name('ask');
    Route::get('/review', [ReviewController::class, 'review']);
    Route::get('/review/{id}', [ReviewController::class, 'reviewsingle']);
    Route::get('/fasttrack', [FasttrackController::class, 'fasttrack']);
    Route::post('/question', [AskQuestionController::class, 'askquestion'])->name('question');
    Route::get('/issues', [issuesController::class, 'issues'])->name('issues');
    Route::get('/issues/{id}', [EditIssuesController::class,'editissues']);
    Route::get('/viewissue/{id}', [EditIssuesController::class,'viewissue']);
    Route::delete('/deleteissue/{id}', [EditIssuesController::class,'destroy']);
    Route::put('/question/update/{id}', [EditIssuesController::class,'updateissue']);
    Route::post('/searchtrackissue', [FasttrackController::class, 'searchtrackissue']);
    Route::get('/fastsearch/{trackid}', [FasttrackController::class, 'fastsearch']);
    Route::get('/recyclebin', [Recyclecontroller::class, 'recyclebin']);
    Route::delete('/forcedelete/{id}', [EditIssuesController::class,'forcedelete']);
    Route::post('/restoreissue/{id}', [EditIssuesController::class,'restore']);
    Route::get('/developers', [developerscontroller::class,'index']);
    Route::get('/autoask', [Autoaskcontroller::class,'index'])->name('autoask');
});
Route::prefix('admin')->middleware(['auth','IsAdmin'])->group(function(){
    Route::get('/dashboard', [Admindashboardcontroller::class, 'index'])->name('dashboard');
    Route::get('/students', [Studentscontroller::class, 'students'])->name('students');
    Route::get('/issues', [AdminControllerIssuescontroller::class, 'issues'])->name('issues');
    Route::get('/issues/{issueid}', [AdminControllerIssuescontroller::class, 'viewissue'])->name('viewissue');
    Route::get('/resolved', [Resolvedcontroller::class, 'resolved'])->name('resolved');
    Route::get('/unresolved', [Resolvedcontroller::class, 'unresolved'])->name('unresolved');
    // posts requests
    Route::post('/resolveissue', [AdminControllerIssuescontroller::class, 'resolveissue']);
});

<?php

use App\Http\Controllers\AssignedTeacherController;
use App\Http\Controllers\ClassSubjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SchoolClassController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('user', UserController::class);
Route::resource('subject', SubjectController::class);
Route::resource('school', SchoolController::class);
Route::resource('school/{id}/class', SchoolClassController::class);
Route::resource('class-subjects', ClassSubjectController::class);
Route::resource('assigned-teacher', AssignedTeacherController::class);

Route::get('apply', [HomeController::class, 'apply'])->name('apply');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\ProfileController;

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/bantuan', [DashboardController::class, 'bantuan'])->name('bantuan')->middleware('auth');
Route::post('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/survey', [SurveyController::class, 'index'])->name('survey')->middleware('auth');

Route::get('/survey/add', [SurveyController::class, 'add'])->name('addsurvey')->middleware('auth');

Route::get('/survey/add', [SurveyController::class, 'add'])->name('addsurvey')->middleware('auth');
Route::post('/survey/add', [SurveyController::class, 'store'])->name('survey.store');

Route::get('/survey/{id}', [SurveyController::class, 'show'])->name('surveydetail');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');
Route::post('/password/update', [ProfileController::class, 'updatePassword'])->name('password.update');
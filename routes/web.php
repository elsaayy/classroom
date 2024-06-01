<?php

use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\MengajarController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//   return view('main.index');
//});
Route::get('/', [loginController::class, 'index'])->name('login');
Route::post('/log', [loginController::class, 'login'])->name('login.store');
Route::get('/register', [registerController::class, 'index'])->name('register');
Route::post('/regist', [registerController::class, 'store'])->name('register.store');
Route::middleware('auth')->group(function() {
Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::post('/logout', [loginController::class, 'logout'])->name('logout');

//mengajar
Route::get('/mengajar', [MengajarController::class, 'index'])->name('mengajar.index');
Route::get('/mengajar/detail/{id}', [MengajarController::class, 'detail'])->name('mengajar.detail');
Route::get('/mengajar/create', [MengajarController::class, 'create'])->name('mengajar.create');
Route::post('/mengajar/store', [MengajarController::class, 'store'])->name('mengajar.store');
Route::delete('/mengajar/archive/{id}', [MengajarController::class, 'destroy'])->name('mengajar.destroy');

//settings
Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
Route::get('/ubahprofile', [SettingsController::class, 'editprofile'])->name('settings.editprofile');
Route::get('/ubahpassword', [SettingsController::class, 'editpass'])->name('settings.editpass');
Route::post('/updatepass', [SettingsController::class, 'ubahpass'])->name('settings.updatepass');
Route::post('/updateprofile', [SettingsController::class, 'updateprofile'])->name('settings.updateprofile');

//students
Route::get('/students/{id}', [StudentController::class, 'index'])->name('students.index');

//archive
Route::get('/archive', [ArchiveController::class, 'index'])->name('archive.index');
Route::delete('/archive/delete/{id}', [ArchiveController::class, 'destroy'])->name('archive.destroy');
//comment
Route::post('/mengajar/detail/{id}/comments', [CommentController::class, 'store'])->name('comments.store');

//join class
Route::get('/registered', [JoinController::class, 'index'])->name('registered.index');
Route::post('/registered-store', [JoinController::class, 'store'])->name('registered.store');
Route::delete('/registered-delete', [JoinController::class, 'delete'])->name('registered.delete');








});

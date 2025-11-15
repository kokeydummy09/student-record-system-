<?php

use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Middleware\EnsureUserIsAdmin;
use Illuminate\Support\Facades\Route;


// Root route: guests see the welcome page; authenticated users go to admin
Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('admin.students.index');
    }
    return view('welcome');
})->name('home');


// Auth routes
Route::view('/register', 'auth.register')
    ->middleware('guest')
    ->name('register');

Route::post('/register', RegisterController::class)
    ->middleware('guest')
    ->name('register.submit'); 

Route::view('/login', 'auth.login')
    ->middleware('guest')
    ->name('login');             

Route::post('/login', LoginController::class)
    ->middleware('guest')
    ->name('login.submit');      

// Logout
Route::post('/logout', LogoutController::class)
    ->middleware('auth')
    ->name('logout');

Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', EnsureUserIsAdmin::class])
    ->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('students.index');
    Route::get('/students', [StudentController::class, 'index'])->name('students.index');
    Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
    Route::post('/students', [StudentController::class, 'store'])->name('students.store');
    Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
    Route::get('/students/{student}', [StudentController::class, 'show'])->name('students.show');
    Route::put('/students/{student}', [StudentController::class, 'update'])->name('students.update');
    Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');
});
<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::view('/register', 'register')->name('registro');
Route::view('/dashboard', 'dashboard')->name('dashboard');
Route::view('/agregarTarea','showForm')->name('showForm');
Route::get('/dashboard', [TaskController::class, 'showDashboard'])->name('dashboard');


Route::get('./verTareas', [TaskController::class, 'getAllTasks'])->name('getAllTasks');
Route::post('/agregarTarea', [TaskController::class, 'agregarTarea'])->name('agregarTarea');
Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
Route::post('/validar-inicio', [LoginController::class, 'login'])->name('validar-inicio');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');






// Enviar datos del formulario de inicio de sesión
// Route::post('/login', [LoginController::class, 'login']);

// Cerrar sesión
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
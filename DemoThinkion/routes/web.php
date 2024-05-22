<?php
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');

// Enviar datos del formulario de inicio de sesión
// Route::post('/login', [LoginController::class, 'login']);

// Cerrar sesión
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HostingController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\ProfileController;
/*
|--------------------------------------------------------------------------
| Rutas públicas
|--------------------------------------------------------------------------
*/

// Página de inicio
Route::get('/', [PageController::class, 'home'])->name('home');

// Páginas informativas
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/servicios', [PageController::class, 'servicios'])->name('servicios');
Route::get('/contacto', [PageController::class, 'contacto'])->name('contacto');

// Formulario de contacto
Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitContactForm'])->name('contact.submit');

/*
|--------------------------------------------------------------------------
| Autenticación y registro
|--------------------------------------------------------------------------
*/

// Login
/*Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Registro
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

/*
|--------------------------------------------------------------------------
| Rutas protegidas (requieren autenticación)
|--------------------------------------------------------------------------
*/

/*Route::middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Gestión de usuarios
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

    // Aquí puedes agregar otras rutas protegidas como:
    // - Administración de blog
    // - Proyectos
    // - Servicios
    // - Templates
    // etc.
});

/*
|--------------------------------------------------------------------------
| Página de error 404
|--------------------------------------------------------------------------
*/

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
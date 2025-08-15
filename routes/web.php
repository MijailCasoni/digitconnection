<?php


use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;


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

// ¡DESCOMENTADO!: Esta línea registra todas las rutas de autenticación necesarias,
// incluyendo 'password.request', 'password.email', etc.
Auth::routes(['login' => false, 'register' => false, 'logout' => false, 'reset' => true, 'verify' => false]);

// Tu ruta personalizada para mostrar el formulario de login (GET)
// Apuntamos a AuthController@showLoginForm para mantener la lógica de auth en un solo lugar.
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// La ruta POST para procesar el login
// Asegúrate de que el método en AuthController sea 'login', no 'authenticate'
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Ruta para cerrar sesión
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


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

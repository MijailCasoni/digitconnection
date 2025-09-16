<?php


use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;


/*
|--------------------------------------------------------------------------
| Rutas públicas
|--------------------------------------------------------------------------
*/

// Página de inicio
Route::get('/', [PageController::class, 'home'])->name('home');

// Páginas informativas

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/servicios', [PageController::class, 'servicios'])->name('servicios');
Route::get('/contacto', [PageController::class, 'contacto'])->name('contacto');
Route::get('/proyectos', [PageController::class, 'proyectos'])->name('proyectos');
Route::get('/afiliados', [PageController::class, 'afiliados'])->name('afiliados');
Route::get('/templates', [PageController::class, 'templates'])->name('templates');
Route::get('/politica-privacidad', [PageController::class, 'politicaPrivacidad'])->name('politica.privacidad');
Route::get('/terminos-servicio', [PageController::class, 'terminosServicio'])->name('terminos.servicio');   
Route::get('/cookies', [PageController::class, 'cookies'])->name('cookies');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/tecnologias', [PageController::class, 'tecnologias'])->name('tecnologias');
Route::get('/trabaja-con-nosotros', [PageController::class, 'trabajaConNosotros'])->name('trabaja.con.nosotros');

//ruta para cambios de idioma
Route::get('lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'es', 'pt', 'it'])) {
        abort(400);
    }
    Session::put('locale', $locale);
    return redirect()->back();
})->name('set-locale');

// Rutas del Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show'); // La ruta para una entrada específica


// Formulario de contacto
Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitContactForm'])->name('contact.submit');

/*
|--------------------------------------------------------------------------
| Autenticación y registro
|--------------------------------------------------------------------------
*/

/*¡DESCOMENTADO!: Esta línea registra todas las rutas de autenticación necesarias,
incluyendo 'password.request', 'password.email', etc.
Auth::routes(['login' => false, 'register' => false, 'logout' => false, 'reset' => true, 'verify' => false]);

// Tu ruta personalizada para mostrar el formulario de login (GET)
// Apuntamos a AuthController@showLoginForm para mantener la lógica de auth en un solo lugar.
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// La ruta POST para procesar el login
// Asegúrate de que el método en AuthController sea 'login', no 'authenticate'
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Ruta para cerrar sesión
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
*/

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

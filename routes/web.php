<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ClienteController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController; 

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/conocenos', function () {
    return view('conocenos');
})->name('conocenos');

Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios.index');

Route::get('/servicios/{servicio}', [ServiciosController::class, 'show'])->name('servicios.show');

Route::post('/contacto', [ContactoController::class, 'enviar'])->name('contacto.enviar');

// Mostrar el formulario para crear un nuevo servicio
Route::get('/admin/servicios/crear', [ServiciosController::class, 'create'])->name('servicios.create');

Route::post('/admin/servicios', [ServiciosController::class, 'guardarServicio'])->name('servicios.store');

Route::post('/servicios', [ServiciosController::class, 'guardarServicio'])->name('servicios.guardar');

Route::post('/reservar', [ReservaController::class, 'store'])->name('reservar');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::post('/registrar-cliente', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');

use App\Http\Controllers\ClienteAuthController;

Route::post('/registrar-cliente', [ClienteAuthController::class, 'registrar'])->name('registrar');
Route::post('/login', [ClienteAuthController::class, 'login'])->name('login');
Route::post('/logout', [ClienteAuthController::class, 'logout'])->name('logout');
Route::middleware('auth')->get('/profile', [ClienteController::class, 'perfil'])->name('profile');


// Registro del middleware manualmente en el archivo de rutas

Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/admin/panel', [AdminController::class, 'index'])->name('admin.panel');
});

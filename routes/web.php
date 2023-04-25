<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\UsuarioController;

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

/* SIGN-IN */

Route::get('/', function () {
    return view('aplicacion.sign-in.index');
})->name('sign-in');

/* ROLES */

Route::get('/sistema', [RolController::class, 'index'])->name('rol');

/* PERSONAL */

Route::get('/sistema/personal', [PersonalController::class, 'index'])->name('personal');

/* USUARIO */

Route::get('/sistema/usuario', [UsuarioController::class, 'index'])->name('usuario');
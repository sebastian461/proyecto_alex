<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SignInController;

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

Route::get('/', [SignInController::class, 'index'])->name('sign-in');

Route::post('/', [SignInController::class, 'signIn'])->name('validar');

/* ROLES */

Route::get('/sistema', [RolController::class, 'index'])->name('rol');

/* PERSONAL */

Route::get('/sistema/personal', [PersonalController::class, 'index'])->name('personal');

/* USUARIO */

Route::get('/sistema/usuario', [UsuarioController::class, 'index'])->name('usuario');

Route::post('sistema/crear-usuario', [UsuarioController::class, 'store'])->name('crear-usuario');
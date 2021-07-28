<?php

use App\Http\Controllers\UsuarioController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PerfilController;
use Illuminate\Routing\Route as RoutingRoute;
use League\CommonMark\Block\Element\IndentedCode;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/',[IndexController::class,'index'])->name('index');

Route::get('inicio',[PerfilController::class,'index'])->name('inicio');
Route::get('login', [IndexController::class, 'login'])->name('login');
Route::post('login', [IndexController::class, 'iniciarSesion'])->name('iniciar.sesion');
Route::get('suscribir',[UsuarioController::class,'create'])->name('create.usuario');
Route::post('suscribir',[UsuarioController::class,'store'])->name('usuario.store');
Route::get('perfil',[UsuarioController::class,'index'])->name('index.usuario');
Route::get('serie',[PerfilController::class,'serie'])->name('serie');


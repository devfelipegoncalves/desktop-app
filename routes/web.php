<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get(uri: '/', action: [HomeController::class, 'index'])->name(name: 'home');
Route::get(uri: '/usuarios', action: [UsuariosController::class, 'index'])->name(name: 'usuarios.index');
Route::get(uri: '/usuarios/create', action: [UsuariosController::class, 'create'])->name(name: 'usuarios.create');
Route::post(uri: '/usuarios', action: [UsuariosController::class, 'store'])->name(name: 'usuarios.store');
Route::post(uri: '/usuarios/{usuario}', action: [UsuariosController::class, 'show'])->name(name: 'usuarios.show');
Route::post(uri: '/usuarios/{usuario}/edit', action: [UsuariosController::class, 'edit'])->name(name: 'usuarios.edit');
Route::put(uri: '/usuarios/{usuario}', action: [UsuariosController::class, 'update'])->name(name: 'usuarios.update');
Route::delete(uri: '/usuarios/{usuario}', action: [UsuariosController::class, 'destroy'])->name(name: 'usuarios.destroy');
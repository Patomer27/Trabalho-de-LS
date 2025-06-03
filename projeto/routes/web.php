<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\loginssController;
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

Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');

Route::get('/', function () {
    return view ('home');
});

Route::get('/produto', function () {
    return view ('produto');
});

Route::get('/masculino', function () {
    return view ('masculino');
});

Route::get('/feminino', function () {
    return view ('feminino');
});

Route::get('/infantil', function () {
    return view ('infantil');
});

Route::get('/ofertas', function () {
    return view ('ofertas');
});


Route::get('login/login', [loginssController::class,'create']);

Route::get('/cadastro', function () {
    return view ('cadastro');
});

Route::get('/admin', function () {
    return view ('admin/admin');
});

Route::get('/config', function () {
    return view ('admin/configuracoes');
});

Route::get('/estatisticas', function () {
    return view ('admin/estatisticas');
});

Route::get('/gp', function () {
    return view ('admin/gp');
});

Route::get('/gpr', function () {
    return view ('admin/gpr');
});

Route::get('/gc', function () {
    return view ('admin/gc');
});
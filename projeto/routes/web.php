<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\logincontroller;
use App\Http\Controllers\TenisController;
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


Route::post('/login', [logincontroller::class, 'login']);
Route::get('/login/login', function () {return view('login');})->name('login');

Route::get('/cadastro', function () {
    return view ('cadastro');
});

Route::get('/admin', function () {
    return view ('admin/admin');
})->middleware('auth:admin');

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

Route::get('/cliente/logout', [logincontroller::class, 'logout']);

Route::get('/admin/logout', [logincontroller::class, 'admin_logout']);

Route::post('/admin/cadastrar-produto', [TenisController::class, 'store']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DespesasController;

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

Route::get('/', function () {
    return view('auth.login');
});

// Rotas: Cadastro e Listagem de Despesas

Route::middleware(['auth:sanctum', 'verified'])->get('/cadastros/despesas', [DespesasController::class, 'index'])->name('listar_despesas');
Route::middleware(['auth:sanctum', 'verified'])->get('/despesas/registrar', [DespesasController::class, 'create'])->name('form_criar_despesas');
Route::middleware(['auth:sanctum', 'verified'])->post('/despesas/registrar', [DespesasController::class, 'store']);

Route::middleware(['auth:sanctum', 'verified'])->get('/despesas/show/{id}', [DespesasController::class, 'show']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

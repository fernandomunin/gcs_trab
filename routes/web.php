<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProdutoController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\UserController;

Route::get('/', [IndexController::class, 'index']);

// Produtos
Route::delete('/produtos/{id}', [ProdutoController::class, 'deletarProduto']);

Route::get('/produtos/adicionar', [ProdutoController::class, 'formAdicionarProduto']);
Route::get('/produtos/exibir/{id}', [ProdutoController::class, 'exibirProduto']);
Route::get('/produtos/formulario_edicao/{id}', [ProdutoController::class, 'formEditarProduto']);

Route::post('/produtos', [ProdutoController::class, 'adicionarProduto']);

Route::put('/produtos/editar/{id}', [ProdutoController::class, 'editarProduto']);

//Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//Registrer
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

//Pagina usuario


Route::get('/perfil', [UserController::class, 'perfil'])->name('perfil');

//Compras

Route::post('/pedido/{id}', [PedidoController::class, 'formFazerPedido']);

Route::get('/finalizar-compra', [PedidoController::class, 'finalizarCompra']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

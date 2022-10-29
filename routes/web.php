<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
// Route::get(  '/imc/{nome}/{peso}/{altura}/{genero}',  [PacienteController::class, 'calcularIMC']);
// Route::get(  '/vendas/atualizar/{id}/{produto}/{preco}/{quantidade}',  [VendasController::class, 'atualizarVenda']);
// Route::get(  '/vendas/excluir/{id}',  [VendasController::class, 'excluirVenda']);
// Route::get(  '/vendas',  [VendasController::class, 'listarVendas']);
// Route::get(  '/vendas/ver/{id}',  [VendasController::class, 'verVenda']);
// Route::get(  '/vendas/nova/{produtos}/{preco}/{quantidade}',  [VendasController::class, 'cadastrarVenda']);



Route::get(  '/',  [BandasController::class, 'index']);
Route::get(  '/cadastra',  [BandasController::class, 'create'])->name('cadastro');
Route::post(  '/salvar',  [BandasController::class, 'store']);

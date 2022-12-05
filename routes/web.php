<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\FornecedorController;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

Route::prefix('/app')->group(function(){
    Route::get('/sobre', [SobreController::class, 'sobre'])->name('site.sobre');
    Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('site.fornecedores');
});



Route::fallback(function() {
    echo 'Link inexistente, favor clique <a href="'.route('site.index').'">aqui</a> para retornar.';
});
<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ContatoController::class,'index'])->name('home');
Route::get('novo-contato', [ContatoController::class,'create'])->name('novo.create');
Route::post('novo-contato', [ContatoController::class,'store'])->name('novo.store');

Route::get('atualizar-contato/{id}', [ContatoController::class,'edit'])->name('atualizar.edit');
Route::put('atualizar-contato/{id}', [ContatoController::class,'update'])->name('atualizar.update');

Route::get('deletar-contato/{id}', [ContatoController::class,'destroy'])->name('deletar.destroy');
Route::get('deletar-todos-contatos', [ContatoController::class,'destroyAll'])->name('deletar.destroyAll');

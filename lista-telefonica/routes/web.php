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
Route::put('atualizar-contato', [ContatoController::class,'edit'])->name('atualizar.edit');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FortniteAPIController;

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

Route::get('/', [FortniteAPIController::class, 'index']);
Route::post('/consulta_jogador', [FortniteAPIController::class, 'status'])->name('fortnite.status');
Route::get('/historico_de_partidas', [FortniteAPIController::class, 'historico_de_partidas'])->name('fortnite.historico');
Route::get('/loja', [FortniteAPIController::class, 'loja'])->name('fortnite.loja');
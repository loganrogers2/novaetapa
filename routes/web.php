<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\exercioController;
use App\Http\Controllers\exercicio2Controller;
use App\Http\Controllers\exercicio3Controller;
use App\Http\Controllers\exercicio4Controller;
use App\Http\Controllers\associativoController;
use App\Http\Controllers\ContagemController;
use App\Http\Controllers\contagem2Controller;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/exercicio1', [exercioController::class, 'exercicio1']);

Route::get('/exercicio2',[exercicio2Controller::class,'tarefa']);

Route::get('/exercicio3',[exercicio3Controller::class,'precos']);

Route::get('/exercicio4',[exercicio4Controller::class,'produto']);

Route::get('/sextou',[associativoController::class,'TrazDados']);

Route::get('/contar',[ContagemController::class,'contar']);

Route::get('/contagem',[contagem2Controller::class,'contarItens']);
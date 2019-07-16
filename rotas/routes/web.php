<?php

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
    return view('welcome');
});

Route::get('/ola', function () {
    return '<h1>Seja bem vindo!</h1>';
});

Route::get('/ola/bemvindo', function () {
    return view('welcome');
});

Route::get('/nome/{nome}/{sobrenome}/', function ($nome, $sobrenome) {
    return "<h1>Olá, $nome $sobrenome!</h1>";
});

Route::get('/repetir/{nome}/{n}', function($nome, $n) {
    if(is_integer($n)) {
        for ($i = 0; $i < $n; $i++) {
            echo "<h1>Olá, $nome</h1>";
        }
    } else echo "Você não digitou um inteiro!";
});
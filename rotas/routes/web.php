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

Route::get('/seunomecomregra/{nome}/{n}', function($nome, $n) {
    for ($i = 0; $i < $n; $i++) {
        echo "<h1>$i - Olá, $nome!</h1>";
    }
})->where('n','[0-9]+')->where('nome', '[a-zA-Z]+');

// Rota com param opcional {nome?} '?'
Route::get('/seunomesemregra/{nome?}', function($nome=null) {
    if (isset($nome)) {
        echo "<h1>Olá, $nome!</h1>";
    } else echo "<p style='color:red;'>Você não passou nenhum nome!</p>";
});

// Agrupamento de Rotas
Route::prefix('app')->group(function() {
    Route::get('/', function() {
        return "App Home";
    });

    Route::get('profile', function() {
        return "Profile Page";
    });

    Route::get('about', function() {
        return "About Page";
    });
});
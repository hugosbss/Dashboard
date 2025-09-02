<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Rota inicial
Route::get('/', function () {
    return view('template.index');
});

Route::get('/cadastro', function () {
    return view('cadastro.index');
})->name('cadastro.index');

Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');
Route::post('/cliente', [ClienteController::class, 'recebeDados'])->name('cliente.novo');

Route::get('/dashboard', function () {
    return view('dashboard.index'); // crie resources/views/dashboard/index.blade.php
})->name('dashboard');

Route::get('/formulario', function () {
    return view('formulario.index');
});

Route::get('/', function () {
    return view('template.index');
});

Route::get('/alert', function () {
    return view('template.alert');
});
Route::get('/autentication', function () {
    return view('template.autentication');
});
Route::get('/buttons', function () {
    return view('template.buttons');
});
Route::get('/card', function () {
    return view('template.card');
});
Route::get('/forms', function () {
    return view('template.forms');
});
Route::get('/icons', function () {
    return view('template.icons');
});
Route::get('/login', function () {
    return view('template.login');
});
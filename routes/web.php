<?php

use Illuminate\Support\Facades\Route;

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
    return view('PaginaPrincipal');
})->name('Principal');

Route::get('/Agencia', function () {
    return view('AgendaViajes');
})->name('Agenda');

Route::get('/Lugares', function () {
    return view('LugaresTuristicos');
})->name('Lugares');
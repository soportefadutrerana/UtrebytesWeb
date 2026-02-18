<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('welcome');
})->name('inicio');

Route::get('/caracteristicas', function () {
    return view('pages.caracteristicas');
})->name('caracteristicas');

Route::get('/recursos', function () {
    return view('pages.recursos');
})->name('recursos');

Route::get('/utrebytes', function () {
    return view('pages.utrebytes');
})->name('utrebytes');

Route::get('/partners', function () {
    return view('pages.partners');
})->name('partners');

Route::get('/clientes', function () {
    return view('pages.clientes');
})->name('clientes');

Route::get('/contacto', function () {
    return view('pages.contacto');
})->name('contacto');

Route::post('/contacto', function () {
    return back()->with('success', 'Mensaje enviado correctamente');
})->name('contacto.enviar');


Route::get('/accede', function () {
    return view('pages.accede');
})->name('accede');
Route::get('/terminos-cookies', function () {
    return view('pages.terminos-cookies');
})->name('terminos-cookies');
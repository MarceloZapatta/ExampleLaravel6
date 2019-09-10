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

// Definindo algumas rotas
Route::get('professores', function () {
	// retorna os professores
})->name('professores');

Route::prefix('professores')->group(function ()	{
	Route::name('professores.')->group(function () {
		Route::get('{id}', function () {
			// Retorna o professor com o ID específico
			// ID deve ser númerico como definido em RouteServiceProvider
		})->name('professor');
	})
});
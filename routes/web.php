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

// Definindo a rota de resource para o Professor
Route::resource('professores', 'ProfessorController')->only([
    'index'
]);

// Pode ser especificada várias rotas
// Route::resources([
//     'photos' => 'PhotoController',
//     'posts' => 'PostController'
// ]);

// Definindo algumas rotas
// Route::get('professores', function () {
// 	// retorna os professores
// })->name('professores');

// Route::prefix('professores')->group(function ()	{
// 	Route::name('professores.')->group(function () {
// 		Route::get('{professor}', function (App\Professor $professor) {
// 			// Com model binding
// 			// Retorna o professor com base no model
// 		})->name('professor');
// 	});
// });
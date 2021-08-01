<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//chama o método "index" caso haja um request para /movie/create pelo método get
//Route::get('/movie/create', [MovieController::Class, 'index']); 

//middleware(['auth']): Verifica se o usuário está logado
//name(['create_movie']): Dá um nome a rota
Route::post('/movie/create', [MovieController::Class, 'store'])->middleware(['auth'])->name('create_movie');

Route::get('/movie/remove/{movie}', [MovieController::Class, 'destroy'])->middleware(['auth'])->name('remove_movie');

require __DIR__.'/auth.php';

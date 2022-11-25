<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

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

Route::get('/', [ContactsController::class, 'index']);

//Rota para cadastrar
Route::post('/cadastrar', [ContactsController::class, 'create']);

Route::get('/editar/{id}', [ContactsController::class, 'edit']);

Route::post('/update/{id}', [ContactsController::class, 'update']);

Route::post('/deletar/{id}', [ContactsController::class, 'destroy']);

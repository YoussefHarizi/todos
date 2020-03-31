<?php

use App\Http\Controllers\TodoControllers;
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


Route::get('/', 'TodoControllers@index');
Route::get('/todo/{id}', 'TodoControllers@show');
Route::get('/create', 'TodoControllers@create');
Route::post('/create', 'TodoControllers@store');
Route::get('/{id}/edit', 'TodoControllers@edit');
Route::post('/{id}', 'TodoControllers@update');
Route::get('/{id}/delete', 'TodoControllers@distroy');
Route::get('/{id}/complited', 'TodoControllers@complited');
Route::get('/{id}/incomplited', 'TodoControllers@incomplited');

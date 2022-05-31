<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

#region PESSOAS
Route::get('pessoas', '\App\Http\Controllers\ApiController@GetPessoas');
Route::get('pessoa/{$id}', '\App\Http\Controllers\ApiController@GetPessoa');
Route::post('pessoa', 'App\Http\Controllers\ApiController@CreatePessoa');
Route::put('pessoa/{$id}', 'App\Http\Controllers\ApiController@UpdatePessoa');
Route::delete('pessoa/{$id}', 'App\Http\Controllers\ApiController@DeletePessoa');
#endregion

#region DISCIPLINAS
Route::get('disciplinas', '\App\Http\Controllers\ApiController@GetDisciplinas');
Route::get('disciplina/{$id}', '\App\Http\Controllers\ApiController@GetDisciplina');
Route::post('disciplina', 'App\Http\Controllers\ApiController@CreateDisciplina');
Route::put('disciplina/{$id}', 'App\Http\Controllers\ApiController@UpdateDisciplina');
Route::delete('disciplina/{$id}', 'App\Http\Controllers\ApiController@DeleteDisciplina');
#endregion
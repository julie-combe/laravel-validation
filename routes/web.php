<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\PersonnageController;
use App\Http\Controllers\DessinateurController;

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

Route::get('/', [NavController::class, 'home']);
Route::get('/list', [NavController::class, 'list']);
Route::get('/personnage/{id}', [NavController::class, 'personnage']);

Route::get('/add', [NavController::class, 'add']);
Route::post('/addPersonnage', [PersonnageController::class, 'add']);

Route::get('/supprimer/{id}', [PersonnageController::class, 'supprimer']);

Route::get('/updatePersonnage/{id}', [NavController::class, 'updatePersonnage']);
Route::post('/updatePersonnage', [PersonnageController::class, 'update']);
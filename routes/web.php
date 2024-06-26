<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\EventController;


Route::get('/',[EventController::class,'index'] );

Route::get('/eventos/criar',[EventController::class,'createEvent']);

Route::get('/eventos/{id}', [EventController::class, 'show']);

Route::post('/eventos', [EventController::class, 'store']);

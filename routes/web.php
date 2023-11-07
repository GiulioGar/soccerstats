<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamsController;

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

Route::get('/legaI2', [TeamsController::class,'ita2']);
Route::get('/legaI1', [TeamsController::class,'ita1']);
Route::get('/', function () { return view('welcome'); });




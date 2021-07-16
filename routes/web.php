<?php

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
use App\Http\Controllers\PyInterController;
Route::resource('/interpreter', PyInterController::class);
Route::get('/', function(){ return view('welcome'); });
Route::get('/docs', function(){ return view('docs'); });
Route::get('/examples', function(){ return view('examples'); });

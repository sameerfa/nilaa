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
Route::group(['middleware' => 'auth'], function(){
  Route::resource('/interpreter', PyInterController::class);
  Route::resource('/profile', 'App\Http\Controllers\ProfileController');
  Route::resource('/settings', 'App\Http\Controllers\SettingsController');
  Route::resource('/myprograms', 'App\Http\Controllers\MyProgramsController');
});

Route::get('/', 'App\Http\Controllers\MyProgramsController@top');
Route::get('/docs', function(){ return view('docs'); });
Route::get('/examples', function(){ return view('examples'); });
Route::get('/privacy', function(){ return view('privacy'); });

Auth::routes();


Route::get('login/{provider}', 'App\Http\Controllers\SocialController@redirect');
Route::get('login/{provider}/callback','App\Http\Controllers\SocialController@Callback');

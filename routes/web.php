<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDo;

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
//GET METHOD
Route::GET('/', [UserDo::class,'blank']);

//POST METHOD
Route::POST('/', [UserDo::class,'signup']);
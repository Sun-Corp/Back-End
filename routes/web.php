<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDo;
use App\Http\Controllers\AdminDo;
use App\Http\Controllers\HomeDo;

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
//LOGIN REGISTER METHOD
Route::GET('/', [UserDo::class,'index']);
Route::GET('/registrasi', [UserDo::class,'blank']);
Route::GET('/login', [UserDo::class,'login']);
Route::GET('/logout', [UserDo::class,'logout']);
Route::POST('/registrasi', [UserDo::class,'registrasi']);

Route::GET('/welcome', [UserDo::class, 'welcome']);

//ADMIN METHOD
Route::GET('/admin', [AdminDo::class, 'home']);
Route::GET('/adminorder', [AdminDo::class, 'manage']);
Route::GET('/addtemplate', [AdminDo::class, 'addtemplate']);
Route::GET('/updateorder/{Path}/{OrderID}', [AdminDo::class, 'updateorder']);

//USER METHOD
Route::GET('/homepage', [HomeDo::class, 'home']);
Route::GET('/details/{NamaTema}/{NamaTemplate}', [HomeDo::class, 'detail']);
Route::GET('/cart', [HomeDo::class, 'cart']);
Route::GET('/addcart/{NamaTema}/{NamaTemplate}', [HomeDo::class, 'addcart']);
Route::GET('/deletecart/{CartID}', [HomeDo::class, 'deletecart']);
Route::GET('/filldata/{CartID}/{TemplateID}', [HomeDo::class, 'filldata']);
Route::POST('/filldata/{CartID}/{TemplateID}', [HomeDo::class, 'uploadfilldata']);
Route::POST('/deletedata/{AcaraID}', [HomeDo::class, 'deletedata']);
Route::GET('/invoice/{AcaraID}', [HomeDo::class, 'invoice']);
Route::GET('/order', [HomeDo::class, 'order']);
Route::POST('/addorder/{AcaraID}', [HomeDo::class, 'addorder']);
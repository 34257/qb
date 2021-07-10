<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentControllers;

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

Route::get('/',[StudentControllers::class,"index"])->name("homepage");
Route::post('/insert',[StudentControllers::class,"insert"])->name("insert");
Route::get('/delete/{id}',[StudentControllers::class,"delete"])->name("delete");
Route::get('/update/{id}',[StudentControllers::class,"update"])->name("update");
Route::post('/update/{id}',[StudentControllers::class,"modify"])->name("modify");
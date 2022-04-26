<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\curdController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[curdController::class,'showData']); //show data

Route::get('/add_data',[curdController::class,'addData']); //add data

Route::post('/store_data',[curdController::class,'storeData']); //data store
Route::get('/edit_data/{id}',[curdController::class,'editData']); //edit 
Route::post('/update_data/{id}',[curdController::class,'updateData']); //data update
Route::get('/delete_data/{id}',[curdController::class,'deleteData']); //data delete

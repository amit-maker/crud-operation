<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/',[UserController::class,'index']);
Route::get('/author-show/{id}', [UserController::class, 'show']);
Route::get('/author-edit/{id}', [UserController::class, 'edit']);
Route::post('/author-update/', [UserController::class, 'update']);
Route::get('/author-delete/{id}', [UserController::class, 'destroy']);


Route::get('/create',[UserController::class,'create']);
Route::post('/store',[UserController::class,'store']);
// Route::get('/status/update', [UserController::class, 'updateStatus'])->name('status.update');

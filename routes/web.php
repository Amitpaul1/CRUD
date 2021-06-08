<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[StudentController::class,'index']);
Route::POST('/store',[StudentController::class,'store']);
Route::get('student/delete/{id}',[StudentController::class,'destroy']);
Route::get('student/edit/{id}',[StudentController::class,'edit']);
Route::POSt('student/update/{id}',[StudentController::class,'update']);


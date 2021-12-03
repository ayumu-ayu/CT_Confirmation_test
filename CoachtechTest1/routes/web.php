<?php

use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ManagementController;
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

//問い合わせフォーム
Route::get('/form' , [FormController::class , 'index']);
Route::post('/form/confirm' , [FormController::class , 'post']);
Route::post('/form/thanks' , [FormController::class , 'submit']);

//管理システム
Route::get('/management' , [ManagementController::class , 'index']);
Route::get('/management/{search}' , [ManagementController::class , 'search']);


Route::get('/', function () {
    return view('welcome');
});

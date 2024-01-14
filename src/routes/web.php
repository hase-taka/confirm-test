<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

//概ねok
Route::get('/', [ContactController::class, 'index']);

Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/contact', [ContactController::class, 'store']);

Route::get('/register', [ContactController::class, 'register']);
Route::get('/login', [ContactController::class, 'login']);


//作成中
Route::get('/admin', [ContactController::class, 'show']);






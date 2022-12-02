<?php

use App\Http\Controllers\MerchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Models\News;

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

Route::get('/', [NewsController::class ,'index']);

Route::get('/newsletter', [NewsController::class ,'store']);

Route::get('/info/{news:slug}', [NewsController::class, 'show']);

Route::get('/info', [NewsController::class, 'full']);

Route::get('/merch', [MerchController::class, 'index']);
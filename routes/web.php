<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
//and this a old way to route in laravel
// Route::get('hi', 'BlogController@create');
//this new Route in laravel 8
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('create-category', [CategoryController::class, 'create']);
Route::post('post-category-form', [CategoryController::class, 'store']);
Route::get('all-categories', [CategoryController::class, 'index']);


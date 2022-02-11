<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
use App\Http\controllers\AdminController;
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



Route::get('/',[HomeController::class, "index"]);


Route::get('/users',[AdminController::class, "user"]);

Route::get('/deleteuser/{id}',[AdminController::class, "deleteuser"]);
Route::get('/deletemenu/{id}',[AdminController::class, "deletemenu"]);
Route::get('/updateview/{id}',[AdminController::class, "updateview"]);
Route::post('/update/{id}',[AdminController::class, "update"]);

Route::post('/uploadfood',[AdminController::class, "upload"]);


Route::get('/foodmenu',[AdminController::class, "foodmenu"]);

Route::get('/redirects',[HomeController::class, "redirects"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

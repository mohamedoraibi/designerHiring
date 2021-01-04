<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
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

//Route::get('/', function () {
//    return view('index');
//});


//Route::get('/register', function () {
//    return view('authNew.register');
//});
Route::get('/', [Controller::class, 'index']);

Route::get('/users', [UserController::class, 'index']);
Route::get('/about-us', [Controller::class, 'aboutUs']);
Route::get('/contact-us', [Controller::class, 'contactUs']);

Route::get('/register', [UserController::class, 'create']);
Route::post('/register', [UserController::class, 'store'])->name('register');

Route::get('/login', [UserController::class, 'loginView']);
Route::post('/login', [UserController::class, 'authenticate'])->name('login');

Route::get('/project', [ProjectController::class, 'create']);
Route::post('/project', [ProjectController::class, 'store'])->name('projectAdd');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


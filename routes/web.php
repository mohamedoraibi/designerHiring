<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
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

Route::get('/dashboard', [Controller::class, 'dashboard']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/about-us', [Controller::class, 'aboutUs']);
Route::get('/contact-us', [Controller::class, 'contactUs']);

//------------------------ Register------------------------//
Route::get('/register', [UserController::class, 'create']);
Route::post('/register', [UserController::class, 'store'])->name('register');
//------------------------ Login------------------------//
Route::get('/login', [UserController::class, 'loginView']);
Route::post('/login', [UserController::class, 'authenticate'])->name('login');
//------------------------ Project------------------------//
Route::get('/project', [ProjectController::class, 'create']);
Route::post('/project', [ProjectController::class, 'store'])->name('projectAdd');
Route::get('/project/{id}', [ProjectController::class, 'edit']);
Route::post('/project/{id}', [ProjectController::class, 'update']);
Route::get('/project/remove/{id}', [ProjectController::class, 'destroy']);
//Show Project from visitor
Route::get('/project/explore/{id}', [ProjectController::class, 'show']);
//Route::get('/project/explore', [ProjectController::class, 'showExplore']);

//------------------------ Explore------------------------//
Route::get('/explore/designers', [UserController::class, 'exploreDesigners']);
Route::get('/explore/projects', [ProjectController::class, 'showExplore']);

Route::get('/projects', [ProjectController::class, 'index']);
//------------------------ Profile------------------------//
//Route::get('/profile', [UserController::class, 'profileView']);
Route::get('/profile/setting', [UserController::class, 'settingView']);
//Show Profile from visitor
Route::get('/profile/{id}', [Controller::class, 'profile']);
//------------------------ Skill------------------------//
Route::get('/skill', [SkillController::class, 'create']);
Route::post('/skill', [SkillController::class, 'store'])->name('skillAdd');
Route::get('/skill/{id}', [SkillController::class, 'edit']);
Route::post('/skill/{id}', [SkillController::class, 'update']);
Route::get('/skill/remove/{id}', [SkillController::class, 'destroy']);

Route::get('/skills', [SkillController::class, 'index']);
//------------------------ Bid------------------------//

Route::get('/bid/{id}', [ProjectController::class, 'bid']);
Route::post('/bid', [ProjectController::class, 'bidding'])->name('bidding');
Route::get('/bids', [ProjectController::class, 'bids']);
Route::get('/bid/remove/{id}', [ProjectController::class, 'destroyBid']);

//------------------------ Offers------------------------//
Route::post('/offer', [OfferController::class, 'store'])->name('offer');
Route::get('/offers', [OfferController::class, 'index']);

//------------------------ Messages ------------------------//
Route::get('/messages', [Controller::class, 'messages']);
Route::get('/reviews', [Controller::class, 'reviews']);
Route::get('/favorite', [Controller::class, 'favorite']);

//------------------------ Adminstation ------------------------//
Route::get('/admin/projects', [Controller::class, 'showProjects']);
Route::get('/admin/users', [Controller::class, 'showUsers']);
//Route::post('/tag', [Controller::class, 'tag']);

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');
//

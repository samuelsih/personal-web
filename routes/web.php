<?php

use App\Http\Controllers\NavbarController;
use App\Http\Controllers\ProjectController;
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

// Navbar Links
Route::get('/', [NavbarController::class, 'home'])->name('navbar.home');
Route::get('/projects', [NavbarController::class, 'projects'])->name('navbar.projects');
Route::get('/about', [NavbarController::class, 'about'])->name('navbar.about');


// Projects Links
Route::get('/projects/dummy-coffee', [ProjectController::class, 'dummyCoffee'])->name('projects.dummyCoffee');
Route::get('/projects/find-dosen', [ProjectController::class, 'findDosen'])->name('projects.findDosen');
Route::get('/projects/shop-app', [ProjectController::class, 'shopApp'])->name('projects.shopApp');

// Route::get('/info', function() {
//     return view('info');
// });

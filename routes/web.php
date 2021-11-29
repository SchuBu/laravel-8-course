<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\Backend\PostController as BackendPostController;
use App\Http\Controllers\StartpageController;
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

Route::get('/', [StartpageController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::name('admin.')->group(function () {
            Route::view('/', 'backend.index')->name('index');
            Route::resource('/post', BackendPostController::class)->parameters([
                'post' => 'post:slug'
            ]);
        });
    });
});

Route::view('/modal','modal');

Route::resource('/post',PostController::class);

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/home',[HomeController::class,'auth'])->name('home');

Route::group([
    'prefix'=>'hotel'],
    function(){
        Route::get('about',[HomeController::class,'about'])->name('about');
        Route::get('blogDetails',[HomeController::class,'blogDetails'])->name('blogDetails');
        Route::get('blog',[HomeController::class,'blog'])->name('blog');
        Route::get('contact',[HomeController::class,'contact'])->name('contact');
        Route::get('index',[HomeController::class,'index'])->name('index');
        Route::get('main',[HomeController::class,'main'])->name('main');
        Route::get('roomDetails',[HomeController::class,'roomDetails'])->name('roomDetails');
        Route::get('rooms',[HomeController::class,'rooms'])->name('rooms');

    }
);

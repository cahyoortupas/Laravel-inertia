<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SertipikatController;
use App\Http\Controllers\SuratukurController;
use App\Http\Controllers\BukutanahController;
use App\Http\Controllers\Permohonan_SuratukurController;
use App\Http\Controllers\Permohonan_BukutanahController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\DashboardController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return redirect('/profile');
    // return Inertia::render('Welcome', [
    //     'canLogin' => Route::has('login'),
    // ]);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/about', fn () => Inertia::render('About'))->name('about');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::group(['middleware' => 'checkRole:1'], function() {
        
        Route::get('users', [UserController::class, 'index'])->name('users.index');
        Route::get('users/add', [UserController::class, 'create'])->name('users.create');
        Route::post('users', [UserController::class, 'store'])->name('users.store');
        Route::delete('users/{id}', [UserController::class, 'delete'])->name('users.delete');
        Route::get('users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
        Route::post('users/{id}', [UserController::class, 'update'])->name('users.update');
    });
    

});

require __DIR__.'/auth.php';

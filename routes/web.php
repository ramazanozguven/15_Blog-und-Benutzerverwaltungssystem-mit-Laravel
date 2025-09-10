<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/', [UserController::class,'showDataInHome'])->name('home');
Route::get('/fullpost/{id}',[UserController::class,'showFullPost'])->name('fullpost');

Route::get('/dashboard', [UserController::class, 'home'])->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('admin/dashboard', [UserController::class, 'index'])->middleware(['auth', 'admin'])->name('admin.dashboard');
// Route::get('admin/dashboard/post', [UserController::class, 'post'])->middleware(['auth', 'admin']);

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('admin.dashboard');       
    Route::get('/dashboard/addpost', [AdminController::class, 'addpost'])->name('admin.addpost');
    Route::post('/dashboard/addpost', [AdminController::class, 'createpost'])->name('admin.createpost');
    Route::get('/dashboard/allpost', [AdminController::class, 'allpost'])->name('admin.allpost');
    Route::get('/dashboard/allpost/{id}', [AdminController::class, 'updatePost'])->name('admin.update');
    Route::post('/dashboard/allpost/', [AdminController::class, 'postupdate'])->name('admin.postupdate');
    Route::get('/dashboard/deletepost/{id}', [AdminController::class, 'deletePost'])->name('admin.deletepost');


    
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

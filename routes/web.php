<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiteController;
use App\Http\Livewire\FileUploader;
use Illuminate\Support\Facades\Route;

// Route::redirect('/', '/ru');
// Route::group(['prefix' => '{locale}'], function() {
// });

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/search', [SiteController::class, 'search'])->name('search');
Route::get('/post/{id}', [PostsController::class, 'show']);

Route::group(['middleware' => 'auth'], function () {
  Route::resource('/new-post', PostsController::class);
  Route::get('/dashboard', [UserController::class, 'showPosts'])->name('dashboard');

  // handle like on post
  Route::post('/post/{post}/liked', [PostsController::class, 'postLiked'])->name('post.liked');
  Route::delete('/post/{post}/unliked', [PostsController::class, 'postUnliked'])->name('post.unliked');
});


  // Route::middleware(['auth:sanctum', 'verified'])
  //                       ->get()
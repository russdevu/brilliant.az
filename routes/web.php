<?php

  use App\Http\Controllers\PostsController;
  use App\Http\Controllers\UserController;
  use App\Http\Controllers\SiteController;
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

  // Route::redirect('/', '/ru');
  // Route::group(['prefix' => '{locale}'], function() {
  // });

  Route::get('/', [SiteController::class, 'index'])->name('home');
  Route::get('/advanced-search', [SiteController::class, 'advancedSearch'])->name('advanced.search');
  Route::get('/post/{id}', [PostsController::class, 'show']);

  Route::group(['middleware' => 'auth'], function() {
    Route::resource('/new-post', PostsController::class);
    Route::get('/dashboard', [UserController::class, 'showPosts'])->name('dashboard');

    // handle like on post
    Route::post('/post/{post}/liked', [PostsController::class, 'postLiked'])->name('post.liked');
    Route::delete('/post/{post}/unliked', [PostsController::class, 'postUnliked'])->name('post.unliked');
  });

  // Route::middleware(['auth:sanctum', 'verified'])
  //                       ->get()
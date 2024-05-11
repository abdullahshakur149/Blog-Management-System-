<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// home page route
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//  categories posts

Route::get('/categories/{id}/posts', [App\Http\Controllers\UserCategoryController::class, 'showPosts'])->name('usercategories.posts');



// admin route
Route::get('/admin/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('admin.dashboard');

// category routes
Route::get('/admin/dashboard/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('admin.categories.index');
Route::get('/admin/dashboard/categories/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('admin.categories.create');
Route::post('/admin/dashboard/categories/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('admin.categories.store');
Route::get('/admin/dashboard/categories/show/{id}', [App\Http\Controllers\CategoryController::class, 'show'])->name('admin.categories.show');
Route::get('/admin/dashboard/categories/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('admin.categories.edit');
Route::put('/admin/dashboard/categories/update/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('admin.categories.update');
Route::post('/admin/dashboard/categories/delete/{id}', [App\Http\Controllers\CategoryController::class, 'delete'])->name('admin.categories.delete');

// post routes
Route::get('/admin/dashboard/posts', [App\Http\Controllers\PostController::class, 'index'])->name('admin.posts.index');
Route::get('/admin/dashboard/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('admin.posts.create');
Route::post('/admin/dashboard/posts/store', [App\Http\Controllers\PostController::class, 'store'])->name('admin.posts.store');
Route::get('/admin/dashboard/posts/show/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('admin.posts.show');
Route::get('/admin/dashboard/posts/edit/{id}', [App\Http\Controllers\PostController::class, 'edit'])->name('admin.posts.edit');
Route::put('/admin/dashboard/posts/update/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('admin.posts.update');
Route::post('/admin/dashboard/posts/delete/{id}', [App\Http\Controllers\PostController::class, 'delete'])->name('admin.posts.delete');

// testimonials routes
Route::get('/admin/dashboard/testimonials', [App\Http\Controllers\TestimonialController::class, 'index'])->name('admin.testimonials.index');
Route::get('/admin/dashboard/testimonials/create', [App\Http\Controllers\TestimonialController::class, 'create'])->name('admin.testimonials.create');
Route::post('/admin/dashboard/testimonials/store', [App\Http\Controllers\TestimonialController::class, 'store'])->name('admin.testimonials.store');
Route::get('/admin/dashboard/testimonials/show/{id}', [App\Http\Controllers\TestimonialController::class, 'show'])->name('admin.testimonials.show');
Route::get('/admin/dashboard/testimonials/edit/{id}', [App\Http\Controllers\TestimonialController::class, 'edit'])->name('admin.testimonials.edit');
Route::put('/admin/dashboard/testimonials/update/{id}', [App\Http\Controllers\TestimonialController::class, 'update'])->name('admin.testimonials.update');
Route::post('/admin/dashboard/testimonials/delete/{id}', [App\Http\Controllers\TestimonialController::class, 'delete'])->name('admin.testimonials.delete');

// thumbnail routes
Route::get('/admin/dashboard/thumbnails', [App\Http\Controllers\ThumbnailController::class, 'index'])->name('admin.thumbnails.index');
Route::get('/admin/dashboard/thumbnails/create', [App\Http\Controllers\ThumbnailController::class, 'create'])->name('admin.thumbnails.create');
Route::post('/admin/dashboard/thumbnails/store', [App\Http\Controllers\ThumbnailController::class, 'store'])->name('admin.thumbnails.store');
Route::get('/admin/dashboard/thumbnails/show/{id}', [App\Http\Controllers\ThumbnailController::class, 'show'])->name('admin.thumbnails.show');
Route::get('/admin/dashboard/thumbnails/edit/{id}', [App\Http\Controllers\ThumbnailController::class, 'edit'])->name('admin.thumbnails.edit');
Route::put('/admin/dashboard/thumbnails/update/{id}', [App\Http\Controllers\ThumbnailController::class, 'update'])->name('admin.thumbnails.update');
Route::post('/admin/dashboard/thumbnails/delete/{id}', [App\Http\Controllers\ThumbnailController::class, 'delete'])->name('admin.thumbnails.delete');


// video routes
Route::get('/admin/dashboard/videos', [App\Http\Controllers\VideoController::class, 'index'])->name('admin.videos.index');
Route::get('/admin/dashboard/videos/create', [App\Http\Controllers\VideoController::class, 'create'])->name('admin.videos.create');
Route::post('/admin/dashboard/videos/store', [App\Http\Controllers\VideoController::class, 'store'])->name('admin.videos.store');
Route::get('/admin/dashboard/videos/edit/{id}', [App\Http\Controllers\VideoController::class, 'edit'])->name('admin.videos.edit');
Route::put('/admin/dashboard/videos/update/{id}', [App\Http\Controllers\VideoController::class, 'update'])->name('admin.videos.update');
Route::post('/admin/dashboard/videos/delete/{id}', [App\Http\Controllers\VideoController::class, 'delete'])->name('admin.videos.delete');

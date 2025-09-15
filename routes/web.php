<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::fallback(fn () => view('pages.frontend.page-not-found'))->name('404');

Route::view('/', 'pages.frontend.index')->name('home');

// Static pages
Route::view('/about', 'pages.frontend.about')->name('about');
Route::view('/contact', 'pages.frontend.contact')->name('contact');

// Dynamic pages
Route::view('/blog', 'pages.frontend.blog')->name('blog');
Route::view('/search', 'pages.frontend.search')->name('search');
Route::view('/post', 'pages.frontend.post')->name('post');
Route::view('/post-category', 'pages.frontend.post-category')->name('post-category');
Route::view('/author', 'pages.frontend.author')->name('author');
Route::view('/archieve', 'pages.frontend.archieve')->name('archieve');
Route::view('/page', 'pages.frontend.page')->name('page');
Route::view('/job-post', 'pages.frontend.job-post')->name('job-post');
Route::view('/job-category', 'pages.frontend.job-category')->name('job-category');
Route::view('/other-posts', 'pages.frontend.other-posts')->name('other-posts');

//Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {return view('pages.dashboard.dashboard');})->name('dashboard');
    Route::get('/posts', function () {return view('pages.dashboard.posts');})->name('posts');
    Route::get('/pages', function () {return view('pages.dashboard.pages');})->name('pages');
    Route::get('/images', function () {return view('pages.dashboard.images');})->name('images');
    Route::get('/comments', function () {return view('pages.dashboard.comments');})->name('comments');
    Route::get('/form-submissions', function () {return view('pages.dashboard.contact');})->name('form-submissions');
    Route::get('/users', function () {return view('pages.dashboard.users');})->name('users');
    Route::get('/settings', function () {return view('pages.dashboard.settings');})->name('settings');
    Route::get('/testing', function () {return view('pages.dashboard.testing');})->name('testing');
//});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

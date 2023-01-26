<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('loginuser', [LoginController::class, 'login'])->name('loginuser');

    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('reg', [RegisterController::class, 'createUser'])->name('reg');
});

Route::controller(HomeController::class)->group(function() {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});

Route::get('contactus', function () {
    return view('extras.contactus');
})->name('contactus');
Route::get('aboutus', function () {
    return view('extras.aboutus');
})->name('aboutus');
Route::get('blog', function () {
    return view('blog.blog');
})->name('blog');
Route::get('blogdetail', function () {
    return view('blog.blogdetail');
})->name('blogdetail');
Route::get('faq', function () {
    return view('extras.faq');
})->name('faq');
Route::get('terms_and_conditions', function () {
    return view('extras.terms_and_conditions');
})->name('terms_and_conditions');
Route::get('all_ads', function () {
    return view('ads.all_ads');
})->name('all_ads');
Route::get('ads_single_view', function () {
    return view('ads.ads_single_view');
})->name('ads_single_view');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('settings', [DashboardController::class, 'settings'])->name('settings');
    Route::get('add_post', [DashboardController::class, 'add_post'])->name('add_post');
    Route::get('messages', [DashboardController::class, 'messages'])->name('messages');
    Route::get('my_ads', [DashboardController::class, 'my_ads'])->name('my_ads');
    Route::get('fav_ads', [DashboardController::class, 'fav_ads'])->name('fav_ads');

    Route::controller(CategoriesController::class)->group(function () {
        Route::get('add_category', 'addCategory')->name('addCategory');
        Route::post('addCat', 'addCat')->name('addCat');
    });


    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});

<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LandingController;
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

Route::get('/', [AuthController::class, 'login'])->middleware('startpoint')->name('welcome');

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');
    // Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
    // Route::post('/email', [LandingController::class, 'store'])->name('landing.store');
});


Route::middleware(['auth'])->group(function () {
    Route::middleware(['admin'])->group(function () {
        Route::get('/admin/home', [AdminController::class, 'home'])->name('admin.home');
        Route::get('/admin/addbook', [AdminController::class, 'addbook'])->name('admin.addbook');
        Route::get('/admin/addlanguage', [AdminController::class, 'addlanguage'])->name('admin.addlanguage');
        Route::get('/admin/addcategory', [AdminController::class, 'addcategory'])->name('admin.addcategory');
        Route::get('/admin/adduser', [AdminController::class, 'adduser'])->name('admin.adduser');
        Route::post('/admin/addbook', [AdminController::class, 'addbookform'])->name('admin.addbookform');
        Route::post('/admin/adduser', [AdminController::class, 'adduserform'])->name('admin.adduserform');
        Route::post('/admin/addlanguage', [AdminController::class, 'addlanguageform'])->name('admin.addlanguageform');
        Route::post('/admin/addcategory', [AdminController::class, 'addcategoryform'])->name('admin.addcategoryform');
        Route::get('/admin/books', [AdminController::class, 'books'])->name('admin.books');
        Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
        Route::get('/admin/categories', [AdminController::class, 'categories'])->name('admin.categories');
        Route::get('/admin/languages', [AdminController::class, 'languages'])->name('admin.languages');
        Route::post('/admin/book/delete/{id}', [AdminController::class, 'book_delete'])->name('admin.book.delete');
        Route::post('/admin/category/delete/{id}', [AdminController::class, 'category_delete'])->name('admin.category.delete');
        Route::post('/admin/language/delete/{id}', [AdminController::class, 'language_delete'])->name('admin.language.delete');
        Route::post('/admin/user/delete/{id}', [AdminController::class, 'user_delete'])->name('admin.user.delete');
        Route::post('/register', [AuthController::class, 'store'])->name('auth.store');
    });

    Route::middleware(['user'])->group(function () {
        Route::get('/client/home', [ClientController::class, 'home'])->name('client.home');
        Route::get('/client/contact', [ClientController::class, 'contact'])->name('client.contact');
        Route::get('/client/download/{id}', [ClientController::class, 'downloadFile'])->name('client.home');
        Route::post('/client/search', [ClientController::class, 'search'])->name('client.search');
    });

    //Logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\ServiceCategoryController;
use App\Http\Controllers\admin\ServiceController;

Route::get('/', [HomeController::class, 'home'])->name('/');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

//    Blog Category
    Route::get('/add-category', [BlogCategoryController::class, 'addCategory'])->name('add-category');
    Route::get('/manage-category', [BlogCategoryController::class, 'manageCategory'])->name('manage-category');
    Route::get('/edit-category/{id}', [BlogCategoryController::class, 'editCategory'])->name('edit-category');
    Route::get('/delete-category/{id}', [BlogCategoryController::class, 'deleteCategory'])->name('delete-category');
    Route::post('/new-blog-category', [BlogCategoryController::class, 'newCategory'])->name('new-blog-category');
    Route::post('/update-blog-category/{id}', [BlogCategoryController::class, 'updateCategory'])->name('update-blog-category');

//    Blog
    Route::get('/add-blog', [BlogController::class, 'addBlog'])->name('add-blog');
    Route::get('/manage-blog', [BlogController::class, 'manageBlog'])->name('manage-blog');
    Route::get('/edit-blog/{id}', [BlogController::class, 'editBlog'])->name('edit-blog');
    Route::get('/delete-blog/{id}', [BlogController::class, 'deleteBlog'])->name('delete-blog');
    Route::post('/new-blog', [BlogController::class, 'newBlog'])->name('new-blog');
    Route::post('/update-blog/{id}', [BlogController::class, 'updateBlog'])->name('update-blog');

//    Service Category
    Route::get('/add-service-category', [ServiceCategoryController::class, 'addCategory'])->name('add-service-category');
    Route::get('/manage-service-category', [ServiceCategoryController::class, 'manageCategory'])->name('manage-service-category');
    Route::get('/edit-service-category/{id}', [ServiceCategoryController::class, 'editCategory'])->name('edit-service-category');
    Route::get('/delete-service-category/{id}', [ServiceCategoryController::class, 'deleteCategory'])->name('delete-service-category');
    Route::post('/new-service-category', [ServiceCategoryController::class, 'newCategory'])->name('new-service-category');
    Route::post('/update-service-category/{id}', [ServiceCategoryController::class, 'updateCategory'])->name('update-service-category');

//    Service
    Route::get('/add-service', [ServiceController::class, 'addService'])->name('add-service');
    Route::get('/manage-service', [ServiceController::class, 'manageService'])->name('manage-service');
    Route::get('/edit-service/{id}', [ServiceController::class, 'editService'])->name('edit-service');
    Route::get('/delete-service/{id}', [ServiceController::class, 'deleteService'])->name('delete-service');
    Route::post('/new-service', [ServiceController::class, 'newService'])->name('new-service');
    Route::post('/update-service/{id}', [ServiceController::class, 'updateService'])->name('update-service');
});

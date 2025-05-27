<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\isAdmin;
use App\Http\Middleware\isUser;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




Route::middleware('auth')->group(function (){
    Route::middleware('isAdmin')->group(function (){
            // ADMIN

        Route::get('/admin', function () {
            return view('admin.index');
        })->name('admin');

        Route::get('/admin/product', [ProductController::class, 'list'])->name('admin.product');
        Route::get('/admin/product/create', [ProductController::class, 'create'])->name('admin.product.create');
        Route::post('/admin/product/insert', [ProductController::class, 'insert'])->name('admin.product.insert');
        Route::get('/admin/product/edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
        Route::put('/admin/product/update/{id}', [ProductController::class, 'update'])->name('admin.product.update');
        Route::delete('/admin/product/delete/{id}', [ProductController::class, 'delete'])->name('admin.product.delete');



        Route::get('/admin/category', [\App\Http\Controllers\CategoryController::class, 'list'])->name('admin.category');
        Route::get('/admin/category/create', [\App\Http\Controllers\CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/admin/category/insert', [\App\Http\Controllers\CategoryController::class, 'insert'])->name('admin.category.insert');
        Route::get('/admin/category/edit/{id}', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::put('/admin/category/update/{id}', [\App\Http\Controllers\CategoryController::class, 'update'])->name('admin.category.update');
        Route::delete('/admin/category/delete/{id}', [\App\Http\Controllers\CategoryController::class, 'delete'])->name('admin.category.delete');


        Route::get('/admin/ponuda', [\App\Http\Controllers\PonudaMjesecaController::class, 'index'])->name('admin.ponuda');
        Route::get('/admin/ponuda/create', [\App\Http\Controllers\PonudaMjesecaController::class, 'create'])->name('admin.ponuda.create');
        Route::post('/admin/ponuda/insert', [\App\Http\Controllers\PonudaMjesecaController::class, 'insert'])->name('admin.ponuda.insert');
        Route::get('/admin/ponuda/edit/{id}', [\App\Http\Controllers\PonudaMjesecaController::class, 'edit'])->name('admin.ponuda.edit');
        Route::put('/admin/ponuda/update/{id}', [\App\Http\Controllers\PonudaMjesecaController::class, 'update'])->name('admin.ponuda.update');
        Route::delete('/admin/ponuda/delete/{id}', [\App\Http\Controllers\PonudaMjesecaController::class, 'delete'])->name('admin.ponuda.delete');


    });

});

 // GLAVNE STRANICE
Route::get('/', [ProductController::class, "featured"])->name("home");
Route::get('/katalog', [ProductController::class, "katalog"])->name("katalog");
Route::get('/kontakt', function () {
    return view('kontakt');
})->name('kontakt');
Route::post('/kontakt', function () {
    return back()->with('success', 'Poruka je uspješno poslata!');
})->name('kontakt.submit');


Route::get('/{category_id}', [ProductController::class, "category"])->name("product.category");




Route::middleware('auth')->group(function (){
    Route::middleware('isUser')->group(function (){
        Route::get('/product/{product_id}', [ProductController::class, "show"])->name("product.show");
    });
});

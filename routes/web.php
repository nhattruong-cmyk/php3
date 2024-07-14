<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;



// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });


Route::get('/', [HomeController::class, 'index'])->name('home');


// product
Route::get('/products', [ProductController::class, 'products'])->name('products');
Route::get('/search', [ProductController::class, 'search'])->name('products.search');
Route::get('/products/{category_id}', [ProductController::class, 'products'])->name('productsByCategoryId');
Route::get('/products/detail/{product_id}', [ProductController::class, 'detail'])->name('productDetail');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');




//admin
Route::get('/admin', [AdminController::class, 'home'])->name('admin');

Route::get('/product/listproduct', [AdminController::class, 'listproduct'])->name('listproduct');
Route::get('/product/formaddproduct', [AdminController::class, 'formaddproduct'])->name('formaddproduct');
Route::post('/product/insertPro', [AdminController::class, 'insertPro'])->name('insertPro');
Route::get('/product/deletePro/{product_id}', [AdminController::class, 'deletePro'])->name('deletePro');
Route::get('/product/formeditproduct/{product_id}', [AdminController::class, 'formeditproduct'])->name('formeditproduct');
Route::post('/product/updatePro/{id}', [AdminController::class, 'updatePro'])->name('updatePro');
Route::post('/product/deleteSelected', [AdminController::class, 'deleteSelectedProducts'])->name('deleteSelectedProducts');


Route::get('/category/listcategory', [AdminController::class, 'listcategory'])->name('listcategory');
// Route::get('/category/add', [AdminController::class, 'add'])->name('add');
Route::get('/category/formaddcategory', [AdminController::class, 'formaddcategory'])->name('formaddcategory');
Route::post('/category/insertCate', [AdminController::class, 'insertCate'])->name('insertCate');
Route::get('/category/deleteCate/{category_id}', [AdminController::class, 'deleteCate'])->name('deleteCate');
Route::post('/category/deleteSelected', [AdminController::class, 'deleteSelectedCategories'])->name('deleteSelectedCategories');


Route::get('/role/listrole', [AdminController::class, 'listrole'])->name('listrole');
Route::get('/role/formaddrole', [AdminController::class, 'formaddrole'])->name('formaddrole');
Route::post('/role/insertRole', [AdminController::class, 'insertRole'])->name('insertRole');
Route::get('/role/deleteRole/{role_id}', [AdminController::class, 'deleteRole'])->name('deleteRole');
Route::post('/role/deleteSelected', [AdminController::class, 'deleteSelectedRoles'])->name('deleteSelectedRoles');










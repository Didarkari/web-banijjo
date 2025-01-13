<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController\AdminPanel;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ShoppingCartController;
use App\Http\Controllers\AdminController\ProductController;
use App\Http\Controllers\AdminController\CategoryController;
use App\Http\Controllers\AdminController\SubCategoryController;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/product-datails/{id}', [FrontendController::class, 'productDetails'])->name('product.details');



Route::post('/add-to-cart',[ShoppingCartController::class, 'addToCart'])->name('add.to.cart');
Route::get('/user-login',[FrontendController::class, 'userLogin'])->name('user.login');
Route::post('/user-register',[FrontendController::class, 'userRegister'])->name('user.register');
Route::get('/otp/verification/{otp}',[FrontendController::class, 'otpVerification']);
Route::post('/user-login',[FrontendController::class, 'userLoginPost'])->name('user.login.post');
Route::get('/view-cart',[ShoppingCartController::class, 'viewCarts'])->name('view.cart');
Route::get('/checkout',[ShoppingCartController::class, 'checkout'])->name('checkout');
Route::post('/order-store',[ShoppingCartController::class, 'orderStore'])->name('order.store');
Route::post('/cart-update',[ShoppingCartController::class, 'cartUpdate'])->name('cart.update');







// Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->middleware(['auth', 'verified'])->name('dashboard');
    
    Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminPanel::class, 'dashboard'])->name('dashboard');

    //Category-controller
    Route::get('/category/index', [CategoryController::class, 'category'])->name('category.index');
    Route::get('/category/form', [CategoryController::class, 'create'])->name('category.create');

    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    //Sub-category-controller
    Route::get('/sub-category/index', [SubCategoryController::class, 'category'])->name('sub-category.index');
    Route::get('/sub-category/form', [SubCategoryController::class, 'create'])->name('sub-category.create');

    Route::post('/sub-category/store', [SubCategoryController::class, 'store'])->name('sub-category.store');
    Route::get('/sub-category/edit/{id}', [SubCategoryController::class, 'edit'])->name('sub-category.edit');
    Route::put('/sub-category/update/{id}', [SubCategoryController::class, 'update'])->name('sub-category.update');
    Route::get('/sub-category/delete/{id}', [SubCategoryController::class, 'delete'])->name('sub-category.delete');
   
    
     //Product-controller
    Route::get('/product/index', [ProductController::class, 'category'])->name('product.index');
    Route::get('/product/form', [ProductController::class, 'create'])->name('product.create');

    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');


    Route::post('/get/sub-categories', [ProductController::class, 'subCategories'])->name('product.sub-category');


    //product
    Route::get('/my-orders',[ShoppingCartController::class, 'userOrders'])->name('user.orders');
    Route::get('/admin-orders',[ProductController::class, 'adminOrders'])->name('admin.orders');

    
});

require __DIR__.'/auth.php';

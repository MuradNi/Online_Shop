<?php

use App\Http\Controllers\ApiController;

Route::get('/users', [ApiController::class, 'getUsers']);
Route::get('/products', [ApiController::class, 'getProducts']);
Route::get('/orders', [ApiController::class, 'getOrders']);
Route::get('/categories', [ApiController::class, 'getCategories']);
Route::get('/brands', [ApiController::class, 'getBrands']);
Route::get('/carts', [ApiController::class, 'getCarts']);
Route::get('/cart-items', [ApiController::class, 'getCartItems']);
Route::get('/dashboard', [ApiController::class, 'getDashboard']);
Route::get('/login', [ApiController::class, 'getLogin']);
Route::get('/order-items', [ApiController::class, 'getOrderItems']);
Route::get('/payments', [ApiController::class, 'getPayments']);
Route::get('/product-images', [ApiController::class, 'getProductImages']);
Route::get('/product-sizes', [ApiController::class, 'getProductSizes']);
Route::get('/reviews', [ApiController::class, 'getReviews']);
Route::get('/sizes', [ApiController::class, 'getSizes']);

?>
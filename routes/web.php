<?php

use Illuminate\Support\Facades\Route;



// user view
Route::get('/', function () {
    return view('index');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/product-details', function () {
    return view('product-details');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});




// <ul>
// <li class="active"><a href="/">Home</a></li>
// <li><a href="/shop">Shop</a></li>
// <li><a href="/product-details">Product</a></li>
// <li><a href="/cart">Cart</a></li>
// <li><a href="/checkout">Checkout</a></li>
// </ul>

// Route::get('/blog/{name}', function ($name) {
//     return "this is blog page $name";
// });


// Route::get('/blog/{name}/{id}', function ($name, $id) {
//     return "this is blog page $name id: $id";
// });


// // admin view
// Route::get('/admin/login', function () {
//     return "<h1>this is login page</h1>";
// })->name('login');


// // fallback
// Route::fallback(function () {
//     return "ไม่พบหน้าเว็บ";
// });

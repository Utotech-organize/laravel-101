<?php

use Illuminate\Support\Facades\Route;

// Define a variable for the client path
$clientPath = '/clients';


// user view
Route::get('/', function () use ($clientPath) {
    return view($clientPath . '/index');
});

Route::get('/shop', function () use ($clientPath) {
    return view($clientPath . '/shop');
});

Route::get('/product-details', function () use ($clientPath) {
    return view($clientPath . '/product-details');
});

Route::get('/cart', function () use ($clientPath) {
    return view($clientPath . '/cart');
});

Route::get('/checkout', function () use ($clientPath) {
    return view($clientPath . '/checkout');
});



// Define a variable for the admins path
$adminPath = '/admins';

// user view
Route::get('/admins', function () use ($adminPath) {
    return view($adminPath . '/index');
});

Route::get('/admins/sample-page', function () use ($adminPath) {
    return view($adminPath . '/sample-page');
});

Route::get('/admins/product-details', function () use ($adminPath) {
    return view($adminPath . '/product-details');
});

Route::get('/admins/cart', function () use ($adminPath) {
    return view($adminPath . '/cart');
});

Route::get('/admins/checkout', function () use ($adminPath) {
    return view($adminPath . '/checkout');
});

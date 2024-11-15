<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// route: menampilkan semua product
// Route::get("/products", [ProductController::class, "index"]);

Route::resource("products", ProductController::class);

<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProductController::class, 'list'])->name('index');
Route::get('product/{id}', [ProductController::class, 'index'])->name('product');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('cart/delete', [CartController::class, 'deleteFromCart'])->name('cart.delete');
Route::post('cart/get', [CartController::class, 'index'])->name('cart.index');
Route::get('order/place', [CartController::class, 'placeOrder'])->name('order.place');
require __DIR__ . '/auth.php';

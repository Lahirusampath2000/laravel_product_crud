<?php

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

Route::get('/', function () {
$data=App\Models\Product::all();
    return view('welcome')->with('products',$data);
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

Route::Post('/saveProduct', 'App\Http\Controllers\productController@store')->name('saveProduct');

Route::get('/deleteproduct/{id}', 'App\Http\Controllers\productController@deleteproduct');

Route::get('/updateproduct/{id}', 'App\Http\Controllers\productController@updateproductview');

Route::Post('/updateproducts', 'App\Http\Controllers\productController@updateproduct');

Route::get('/user',function(){
    return view('user');
});

Route::get('/searchProducts', 'App\Http\Controllers\productController@searchProduct')->name('searchProducts');

Route::post('/cart/{productId}', 'App\Http\Controllers\CartController@addToCart')->name('addToCart');

Route::get('/cart', 'App\Http\Controllers\CartController@showCart')->name('cart');

Route::post('/remove-from-cart/{productId}', 'App\Http\Controllers\CartController@removeFromCart')->name('removeFromCart');

Route::get('/checkout', 'App\Http\Controllers\CartController@checkout');

Route::get('/user/showProductsByCategory/{category}', 'App\Http\Controllers\productController@showProductsByCategory')->name('showProductsByCategory');
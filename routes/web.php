<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Models\Brand;

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

Route::get('/', [App\Http\Controllers\welcomeController::class, 'render']);

Auth::routes();

Route::resource('product', ProductController::class);

Route::get('/products/{brand?}', [ProductController::class, 'displayBrand'])->name('product.brand');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search', [FrontendController::class, 'searchProducts'])->name('search');

Route::get('/brand', [BrandController::class, 'index'])->name('brand');
Route::get('/brand/{brand_name}/{categoryIds?}/{minValue?}/{maxValue?}', [BrandController::class, 'displayBrand'])->name('brand_product');

Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/category/{category_name}', [CategoryController::class, 'displayCategory'])->name('category_product');

Route::get('/test', function () {
    $brand = Brand::find(1);
    return view('test', compact('brand'));
});

Route::group(['middleware' => ['admin']], function () {
    // Route::get('admin-home', [HomeController::class, 'adminHome'])->name('admin.home');

    // Route::get('products', [ProductController::class, 'index'])->name('product.index');
    // Route::post('products', [ProductController::class, 'store'])->name('product.store');
    // Route::get('products/create', [ProductController::class, 'create'])->name('product.create');
    // Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    // Route::put('products/{product}', [ProductController::class, 'update'])->name('product.update');
    // Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
 });
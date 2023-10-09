<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SaleOrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ImageController;
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
Route::get('private-image/{dir}/{filename}', [ImageController::class, 'displayPrivateImage'])->name('displayImage');

Route::resource('product', ProductController::class);

Route::get('/', [App\Http\Controllers\welcomeController::class, 'render'])->name('welcome');

Auth::routes();

Route::get('/products/{brand?}', [ProductController::class, 'displayBrand'])->name('product.brand');
Route::get('/products/item/{id}', [ProductController::class, 'displayProduct'])->name('product.item');

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

Route::get('/information', function () {
    return view('about.information');
})->name('information');

Route::get('/promotion', [CategoryController::class, 'index'])->name('promotion');
Route::get('/repairandcal', [CategoryController::class, 'index'])->name('repairandcal');
Route::get('/quatation', [CategoryController::class, 'index'])->name('quatation');
Route::get('/aboutus', [CategoryController::class, 'index'])->name('aboutus');

Route::group(['middleware' => ['admin']], function () {
    // Route::get('admin-home', [HomeController::class, 'adminHome'])->name('admin.home');

    // Route::resource('product', ProductController::class);
 });

 Route::group(['middleware' => ['auth']], function () {
    Route::post('/saleOrderFromCart', [SaleOrderController::class, 'cartToSaleOrder'])->name('auth_saleOrder');
    Route::get('/comfirmSaleOrder/{saleOrderId}', [SaleOrderController::class, 'ConfirmSaleOrder'])->name('confirm_saleOrder');
    Route::get('/destroy_cart', [SaleOrderController::class, 'DestroyCart'])->name('destroy_cart');

    Route::resource('saleOrder', SaleOrderController::class);
 });
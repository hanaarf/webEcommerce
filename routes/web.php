<?php

use App\Http\Controllers\Admin\BaseController;
use App\Http\Controllers\Admin\CategoriController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\MerkProdukController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\ProdukImageController;
use App\Http\Controllers\Admin\ProdukSizeController;
use App\Http\Controllers\Admin\ProvinsiController;
use App\Http\Controllers\Admin\TransaksiController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\User\LikeController;
use App\Http\Controllers\User\RatingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// ini akses tamu tidak usah login
Route::controller(FrontController::class)->group(function() {
    Route::get('/', 'index')->name('front.home');
    Route::get('/produk', 'produk')->name('front.produk');
    Route::get('/produk/{slug}', 'produkMerk')->name('front.produk.merk');
    Route::get('/e-commerceQ/{slug}', 'produkCate')->name('front.produk.cate');
    Route::get('/detail/{slug}', 'detailProduk')->name('front.produk.detail');
    Route::get('/search', 'search')->name('front.search');
});

Route::middleware('auth')->group(function(){
    Route::post('/like', [LikeController::class, 'like'])->name('like');
    Route::post('/unlike', [LikeController::class, 'unlike'])->name('unlike');
});

Route::middleware('auth')->group(function () {
    Route::post('/bookmark', [BookmarkController::class, 'toggleBookmark'])->name('bookmark.toggle');
    Route::get('/bookmarks', [BookmarkController::class, 'listBookmark'])->name('bookmarks.list');
});

Route::post('/rate', [RatingController::class, 'rate'])->name('rate');


// ini route admin
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function() {
    Route::controller(BaseController::class)->group(function() {
        Route::get('/home', 'index')->name('index.home');
        Route::get('/data-user', 'dataUser')->name('data.user');
        Route::get('/data-admin', 'dataAdmin')->name('data.admin');
        Route::delete('/data-user/delete', 'deleteUser')->name('data.user.delete');
    });
    Route::controller(CategoriController::class)->group(function() {
        Route::get('/categori', 'index')->name('index.categori');
        Route::post('/categori/create', 'create')->name('categori.create');
        Route::put('/categori/update', 'update')->name('categori.update');
        Route::delete('/categori/delete', 'delete')->name('categori.delete');
    });
    Route::controller(MerkProdukController::class)->group(function() {
        Route::get('/merk', 'index')->name('index.merk');
        Route::post('/merk/create', 'create')->name('create.merk');
        Route::put('/merk/update', 'update')->name('update.merk');
        Route::delete('/merk/delete', 'delete')->name('delete.merk');
    });
    Route::controller(ProdukController::class)->group(function() {
        Route::get('/produk', 'index')->name('index.produk');
        Route::get('/form-produk', 'create')->name('create.produk');
        Route::post('/form-produk/store', 'store')->name('store.produk');
        Route::get('/produk/detail/{slug}', 'detail')->name('detail.produk');
        Route::delete('/produk/delete', 'delete')->name('delete.produk');
        Route::get('/produk/edit/{slug}', 'edit')->name('edit.produk');
        Route::put('/produk/update', 'update')->name('update.produk');
        // Route::put('/produk/update/{slug}', 'updatee')->name('update.produkk');
    });
    Route::controller(ProdukImageController::class)->group(function() {
        Route::get('/produk-image', 'index')->name('produk.image');
        Route::post('/produk-image/create', 'create')->name('produk.image.create');
        Route::delete('/produk-image/delete', 'delete')->name('produk.image.delete');
    });
    Route::controller(ColorController::class)->group(function() {
        Route::get('/color', 'index')->name('color.index');
        Route::post('/color-create', 'create')->name('color.create');
        Route::delete('/color-delete', 'delete')->name('color.delete');
    });
    Route::controller(ProdukSizeController::class)->group(function() {
        Route::get('/produk-size', 'index')->name('produk.size');
        Route::post('/produk-size/create', 'create')->name('produk.size.create');
        Route::delete('/produk-size/delete', 'delete')->name('produk.size.delete');
    });
    Route::controller(ProvinsiController::class)->group(function() {
        Route::get('/provinsi', 'index')->name('provinsi.index');
        Route::post('/provinsi/create', 'create')->name('provinsi.create');
        Route::delete('/provinsi/delete', 'delete')->name('provinsi.delete');
    });
    Route::controller(TransaksiController::class)->group(function() {
        Route::get('/transaksi', 'index')->name('transaksi.index');
    });
});

Route::middleware(['auth', 'isUser'])->group(function() {
    Route::controller(IndexController::class)->group(function() {
        Route::get('/ecommerceQ', 'index')->name('index.ecom');
    });
    Route::controller(CartController::class)->group(function() {
        Route::get('/cart', 'index')->name('cart.index');
        Route::post('/cart/add', 'add')->name('cart.add');
        Route::post('/cart/update', 'update')->name('cart.update');
    });
});
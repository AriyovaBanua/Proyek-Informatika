<?php

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
    return view('welcome');
});

use App\Http\Controllers\LoginController;
// Route::get('/login', [AdminController::class, 'halamanLogin'])->name('login');

// Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.admin_dashboard');

Route::get('/login', [LoginController::class, 'halamanLogin'])->name('login');
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login.submit'); 


use App\Http\Controllers\AdminController;

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// Halaman Admin Users ----------------------------------------------------------------------->
Route::get('/admin/users', [AdminController::class, 'halamanUsers'])->name('admin.users');
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');

Route::get('admin/{username}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('admin/{username}', [AdminController::class, 'update'])->name('admin.update');

Route::delete('admin/{username}', [AdminController::class, 'destroy'])->name('admin.destroy');
Route::get('admin/success', [AdminController::class, 'success'])->name('admin.success');
Route::get('admin/error', [AdminController::class, 'error'])->name('admin.error');
// ------------------------------------------------------------------------------------------->

// Halaman Admin Produk----------------------------------------------------------------------->

use App\Http\Controllers\ProdukController;

Route::get('admin/products', [ProdukController::class, 'index'])->name('produk.index');
Route::get('admin/poducts/create', [ProdukController::class, 'create'])->name('produk.create');
Route::post('admin/products/store', [ProdukController::class, 'store'])->name('produk.store');

Route::get('admin/products/{code}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
Route::put('admin/products/{code}', [ProdukController::class, 'update'])->name('produk.update');
Route::delete('admin/products/{code}', [ProdukController::class, 'destroy'])->name('produk.destroy');

// ------------------------------------------------------------------------------------------->

// Halaman Admin Produk----------------------------------------------------------------------->
use App\Http\Controllers\CustomerController;
Route::get('admin/customers', [CustomerController::class, 'index'])->name('admin.customers');
Route::delete('admin/customer/{email}',  [CustomerController::class, 'destroy'])->name('customer.delete');


// ------------------------------------------------------------------------------------------->

// Halaman Admin Pemesanan----------------------------------------------------------------------->
use App\Http\Controllers\PemesananController;

Route::get('admin/pemesanan', [PemesananController::class, 'index'])->name('pemesanan.index');;
Route::get('admin/pemesanan/Proses', [PemesananController::class, 'halamanProses'])->name('pemesanan.halamanProses');;
Route::get('admin/pemesanan/Dikirim', [PemesananController::class, 'halamanDikirim'])->name('pemesanan.halamanDikrim');;
Route::get('admin/pemesanan/Selesai', [PemesananController::class, 'halamanSelesai'])->name('pemesanan.halamanSelesai');;
Route::get('admin/pemesanan/{status}', [PemesananController::class, 'show'])->name('pemesanan.show');;
Route::post('admin/pemesanan/konfirmasi/{orderId}', [PemesananController::class, 'konfirmasi'])->name('pemesanan.konfirmasi');;
Route::delete('admin/pemesanan/hapus/{orderId}', [PemesananController::class, 'hapus'])->name('pemesanan.hapus');;
// ------------------------------------------------------------------------------------------->


use App\Http\Controllers\PengunjungController;
Route::get('arca_artshop', [PengunjungController::class, 'index'])->name('pengunjung.index');
Route::get('arca_artshop/shop', [PengunjungController::class, 'shop'])->name('pengunjung.shop');
Route::get('arca_artshop/myorder', [PengunjungController::class, 'myorder'])->name('pengunjung.myorder');
Route::get('arca_artshop/shop/view_detail', [PengunjungController::class, 'viewDetail'])->name('pengunjung.shop.view_detail');
Route::get('arca_artshop/shop/view_detail/chart', [PengunjungController::class, 'chart'])->name('pengunjung.shop.view_detail.chart');




// Route::prefix('admin')->middleware('auth')->group(function () {
    
//     Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
//     // ... rute lain yang memerlukan otentikasi ...
// });

// Route::prefix('admin')->middleware('auth')->group(function () {
//     // Routes yang membutuhkan autentikasi untuk area admin

//     Route::get('/', 'AdminController@index')->name('admin.dashboard');

//     // Contoh route untuk halaman Users dalam area admin
//     Route::get('/users', 'AdminUserController@index')->name('admin.users.index');
//     Route::get('/users/create', 'AdminUserController@create')->name('admin.users.create');
//     Route::post('/users', 'AdminUserController@store')->name('admin.users.store');
//     Route::get('/users/{id}/edit', 'AdminUserController@edit')->name('admin.users.edit');
//     Route::put('/users/{id}', 'AdminUserController@update')->name('admin.users.update');
//     Route::delete('/users/{id}', 'AdminUserController@destroy')->name('admin.users.destroy');

//     // ... tambahkan route lain untuk area admin ...

//     // Contoh route untuk halaman profil admin
//     Route::get('/profile', 'AdminProfileController@show')->name('admin.profile.show');
//     Route::put('/profile', 'AdminProfileController@update')->name('admin.profile.update');
// });



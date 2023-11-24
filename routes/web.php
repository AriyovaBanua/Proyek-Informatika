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

use App\Http\Controllers\AdminController;



// Route::get('/login', [AdminController::class, 'halamanLogin'])->name('login');

// Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.admin_dashboard');

Route::get('/login', [AdminController::class, 'halamanLogin'])->name('login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit'); 

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/users', [AdminController::class, 'halamanUsers'])->name('admin.users');
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');

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

use App\Http\Controllers\ProdukController;

Route::get('/arca_artshop', [ProdukController::class, 'index']);


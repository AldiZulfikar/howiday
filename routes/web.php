<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TravelPackageController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TransactionController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\EditPasswordController;
use App\Http\Controllers\ChangePasswordController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('');
// });

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/detail/{slug}', [DetailController::class, 'index'])
    ->name('detail');

Route::post('/checkout/{id}', [CheckoutController::class, 'process'])
    ->name('checkout-process')
    ->middleware(['auth', 'verified']);

Route::get('/checkout/{id}', [CheckoutController::class, 'index'])
    ->name('checkout')
    ->middleware(['auth', 'verified']);

Route::post('/checkout/create/{detail_id}', [CheckoutController::class, 'create'])
    ->name('checkout-create')
    ->middleware(['auth', 'verified']);

Route::get('/checkout/remove/{detail_id}', [CheckoutController::class, 'remove'])
    ->name('checkout-remove')
    ->middleware(['auth', 'verified']);

Route::get('/checkout/confirm/{id}', [CheckoutController::class, 'success'])
    ->name('checkout-success')
    ->middleware(['auth', 'verified']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')
    // ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::resource('paket-travel', TravelPackageController::class);
        Route::resource('galeri-travel', GalleryController::class);
        Route::resource('transaksi', TransactionController::class);
    });

Auth::routes(['verify' => true]);

Route::prefix('edit-user')
    ->middleware(['auth'])
    ->group(function () {
        Route::resource('edit-profile', EditProfileController::class);

        // Route::get('account/password', [PasswordController::class, 'edit'])
        //     ->name('password.edit');
        // Route::patch('account/password', [PasswordController::class, 'update'])
        //     ->name('password.edit');
        Route::get('change-password', [ChangePasswordController::class, 'index'])->name('change-pass');
        Route::post('change-password', [ChangePasswordController::class, 'store'])->name('change.password');
    });

// Route::get('/edit-profile/password', [EditProfileController::class, 'pass'])
//     ->name('edit-password')
//     ->middleware(['auth']);

// Route::get('/password', function () {
//     return view('pages.edit-profile.edit-password');
// })->name('password');

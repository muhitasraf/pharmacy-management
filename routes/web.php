<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GenericController;
use App\Http\Controllers\MedicineTypeController;
use App\Http\Controllers\PurchaseController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'porcessRegistration']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'porcessLogin']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');

    Route::resource('brands', BrandController::class);
    Route::resource('generic', GenericController::class);
    Route::resource('company', CompanyController::class);
    Route::resource('medicine_type', MedicineTypeController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('purchase', PurchaseController::class);

    Route::post('/purchase/medicine_list', [PurchaseController::class,'medicine_list'])->name('purchase.medicine_list');
    Route::post('/purchase/single_brand', [PurchaseController::class,'single_brand'])->name('purchase.single_brand');

});

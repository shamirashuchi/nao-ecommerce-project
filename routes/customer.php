<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerAuthController;

Route::get('/customer/login',[CustomerAuthController::class,'login'])->name('customer.login');
Route::post('/customer/login',[CustomerAuthController::class,'loginCheck'])->name('customer.login');
Route::get('/customer/register',[CustomerAuthController::class,'register'])->name('customer.register');
Route::post('/customer/register',[CustomerAuthController::class,'newCustomer'])->name('customer.register');


Route::middleware(['customer'])->group(function (){
    Route::get('/customer-dashboard',[CustomerAuthController::class,'dashboard'])->name('customer.dashboard');
    Route::get('/customer/logout',[CustomerAuthController::class,'logout'])->name('customer.logout');
});

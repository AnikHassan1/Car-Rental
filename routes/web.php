<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleWare;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\RentalController;
use App\Http\Controllers\Frontend\pageController;
use App\Http\Controllers\Admin\customerController;
use App\Http\Controllers\Frontend\RenFronContoller;



// Auth Page
Route::get('/SignUp',[pageController::class,'SignUp']);
Route::get('/login-page',[pageController::class,'Login']);
Route::get('/forget',[pageController::class,'ResetPage']);
// Auth Post Route
Route::post('/SignUp-User',[customerController::class,'SignUpUser']);
Route::post('/login-User',[customerController::class,'LoginUser']);
Route::post('/reset-Password',[customerController::class,'ResetPassword']);

// Pages Route
Route::get('/',[pageController::class,'AdminPage']);
Route::get('/homePage',[pageController::class,'HomePage']);
Route::get('/details/{id}',[pageController::class,'DetailsPage']);

Route::get('/customerPages',[pageController::class,'CustomerPages']);
Route::get('/dashboard',[pageController::class,'Dashboard']);
Route::get('/carPage',[pageController::class,'CarPage']);
Route::get('/rentalsPages',[RentalController::class,'RentalsPage']);
Route::get('/contact',[pageController::class,'ContactPage']);
Route::get('/rentals',[pageController::class,'RentalPage']);
Route::get('/about',[pageController::class,'AboutPage']);
// Car Route
Route::get('/cars',[CarController::class,'CarList']);
Route::post('/carsId',[CarController::class,'CarId']);
Route::post('/Car-Create',[CarController::class,'CreateCar']);
Route::post('/Car-update',[CarController::class,'updateCar']);
Route::post('/Car-delete',[CarController::class,'deleteCar']);

//contact Route
Route::post('/contact',[CarController::class,'contact']);

// Rent View 
Route::get('/Rentview/{id}',[pageController::class,'RentalPages']);
Route::post('/rentConfirm',[RenFronContoller::class,'RentalPages']);
//Bill
Route::get('pay',[pageController::class,'billPay']);

Route::post('/delet-rent',[RentalController::class,'DeleteRental']);
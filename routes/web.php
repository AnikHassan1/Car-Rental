<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
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
Route::get('/userLogOut',[pageController::class,'userLogOut']);
// Auth Post Route
Route::post('/SignUp-User',[customerController::class,'SignUpUser']);
Route::post('/login-User',[customerController::class,'LoginUser']);
Route::post('/reset-Password',[customerController::class,'ResetPassword']);
Route::post('/logout-User',[customerController::class,'Logout']);
// Pages Route
Route::get('/admin',[pageController::class,'AdminPage']);
Route::get('/',[pageController::class,'HomePage']);
Route::get('/details/{id}',[pageController::class,'DetailsPage']);
Route::get('/customerPages',[customerController::class,'userListByrent']);
Route::get('/dashboard',[pageController::class,'Dashboard']);
Route::get('/carPage',[pageController::class,'CarPage']);
Route::get('/rentalsPages',[RentalController::class,'RentalsPage']);
Route::get('/contact',[pageController::class,'ContactPage']);
Route::get('/rentals',[pageController::class,'RentalPage']);
Route::get('/about',[pageController::class,'AboutPage']);
Route::get('/cars-Search',[pageController::class,'carsSearch'])->middleware(AuthMiddleWare::class);
Route::get('/cars',[CarController::class,'CarList']);
// Car Route
Route::post('/carsId',[CarController::class,'CarId']);
Route::post('/Car-Create',[CarController::class,'CreateCar']);
Route::post('/Car-update',[CarController::class,'updateCar']);
Route::post('/Car-delete',[CarController::class,'deleteCar']);
//contact Route
Route::post('/contact',[CarController::class,'contact']);
// Rent View
Route::get('/Rentview/{id}',[pageController::class,'RentalPages']);
Route::post('/rentConfirm',[RenFronContoller::class,'RentalPages'])->middleware(AuthMiddleWare::class);
//Bill
Route::get('/pay/{id}',[pageController::class,'billPay'])->middleware(AuthMiddleWare::class);
Route::get('/rental/{id}',[RenFronContoller::class,'rentalId'])->middleware(AuthMiddleWare::class);
Route::post('/delet-rent',[RentalController::class,'DeleteRental']);

// profile ProfilePage
Route::get('/Profile_Page',[pageController::class,'ProfilePage'])->middleware(AuthMiddleWare::class);
Route::get('/profile-get',[customerController::class,'getProfile'])->middleware(AuthMiddleWare::class);
Route::get('/userId',[customerController::class,'userId'])->middleware(AuthMiddleWare::class);
Route::post('/profile-update',[customerController::class,'ProfileUpdate'])->middleware(AuthMiddleWare::class);
// deshboardList
Route::get('/desh_board',[RentalController::class,'deshboardList']);
Route::get('/date',[RentalController::class,'date']);
// updated Car
Route::post('/carById',[CarController::class,'carIdUpdate']);
// search Car
Route::post('/car-seach-date',[CarController::class,'carSearchDate'])->middleware(AuthMiddleWare::class);
// test

// //Route::get('/send-mail', function () { $toEmail = 'recipient@example.com';
//     // Change to the recipient's email
//      $data = [ 'subject' => 'Test Email from Laravel', 'body' => 'This is a test email sent directly from a route.', ];
//      Mail::raw($data['body'], function ($message) use ($toEmail, $data) { $message->to($toEmail) ->subject($data['subject']); }); return 'Email sent successfully!'; });
//
//delete Customer

Route::post('/deletecustomer',[customerController::class,'deleteCustomer']);
Route::get('/existProfile',[customerController::class,'existProfile']);


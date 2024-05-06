<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\RegistrationController;
use App\Http\Controllers\Frontend\loginAllController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\PostController;





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
Route::get('/index', function(){
    return view('insert');
});
Route::get('/',[HomeController::class,'index']);
Route::post('/contactus',[HomeController::class,'contactus']);

Route::get('Registration',[RegistrationController::class,'Registration']);
Route::post('register',[RegistrationController::class,'register']);

Route::get('/loginAll',[loginAllController::class,'loginAll']);
Route::post('/loginpage',[loginAllController::class,'loginpage']);

Route::get('/signup',[signupController::class,'signup']);
Route::post('/register1',[signupController::class,'register1']);

// Route::get('/dashboard',[dashboardcontroller::class,'datapage']);
// Route::get('/dashboard',[RegistrationController::class,'show']);


Route::post('store',[PostController::class,'store']);
Route::get('dashboard',[PostController::class,'show']);
Route::get('delete/{id}',[PostController::class,'destroy']);
Route::get('edit/{id}',[PostController::class,'edit']);
Route::post('update/{id}',[PostController::class,'update']);
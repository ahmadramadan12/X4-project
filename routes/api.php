<?php

use Illuminate\Http\Request;
use App\http\Controllers\API\MemberController;
use App\http\Controllers\API\TrainerController;
use App\http\Controllers\API\BookingController;
use App\http\Controllers\API\FitnessClassController;
use App\http\Controllers\API\AuthController;
use App\http\Controllers\API\BmiHistoryController;
use App\http\Controllers\API\UserProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/members',[MemberController::class,'index']);
Route::post('/members',[MemberController::class,'store']);


Route::get('/trainers',[TrainerController::class,'index']);
Route::post('/trainers',[TrainerController::class,'store']);


Route::get('/fitnessclasses',[FitnessClassController::class,'index']);
Route::post('/fitnessclasses',[FitnessClassController::class,'store']);


Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);

Route::post('/bmi_histories', [BmiHistoryController::class, 'store']);
Route::get('/bmi_histories', [BmiHistoryController::class, 'index']);

Route::post('/user_profiles',[UserProfileController::class,'store']);
Route::get('/user_profiles',[UserProfileController::class,'index']);


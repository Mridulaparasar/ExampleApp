<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Mridula1Controller;
use App\Http\Controllers\MadhuriController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/testpg', function () {
    return view('test');
});



//Get Student Data
Route::get('/getstud',[TestController::class,'studentslist']);

Route::get('/getstud1',[Mridula1Controller::class,'add']);


Route::get('/testpg1', function () {
    return view('mridula');
});

Route::get('/madhuri', function () {
    return view('madhuri'); 
});
Route::get('/madhuricontroller',[MadhuriController::class,'delete']);
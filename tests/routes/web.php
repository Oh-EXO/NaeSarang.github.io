<?php


use Illuminate\Support\Facades\Route;

//controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SupController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CutieController;
use App\Http\Controllers\SusController;

Route::get('/',[HomeController::class, 'index']);
Route::resource('Sup',SupController::class);
Route::resource('Message',MessageController::class);
Route::resource('Cutie',CutieController::class);
Route::resource('Sus',SusController::class);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



//  Route::view("about",'/about');
// Route::view("contact",'/contact');

// 
Route::get("stud",[UserController::class,'index']);

Route::get("users",[UserController::class,'show']);

Route::get("delete/{id}",[UserController::class,'delete']);

Route::view('add',"addmember");
Route::post("add",[UserController::class,'addData']);

Route::get("edit/{id}",[UserController::class,'showData']);
Route::post("edit",[UserController::class,'update']);
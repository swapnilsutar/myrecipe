<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('master');
});

Route::get('/addrecipe',function(){
    return view('Newrecipe');
});

Route::get('/viewrecipe',function(){
    return view('Viewrecipe');
});
Route::get('/',function(){
    return view('home');
});

Route::get("/viewall",[UserController::class,'index']);

Route::post("addme",[UserController::class,'addData']);

Route::get("delete/{id}",[UserController::class,'delete']);
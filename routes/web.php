<?php

use App\Http\Controllers\Frontend\MainController;
use Illuminate\Support\Facades\Route;

Route::group(['as'=>'frontend'],function (){
    Route::get('/', [MainController::class ,'index']);
});


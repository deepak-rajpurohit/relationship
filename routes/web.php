<?php

use App\Http\Controllers\SellerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('list',[SellerController::class,'list']);

Route::get('manyRel',[SellerController::class,'manyRel']);

Route::get('many-to-one',[SellerController::class,'manyToOne']);

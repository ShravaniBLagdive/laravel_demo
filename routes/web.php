<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('upload', [UploadController::class,'upload']);
// Route::post('upload','upload');
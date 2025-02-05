<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// imp for validator
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\adminController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("test",function(){
    return ["name"=>"Shravani", 'city'=>"Vrindavan"];
});

// url
Route::get("admin",[adminController::class,'list']);

Route::post("add-admin", [adminController::class,'addAdmin']);

Route::put('update-admin', [adminController::class,'updateAdmin']);

Route::delete('delete-admin/{id}', [adminController::class,'deleteAdmin']);

Route::post('upload-image', [adminController::class,'uploadImage']);
<?php

namespace App\Http\Controllers;
use App\Http\Controllers\UploadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function upload(Request $request){
        $path=$request->file('file')->storeAs('public','dummy1.png');
        $fileNameArray=explode("/",$path);
        $fileName=$fileNameArray;
        return view('display',['path'=>$fileName]);
    }
}

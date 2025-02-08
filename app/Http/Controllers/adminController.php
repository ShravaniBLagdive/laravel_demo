<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\Admin;
// use App\Models\image;
use DB;

// hii this is my code 
class adminController extends Controller
{
    public function list() {
        return Admin::all();
        // $admin = new Admin();
        // $admin->id="4";
        // $admin->name="asd";
        // $admin->save();
        // $result = DB::select("select * from admin");
        // print_r($result);
        // return $result()->json;
    }

    // store in db
    public function addAdmin(Request $request){
        // return $request->input();
        $admin = new Admin();
        $admin->id=$request->id;
        $admin->name=$request->name;
        if($admin->save()){
            return ["result"=>"admin added"];
        }
        else{
            return ["result"=>"admin not added"];
        }
    }

    public function updateAdmin(Request $request){
        // return "update admin";
        $admin=Admin::find($request->id);
        $admin->name=$request->name;
        if($admin->save()){
            return["result"=> "admin updated"];
        }
        else{
            return["result"=>"admin not updated"];
        }
    }

    public function deleteAdmin($id){
        // return $id;
        $admin=Admin::destroy($id);
        if($admin){
            return ["result"=>"admin deleted"];
        }
        else{
            return ["result"=>"admin not deleted"];
        }
    }

    public function upload(Request $request){
        $path=$request->file('file')->store('public');
        // $path->store('');
        return $path;
        
        // if($request->file('file') == null){
        //     $file="";
        // }else{
        //     $file= $request->file('file')->store('image');
        // }
    }
}
 
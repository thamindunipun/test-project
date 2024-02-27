<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PostController extends Controller
{
     public function store(Request $request){

        return $request;

        $validate_data=$request->validate([
            'title'=>[''],
            'Description'=>[''],
            'image'=>[''],
        ]);

        $data=Post::create([
            'title'=>$validate_data['title'],
            'Description'=>$validate_data['Description'],
            'image'=>$validate_data['image'],
        ]);

        return response()->json(['data'=>$data,'status'=>'200','message'=>'post created']);
    }
}
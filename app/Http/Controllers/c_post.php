<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 //use App\Http\Controllers\required;
use Illuminate\Support\Facades\Auth;
//use App\Providers\RouteServiceProvider;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\ppost;
use App\category;
use App\User;


class c_post extends Controller
{
    //
    public function showpost(){
   $pposts=ppost::all();  //thats way will bring all data from db;
    	return view("posts.posts",compact("pposts") ); //compact will pass data to view
}

public   function addpost(){

$categories=category::all();
return view("admin.posts",compact("categories"));

}
public function insertpost(Request $request){
$request->validate([
"title"=> "required|min:2",
"content"=>"required|min:12",
"catid"=>"required"],
[
"title.required"=>"please enter title it's required",
"title.min"=>"this field mustn't be less than 2 char",


]);	
$addpost =new ppost;
$addpost->p_title=Request("title");
$addpost->p_content=Request("content");
$addpost->p_user=Auth::id();
$addpost->p_cat=Request("catid");
$addpost->save();
return redirect("/post");
}
}

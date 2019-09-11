<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User\Posts;
use App\Model\User\Categories;
use App\Model\User\Tags;

class HomeController extends Controller
{
     public function index(){

     		$posts = posts::where('status',1)->paginate(5);

    		return view('user/main',compact('posts'));

    }

     public function tag(Tags $tag){

     	$posts = $tag -> posts();
    	return view('user/main',compact('posts'));
    }


    public function category(Categories $category){

    	$posts = $category -> posts();
    	return view('user/main',compact('posts'));

    	

    }
}

<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User\Posts;

class HomeController extends Controller
{
     public function index(){

     		$posts = posts::where('status',1)->paginate(5);

    		return view('user/main',compact('posts'));

    }
}

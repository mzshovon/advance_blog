<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User\Posts;

class PostController extends Controller
{
    public function post(Posts $post){

    		

    	return view('user.post',compact('post'));
    }

   
}

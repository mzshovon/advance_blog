<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
   public function posts(){

    	return $this->belongsToMany('App\Model\user\posts','categories_posts')->paginate(5);
    }

    public function getRouteKeyName(){
    	return 'slug';
    }
}

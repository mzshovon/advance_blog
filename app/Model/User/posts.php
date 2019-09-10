<?php



namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    public function tags(){

    	return $this->belongsToMany('App\Model\user\tags','posts_tags')->withTimestamps();

    }
    public function categories(){

    	return $this->belongsToMany('App\Model\user\categories','categories_posts')->withTImestamps();

    }
}

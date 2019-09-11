<?php



namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    public function posts(){

    	return $this->belongsToMany('App\Model\user\posts','posts_tags')->paginate(5);
    }

    public function getRouteKeyName(){

    	return 'slug';

    }
}

<?php

namespace App\Policies;

use App\Model\Admin\admin;
use App\Model\User\posts;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any posts.
     *
     * @param  \App\Model\User\User  $user
     * @return mixed
     */
    public function viewAny(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can view the posts.
     *
     * @param  \App\Model\User\User  $user
     * @param  \App\Posts  $posts
     * @return mixed
     */
    public function view(admin $user, posts $posts)
    {
        //
    }

    /**
     * Determine whether the user can create posts.
     *
     * @param  \App\Model\User\User  $user
     * @return mixed
     */
    public function create(admin $user)
    {
        return $this->getPermission($user,4);
    }

    /**
     * Determine whether the user can update the posts.
     *
     * @param  \App\Model\User\User  $user
     * @param  \App\posts  $posts
     * @return mixed
     */
    public function update(admin $user)
    {
          return $this->getPermission($user,5);
    }

    /**
     * Determine whether the user can delete the posts.
     *
     * @param  \App\Model\User\User  $user
     * @param  \App\posts  $posts
     * @return mixed
     */
    public function delete(admin $user)
    {
          return $this->getPermission($user,6);

    }

    public function tag(admin $user)
    {
          return $this->getPermission($user,12);

    }

     public function category(admin $user)
    {
          return $this->getPermission($user,11);

    }

    protected function getPermission($user, $p_id){

        foreach ($user->roles as $role) {

            foreach ($role->permissions as $permission) {
                if($permission->id == $p_id){
                    return true;
                }
            }
          
        }
        return false;


    }

    /**
     * Determine whether the user can restore the posts.
     *
     * @param  \App\Model\User\User  $user
     * @param  \App\posts  $posts
     * @return mixed
     */
    public function restore(admin $user, posts $posts)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the posts.
     *
     * @param  \App\Model\User\User  $user
     * @param  \App\posts  $posts
     * @return mixed
     */
    public function forceDelete(admin $user, posts $posts)
    {
        //
    }
}

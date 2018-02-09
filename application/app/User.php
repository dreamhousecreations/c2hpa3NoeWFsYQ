<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The roles that belong to a user
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    /**
     * Gives the exact role of the user
     *
     * @return mixed
     */
    public function role()
    {
        foreach($this->roles as $role)
        {
            $r = $role->name;
        }
        return $r;
    }

    /**
     * Checks the role of the user as per supplied argument
     * @param $r string
     * @return bool
     */
    public function hasRole($r)
    {
        $roles = $this->roles;
        foreach($roles as $role)
        {
            if($r === $role->name)
            {
                return true;
            }
        }
        return false;
    }
}

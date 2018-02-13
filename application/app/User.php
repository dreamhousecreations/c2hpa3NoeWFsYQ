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
        'name', 'email', 'password', 'username', 'avatar',
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
     * Get the title of the role.
     *
     * @return mixed
     */
    public function role()
    {
        foreach($this->roles as $role)
        {
            $r = $role['name'];
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
            if($r === $role['name'])
            {
                return true;
            }
        }
        return false;
    }

    /**
     * The grades that belong to a user
     */
    public function grades()
    {
        return $this->belongsToMany('App\Grade');
    }

    /**
     * Gives
     * @return bool / string
     */
    public function grade()
    {
        if(count($this->grades) > 0){
            foreach($this->grades as $grade)
            {
                $g = $grade['name'];
            }
            return $g;
        }
        else {
            return false;
        }
    }

    /**
     * Has a single user detail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function detail()
    {
        return $this->hasOne('App\UserDetail');
    }

    public function address()
    {
        return $this->hasMany('App\UserAddress');
    }

    public function current_address()
    {
        return $this->address()->where('current', '1');
    }

}

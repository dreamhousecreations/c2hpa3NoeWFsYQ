<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Users that belong to a role
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}

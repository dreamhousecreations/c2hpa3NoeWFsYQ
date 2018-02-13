<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    /**
     * The users that belongs to a grade.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}

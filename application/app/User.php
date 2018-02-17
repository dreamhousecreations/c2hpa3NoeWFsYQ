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
        'name', 'email', 'password', 'username', 'active', 'grade_id'
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
     * Grade related to Model
     * @return mixed Relationship instance.
     */
    public function grade()
    {
        return $this->belongsTo('App\Models\Grade');
    }

    public function classrooms()
    {
        $grade = \App\Models\Grade::find($this->grade->id);
        return $grade->classrooms();
    }

}

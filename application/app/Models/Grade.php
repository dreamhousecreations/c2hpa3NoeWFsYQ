<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
	
	protected $fillable = [
		'name', 'description', 
	];
    /**
     * User related to Model
     * @return mixed Relationship instance.
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }

    /**
     * Classroom related to Model
     * @return mixed Relationship Instance
     */
    public function classrooms()
    {
    	return $this->hasMany('App\Models\Classroom');
    }
}

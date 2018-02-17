<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{

	protected $fillable = [
		'name', 'description', 'slug', 'grade_id',
	];

    /**
     * Grade related to Model
     * @return mixed Relationship Instance
     */
    public function grade()
    {
    	return $this->belongsTo('App\Models\Grade');
    }

    /**
     * Topics related to Model
     * @return mixed Relationship Instance
     */
    public function topics()
    {
        return $this->hasMany('App\Models\Topic');
    }
}

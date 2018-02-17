<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
    	'classroom_id', 'name', 'slug', 'description'
    ];

    /**
     * Classroom related to Model
     * @return mixed Relationship Instance
     */
    public function classroom()
    {
        return $this->belongsTo('App\Models\Classroom');
    }
}

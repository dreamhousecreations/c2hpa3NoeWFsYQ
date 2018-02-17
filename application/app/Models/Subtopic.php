<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subtopic extends Model
{
    protected $fillable = [
    	'topic_id', 'name', 'slug', 'description'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{

    protected $fillable = [
        'country',
        'state',
        'city',
        'address1',
        'address2',
        'current'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

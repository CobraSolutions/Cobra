<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //properties
    protected $fillable = ['user_id', 'service_id'];

    //a post belongs to a user
    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function services()
    {
        return $this->hasMany('App\Service');
    }


}

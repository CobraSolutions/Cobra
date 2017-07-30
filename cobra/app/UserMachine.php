<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //properties
    protected $fillable = ['user_id', 'machine_id'];

    //a post belongs to a user
    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function machines()
    {
        return $this->hasMany('App\Machine');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostLike extends Model
{
    protected $fillable = ['title', 'description', 'type'];

    public function machine()
    {
        return $this->belongsTo('App\Machine');
    }
}

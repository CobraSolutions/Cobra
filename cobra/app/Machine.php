<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //properties
    protected $fillable = ['sap_number', 'product_code', 'product_name', 'type', 'created_by'];

    public function services()
    {
        return $this->hasMany('App\Service');
    }
}

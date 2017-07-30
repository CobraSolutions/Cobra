<?php

namespace App\Http\Controllers;

class WebsiteController
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('index');
    }
}

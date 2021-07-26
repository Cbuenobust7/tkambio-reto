<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    /**
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth.apikey');
    }
}
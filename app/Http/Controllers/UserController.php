<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function adduser()
    {
        return view('auth.register');
    }
}

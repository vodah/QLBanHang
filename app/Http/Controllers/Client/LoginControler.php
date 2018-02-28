<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginControler extends Controller
{
    public function index()
    {
        return view('home1');
    }
}

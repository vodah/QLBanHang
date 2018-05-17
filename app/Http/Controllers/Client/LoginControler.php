<?php

namespace App\Http\Controllers\Client;

use App\Model\lienhe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginControler extends Controller
{
    public function index()
    {
        $lienhe = lienhe::find('1');
        return view('client.login', compact('lienhe'));
    }
}

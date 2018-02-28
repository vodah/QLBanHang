<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\loaihanghoa;

class HomeControler extends Controller
{
    public function index()
    {
        $loai = loaihanghoa::all();
        return view('client.home', compact('loai'));
    }
}

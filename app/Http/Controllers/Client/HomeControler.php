<?php

namespace App\Http\Controllers\Client;

use App\Model\banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\loaihanghoa;

class HomeControler extends Controller
{
    public function index()
    {
        $loai = loaihanghoa::all();
        $banner = banner::all();
        return view('client.home', compact('loai', 'banner'));
    }
}

<?php

namespace App\Http\Controllers\Client;

use App\Model\banner;
use App\Model\nhasanxuat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\loaihanghoa;
use App\Model\hanghoa;

class HomeControler extends Controller
{
    public function index()
    {
        $loai = loaihanghoa::all();
        $banner = banner::all();
        $hanghoa = hanghoa::all();
        $hang = nhasanxuat::all();
        return view('client.home', compact('loai', 'banner', 'hanghoa','hang'));
    }
}

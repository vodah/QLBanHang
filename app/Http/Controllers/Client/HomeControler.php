<?php

namespace App\Http\Controllers\Client;

use App\Model\banner;
use App\Model\nhasanxuat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\loaihanghoa;
use App\Model\hanghoa;
use App\User;

class HomeControler extends Controller
{
    public function index()
    {
        $loai = loaihanghoa::all();
        $banner = banner::all();
        $hanghoa = hanghoa::all();
        $hang = nhasanxuat::all();
        $user = User::find('1');
        return view('client.home', compact('loai', 'banner', 'hanghoa', 'hang','user'));
    }

    public function lienhe()
    {
        $user = User::find('1');

        return view('client.lienhe', compact('user') );
    }

    public function gioithieu()
    {
        return view('client.gioithieu');
    }
}

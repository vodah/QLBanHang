<?php

namespace App\Http\Controllers\Client;

use App\Model\banner;
use App\Model\lienhe;
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
        $lienhe = lienhe::find('1');
        return view('client.home', compact('loai', 'banner', 'hanghoa', 'hang','lienhe'));
    }
    public function sanpham() {
        $loai = loaihanghoa::all();

        $hanghoa = hanghoa::paginate(9);
        $hang = nhasanxuat::all();
        $lienhe = lienhe::find('1');
        return view('client.sanpham', compact('loai', 'hanghoa', 'hang','lienhe'));
    }

    public function lienhe()
    {
        $lienhe = lienhe::find('1');

        return view('client.lienhe', compact('lienhe') );
    }

    public function gioithieu()
    {
        $lienhe = lienhe::find('1');
        return view('client.gioithieu', compact('lienhe'));
    }
}

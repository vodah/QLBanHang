<?php

Route::group(['prefix' => 'admin'], function () {
    Route::get('login', function ($msg = null) {
        return view('admin.auth.login');
    })->name('login');
    Route::post('login', 'Auth\LoginController@postlogin')->name('login.post');


    Auth::routes();


    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', function () {
            return view('layouts.home');
        })->name('home');


        Route::group(['prefix' => 'loaihanghoa'], function () {
            Route::get('/', 'Admin\LoaihanghoaController@index')->name('nhomsp.list');
            Route::get('themmoi', 'Admin\LoaihanghoaController@them')->name('nhomsp.them');
            Route::get('delete/{ID}', 'Admin\LoaihanghoaController@xoa')->name('nhomsp.xoa');
            Route::post('save', 'Admin\LoaihanghoaController@luu')->name('nhomsp.luu');
        });

        Route::group(['prefix' => 'hang'], function (){
            Route::get('/', 'Admin\NhaSanXuatController@index')->name('hang.list');
            Route::get('them', 'Admin\NhaSanXuatController@them')->name('hang.them');
            Route::get('xoa/{id}', 'Admin\NhaSanXuatController@xoa')->name('hang.xoa');
            Route::post('luu', 'Admin\NhaSanXuatController@luu')->name('hang.luu');
        });

        Route::group(['prefix' => 'hanghoa'], function () {
            Route::get('/', 'Admin\HangHoaController@index')->name('loaisp.list');
            Route::get('xoa/{id}', 'Admin\HangHoaController@xoa')->name('loaisp.xoa');
            Route::get('them', 'Admin\HangHoaController@them')->name('loaisp.them');
            Route::get('sua/{id}', 'Admin\HangHoaController@sua')->name('loaisp.sua');
            Route::post('luu', 'Admin\HangHoaController@luu')->name('loaisp.luu');
        });
        Route::group(['prefix' => 'dsdaily'], function () {
            Route::get('/', 'Admin\DanhSachDaiLyController@index')->name('dsdaily.list');
            Route::get('chitiet/{id}', 'Admin\DanhSachDaiLyController@chitiet')->name('dsdaily.chitiet');
            Route::get('them', 'Admin\DanhSachDaiLyController@them')->name('dsdaily.them');
            Route::get('xoa/{id}', 'Admin\DanhSachDaiLyController@xoa')->name('dsdaily.xoa');
            Route::get('sua/{id}', 'Admin\DanhSachDaiLyController@sua')->name('dsdaily.sua');
            Route::post('luu', 'Admin\DanhSachDaiLyController@luu')->name('dsdaily.luu');
        });
        Route::group(['prefix' => 'daily'], function () {
            Route::get('themsp', 'Admin\DaiLyController@themsp')->name('daily.themsp');
        });
        Route::group(['prefix' => 'lienhe'], function () {
            Route::get('/', 'Admin\LienHeController@index')->name('lienhe.chitiet');
            Route::get('sua/{id}', 'Admin\LienHeController@sua')->name('lienhe.sua');
            Route::get('doimatkhau', 'Admin\LienHeController@doimatkhau')->name('lienhe.doimk');
            Route::post('luu', 'Admin\LienHeController@luu')->name('lienhe.luu');

        });
        Route::group(['prefix' => 'banner'], function () {
            Route::get('/', 'Admin\BannerController@index')->name('banner.list');
            Route::get('them', 'Admin\BannerController@them')->name('banner.them');
            Route::get('sua/{id}', 'Admin\BannerController@sua')->name('banner.sua');
            Route::get('xoa/{id}', 'Admin\BannerController@xoa')->name('banner.xoa');
            Route::post('luu', 'Admin\BannerController@luu')->name('banner.luu');
        });
        Route::group(['prefix' => 'caidat'], function (){
           Route::get('thongtin', 'Admin\CauHinhController@thongtin')->name('cauhinh.thongtin');
           Route::get('gioithieu', 'Admin\CauHinhController@gioithieu')->name('cauhinh.gioithieu');
           Route::post('thongtin/luu', 'Admin\CauHinhController@luu')->name('cauhinh.luu');
        });
    });
});
Route::get('/', 'Client\HomeControler@index')->name('home.list');
Route::get('sanpham', 'Client\HomeControler@sanpham')->name('home.sanpham');
Route::get('lienhe', 'Client\HomeControler@lienhe')->name('home.lienhe');
Route::get('gioithieu', 'Client\HomeControler@gioithieu')->name('home.gioithieu');
Route::get('chitiet', 'Client\HomeControler@chitiet')->name('home.chitiet');
Route::get('login', 'Client\LoginControler@index')->name('login.post');


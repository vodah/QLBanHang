<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class loaihanghoa extends Model
{
    protected $table = 'loaihanghoa'; //goi den table loaihanghoa
    protected $fillable = ['id','MaLoaiHH', 'TenLoaiHH']; //lay cac gia tri id,MaLoaiHH,TenLoaiHH
}

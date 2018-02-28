<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class hanghoa extends Model
{
    protected $table = 'hanghoa';

    protected $fillable = ['id','MaHH', 'TenHH', 'LoaiHH', 'TenLoaiHH','SoLuong', 'AnhSP', 'DonGia','updated_at', 'created_at'];
}

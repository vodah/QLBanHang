<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class nhasanxuat extends Model
{
    protected $table = 'nhasanxuat';

    protected $fillable = ['id', 'MaHang', 'TenNhaSanXuat', 'updated_at', 'created_at'];
}

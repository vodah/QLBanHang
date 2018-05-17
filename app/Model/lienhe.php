<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class lienhe extends Model
{
    protected $table = 'lienhe';

    protected $fillable = ['id', 'Ten', 'DiaChi', 'Sdt', 'Email', 'MoTa', 'updated_at', 'created_at'];
}

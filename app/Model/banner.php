<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    protected $table = 'banner';

    protected $fillable = ['id', 'TenBanner', 'MoTa', 'AnhBanner', 'updated_at', 'created_at'];
}

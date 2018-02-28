<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\danhsachdaily;

class DaiLyController extends Controller
{
    public function themsp()
    {
 

    	return view('layouts.client');
    }
}

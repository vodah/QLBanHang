<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\loaihanghoa;
use Illuminate\Validation\Rule;
use App\Http\Requests\loaihanghoaRequest;

class LoaihanghoaController extends Controller
{
    public function index()
    {
    	$loai = loaihanghoa::paginate(10);

    	return view('admin.loaihanghoa.index', compact('loai'));
    	
    }
    public function xoa($id, Request $request)
    {
    	loaihanghoa::find($id)->delete();
    	// $loai->delete();
    	// die($loai);
        $request->session()->flash('status', 'Đã xóa thành công!');
    	return redirect(route('nhomsp.list'));
    }
    public function them()
    {
    	$model = new loaihanghoa();

    	$loai = loaihanghoa::all();

    	return view('admin.loaihanghoa.form', compact('model', 'loai'));
    }
    public function luu(Request $request)
    {

    	$allRequest = $request->all();
        $id = $request->input('id');
    	$TenLoaiHH = $allRequest['TenLoaiHH'];

        $this->validate($request,
            [
                'TenLoaiHH' => ["required",
                            Rule::unique('loaihanghoa')->ignore($id)],
            ],
            [
                'TenLoaiHH.required'=>'Trường này không được để trống',
                'TenLoaiHH.unique'=>'Loại hàng đã tồn tại',
            ]
        );

    	$data = DB::table('loaihanghoa')->select('TenLoaiHH')->get();

    	
    	$MaLoaiHH = crc32 ($TenLoaiHH);
    	if ($MaLoaiHH < 0) {
    		$MaLoaiHH = $MaLoaiHH*(-1);
    	}
    	// echo $MaLoaiHH;
    	$MaLoaiHH = substr($MaLoaiHH, 0, 9);


    	$them = array('MaLoaiHH' => $MaLoaiHH, 'TenLoaiHH' => $TenLoaiHH);

    	$loai = new loaihanghoa();
    	$loai->insert($them);
        $request->session()->flash('status', 'Đã lưu thành công vào CSDL!');

    	return redirect(route('nhomsp.list'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\nhasanxuat;
use Illuminate\Validation\Rule;

class NhaSanXuatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nhasx = nhasanxuat::paginate(10);
        return view('admin.nhasanxuat.index', compact('nhasx'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function them()
    {
        $model = new nhasanxuat();

        $nhasx = nhasanxuat::all();

        return view('admin.nhasanxuat.form', compact('model', 'nhasx'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function xoa($id, Request $request)
    {
        nhasanxuat::find($id)->delete();

        $request->session()->flash('status', 'Đã xóa thành công!');
        return redirect(route('hang.list'));
    }

    public function luu(Request $request)
    {

        $allRequest = $request->all();
        $id = $request->input('id');
        $TenNhaSanXuat = $allRequest['TenNhaSanXuat'];

        $this->validate($request,
            [
                'TenNhaSanXuat' => ["required",
                    Rule::unique('nhasanxuat')->ignore($id)],
            ],
            [
                'TenNhaSanXuat.required'=>'Trường này không được để trống',
                'TenNhaSanXuat.unique'=>'Hãng đã tồn tại',
            ]
        );

        $MaHang = crc32 ($TenNhaSanXuat);
        if ($MaHang < 0) {
            $MaHang = $MaHang*(-1);
        }
        $MaHang = substr($MaHang, 0, 9);

        $them = new nhasanxuat();

        $them->MaHang = $MaHang;
        $them->TenNhaSanXuat = $TenNhaSanXuat;

        $them->save();

        $request->session()->flash('status', 'Đã lưu thành công vào CSDL!'); // hien thi thong bao luu thanh cong cho nguoi dung
        return redirect(route('hang.list'));
    }
}

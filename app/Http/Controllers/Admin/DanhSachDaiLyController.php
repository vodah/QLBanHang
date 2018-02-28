<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\danhsachdaily;
use Illuminate\Validation\Rule;

class DanhSachDaiLyController extends Controller
{
    public function index()
    {
//        $daily = danhsachdaily::all();
        $daily = danhsachdaily::paginate(4);
        // $paginate = danhsachdaily::paginate(3);

        return view('admin.danhsachdaily.index', compact('daily'));
    }

    public function xoa($id, Request $request)
    {
        $daily = danhsachdaily::find($id);
        $daily->delete();
        $request->session()->flash('status', 'Đã xóa thành công!');
        return redirect(route('dsdaily.list'));
    }

    public function them()
    {
        $them = new danhsachdaily();

        $daily = danhsachdaily::all();

        return view('admin.danhsachdaily.from', compact('them', 'daily'));
    }

    public function sua($id)
    {
        $them = danhsachdaily::find($id);
        if (!$them) {
            return redirect(route('dsdaily.list'));
        }
        $daily = danhsachdaily::all();
        return view('admin.danhsachdaily.from', compact('them', 'daily'));

    }

    public function chitiet($id)
    {

        $ten = danhsachdaily::find($id);
        $daily = danhsachdaily::all();
        return view('admin.danhsachdaily.chitiet', compact('ten', 'daily'));
    }

    public function luu(Request $request)
    {
        $all = $request->all();
        $id = $request->input('id');
        $TenDaiLy = $all['TenDaiLy'];
        $Email = $all['Email'];
        $DiaChi = $all['DiaChi'];
        $SDT = $all['SDT'];
        $NVQuanLy = $all['NVQuanLy'];
//        $GhiChu = $all['GhiChu'];
        $date = $all['date'];
        $Password = $all['Password'];

        $this->validate($request,
            [
                'TenDaiLy' => ["required",
                    Rule::unique('daily')->ignore($id)],

                'Email' => ["required", "email",
                    Rule::unique('daily')->ignore($id)],

                'SDT' => ["required",'digits_between:10,11',
                    Rule::unique('daily')->ignore($id)
                ],
                'Password' => "required",
                'DiaChi' => "required",
                'NVQuanLy' => "required",
            ],
            [

                'Email.required' => 'trường này không được để trống',
                'Email.unique' => 'Email này đã tồn tại',
                'Email.email' => 'Không phải Email, nhập lại',
                'SDT.required' => 'Trường này không được để trống',
                'SDT.unique' => 'Số Điện Thoại đã tồn tại trong CSDL',
                'SDT.digits_between' =>'Số điện thoại không đúng',
                'TenDaiLy.required' => 'Trường này không được để trống',
                'TenDaiLy.unique' => 'Tên cửa hàng đã tồn tại',
                'Password.required' => 'Trường này không được để trống',
                'DiaChi.required' => 'Trường này không được để trống',
                'NVQuanLy.required' => 'Trường này không được để trống',

            ]


        );

        if ($id == null) {
            $them = new danhsachdaily();
            $them->NgayDangKy = $date;
        } else {
            $them = danhsachdaily::find($id);
        }
        $MaDL = crc32($TenDaiLy);
        if ($MaDL < 0) {
            $MaDL = $MaDL * (-1);
        }
        $MaDL = substr($MaDL, 0, 9);


        $them->MaDL = $MaDL;
        $them->TenDaiLy = $TenDaiLy;
        $them->Email = $Email;
        $them->DiaChi = $DiaChi;
        $them->SDT = $SDT;
        $them->NVQuanLy = $NVQuanLy;
//        $them->GhiChu = $GhiChu;
        $them->Password = sha1($Password);


        $them->save();
        $request->session()->flash('status', 'Đã lưu thành công vào CSDL!');
        return redirect(route('dsdaily.list'));

    }
}

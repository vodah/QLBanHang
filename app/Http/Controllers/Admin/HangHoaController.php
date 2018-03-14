<?php

namespace App\Http\Controllers\Admin;

use DB;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\hanghoa;
use App\Model\slug;
use Validator;
use File;

class HangHoaController extends Controller
{
    public function index() //lay danh sach tu database
    {
        $hang = hanghoa::paginate(10); //goi den model va lay toan bo du lieu lay duoc gan vao bien $hang
        return view('admin.hanghoa.index', compact('hang')); //tra du lieu select duoc ra ngoai view

    }

    public function xoa($id, Request $request)
    {
        $hang = hanghoa::find($id); //goi den model lay du lieu theo id
        File::delete($hang->AnhSP); //xoa anh trong thu muc uploads
        $hang->delete(); // xoa
        $request->session()->flash('status', 'Đã xóa thành công!'); //hien thi thong bao xoa thanh cong
        return redirect(route('loaisp.list')); //quay tro lai trang sanh sach

    }

    public function them()
    {
        $them = new hanghoa(); //goi model tao 1 du lieu moi
        $slug = "";

        $hang = hanghoa::all(); //goi den model va lay toan bo du lieu lay duoc gan vao bien $hang
        $nhasx = DB::table('nhasanxuat')->get();
        $loaihang = DB::table('loaihanghoa')->get(); //goi model loaihanghoa va gan vao bien $loaihang
        return view('admin.hanghoa.from', compact('them', 'hang', 'loaihang', 'nhasx' , 'slug')); //tra du lieu select duoc ra ngoai view
    }

    public function sua($id)
    {
        $them = hanghoa::find($id); // goi den model va tim lay du lieu theo id lay tu request
        if (!$them) { //kiem tra bien $them co ton tai hay khong
            return redirect(route('loaisp.list')); // neu khong ton tai thi chuyen ve trang list san pham
        }
        $slugObj = Slug::where('TenHH_id', $them->id)->first();
        $slug = $slugObj == null ? "" : $slugObj->slug;

        $hang = hanghoa::all(); //goi den model va lay toan bo du lieu lay duoc gan vao bien $hang
        $loaihang = DB::table('loaihanghoa')->get();//goi model loaihanghoa va gan vao bien $loaihang
        $nhasx = DB::table('nhasanxuat')->get();//goi model loaihanghoa va gan vao bien $loaihang
        return view('admin.hanghoa.from', compact('them', 'hang', 'loaihang', 'nhasx' , 'slug')); //tra du lieu select duoc ra ngoai view
    }

    public function luu(Request $request)
    {
        $all = $request->all(); // lay tat ca du lieu tu from gui len
        $id = $request->input('id'); //gan id tu from vao bien id
        $ten = $all['TenHH']; //gan TenHH vao bien $ten
        $hang = $all['LoaiHH'];//gan LoaiHH vao bien $hang
        $SoLuong = $all['SoLuong'];//gan SoLuong vao bien $SoLuong
        $DonGia = $all['DonGia'];//gan DonGia vao bien $DonGia
        $NhaSanXuat = $all['NhaSanXuat'];
        $slug = $all['slug'];


        $MoTa = $all['MoTa'];//gan MoTa vao bien $MoTa
//        var_dump($all);



        if ($id == null) { // kiem tra id gui len
            $them = new hanghoa(); //goi model tao 1 du lieu moi
            $this->validate($request, //validate du lieu kiem tra du lieu nhap vao
                [
                    'TenHH' => [
                        "required", //khong duoc de trong
                        'unique:hanghoa' // phai la duy nhat
                    ],
                    // 'TenLoaiHH'=>"required",
                    'SoLuong' => ["required", 'numeric'], //khong duoc de trong va du lieu nhap vao phai la so
                    'DonGia' => ["required", 'numeric'],
                    'AnhSP' => ["required"],
                    'MoTa' => ["required"],
                ],
                [
                    'TenHH.required' => 'Không được để trống trường này',
                    'TenHH.unique' => 'Sản Phẩm đã tồn tại',
                    // 'TenLoaiHH.required'=>'Chọn nhóm',
                    'SoLuong.required' => 'Nhập số lượng',
                    'DonGia.required' => 'Nhập giá',
                    'DonGia.numeric' => 'Dữ liệu kiểu số',
                    'SoLuong.numeric' => 'Dữ liệu kiểu số',
                    'AnhSP.required' => 'Thêm ảnh sản phẩm',
                    'MoTa.required' => 'Không được để trống trường này',
                ]

            );
        } else {
            $them = hanghoa::find($id); //goi den model va tim lay du lieu theo id lay tu request
            $this->validate($request,
                [
                    'TenHH' => [
                        "required",
                        // 'unique:hanghoa'
                    ],
                    // 'TenLoaiHH'=>"required",
                    'SoLuong' => ["required", 'numeric'],
                    'DonGia' => ["required", 'numeric'],
                    'MoTa' => ["required"],
                ],
                [
                    'TenHH.required' => 'Không được để trống trường này',
                    // 'TenHH.unique' => 'Sản Phẩm đã tồn tại',
                    // 'TenLoaiHH.required'=>'Chọn nhóm',
                    'SoLuong.required' => 'Nhập số lượng',
                    'DonGia.required' => 'Nhập giá',
                    'DonGia.numeric' => 'Dữ liệu kiểu số',
                    'SoLuong.numeric' => 'Dữ liệu kiểu số',
                    'MoTa.required' => 'Không được để trống trường này',
                ]

            );
        }
        $mahh = crc32($ten); //chuyen $mahh thanh 1 day so nguyen
        if ($mahh < 0) {
            $mahh = $mahh * (-1);
        }
        $NoiBat = isset($_POST["checkbox_NoiBat"]) == true ? $_POST["checkbox_NoiBat"] : "";
        if($NoiBat == null){
            $NoiBat = 0;
        }
        else {
            $NoiBat = 1;
        }

        if ($request->hasFile('AnhSP')) {
            $fileExtension = $request->file('AnhSP')->getClientOriginalExtension();

            $fileName = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension;


            $uploadPath = public_path('uploads');
            
           $request->file('AnhSP')->move($uploadPath, $fileName);

           $them->AnhSP = 'uploads/'. $fileName;


        }


        $mahh = substr($mahh, 0, 9); //lay 9 so tu vi tri 0 den vi tri thu 9
        $hang = DB::table('loaihanghoa')->where('id', $hang)->first(); //gan gia tri theo id trong bang loaihanghoa vao bien $hang
        $hang = $hang->TenLoaiHH; //gan gia tri TenLoaiHH vao bien $hang
        $NhaSanXuat = DB::table('nhasanxuat')->where('id', $NhaSanXuat)->first();
        $NhaSanXuat = $NhaSanXuat->TenNhaSanXuat;

        // $them = array('id'=>$id,'MaHH' => $mahh, 'TenHH' => $ten, 'TenLoaiHH' => $hang, 'SoLuong' => $SoLuong, 'DonGia' => $DonGia, 'MoTa' => $MoTa);
        $them->MaHH = $mahh; //gan gia tri bien $mahh vao MaHH cua bien $them
        $them->TenHH = $ten; //gan gia tri bien $ten vao TenHH cua bien $them
        $them->TenLoaiHH = $hang; //gan gia tri bien $hang vao TenLoaiHH cua bien $them
        $them->SoLuong = $SoLuong; //gan gia tri bien $SoLuong vao SoLuong cua bien $them
        $them->DonGia = $DonGia; //gan gia tri bien $ĐonGia vao ĐonGia cua bien $them
        $them->MoTa = $MoTa;
        $them->NoiBat = $NoiBat;
        $them->NhaSanXuat = $NhaSanXuat;
        $them->slug = $slug;


        $them->save(); //luu gia tri cua bien $them vao database
        $request->session()->flash('status', 'Đã lưu thành công vào CSDL!'); // hien thi thong bao luu thanh cong cho nguoi dung

//        Slug::saveSlug( $them->id, $request->input('slug'));
        return redirect(route('loaisp.list')); //quay tro lai trang sanh sach

    }
}

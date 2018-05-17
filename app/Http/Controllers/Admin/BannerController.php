<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use  App\Model\banner;
use Validator;
use File;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $banner = banner::paginate('10');

        return view('admin.banner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function them()
    {
        $them = new banner();

        $banner = banner::all();


        return view('admin.banner.from', compact('them', 'banner'));
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
    public function sua($id)
    {
        $them = banner::find($id);
        if (!$them) {
            return redirect(route('banner.list'));
        }
        $banner = banner::all();
        return view('admin.banner.from', compact('them', 'banner'));

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
        $banner = banner::find($id);
        File::delete($banner->AnhBanner);
        $banner->delete();
        $request->session()->flash('status', 'Đã xóa thành công!');
        return redirect(route('banner.list'));
    }

    public function luu( Request $request)
    {
        $all = $request->all();
        $id = $request->input('id');
        $TenBanner = $all['TenBanner'];
        $MoTa = $all['MoTa'];




        if($id == null){
            $them = new banner();
            $this->validate($request,
                [
                    'TenBanner' => 'required',
                    'AnhBanner' => ['required'],
                ],
                [
                    'TenBanner.required' => 'Không được để trống trường này',
                    'AnhBanner.required' => 'Không được để trống trường này',

                ]

            );

        }
            else{
            $them = banner::find($id);
                $this->validate($request,
                    [
                        'TenBanner' => 'required',

                    ],
                    [
                        'TenBanner.required' => 'Không được để trống trường này',

                    ]

                );
            }

        if ($request->hasFile('AnhBanner')) {
            $originalFileName = $request->file('AnhBanner')->getClientOriginalName();
            $fileExtension = $request->file('AnhBanner')->getClientOriginalExtension();

            $fileName = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension;


            $uploadPath = public_path('uploads');

            $request->file('AnhBanner')->move($uploadPath, $fileName);

            $them->AnhBanner = 'uploads/'. $fileName;


        }

        $them->TenBanner = $TenBanner;
        $them->MoTa = $MoTa;

        $them->save();

        $request->session()->flash('status', 'Đã lưu thành công vào CSDL!'); // hien thi thong bao luu thanh cong cho nguoi dung
        return redirect(route('banner.list'));


    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use  App\Model\banner;
use Validator;

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


        return view('admin.banner.form', compact('them', 'banner'));
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
    public function destroy($id)
    {
        //
    }

    public function luu( Request $request)
    {
        $all = $request->all();
        $id = $request->input('id');
        $TenBanner = $all['TenBanner'];
        $MoTa = $all['MoTa'];


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

        if($id == null){
            $them = new banner();

        }
            else{
            $them = banner::find($id);
            }

        if ($request->hasFile('AnhBanner')) {
            $fileExtension = $request->file('AnhBanner')->getClientOriginalExtension();

            $fileName = $TenBanner . "_" . time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension;


            $uploadPath = public_path('uploads');

            $request->file('AnhBanner')->move($uploadPath, $fileName);

            $them->AnhBanner = 'uploads/'. $fileName;


        }

        $arr = array('TenBanner' => $TenBanner, 'MoTa' => $MoTa, 'AnhBanner' => $them->AnhBanner);
        $them->insert($arr);

        $request->session()->flash('status', 'Đã lưu thành công vào CSDL!'); // hien thi thong bao luu thanh cong cho nguoi dung
        return redirect(route('banner.list'));


    }
}

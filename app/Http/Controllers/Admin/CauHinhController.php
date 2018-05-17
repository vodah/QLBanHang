<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\lienhe;

class CauHinhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function luu(Request $request)
    {
        $all = $request->all();
        $Ten = $all['Ten'];
        $Email = $all['Email'];
        $DiaChi = $all['DiaChi'];
        $Sdt = $all['Sdt'];
        $MoTa = $all['MoTa'];
//

        $this->validate($request,
            [
                'Ten' => ["required"],
                'DiaChi' => ["required"],
                'Email' => ["required", 'email'],
                'Sdt' => ["required", 'numeric'],

                'MoTa' => ["required"],
            ],
            [
                'Ten.required' => 'Không được để trống trường này',
                'DiaChi.required' => 'Không được để trống trường này',
                'Email.required' => 'Không được để trống trường này',
                'Email.email' => 'Trường nhập vào phải là email',
                'Sdt.required' => 'Không được để trống trường này',
                'Sdt.numeric' => 'dữ liệu kiểu số',
                'MoTa.required' => 'Không được để trống trường này',
            ]

        );

        $sua = lienhe::find('1');

        $sua->Ten = $Ten;
        $sua->Email = $Email;
        $sua->DiaChi = $DiaChi;
        $sua->Sdt = $Sdt;
        $sua->MoTa = $MoTa;

        $sua->save();
        $request->session()->flash('status', 'Đã Cập nhật thành công!');
        return redirect(route('home'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

//    public function thongtin(){
//        $lienhe = lienhe::all();
//        return view('admin.lienhe.thongtin', compact('lienhe'));
//    }

    public function thongtin()
    {
        $sua = lienhe::find('1');
        $tt = 1;

        return view('admin.lienhe.form2', compact('sua', 'tt'));
    }

    public function gioithieu()
    {
        $sua = lienhe::find('1');
        $tt = 0;

        return view('admin.lienhe.form2', compact('sua', 'tt'));
    }
}

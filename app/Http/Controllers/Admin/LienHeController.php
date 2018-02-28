<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;


class LienHeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lienhe = User::all();
        return view('admin.lienhe.index', compact('lienhe'));
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
    public function sua($id)
    {
        $sua = User::find($id);
//        var_dump($sua);
        if (!$sua) {
            return redirect(route('lienhe.chitiet')); // neu khong ton tai thi chuyen ve trang list san pham
        }
        return view('admin.lienhe.form', compact('sua'));
    }

    public function doimatkhau(Request $rq)
    {
        $all = $rq->all();
//        $id = $all['id'];
//        $id_check = $rq->input('id_check');
        var_dump($all);
//        die('123');
    }

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
        $id = $request->input('id');
        $name = $all['name'];
        $email = $all['email'];
        $address = $all['DiaChi'];
        $phone = $all['phone'];
        $password = $all['password'];

        $this->validate($request,
            [
                'name' => ["required"],
                'email' => ["required", 'email'],
                'phone' => ["required", 'numeric'],

                'password' => ["required"],
            ],
            [
                'name.required' => 'Không được để trống trường này',
                'email.required' => 'Không được để trống trường này',
                'email.email' => 'Nhập không đúng định dạng email',
                'phone.required' => 'Không được để trống trường này',
                'phone.numeric' => 'số điện thoại chỉ bao gồm số',
//                'address.required' => 'Không được để trống trường này',
                'password.required' => 'Nhập mật khẩu để thực hiện thay đổi'
            ]

        );

        $sua = User::find($id);

        $pass = $sua->password;

        if (Hash::check($password, $pass)) {
            $sua->name = $name;
            $sua->email = $email;
            $sua->address = $address;
            $sua->phone = $phone;
            $sua->password = $pass;

            $sua->save();
            $request->session()->flash('status', 'Đã lưu thành công vào CSDL!');
            return redirect(route('lienhe.chitiet'));
        } else {
            $request->session()->flash('status', 'sai mật khẩu!');
            return view('admin.lienhe.form', compact('sua'));

        }
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
}

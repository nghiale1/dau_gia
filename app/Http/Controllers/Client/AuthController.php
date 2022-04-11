<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nguoidung;
use App\Models\Cuahang;
use Hash;
use Auth;
use Toastr;

class AuthController extends Controller
{
    public function registerView()
    {
        // Toastr::success('Đăng ký tài khoản thành công', 'Thông báo', ["positionClass" => "toast-top-center"]);
        return view('client.auth.register');
    }

    public function registerHandle(Request $request)
    {
        $data = [
            'nd_hoten' => $request->nd_hoten,
            'nd_email' => $request->nd_email,
            'nd_sdt' => $request->nd_sdt,
            'nd_namsinh' => $request->nd_namsinh,
            'nd_diachi' => $request->nd_diachi,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ];

        if ($request->password != $request->re_password) {
            toastr()->error('Mật khẩu không trùng khớp');
            return redirect()->back();
        }
        $userInsert = Nguoidung::insert($data);

        return redirect()->route('login.view');
    }


    public function loginView()
    {
        return view('client.auth.login');
    }

    public function loginHandle(Request $request)
    {
        $arrLogin = [
            'username' => $request->username,
            'password' => $request->password
        ];
        if (Auth::guard('nguoidung')->attempt($arrLogin)) {
            return redirect()->route('user.info');
        } else if (Auth::guard('quantrivien')->attempt($arrLogin)) {
            return redirect()->route('stat.user');
        } else {
            toastr()->error('Sai tài khoản hoặc mật khẩu');
            return redirect()->back();
        }
    }

    public function info()
    {
        $userId = Auth::guard('nguoidung')->user()->nd_id;
        $storeInfo = Cuahang::where('nd_id', $userId)->first();
        return view('client.auth.info', compact('storeInfo'));
    }
}

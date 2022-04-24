<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nguoidung;
use App\Models\Cuahang;
use Hash;
use Auth;
use Toastr;
use Illuminate\Support\Facades\Mail;
use App\Mail\AuthNotify;
use DB;
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
        $userInsert = Nguoidung::insertGetId($data);

        //send mail for authenticate
        $toMail = $request->nd_email;
        $link = url('/').'/xac-thuc/'.$userInsert;
        Mail::to($toMail)->send(new AuthNotify($request->nd_hoten,$link));

        return redirect()->route('login.view');
    }


    public function loginView()
    {
        return view('client.auth.login');
    }

    public function authVerify($id) {
        DB::table('nguoidung')->where('nd_id',$id)->update(['nd_trangthai'=> 1]);
        toastr()->success('Tài khoản đã được kích hoạt');
        return redirect()->route('login.view');
    }

    public function loginHandle(Request $request)
    {
        $arrLogin = [
            'username' => $request->username,
            'password' => $request->password
        ];
        $check = Nguoidung::where('username',$request->username)->where('nd_trangthai',0)->first();
        if($check != null) {
            toastr()->error('Tài khoản chưa được kích hoạt');
            return redirect()->back();
        }

        if (Auth::guard('nguoidung')->attempt($arrLogin)) {
            return redirect()->route('user.info');
        } else if (Auth::guard('quantrivien')->attempt($arrLogin)) {
            return redirect()->route('listStore');
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

    public function logout()
    {
        Auth::guard('nguoidung')->logout();
        Auth::guard('quantrivien')->logout();

        return redirect()->route('client.index');
    }
}

<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use DateTime;
use Carbon\Carbon;
class ClientController extends Controller
{
    public function index() {
        $timeNow = Carbon::now();
        $product = DB::table('daugia')
        ->join('sanpham','sanpham.sp_id','daugia.sp_id')
        ->join('hinhanhsanpham','hinhanhsanpham.sp_id','sanpham.sp_id')
        ->where('daugia.dg_thoigianbatdau','<=',new DateTime($timeNow))
        ->where('daugia.dg_thoigianketthuc','>=',new DateTime($timeNow))
        ->where('hinhanhsanpham.hasp_anhdaidien',1)
        ->get();
        return view('client.index', compact('product'));
    }

    public function auditDetail($id) {
        $detail = DB::table('daugia')
        ->join('sanpham','sanpham.sp_id','daugia.sp_id')
        ->join('hinhanhsanpham','hinhanhsanpham.sp_id','sanpham.sp_id')
        ->join('cuahang','cuahang.ch_id','daugia.ch_id')
        ->where('hinhanhsanpham.hasp_anhdaidien',1)
        ->where('daugia.dg_id',$id)
        ->first();

        $imageProduct = DB::table('hinhanhsanpham')->where('sp_id',$detail->sp_id)->get();

        $audit = DB::table('chitietdaugia')->where('dg_id', $id)->orderBy('ctdg_thoigian','desc')->get();
        $maxPrice = DB::table('chitietdaugia')
        ->where('dg_id', $id)
        ->orderBy('ctdg_thoigian','desc')
        ->first();
        return view('client.product.detail', compact('detail','audit','maxPrice','imageProduct'));
    }


    public function storeInfo($id) {
        return view('client.product.store');
    }
}

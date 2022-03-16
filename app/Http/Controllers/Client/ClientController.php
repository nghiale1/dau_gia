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
}

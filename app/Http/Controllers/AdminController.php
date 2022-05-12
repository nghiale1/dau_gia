<?php

namespace App\Http\Controllers;

use App\Models\Cuahang;
use Illuminate\Http\Request;
use DB;
class AdminController extends Controller
{
    public function shoplist(Request $request)
    {
        $shoplist=Cuahang::all();

        return view('shoplist',compact('shoplist'));
    }

    public function listReport(Request $request) {
        $lstReport = DB::table('baocao')->join('nguoidung','nguoidung.nd_id', 'baocao.nd_id')
        ->join('cuahang','cuahang.ch_id','baocao.ch_id')->get();
        return view('admin.report', compact('lstReport'));
    }
}

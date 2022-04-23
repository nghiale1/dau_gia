<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cuahang;
class StoreController extends Controller
{
    public function handleRegisterStore(Request $request) {
        $data = [
            'nd_id' => $request->nd_id,
            'ch_ten' => $request->ch_ten,
            'ch_diachi' => $request->ch_diachi,
            'ch_thongtin' => $request->ch_thongtin
        ];
        $insert = Cuahang::insert($data);
        toastr()->success('Tạo cửa hàng thành công');
        return redirect()->back();
    }

    public function storeDetail() {
        $store = $this->getStore();
        return view('store.index', compact('store'));
    }

        public function listStore()
    {
        $data=Cuahang::all();
        return view('listStore',compact('data'));
    }   
    
    public function updateStore(Request $request,Cuahang $cuahang)
    {
        $cuahang->update($request->all());

        return back();
    }

    public function detailStore(Request $request,Cuahang $cuahang)
    {
        \Session::put('ch_id', $cuahang->ch_id);

        return redirect()->route('stat.user');
    }

    public function info(Request $request)
    {
        $store = $this->getStore();
        return view('store.info', compact('store'));
    }

    public function update(Request $request,Cuahang $cuahang)
    {
        

        $nameFileAvatar = $request->ch_anhdaidien->getClientOriginalName('ch_anhdaidien');
        $request->ch_anhdaidien->move('upload/images/avatar',$nameFileAvatar);

            $nameFileBanner = $request->ch_banner->getClientOriginalName('ch_banner');
        $request->ch_banner->move('upload/images/banner',$nameFileBanner);

        $cuahang->update([
            'ch_ten'=>$request->ch_ten,
            'ch_diachi'=>$request->ch_diachi,
            'ch_thongtin'=>$request->ch_thongtin,
            'ch_banner'=>$request->hasFile('ch_banner') ? 'upload/images/banner/'.$nameFileBanner : $cuahang->ch_banner,
            'ch_anhdaidien'=>$request->hasFile('ch_anhdaidien') ? 'upload/images/avatar/'.$nameFileAvatar : $cuahang->ch_banner,
            'ch_trangthai'=>$request->ch_trangthai
  ]);

        return back();
    }
}

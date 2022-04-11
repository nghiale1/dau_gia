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
}

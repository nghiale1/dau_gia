<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Thuonghieu;
class BrandController extends Controller
{
    public function index() {
        $store = $this->getStore();
        $data = Thuonghieu::where('ch_id', $store->nd_id)->get();
        return view('store.brand.index', compact('data'));
    }
}

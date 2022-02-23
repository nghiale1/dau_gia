<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Cuahang;
use Auth;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getStore() {
        if (Auth::guard('nguoidung')->check()) {
            # code...
            $id = Auth::guard('nguoidung')->user()->nd_id;
            $store = Cuahang::where('nd_id', $id)->first();
            return $store;
        }
    }
}

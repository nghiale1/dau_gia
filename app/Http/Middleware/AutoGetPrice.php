<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AutoGetPrice
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $now = Carbon::now();
        $date = Carbon::now()->subDays(4);
        $daugia = DB::table('daugia')->whereDate('dg_thoigianketthuc', '<=',$now)->where('dg_trangthai',1)->get();

        foreach ($daugia as $key => $value) {
            $chitietdaugia=DB::table('chitietdaugia')->join('daugia','daugia.dg_id','chitietdaugia.dg_id')->where('chitietdaugia.dg_id',$value->dg_id)->orderBy('ctdg_giatien', 'desc')->first();
            if($chitietdaugia){
                DB::table('giohang')->insert([
                    'gh_soluong'=>1,
                    'gh_dongia'=>$chitietdaugia->ctdg_giatien,
                    'nd_id'=>$chitietdaugia->nd_id,
                    'gh_ngaythem'=>$now,
                    'sp_id' => $chitietdaugia->sp_id
                ]);

                DB::table('daugia')->where('dg_id',$value->dg_id)->update([
                    'dg_trangthai'=>3
                ]);

                DB::table('test')->insert(['content'=>$value->dg_id]);
            }

        }
        return $next($request);
    }
}

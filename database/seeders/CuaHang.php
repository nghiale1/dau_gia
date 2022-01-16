<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CuaHang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('cuahang')->insert([
                [
                    'ch_ten'=>'CH1',
                    'ch_diachi'=>'HCM',
                    'ch_thongtin'=>'',
                    'ch_banner'=>'',
                    'ch_anhdaidien'=>'',
                    'ch_trangthai'=>1,
                    'nd_id'=>1
                ],
                [
                    'ch_ten'=>'CH3',
                    'ch_diachi'=>'HN',
                    'ch_thongtin'=>'',
                    'ch_banner'=>'',
                    'ch_anhdaidien'=>'',
                    'ch_trangthai'=>1,
                    'nd_id'=>3
                ],
               
            ]);
        
    }
}
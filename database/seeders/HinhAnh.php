<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class HinhAnh extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('hinhanhsanpham')->insert([
                [
                    'hasp_duongdan'=>'ban-phim.webp',
                    'hasp_anhdaidien'=>1,
                    'hasp_trangthai'=>1,
                    'sp_id'=>1
                ],
                [
                    'hasp_duongdan'=>'chuot.webp',
                    'hasp_anhdaidien'=>1,
                    'hasp_trangthai'=>1,
                    'sp_id'=>2
                ],
                [
                    'hasp_duongdan'=>'man-hinh.webp',
                    'hasp_anhdaidien'=>1,
                    'hasp_trangthai'=>1,
                    'sp_id'=>3
                ],
                [
                    'hasp_duongdan'=>'laptop.webp',
                    'hasp_anhdaidien'=>1,
                    'hasp_trangthai'=>1,
                    'sp_id'=>4
                ],
                [
                    'hasp_duongdan'=>'ao.jpg',
                    'hasp_anhdaidien'=>1,
                    'hasp_trangthai'=>1,
                    'sp_id'=>5
                ],  [
                    'hasp_duongdan'=>'quan.jpg',
                    'hasp_anhdaidien'=>1,
                    'hasp_trangthai'=>1,
                    'sp_id'=>6
                ],  [
                    'hasp_duongdan'=>'that-lung.jpg',
                    'hasp_anhdaidien'=>1,
                    'hasp_trangthai'=>1,
                    'sp_id'=>7
                ],
               
            ]);
        
    }
}
<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DanhMuc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('danhmuc')->insert([
                [
                    'dm_ten'=>'khuyến mãi',
                    'dm_mota'=>'khuyến mãi',
                    'dm_trangthai'=>1,
                    'ch_id'=>1
                ],
                [
                    'dm_ten'=>'khuyến mãi',
                    'dm_mota'=>'khuyến mãi',
                    'dm_trangthai'=>1,
                    'ch_id'=>2
                ],
               
            ]);
        
    }
}
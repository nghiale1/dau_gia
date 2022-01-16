<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DanhMucSanPham extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('danhmuc_sanpham')->insert([
            [
                'dm_id' => 1,
                'sp_id' => 1
            ], [
                'dm_id' => 1,
                'sp_id' => 2
            ], [
                'dm_id' => 1,
                'sp_id' => 3
            ], [
                'dm_id' => 1,
                'sp_id' => 4
            ], [
                'dm_id' => 2,
                'sp_id' => 5
            ], [
                'dm_id' => 2,
                'sp_id' => 6
            ], [
                'dm_id' => 2,
                'sp_id' => 7
            ],

        ]);
    }
}

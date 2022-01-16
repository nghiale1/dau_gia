<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class LoaiSP extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('loaisanpham')->insert([
                [
                    'lsp_ten'=>'bàn phím',
                    'lsp_trangthai'=>1,
                    'ch_id'=>1
                ],
                [
                    'lsp_ten'=>'chuột',
                    'lsp_trangthai'=>1,
                    'ch_id'=>1
                ], [
                    'lsp_ten'=>'màn hình',
                    'lsp_trangthai'=>1,
                    'ch_id'=>1
                ],
                [
                    'lsp_ten'=>'laptop',
                    'lsp_trangthai'=>1,
                    'ch_id'=>1
                ],
// 
                [
                    'lsp_ten'=>'áo',
                    'lsp_trangthai'=>1,
                    'ch_id'=>2
                ],
                [
                    'lsp_ten'=>'quần',
                    'lsp_trangthai'=>1,
                    'ch_id'=>2
                ], [
                    'lsp_ten'=>'phụ kiện',
                    'lsp_trangthai'=>1,
                    'ch_id'=>2
                ],
               
            ]);
        
    }
}
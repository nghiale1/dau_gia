<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class NguoiDung extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('nguoidung')->insert([
                [
                    'username'=>'ND1',
                    'password'=>Hash::make('ND1'),
                    'nd_hoten'=>'ND1',
                    'nd_email'=>'ND1@gmail.com',
                    'nd_sdt'=>'0123456789',
                    'nd_namsinh'=>'1999',
                    'nd_diachi'=>'HCM',
                    'nd_trangthai'=>1,
                ],
                [
                    'username'=>'ND2',
                    'password'=>Hash::make('ND2'),
                    'nd_hoten'=>'ND2',
                    'nd_email'=>'ND2@gmail.com',
                    'nd_sdt'=>'0123456789',
                    'nd_namsinh'=>'1999',
                    'nd_diachi'=>'HP',
                    'nd_trangthai'=>1,
                ],
                [
                    'username'=>'ND3',
                    'password'=>Hash::make('ND3'),
                    'nd_hoten'=>'ND3',
                    'nd_email'=>'ND3@gmail.com',
                    'nd_sdt'=>'0123456789',
                    'nd_namsinh'=>'1999',
                    'nd_diachi'=>'HN',
                    'nd_trangthai'=>1,
                ],
               
            ]);
        
    }
}
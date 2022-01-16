<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {        
        $this->call(NguoiDung::class);
        $this->call(CuaHang::class);
        $this->call(LoaiSP::class);
        $this->call(DanhMuc::class);
        $this->call(SanPham::class);
        $this->call(HinhAnh::class);
        $this->call(DanhMucSanPham::class);
    }
}

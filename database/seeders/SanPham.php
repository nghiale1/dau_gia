<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SanPham extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('sanpham')->insert([
                [
                    'sp_ten'=>'Bàn phím cơ không dây Dare-U EK810G (Red D Switch) (Đen)',
                    'sp_soluong'=>10,
                    'sp_mota'=>'- Màu sắc của bàn phím Đen
                    - Loại kết nối bàn phím Bàn phím không dây|
                    - Kết nối của bàn phím 2.4 GHz Wireless
                    - Kích thước của bàn phím Full size
                    - Loại bàn phím Bàn phím cơ
                    - Red D Switch',
                    'sp_trangthai'=>1,
                    'ch_id'=>1,
                    'lsp_id'=>1
                ],
                [
                    'sp_ten'=>'Chuột máy tính DARE-U EM908',
                    'sp_soluong'=>100,
                    'sp_mota'=>'- Kiểu kết nối: Có dây
                    - Cảm biến: ATG4090
                    - Độ phân giải: 600-6400 DPI
                    - Màu sắc: Đen',
                    'sp_trangthai'=>1,
                    'ch_id'=>1,
                    'lsp_id'=>2
                ], 
                [
                    'sp_ten'=>'Màn hình LCD ASUS ProArt PA248QV (1920 x 1200/IPS/75Hz/5 ms)',
                    'sp_soluong'=>20,
                    'sp_mota'=>'- Kích thước: 24" (1920 x 1200), Tỷ lệ 16:10
                    - Tấm nền IPS, Góc nhìn: 178 (H) / 178 (V)
                    - Tần số quét: 75Hz , Thời gian phản hồi 5 ms
                    - HIển thị màu sắc: 16.7 triệu màu
                    - Cổng hình ảnh: 1 x DisplayPort, 1 x HDMI, 1 x VGA/D-sub',
                    'sp_trangthai'=>1,
                    'ch_id'=>1,
                    'lsp_id'=>3
                ],  [
                    'sp_ten'=>'Laptop Acer Nitro 5 AN515-52-51LW (NH.Q3LSV.002) (15.6" FHD/i5-8300H/8GB/1TB HDD/GTX 1050Ti/Linux/2.4 kg)',
                    'sp_soluong'=>1,
                    'sp_mota'=>'- CPU: Intel Core i5-8300H ( 2.3 GHz - 4.0 GHz / 8MB / 4 nhân, 8 luồng )
                    - Màn hình: 15.6" IPS ( 1920 x 1080 ) , không cảm ứng
                    - RAM: 1 x 8GB DDR4 2666MHz
                    - Đồ họa: Intel UHD Graphics 630 / NVIDIA GeForce GTX 1050Ti 4GB GDDR5
                    - Lưu trữ: 128GB SSD M.2 SATA / 1TB HDD 5400RPM
                    - Hệ điều hành: Linux
                    - Pin: 4 cell 48 Wh Pin liền , khối lượng: 2.4 kg',
                    'sp_trangthai'=>1,
                    'ch_id'=>1,
                    'lsp_id'=>4
                ],  [
                    'sp_ten'=>'Áo Thun Cổ Tròn Đơn Giản Ngân Hà Space Ver16',
                    'sp_soluong'=>100,
                    'sp_mota'=>'Áo Thun Cổ Tròn Đơn Giản Ngân Hà Space Ver16
                    Chất liệu: Cotton Spandex
                    Thành phần : 92% cotton 8% spandex
                    - Thân thiện
                    - Thấm hút thoát ẩm
                    - Mềm mại, ít nhăn
                    - Co giãn tối ưu
                    - Kiểm soát mùi
                    - Điều hòa nhiệt
                    + Họa tiết thêu
                    - HDSD:
                    + Nên giặt chung với sản phẩm cùng màu
                    + Không dùng thuốc tẩy hoặc xà phòng có tính tẩy mạnh
                    + Nên phơi trong bóng râm để giữ sp bền màu',
                    'sp_trangthai'=>1,
                    'ch_id'=>2,
                    'lsp_id'=>5
                ],  [
                    'sp_ten'=>'Quần Dài Jean Skinny Đơn Giản Y Nguyên Bản Ver6',
                    'sp_soluong'=>200,
                    'sp_mota'=>'Quần Dài Jean Skinny Đơn Giản Y Nguyên Bản Ver6
                    Chất liệu: Jean
                    Thành phần: 77% cotton 22% recycle poly 1% spandex
                    - Mềm mịn
                    - Thông thoáng
                    - Bền màu
                    - Wash thời trang
                    - May miếng đắp kim loại sau lưng quần',
                    'sp_trangthai'=>1,
                    'ch_id'=>2,
                    'lsp_id'=>6
                ],  [
                    'sp_ten'=>'PKTT Dây Nịt Đơn Giản M17',
                    'sp_soluong'=>50,
                    'sp_mota'=>'Dây: 100% da bò thật
                    - Bền bỉ
                    - Sang trọng và tinh tế
                    - Dây nịt sử dụng được cả 2 mặt da
                    ---
                    Đầu khóa: Zinc contract
                    (Là một loại hợp kim màu của Kẽm, thêm Nhôm, Đồng, Magie. Có màu trắng xanh ở nhiệt độ thường)
                    - Bề mặt sáng bóng và đẹp
                    - Đặc biệt: không gỉ sét
                    --
                    (*) Được tặng kèm hộp đựng (box) logo ánh kim sang trọng.',
                    'sp_trangthai'=>1,
                    'ch_id'=>2,
                    'lsp_id'=>7
                ], 
               
            ]);
        
    }
}
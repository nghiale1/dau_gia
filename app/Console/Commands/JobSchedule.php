<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class JobSchedule extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daugia:daugia';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $now = Carbon::now();
        $date = $now->subDays(4);
        $daugia = DB::table('daugia')->whereDate('dg_thoigianbatdau', '<=',$now)->whereDate('dg_thoigianketthuc', '>=',$now)->where('dg_trangthai',2)->get();
        foreach ($daugia as $key => $value) {
            $chitietdaugia=DB::table('chitietdaugia')->where('dg_id',$value->dg_id)->orderBy('ctdg_giatien', 'desc')->first();
            DB::table('giohang')->insert([
                'gh_soluong'=>1,
                'gh_dongia'=>$chitietdaugia->ctdg_giatien,
                'nd_id'=>$chitietdaugia->nd_id,
                'gh_ngaythem'=>$now
            ]);

            DB::table('daugia')->where('dg_id',$value->dg_id)->update([
                'dg_trangthai'=>3
            ]);
        }

        //update giỏ hàng
        DB::table('giohang')->whereDate('gh_ngaythem','<=',$date)->delete();
    }
}

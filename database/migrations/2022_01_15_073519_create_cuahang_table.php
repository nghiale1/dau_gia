<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuahangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuahang', function (Blueprint $table) {
            $table->id('ch_id');
            $table->string('ch_ten');
            $table->string('ch_diachi');
            $table->string('ch_thongtin');
            $table->string('ch_banner');
            $table->string('ch_anhdaidien');
            $table->integer('ch_trangthai')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuahang');
    }
}

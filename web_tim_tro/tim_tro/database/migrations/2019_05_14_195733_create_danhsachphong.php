<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDanhsachphong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danhsachphong', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('vi_tri');
            $table->bigInteger('gia_tien');
            $table->Integer('loai_phong');
            $table->Integer('nguoi_dang');
            $table->string('ngay_dang');
            $table->string('anh');
            $table->text('mo_ta');
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
        Schema::dropIfExists('danhsachphong');
    }
}

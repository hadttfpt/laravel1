<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBangDiemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bang_diem', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('maMonHoc');
            $table->foreign('maMonHoc')->references('maMonHoc')->on('mon_hoc');
            $table->integer('rollNo');
            $table->foreign('rollNo')->references('rollNo')->on('sinh_vien');
            $table->double('diem',3,2);
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
        Schema::dropIfExists('bang_diem');
    }
}

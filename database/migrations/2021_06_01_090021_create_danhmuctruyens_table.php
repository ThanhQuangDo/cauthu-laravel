<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanhmuctruyensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danhmuctruyens', function (Blueprint $table) {
            $table->bigIncrements('danhmuc_id');
            $table->string('tendanhmuc');
            $table->string('slug_danhmuc');
            $table->string('motadanhmuc');
            $table->integer('kichhoat');
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
        Schema::dropIfExists('danhmuctruyens');
    }
}

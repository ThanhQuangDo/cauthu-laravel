<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCauthusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cauthus', function (Blueprint $table) {
            $table->bigIncrements('cauthu_id');
            $table->string('tencauthu');
            $table->integer('tuoi');
            $table->string('quoctich');
            $table->string('vitri');
            $table->integer('luong');
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
        Schema::dropIfExists('cauthus');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChitietDethi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiet_dethi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_cauhoi')->unsigned();
            $table->foreign('id_cauhoi')->references('id')->on('cauhoi');
            $table->bigInteger('id_dethi')->unsigned();
            $table->foreign('id_dethi')->references('id')->on('dethi');
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
        Schema::dropIfExists('chitiet_dethi');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tabelstatpekerjaanpend extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('statpekerjaanpends', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('pekerjaan');
            $table->string('pria');
            $table->string('wanita');
            $table->string('jumlah');
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
        //
        Schema::dropIfExists('statpekerjaanpends');
    }
}

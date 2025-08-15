<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('history', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->time('jam');
            $table->integer('kelembapan');
            $table->integer('suhu')->nullable();
            $table->string('status');
        });
    }

    public function down()
    {
        Schema::dropIfExists('history');
    }
};

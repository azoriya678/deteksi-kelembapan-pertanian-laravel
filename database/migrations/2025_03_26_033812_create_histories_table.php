<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    
    public function up()
{
    Schema::create('history', function (Blueprint $table) {
        $table->id();
        $table->date('tanggal');
        $table->time('jam');
        $table->integer('kelembapan');
        $table->integer('suhu');
        $table->string('status');
        $table->dropTimestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('history');
    }


};

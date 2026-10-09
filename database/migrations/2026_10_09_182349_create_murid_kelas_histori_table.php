<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('murid_kelas_histori', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('murid_id');
            $table->string('kelas', 20);
            $table->string('tahun_ajaran', 9);
            $table->date('tanggal_mulai')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('murid_kelas_histori');
    }
};

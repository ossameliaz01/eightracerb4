<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('organisasi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('murid_id');
            $table->string('nama_organisasi', 50);
            $table->string('posisi', 100)->nullable();
            $table->string('periode_mulai', 9)->nullable();
            $table->string('periode_selesai', 9)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('organisasi');
    }
};

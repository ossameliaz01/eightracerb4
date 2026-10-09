<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('prestasi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('murid_id');
            $table->string('nama_prestasi');
            $table->enum('jenjang', ['Sekolah','Kota/Kabupaten','Provinsi','Nasional','Internasional']);
            $table->string('hasil', 150)->nullable();
            $table->date('waktu_pelaksanaan')->nullable();
            $table->string('lokasi', 150)->nullable();
            $table->string('keterangan', 100)->nullable();
            $table->string('link_sertifikat')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prestasi');
    }
};

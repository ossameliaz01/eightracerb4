<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rekomendasi_beasiswa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('murid_id');
            $table->enum('status_rekomendasi', ['Belum Dihitung','Draft','Terpublikasi','Disembunyikan','Data Belum Cukup'])->default('Belum Dihitung');
            $table->longText('ai_request_log')->nullable();
            $table->longText('ai_response_log')->nullable();
            $table->dateTime('dihitung_pada')->nullable();
            $table->unsignedBigInteger('dipublikasikan_oleh')->nullable();
            $table->dateTime('tanggal_publikasi')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rekomendasi_beasiswa');
    }
};

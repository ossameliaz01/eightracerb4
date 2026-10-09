<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rekomendasi_jurusan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('murid_id');
            $table->string('jurusan_disarankan', 150);
            $table->text('alasan_kecocokan')->nullable();
            $table->decimal('skor_kecocokan', 5,2)->nullable();
            $table->enum('status_rekomendasi', ['Draft','Terpublikasi','Disembunyikan'])->default('Draft');
            $table->dateTime('dihitung_pada')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rekomendasi_jurusan');
    }
};

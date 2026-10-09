<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rekomendasi_beasiswa_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rekomendasi_id');
            $table->unsignedBigInteger('beasiswa_id');
            $table->decimal('skor_kecocokan', 5,2);
            $table->text('alasan_kecocokan')->nullable();
            $table->string('estimasi_waktu_apply', 100)->nullable();
            $table->boolean('disembunyikan')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('rekomendasi_beasiswa_detail');
    }
};

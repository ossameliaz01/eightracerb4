<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bantuan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('murid_id');
            $table->string('nama_bantuan', 150)->comment('mis. KIP, PKH, BPNT');
            $table->string('penyelenggara', 100)->nullable()->comment('mis. Pemerintah Pusat, Pemerintah Daerah');
            $table->string('tahun', 9)->nullable();
            $table->boolean('masih_aktif')->default(true);
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bantuan');
    }
};

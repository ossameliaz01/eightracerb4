<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orang_tua', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('murid_id');
            $table->enum('tipe', ['Ayah', 'Ibu'])->comment('Ayah atau Ibu');
            $table->string('nama_lengkap', 150);
            $table->string('nik', 20)->nullable();
            $table->string('tempat_lahir', 100)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('kondisi', ['Hidup', 'Meninggal'])->default('Hidup');
            $table->string('pendidikan_terakhir', 50)->nullable();
            $table->string('pekerjaan', 100)->nullable();
            $table->string('penghasilan_per_bulan', 50)->nullable();
            $table->text('alamat')->nullable();
            $table->string('no_hp', 20)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orang_tua');
    }
};

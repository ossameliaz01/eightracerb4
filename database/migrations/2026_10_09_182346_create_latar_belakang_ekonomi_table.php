<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('latar_belakang_ekonomi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('murid_id');
            $table->string('nama_ayah', 150)->nullable();
            $table->string('nama_ibu', 150)->nullable();
            $table->enum('kondisi_ayah', ['Hidup','Meninggal','Bercerai'])->nullable();
            $table->enum('kondisi_ibu', ['Hidup','Meninggal','Bercerai'])->nullable();
            $table->string('pekerjaan_ayah', 100)->nullable();
            $table->string('pekerjaan_ibu', 100)->nullable();
            $table->string('penghasilan_ayah', 50)->nullable();
            $table->string('penghasilan_ibu', 50)->nullable();
            $table->text('alamat_orangtua')->nullable();
            $table->string('kontak_wa_orangtua', 20)->nullable();
            $table->string('nama_wali', 150)->nullable();
            $table->string('hubungan_wali', 50)->nullable();
            $table->string('kontak_wa_wali', 20)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('latar_belakang_ekonomi');
    }
};

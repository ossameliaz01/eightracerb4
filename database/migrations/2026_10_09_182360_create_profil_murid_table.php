<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profil_murid', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('murid_id')->unique();
            $table->string('foto', 255)->nullable()->comment('path file foto');
            $table->string('nik', 20)->nullable();
            $table->string('no_kk', 20)->nullable();
            $table->string('no_kip', 30)->nullable();
            $table->string('nisn', 20)->nullable();
            $table->string('email', 150)->nullable();
            $table->string('no_hp', 20)->nullable();
            $table->text('alamat_domisili')->nullable();
            $table->string('kecamatan', 100)->nullable();
            $table->string('kota_kabupaten', 100)->nullable();
            $table->string('provinsi', 100)->nullable();
            $table->string('kode_pos', 10)->nullable();
            $table->enum('kebutuhan_khusus', ['Tidak Ada', 'Tuna Netra', 'Tuna Rungu', 'Tuna Wicara', 'Tuna Daksa', 'Lainnya'])->default('Tidak Ada');
            $table->string('transportasi', 50)->nullable();
            $table->integer('jarak_ke_sekolah')->nullable()->comment('dalam meter');
            $table->string('asal_smp', 150)->nullable();
            $table->string('npsn_smp', 20)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profil_murid');
    }
};

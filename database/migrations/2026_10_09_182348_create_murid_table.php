<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('murid', function (Blueprint $table) {
            $table->id();
            $table->string('nisn', 20);
            $table->string('nama_lengkap', 150);
            $table->string('nama_panggilan', 50)->nullable();
            $table->enum('jenis_kelamin', ['L','P'])->nullable();
            $table->string('kelas', 20)->nullable();
            $table->string('angkatan', 9)->nullable();
            $table->string('tempat_lahir', 100)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('agama', 20)->nullable();
            $table->enum('golongan_darah', ['A','B','AB','O','Tidak Diketahui'])->nullable();
            $table->text('alamat_rumah')->nullable();
            $table->enum('tinggal_bersama', ['Orang Tua','Wali','Saudara','Lainnya'])->nullable();
            $table->tinyInteger('anak_ke')->nullable();
            $table->string('hobi')->nullable();
            $table->string('cita_cita')->nullable();
            $table->string('warna_favorit', 50)->nullable();
            $table->string('makanan_favorit', 100)->nullable();
            $table->string('bahasa_keseharian', 50)->nullable();
            $table->string('permainan_online', 100)->nullable();
            $table->string('permainan_offline', 100)->nullable();
            $table->string('no_wa', 20)->nullable();
            $table->string('akun_sosial', 150)->nullable();
            $table->enum('status', ['Aktif','Lulus','Pindah','Keluar'])->default('Aktif');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('murid');
    }
};

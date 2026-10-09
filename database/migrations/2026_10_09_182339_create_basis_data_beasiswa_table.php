<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('basis_data_beasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_beasiswa', 150);
            $table->decimal('durasi_tahun', 3,1)->nullable();
            $table->string('periode_apply', 150)->nullable();
            $table->set('jenjang_berlaku', ['SMA','Kuliah'])->default('SMA,Kuliah');
            $table->enum('status', ['Aktif','Diarsipkan'])->default('Aktif');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('basis_data_beasiswa');
    }
};

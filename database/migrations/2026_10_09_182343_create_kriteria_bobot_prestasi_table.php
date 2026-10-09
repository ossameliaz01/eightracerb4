<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kriteria_bobot_prestasi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kriteria_id');
            $table->enum('jenjang', ['Sekolah','Kota/Kabupaten','Provinsi','Nasional','Internasional']);
            $table->decimal('bobot_persen', 5,2);
        });
    }

    public function down()
    {
        Schema::dropIfExists('kriteria_bobot_prestasi');
    }
};

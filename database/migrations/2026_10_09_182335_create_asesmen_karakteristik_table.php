<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('asesmen_karakteristik', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('murid_id');
            $table->date('tanggal_asesmen');
            $table->string('gaya_belajar', 30)->nullable();
            $table->string('tipe_kepribadian', 30)->nullable();
            $table->string('mapel_favorit', 150)->nullable();
            $table->string('riasec', 20)->nullable();
            $table->string('kelas_peminatan_pilihan', 30)->nullable();
            $table->text('prospek_profil_diri')->nullable();
            $table->smallInteger('iq')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('asesmen_karakteristik');
    }
};

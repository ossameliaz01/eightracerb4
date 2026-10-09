<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('alumni_pt', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('murid_id')->nullable();
            $table->string('nama_lengkap', 150);
            $table->string('kelas', 20)->nullable();
            $table->enum('strata_pendidikan', ['D3','D4','S1'])->nullable();
            $table->string('program_studi', 150)->nullable();
            $table->string('nama_perguruan_tinggi', 200)->nullable();
            $table->enum('jenis_perguruan_tinggi', ['Negeri','Swasta','Kedinasan','Luar Negeri'])->default('Negeri');
            $table->enum('jalur_masuk', ['SNBP','SNBT','PMDP','SIMAMA','SIMAMI','UM PTKIN','ADIK','Mandiri','Tes Kedinasan','Reguler','Undangan','Lainnya']);
            $table->tinyInteger('pilihan_ke')->nullable();
            $table->decimal('nilai_rapor', 5,2)->nullable();
            $table->decimal('skor_utbk', 6,2)->nullable();
            $table->string('kontak_wa', 20)->nullable();
            $table->boolean('pelamar_kipk')->nullable();
            $table->string('tahun_ajaran', 9)->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('alumni_pt');
    }
};

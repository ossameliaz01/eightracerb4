<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('eligibilitas_status', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('murid_id');
            $table->unsignedBigInteger('kriteria_id');
            $table->enum('status', ['Eligible','Tidak Eligible']);
            $table->longText('detail_perhitungan')->nullable();
            $table->dateTime('dihitung_pada');
        });
    }

    public function down()
    {
        Schema::dropIfExists('eligibilitas_status');
    }
};

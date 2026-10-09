<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kriteria_eligibilitas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_program', 100);
            $table->decimal('syarat_minimum_rapor', 5,2)->nullable();
            $table->decimal('syarat_minimum_kehadiran', 5,2)->nullable();
            $table->boolean('syarat_bantuan_sosial')->default(0);
            $table->text('syarat_lainnya')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kriteria_eligibilitas');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kehadiran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('murid_id');
            $table->tinyInteger('semester');
            $table->smallInteger('hadir')->default(0);
            $table->smallInteger('izin')->default(0);
            $table->smallInteger('sakit')->default(0);
            $table->smallInteger('alfa')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('kehadiran');
    }
};

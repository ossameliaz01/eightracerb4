<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kriteria_kelayakan_beasiswa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('beasiswa_id');
            $table->string('kriteria');
        });
    }

    public function down()
    {
        Schema::dropIfExists('kriteria_kelayakan_beasiswa');
    }
};

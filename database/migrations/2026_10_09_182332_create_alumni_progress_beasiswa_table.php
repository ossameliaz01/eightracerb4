<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('alumni_progress_beasiswa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('progress_id');
            $table->string('nama_beasiswa', 150);
        });
    }

    public function down()
    {
        Schema::dropIfExists('alumni_progress_beasiswa');
    }
};

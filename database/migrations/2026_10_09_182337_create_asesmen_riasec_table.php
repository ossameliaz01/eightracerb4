<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('asesmen_riasec', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asesmen_id');
            $table->enum('tipe', ['R','I','A','S','E','C']);
            $table->tinyInteger('urutan');
        });
    }

    public function down()
    {
        Schema::dropIfExists('asesmen_riasec');
    }
};

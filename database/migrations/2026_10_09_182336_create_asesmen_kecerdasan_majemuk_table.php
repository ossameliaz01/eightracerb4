<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('asesmen_kecerdasan_majemuk', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asesmen_id');
            $table->string('kategori', 50);
        });
    }

    public function down()
    {
        Schema::dropIfExists('asesmen_kecerdasan_majemuk');
    }
};

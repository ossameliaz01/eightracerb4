<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('murid_saudara_tiri', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('murid_id');
            $table->string('keterangan');
        });
    }

    public function down()
    {
        Schema::dropIfExists('murid_saudara_tiri');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bantuan_sosial', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('murid_id');
            $table->enum('jenis_bantuan', ['PIP','PKH','KIS','Lainnya']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('bantuan_sosial');
    }
};

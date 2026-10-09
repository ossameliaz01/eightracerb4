<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('catatan_karakter', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('murid_id');
            $table->text('catatan');
            $table->date('tanggal')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('catatan_karakter');
    }
};

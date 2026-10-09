<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('nilai_rapor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('murid_id');
            $table->tinyInteger('semester');
            $table->string('mapel', 50);
            $table->decimal('nilai', 5,2);
        });
    }

    public function down()
    {
        Schema::dropIfExists('nilai_rapor');
    }
};

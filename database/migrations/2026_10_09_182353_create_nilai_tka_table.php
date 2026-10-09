<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('nilai_tka', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('murid_id');
            $table->decimal('nilai_tka', 6,2);
        });
    }

    public function down()
    {
        Schema::dropIfExists('nilai_tka');
    }
};

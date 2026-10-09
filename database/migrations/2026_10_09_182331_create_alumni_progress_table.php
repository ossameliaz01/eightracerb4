<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('alumni_progress', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alumni_pt_id');
            $table->string('periode', 30);
            $table->boolean('penerima_kipk')->default(0);
            $table->decimal('ukt', 12,2)->nullable();
            $table->decimal('ipi', 3,2)->nullable();
            $table->unsignedBigInteger('dicatat_oleh')->nullable();
            $table->dateTime('dicatat_pada');
        });
    }

    public function down()
    {
        Schema::dropIfExists('alumni_progress');
    }
};

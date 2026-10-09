<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('alumni_pt_sertifikat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alumni_pt_id');
            $table->string('nama_sertifikat')->nullable();
            $table->string('link_file')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('alumni_pt_sertifikat');
    }
};

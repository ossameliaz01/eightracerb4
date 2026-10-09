<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Tabel users untuk Eightracer - mencakup role admin & siswa,
     * dukungan login Google, dan pengamanan akun.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 150);
            $table->string('email', 150)->unique();
            $table->string('password_hash', 255)->nullable()->comment('nullable jika akun murni Google OAuth');
            $table->string('google_id', 100)->nullable()->unique();
            $table->string('photo_url', 255)->nullable();
            $table->enum('role', ['admin_sekolah', 'siswa'])->default('siswa');
            $table->unsignedBigInteger('murid_id')->nullable()->comment('FK ke murid, diisi untuk role siswa');
            $table->tinyInteger('failed_login_count')->unsigned()->default(0);
            $table->dateTime('locked_until')->nullable();
            $table->boolean('is_active')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('users');
    }
};

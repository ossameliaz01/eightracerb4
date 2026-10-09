<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Menambahkan semua Foreign Key constraints setelah semua tabel dibuat.
     * Dijalankan terakhir untuk menghindari dependency issue.
     */
    public function up(): void
    {
        // users.murid_id -> murid
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('murid_id')->references('id')->on('murid')->nullOnDelete();
        });

        // alumni_progress
        Schema::table('alumni_progress', function (Blueprint $table) {
            $table->foreign('alumni_pt_id')->references('id')->on('alumni_pt')->cascadeOnDelete();
            $table->foreign('dicatat_oleh')->references('id')->on('users')->nullOnDelete();
        });

        // alumni_progress_beasiswa
        Schema::table('alumni_progress_beasiswa', function (Blueprint $table) {
            $table->foreign('progress_id')->references('id')->on('alumni_progress')->cascadeOnDelete();
        });

        // alumni_pt
        Schema::table('alumni_pt', function (Blueprint $table) {
            $table->foreign('murid_id')->references('id')->on('murid')->nullOnDelete();
            $table->foreign('created_by')->references('id')->on('users')->nullOnDelete();
        });

        // alumni_pt_sertifikat
        Schema::table('alumni_pt_sertifikat', function (Blueprint $table) {
            $table->foreign('alumni_pt_id')->references('id')->on('alumni_pt')->cascadeOnDelete();
        });

        // asesmen_karakteristik
        Schema::table('asesmen_karakteristik', function (Blueprint $table) {
            $table->foreign('murid_id')->references('id')->on('murid')->cascadeOnDelete();
            $table->foreign('created_by')->references('id')->on('users')->nullOnDelete();
        });

        // asesmen_kecerdasan_majemuk
        Schema::table('asesmen_kecerdasan_majemuk', function (Blueprint $table) {
            $table->foreign('asesmen_id')->references('id')->on('asesmen_karakteristik')->cascadeOnDelete();
        });

        // asesmen_riasec
        Schema::table('asesmen_riasec', function (Blueprint $table) {
            $table->foreign('asesmen_id')->references('id')->on('asesmen_karakteristik')->cascadeOnDelete();
        });

        // bantuan_sosial
        Schema::table('bantuan_sosial', function (Blueprint $table) {
            $table->foreign('murid_id')->references('id')->on('murid')->cascadeOnDelete();
        });

        // basis_data_beasiswa
        Schema::table('basis_data_beasiswa', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->nullOnDelete();
        });

        // catatan_karakter
        Schema::table('catatan_karakter', function (Blueprint $table) {
            $table->foreign('murid_id')->references('id')->on('murid')->cascadeOnDelete();
        });

        // eligibilitas_status
        Schema::table('eligibilitas_status', function (Blueprint $table) {
            $table->foreign('murid_id')->references('id')->on('murid')->cascadeOnDelete();
            $table->foreign('kriteria_id')->references('id')->on('kriteria_eligibilitas')->cascadeOnDelete();
        });

        // kehadiran
        Schema::table('kehadiran', function (Blueprint $table) {
            $table->foreign('murid_id')->references('id')->on('murid')->cascadeOnDelete();
        });

        // kriteria_bobot_prestasi
        Schema::table('kriteria_bobot_prestasi', function (Blueprint $table) {
            $table->foreign('kriteria_id')->references('id')->on('kriteria_eligibilitas')->cascadeOnDelete();
        });

        // kriteria_eligibilitas
        Schema::table('kriteria_eligibilitas', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->nullOnDelete();
        });

        // kriteria_kelayakan_beasiswa
        Schema::table('kriteria_kelayakan_beasiswa', function (Blueprint $table) {
            $table->foreign('beasiswa_id')->references('id')->on('basis_data_beasiswa')->cascadeOnDelete();
        });

        // latar_belakang_ekonomi
        Schema::table('latar_belakang_ekonomi', function (Blueprint $table) {
            $table->foreign('murid_id')->references('id')->on('murid')->cascadeOnDelete();
        });

        // murid_kelas_histori
        Schema::table('murid_kelas_histori', function (Blueprint $table) {
            $table->foreign('murid_id')->references('id')->on('murid')->cascadeOnDelete();
        });

        // murid_prestasi_smp
        Schema::table('murid_prestasi_smp', function (Blueprint $table) {
            $table->foreign('murid_id')->references('id')->on('murid')->cascadeOnDelete();
        });

        // murid_saudara_tiri
        Schema::table('murid_saudara_tiri', function (Blueprint $table) {
            $table->foreign('murid_id')->references('id')->on('murid')->cascadeOnDelete();
        });

        // nilai_rapor
        Schema::table('nilai_rapor', function (Blueprint $table) {
            $table->foreign('murid_id')->references('id')->on('murid')->cascadeOnDelete();
        });

        // nilai_tka
        Schema::table('nilai_tka', function (Blueprint $table) {
            $table->foreign('murid_id')->references('id')->on('murid')->cascadeOnDelete();
        });

        // organisasi
        Schema::table('organisasi', function (Blueprint $table) {
            $table->foreign('murid_id')->references('id')->on('murid')->cascadeOnDelete();
        });

        // prestasi
        Schema::table('prestasi', function (Blueprint $table) {
            $table->foreign('murid_id')->references('id')->on('murid')->cascadeOnDelete();
        });

        // rekomendasi_beasiswa
        Schema::table('rekomendasi_beasiswa', function (Blueprint $table) {
            $table->foreign('murid_id')->references('id')->on('murid')->cascadeOnDelete();
            $table->foreign('dipublikasikan_oleh')->references('id')->on('users')->nullOnDelete();
        });

        // rekomendasi_beasiswa_detail
        Schema::table('rekomendasi_beasiswa_detail', function (Blueprint $table) {
            $table->foreign('rekomendasi_id')->references('id')->on('rekomendasi_beasiswa')->cascadeOnDelete();
            $table->foreign('beasiswa_id')->references('id')->on('basis_data_beasiswa')->cascadeOnDelete();
        });

        // rekomendasi_jurusan
        Schema::table('rekomendasi_jurusan', function (Blueprint $table) {
            $table->foreign('murid_id')->references('id')->on('murid')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop all FK constraints — order matters (reverse of up)
        $tables = [
            'rekomendasi_jurusan', 'rekomendasi_beasiswa_detail', 'rekomendasi_beasiswa',
            'prestasi', 'organisasi', 'nilai_tka', 'nilai_rapor', 'murid_saudara_tiri',
            'murid_prestasi_smp', 'murid_kelas_histori', 'latar_belakang_ekonomi',
            'kriteria_kelayakan_beasiswa', 'kriteria_eligibilitas', 'kriteria_bobot_prestasi',
            'kehadiran', 'eligibilitas_status', 'catatan_karakter', 'basis_data_beasiswa',
            'bantuan_sosial', 'asesmen_riasec', 'asesmen_kecerdasan_majemuk',
            'asesmen_karakteristik', 'alumni_pt_sertifikat', 'alumni_pt',
            'alumni_progress_beasiswa', 'alumni_progress', 'users',
        ];

        foreach ($tables as $table) {
            Schema::table($table, function (Blueprint $t) use ($table) {
                $t->dropForeignKeys([]);
            });
        }
    }
};

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class FixMigrations extends Command
{
    protected $signature = 'migrate:fix-pending';
    protected $description = 'Mark physically existing tables as migrated without running SQL';

    public function handle()
    {
        $pending = [
            '2026_10_09_182360_create_profil_murid_table',
            '2026_10_09_182361_create_media_sosial_table',
            '2026_10_09_182362_create_orang_tua_table',
            '2026_10_09_182363_create_bantuan_table',
            '2026_10_09_182364_create_wali_table',
        ];

        $batch = DB::table('migrations')->max('batch') + 1;

        foreach ($pending as $migration) {
            $exists = DB::table('migrations')->where('migration', $migration)->exists();
            if (!$exists) {
                DB::table('migrations')->insert(['migration' => $migration, 'batch' => $batch]);
                $this->info("Marked: $migration");
            } else {
                $this->warn("Already exists: $migration");
            }
        }

        $this->info('Done! All pending migrations marked as ran.');
    }
}

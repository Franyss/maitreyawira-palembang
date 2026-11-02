<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccessSeeder extends Seeder
{
    public function run(): void
    {
        // Gunakan insertOrIgnore agar data yang sudah ada diabaikan
        DB::table('access')->insertOrIgnore([
            ['access_id' => 1, 'access_name' => 'Admin', 'description' => 'Administrator System', 'created_at' => now()],
            ['access_id' => 2, 'access_name' => 'User', 'description' => 'Regular User', 'created_at' => now()],
        ]);
    }
}

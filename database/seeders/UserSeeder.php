<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->updateOrInsert(
            ['email' => 'admin@example.com'], // Patokan pencarian unik (agar tidak duplikat)
            [
                'first_name'           => 'Admin',
                'last_name'            => 'System',
                'access_id'            => 1,
                'status'               => 1,
                'phone'                => '081234567890',
                'password'             => Hash::make('password123'),
                'datetime_created'      => now(),
                'datetime_last_updated' => now(),
            ]
        );
    }
}

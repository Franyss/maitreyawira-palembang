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
        DB::table('user')->insert([
            [
                'first_name'           => 'Admin',
                'last_name'            => 'System',
                'access_id'            => 1, // Menghubungkan ke access_id 1 dari AccessSeeder
                'status'               => 1,
                'phone'                => '081234567890',
                'email'                => 'admin@example.com',
                'password'             => Hash::make('password123'),
                'datetime_created'      => now(),
                'datetime_last_updated' => now(),
            ]
        ]);
    }
}

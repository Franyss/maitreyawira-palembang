<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Contoh jika menggunakan Seeder khusus:
        $this->call([
            AccessSeeder::class,
            UserSeeder::class,
        ]);
    }
}

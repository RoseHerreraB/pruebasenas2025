<?php

namespace Database\Seeders;
use App\Models\Producto;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Producto::factory(100)->create();

        User::factory()->create([
            'name' => 'administrador',
            'email' => 'admin@example.com',
        ]);
    }
}

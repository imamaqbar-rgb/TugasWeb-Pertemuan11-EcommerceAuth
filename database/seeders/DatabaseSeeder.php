<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create(['name' => 'Admin',  'email' => 'admin@test.com',  'role' => 'admin']);
        User::factory()->create(['name' => 'Editor', 'email' => 'editor@test.com', 'role' => 'editor']);
        User::factory()->create(['name' => 'User',   'email' => 'user@test.com',   'role' => 'user']);

        $this->call(CategorySeeder::class);

        Product::factory(60)->create();
    }
}
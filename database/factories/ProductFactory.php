<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        $adjectives = ['Premium', 'Classic', 'Ultra', 'Slim', 'Pro', 'Eco', 'Smart', 'Original'];
        $items = ['Headphone', 'Sepatu Lari', 'Kemeja Flanel', 'Tas Ransel', 'Jam Tangan', 'Keyboard Mekanik',
                  'Botol Minum', 'Lampu Meja', 'Novel Fiksi', 'Powerbank', 'Jaket Hoodie', 'Mouse Wireless'];

        $name = fake()->randomElement($adjectives) . ' ' . fake()->randomElement($items) . ' ' . fake()->unique()->numberBetween(100, 9999);

        return [
            'category_id' => Category::inRandomOrder()->value('id'),
            'user_id'     => User::inRandomOrder()->value('id'),
            'name'        => $name,
            'slug'        => Str::slug($name),
            'description' => fake()->paragraph(),
            'price'       => fake()->numberBetween(20, 5000) * 1000,
            'stock'       => fake()->numberBetween(0, 200),
            'is_active'   => fake()->boolean(90),
        ];
    }
}
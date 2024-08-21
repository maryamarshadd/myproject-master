<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $laptopCategory = Category::where('name', 'Laptops')->first();

        $laptopCategory->products()->createMany([
            [
                'name' => 'MacBook Pro',
                'description' => 'Apple laptop',
                'price' => 1999.99,
                'logo' => 'url-to-logo'
            ],
            [
                'name' => 'Dell XPS 13',
                'description' => 'Dell laptop',
                'price' => 1499.99,
                'logo' => 'url-to-logo'
            ]
        ]);
    }
}

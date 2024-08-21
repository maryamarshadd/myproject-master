<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rootCategory = Category::create(['name' => 'Electronics']);

        $rootCategory->children()->createMany([
            ['name' => 'Laptops'],
            ['name' => 'Mobile Phones']
        ]);
    }
}

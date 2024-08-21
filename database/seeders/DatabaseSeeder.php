<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Clear the users table
        \DB::table('users')->truncate();

        // Call other seeders
        $this->call(UserSeeder::class);
    }
}

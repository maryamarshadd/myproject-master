<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'phone' => '1234567890',
            'password' => Hash::make('password'), // use bcrypt or any hashing method
        ]);

        User::create([
            'name' => 'Another User',
            'email' => 'another@example.com',
            'phone' => '0987654321',
            'password' => Hash::make('password'),
        ]);
    }
}

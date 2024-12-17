<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed the user table
        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'email_verified_at' => now(),
                'password' => bcrypt('password'), // Default password
                'remember_token' => \Illuminate\Support\Str::random(10),
            ]
        );

        // Call the StudentsTableSeeder to seed students data
        $this->call(StudentsTableSeeder::class);

        // Optionally, create additional users if needed
        // User::factory(10)->create();
    }
}

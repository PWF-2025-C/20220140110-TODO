<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
<<<<<<< HEAD
use App\Models\Todo;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
=======
use App\Models\Todo; // Add this import for the Todo model
>>>>>>> d5616eb11ec06e9e3822d6008a972b0fa7adda88
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create the Admin user if it doesn't exist
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
<<<<<<< HEAD
            'is_admin' => true,
        ]);

        User::factory(100) -> create();
        Todo::factory(500) -> create();
=======
            'is_admin' => true, // Set the admin status to true
        ]);

        // Create 100 normal users
        $users = User::factory(100)->create();  // Create users first

        // After users are created, create todos
        Todo::factory(500)->create();
>>>>>>> d5616eb11ec06e9e3822d6008a972b0fa7adda88
    }
}


<?php

namespace Database\Factories;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    protected $model = Todo::class;

    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,  // Assign random user_id from existing users
            'title' => $this->faker->sentence(),
            'is_done' => $this->faker->boolean(),
        ];
    }
}

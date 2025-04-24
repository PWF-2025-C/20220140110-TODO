<?php

namespace Database\Factories;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => rand(1, 100),
            'title' => ucwords(fake()->sentence()),
            'is_done' => rand(0, 1),
=======
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
>>>>>>> d5616eb11ec06e9e3822d6008a972b0fa7adda88
        ];
    }
}

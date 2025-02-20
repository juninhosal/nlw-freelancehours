<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    public function definition(): array
    {
        return [
             'titulo' => collect(fake()->words(5))->join(' '),
             'descripcion' => fake()->randomHtml(),
             'ends_at' => fake()->dateTimeBetween('now', '+1 days'),
             'status' => fake()->randomElement(['open', 'closed']),
             'tech_stack' => fake()->randomElements(['react','php','laravel','vue', 'tailwind', 'javascript', 'nextjs', 'python'], random_int(1, 5)),
             'created_by' => User::factory()
        ];
    }
}

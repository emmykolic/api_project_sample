<?php

namespace Database\Factories;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // @var string

    protected $model = Task::class;

    // @return array

    public function definition(): array
    {
        return [
            'title'=>$this->faker->word,
            'description'=>$this->faker->text,
        ];
    }
}

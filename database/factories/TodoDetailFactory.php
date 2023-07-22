<?php

namespace Database\Factories;

use App\Models\TodoDetail;
use App\Models\TodoCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodoDetailFactory extends Factory
{
    protected $model = TodoDetail::class;

    public function definition()
    {
        return [
            'Title' => $this->faker->sentence,
            'Content' => $this->faker->paragraph,
            'DueDate' => $this->faker->optional()->dateTimeBetween('+1 week', '+1 year')->format('Y-m-d'),
            'CategoryID' => TodoCategory::factory(),
        ];
    }
}

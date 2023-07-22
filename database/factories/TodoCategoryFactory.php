<?php

namespace Database\Factories;

use App\Models\TodoCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodoCategoryFactory extends Factory
{
    protected $model = TodoCategory::class;

    public function definition()
    {
        return [
            'CategoryName' => $this->faker->word,
        ];
    }
}

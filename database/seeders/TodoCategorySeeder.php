<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TodoCategory;

class TodoCategorySeeder extends Seeder
{
    public function run()
    {
        TodoCategory::factory(3)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TodoDetail;

class TodoDetailSeeder extends Seeder
{
    public function run()
    {
        TodoDetail::factory(3)->create();
    }
}

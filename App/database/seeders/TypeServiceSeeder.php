<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypeService;

class TypeServiceSeeder extends Seeder
{
    public function run()
    {
        TypeService::factory()->count(10)->create(); // Create 10 type services
    }
}

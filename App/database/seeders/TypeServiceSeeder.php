<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypeService;

class TypeServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Plan 1 types
        TypeService::create([
            'price' => 45,
            'duration' => 30, // 1 month
            'plan_service_id' => 1, // Assuming plan_service_id 1 for Plan 1
        ]);

        TypeService::create([
            'price' => 229,
            'duration' => 180, // 6 months
            'plan_service_id' => 1, // Assuming plan_service_id 1 for Plan 1
        ]);

        TypeService::create([
            'price' => 400 ,
            'duration' =>  365, // 1 month
            'plan_service_id' => 1, // Assuming plan_service_id 1 for Plan 1
        ]);

        // Plan 2 types
        TypeService::create([
            'price' => 75,
            'duration' => 30, // 1 month
            'plan_service_id' => 2, // Assuming plan_service_id 2 for Plan 2
        ]);

        TypeService::create([
            'price' => 380,
            'duration' => 180, // 6 months
            'plan_service_id' => 2, // Assuming plan_service_id 2 for Plan 2
        ]);

        TypeService::create([
            'price' => 670,
            'duration' => 365, // 12 months
            'plan_service_id' => 2, // Assuming plan_service_id 2 for Plan 2
        ]);
    }
}

<?php

namespace Database\Factories;

use App\Models\TypeService;
use App\Models\PlanService;
use Illuminate\Database\Eloquent\Factories\Factory;

class TypeServiceFactory extends Factory
{
    protected $model = TypeService::class;

    public function definition()
    {
        return [
            'price' => $this->faker->randomFloat(2, 100, 500),
            'duration' => $this->faker->numberBetween(1, 365), // Assuming duration is in days
            'plan_service_id' => PlanService::factory(), // Make sure PlanService factory exists
        ];
    }
}


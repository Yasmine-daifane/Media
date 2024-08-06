<?php

namespace Database\Factories;

use App\Models\PlanService;
use App\Models\Services;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlanServiceFactory extends Factory
{
    protected $model = PlanService::class;

    public function definition()
    {
        return [
            'image' => $this->faker->imageUrl(),
            'video' => $this->faker->url(),
            'link' => $this->faker->url(),
            'services_id' => Services::factory(), // Make sure Services factory exists
        ];
    }
}

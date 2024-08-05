<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PlanService>
 */
class PlanServiceFactory extends Factory
{
    protected $model = PlanService::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => $this->faker->imageUrl(),
            'video' => $this->faker->url,
            'link' => $this->faker->url,
            'services_id' => \App\Models\Services::factory(),
            
        ];
    }
}

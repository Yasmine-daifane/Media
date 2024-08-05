<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TypeService>
 */
class TypeServiceFactory extends Factory
{

    protected $model = TypeService::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'price' => $this->faker->randomFloat(2, 1, 500),
            'duration' => $this->faker->numberBetween(1, 12),
            'created_at' => $this->faker->date,
            'plan_service_id' => \App\Models\PlanService::factory(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserTypeService>
 */
class UserTypeServiceFactory extends Factory
{
    protected $model = UserTypeService::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pricefinal' => $this->faker->randomFloat(2, 1, 1000),
            'date' => $this->faker->date,
            'user_id' => \App\Models\User::factory(),
            'type_service_id' => \App\Models\TypeService::factory(),
        ];
    }
}

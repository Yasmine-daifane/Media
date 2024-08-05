<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RechargeBalance>
 */
class RechargeBalanceFactory extends Factory
{
    protected $model = RechargeBalance::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'duration' => $this->faker->numberBetween(1, 12),
            'date' => $this->faker->date,
            'user_id' => \App\Models\User::factory(),
        ];
    }
}

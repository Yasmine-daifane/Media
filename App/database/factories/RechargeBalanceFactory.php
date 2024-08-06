<?php

namespace Database\Factories;

use App\Models\RechargeBalance;
use Illuminate\Database\Eloquent\Factories\Factory;

class RechargeBalanceFactory extends Factory
{
    protected $model = RechargeBalance::class;

    public function definition()
    {
        return [
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'duration' => $this->faker->numberBetween(1, 12),
            'date' => $this->faker->date,
            'user_id' => \App\Models\User::factory(),
        ];
    }
}

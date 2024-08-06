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
            'date' => $this->faker->date,
            'user_id' => \App\Models\User::factory(),
            'payment_method' => 'virement', // Default or random value
            'payment_receipt' => $this->faker->filePath(), // Fake file path
            'comment' => $this->faker->optional()->text(),
        ];
    }
}

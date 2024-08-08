<?php

namespace Database\Factories;

use App\Models\UserTypeService;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TypeService;

class UserTypeServiceFactory extends Factory
{
    protected $model = UserTypeService::class;

    public function definition()
    {
        return [
            'pricefinal' => $this->faker->randomFloat(2, 1, 1000),
            'date' => $this->faker->date,
            'user_id' => \App\Models\User::factory(),
            'type_service_id' => TypeService::factory()->create()->id,
        ];
    }
}

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
        // Example exchange rate: 1 USD = 10 MAD
        $exchangeRate = 10;

        // Plan 1 types
        TypeService::create([
            'price' => 4.5, // 45 MAD
            'duration' => 30, // 1 month
            'plan_service_id' => 1, // Assuming plan_service_id 1 for Plan 1
        ]);

        TypeService::create([
            'price' => 22.9, // 229 MAD
            'duration' => 180, // 6 months
            'plan_service_id' => 1, // Assuming plan_service_id 1 for Plan 1
        ]);

        TypeService::create([
            'price' => 40.0, // 400 MAD
            'duration' => 365, // 1 year
            'plan_service_id' => 1, // Assuming plan_service_id 1 for Plan 1
        ]);

        // Plan 2 types
        TypeService::create([
            'price' => 7.5, // 75 MAD
            'duration' => 30, // 1 month
            'plan_service_id' => 2, // Assuming plan_service_id 2 for Plan 2
        ]);

        TypeService::create([
            'price' => 38.0, // 380 MAD
            'duration' => 180, // 6 months
            'plan_service_id' => 2, // Assuming plan_service_id 2 for Plan 2
        ]);

        TypeService::create([
            'price' => 67.0, // 670 MAD
            'duration' => 365, // 1 year
            'plan_service_id' => 2, // Assuming plan_service_id 2 for Plan 2
        ]);

        // Basic Video Plan types
        TypeService::create([
            'price' => 60.0, // 600 MAD
            'duration' => null, // No specific duration for this type
            'plan_service_id' => 3, // Assuming plan_service_id 1 for Basic Video Plan
        ]);

        TypeService::create([
            'price' => 85.0, // 850 MAD
            'duration' => null, // No specific duration for this type
            'plan_service_id' => 3, // Assuming plan_service_id 1 for Basic Video Plan
        ]);

        TypeService::create([
            'price' => 240.0, // 2400 MAD
            'duration' => null, // No specific duration for this type
            'plan_service_id' => 3, // Assuming plan_service_id 1 for Basic Video Plan
        ]);

        // Standard Video Plan types
        TypeService::create([
            'price' => 80.0, // 800 MAD
            'duration' => null, // No specific duration for this type
            'plan_service_id' => 4, // Assuming plan_service_id 2 for Standard Video Plan
        ]);

        TypeService::create([
            'price' => 190.0, // 1900 MAD
            'duration' => null, // No specific duration for this type
            'plan_service_id' => 4, // Assuming plan_service_id 2 for Standard Video Plan
        ]);

        TypeService::create([
            'price' => 290.0, // 2900 MAD
            'duration' => null, // No specific duration for this type
            'plan_service_id' => 4, // Assuming plan_service_id 2 for Standard Video Plan
        ]);

        // Premium Video Plan types
        TypeService::create([
            'price' => 120.0, // 1200 MAD
            'duration' => null, // No specific duration for this type
            'plan_service_id' => 5, // Assuming plan_service_id 3 for Premium Video Plan
        ]);

        TypeService::create([
            'price' => 210.0, // 2100 MAD
            'duration' => null, // No specific duration for this type
            'plan_service_id' => 5, // Assuming plan_service_id 3 for Premium Video Plan
        ]);

        TypeService::create([
            'price' => 340.0, // 3400 MAD
            'duration' => null, // No specific duration for this type
            'plan_service_id' => 5, // Assuming plan_service_id 3 for Premium Video Plan
        ]);

        // Basic Design Plan types
        TypeService::create([
            'price' => 30.0, // 300 MAD
            'duration' => null, // No specific duration for this type
            'plan_service_id' => 6, // Assuming plan_service_id 4 for Basic Design Plan
        ]);

        TypeService::create([
            'price' => 50.0, // 500 MAD
            'duration' => null, // No specific duration for this type
            'plan_service_id' => 6, // Assuming plan_service_id 4 for Basic Design Plan
        ]);

        TypeService::create([
            'price' => 200.0, // 2000 MAD
            'duration' => null, // No specific duration for this type
            'plan_service_id' => 6, // Assuming plan_service_id 4 for Basic Design Plan
        ]);

        // Standard Design Plan types
        TypeService::create([
            'price' => 300.0, // 3000 MAD
            'duration' => null, // No specific duration for this type
            'plan_service_id' => 7, // Assuming plan_service_id 5 for Standard Design Plan
        ]);




        TypeService::create([
            'price' => 2400 / $exchangeRate, // 2400 MAD in USD
            'duration' => 30, // 1 month
            'plan_service_id' => 9, // Adjust the plan_service_id accordingly
        ]);

        TypeService::create([
            'price' => 4700 / $exchangeRate, // 4700 MAD in USD
            'duration' => 30, // 1 month
            'plan_service_id' => 10, // Adjust the plan_service_id accordingly
        ]);

        TypeService::create([

            'price' => 11985 / $exchangeRate, // 11985 MAD in USD
            'duration' => 90, // 3 months
            'plan_service_id' => 10, // Adjust the plan_service_id accordingly

        ]);

        TypeService::create([

            'price' => 42300 / $exchangeRate, // 42300 MAD in USD
            'duration' => 365, // 12 months
            'plan_service_id' => 10, // Adjust the plan_service_id accordingly

        ]);

        TypeService::create([

            'price' => 6120 / $exchangeRate, // 6120 MAD in USD
            'duration' => 90, // 3 months
            'plan_service_id' => 9, // Adjust the plan_service_id accordingly
        ]);

        TypeService::create([

            'price' => 11000 / $exchangeRate, // 11000 MAD in USD
            'duration' => 30, // 1 month
            'plan_service_id' => 11, // Adjust the plan_service_id accordingly
        ]);

        TypeService::create([

            'price' => 28050 / $exchangeRate, // 28050 MAD in USD
            'duration' => 90, // 3 months
            'plan_service_id' => 11, // Adjust the plan_service_id accordingly

        ]);

        TypeService::create([

            'price' => 121000 / $exchangeRate, // 121000 MAD in USD
            'duration' => 365, // 12 months
            'plan_service_id' => 11, // Adjust the plan_service_id accordingly
          
        ]);

        TypeService::create([

            'price' => 26400 / $exchangeRate, // 26400 MAD in USD
            'duration' => 365, // 12 months
            'plan_service_id' => 9, // Adjust the plan_service_id accordingly
        ]);


     TypeService::create([

            'price' => 2500 / $exchangeRate, // 26400 MAD in USD
            'duration' =>  null,
            'plan_service_id' => 13, // Adjust the plan_service_id accordingly
        ]);

      TypeService::create([

            'price' =>  2400/ $exchangeRate, // 26400 MAD in USD
            'duration' => 30,
            'plan_service_id' => 12, // Adjust the plan_service_id accordingly
        ]);



        TypeService::create([

            'price' => 12600/ $exchangeRate, // 26400 MAD in USD
            'duration' =>180,
            'plan_service_id' => 12, // Adjust the plan_service_id accordingly
        ]);



        TypeService::create([

            'price' =>  22800 / $exchangeRate, // 26400 MAD in USD
            'duration' =>365,
            'plan_service_id' => 12, // Adjust the plan_service_id accordingly
        ]);
    }

}

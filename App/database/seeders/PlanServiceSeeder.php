<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PlanService;

class PlanServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert specific data for PlanService
        PlanService::create([
            'name' => 'Basic',
            'description' => 'Entry-level video package for simple projects',
            'features' => [
                '3 PRODUCTS WINNING PER WEEK',
                'PRODUCTS WINNING IN MARKET (afrique, morocco, gcc, europe, usa)',
                '2 PHONE NUMBERS SUPPLIERS',
                'PRODUCT PAGE PLUS VIDEO TESTIMONIAL',
                'BENCHMARK PROFIT FOR EVERY PRODUCT',
                'VIDEO LOOM RESULTS IN ADS MANAGER PROOF',
                'DELIVERY CONFIRMATION RATE',
            ],
            'image' => 'path_to_image1.jpg',
            'video' => 'path_to_video1.mp4',
            'link' => 'https://example.com/pack1',
            'services_id' => 1, // Replace with appropriate Services ID
        ]);

        PlanService::create([
            'name' => 'Standard',
            'description' => 'Comprehensive video package for most needs',
            'features' => [
                '3 PRODUCTS WINNING PER WEEK',
                'PRODUCTS WINNING IN MARKET (afrique, morocco, gcc, europe, usa)',
                '2 PHONE NUMBERS SUPPLIERS',
                'PRODUCT PAGE PLUS VIDEO TESTIMONIAL',
                'BENCHMARK PROFIT FOR EVERY PRODUCT',
                'VIDEO LOOM RESULTS IN ADS MANAGER PROOF',
                'DELIVERY CONFIRMATION RATE',
            ],
            'image' => 'path_to_image2.jpg',
            'video' => 'path_to_video2.mp4',
            'link' => 'https://example.com/pack2',
            'services_id' => 1, // Replace with appropriate Services ID
        ]);




    }
}

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


        PlanService::create([
            'name' => 'Basic',
            'description' => 'Entry-level video package for simple projects',
            'features' => [
                'Professional video',
                'Video with voice-over',
                'Script with scenario',
                '3% CTR guarantee',
                '1 review per product',
                'Product studio shooting',
            ],
            'image' => 'path_to_image_video_basic.jpg',
            'video' => 'path_to_video_video_basic.mp4',
            'link' => 'https://example.com/video_basic',
            'services_id' => 7, // Replace with appropriate Services ID for VIDEOS
        ]);

        PlanService::create([
            'name' => 'Standard',
            'description' => 'Comprehensive video package for most needs',
            'features' => [
                'With model',
                'Professional video',
                'Model',
                'Script with scenario',
                '3% CTR guarantee',
                '1 review per video',
                'Studio shooting',
                '4 photos',
            ],
            'image' => 'path_to_image_video_standard.jpg',
            'video' => 'path_to_video_video_standard.mp4',
            'link' => 'https://example.com/video_standard',
            'services_id' => 7, // Replace with appropriate Services ID for VIDEOS
        ]);

        PlanService::create([
            'name' => 'Premium',
            'description' => 'Premium video package for top-tier projects',
            'features' => [
                'Local video',
                'Local shooting',
                'Personal branding',
                'Professional video',
                '1 review after delivery',
                '3 photos per video',
            ],
            'image' => 'path_to_image_video_premium.jpg',
            'video' => 'path_to_video_video_premium.mp4',
            'link' => 'https://example.com/video_premium',
            'services_id' => 7, // Replace with appropriate Services ID for VIDEOS
        ]);

        // Design Service Plans
        PlanService::create([
            'name' => 'Basic',
            'description' => 'Basic design package for small projects',
            'features' => [
                'Landing page',
                'High conversion guarantee',
                'Professional design',
            ],
            'image' => 'path_to_image_design_basic.jpg',
            'video' => 'path_to_video_design_basic.mp4',
            'link' => 'https://example.com/design_basic',
            'services_id' => 6, // Replace with appropriate Services ID for DESIGN
        ]);

        PlanService::create([
            'name' => 'Standard',
            'description' => 'Standard design package for broader needs',
            'features' => [
                'Graphic chart',
                'Logo design',
                'Business card design',
                'Page design for 12 posts',
                '5 stories design',
                '10 highlights',
                'Social media design',
            ],
            'image' => 'path_to_image_design_standard.jpg',
            'video' => 'path_to_video_design_standard.mp4',
            'link' => 'https://example.com/design_standard',
            'services_id' => 6, // Replace with appropriate Services ID for DESIGN
        ]);











         
        PlanService::create([
            'name' => 'Standard',
            'description' => 'Enhanced CRM solution for growing businesses',
            'features' => [
                'Automated workflows',
                'Advanced reporting',
                'Sales forecasting',
                'Integration with third-party apps',
            ],
            'image' => 'path_to_image_crm_standard.jpg',
            'video' => 'path_to_video_crm_standard.mp4',
            'link' => 'https://example.com/crm_standard',
            'services_id' => 4, // Replace with appropriate Services ID for CRM
        ]);





        // Community Management Service Plans
        PlanService::create([
            'name' => 'BRANDING PACK BASIC',
            'description' => 'Basic community management for small audiences',
            'features' => [
                'Manage 3 social media accounts Facebook, Instagram, TikTok',
                '3 stories per day',
                '3 reels per week',
                'Ads message traffic',

            ],
            'image' => 'path_to_image_community_basic.jpg',
            'video' => 'path_to_video_community_basic.mp4',
            'link' => 'https://example.com/community_basic',
            'services_id' => 2, // Replace with appropriate Services ID for COMMUNITY MANAGEMENT
        ]);

        PlanService::create([
            'name' => 'BRANDING PACK Standard',
            'description' => 'Advanced community management for larger audiences',
            'features' => [
                'Manage 5 social media accounts Facebook, Instagram, TikTok',
                '3 stories per day',
                '4 reels per week',
                'Ads message traffic',
                '2 models',
            ],
            'image' => 'path_to_image_community_standard.jpg',
            'video' => 'path_to_video_community_standard.mp4',
            'link' => 'https://example.com/community_standard',
            'services_id' => 2, // Replace with appropriate Services ID for COMMUNITY MANAGEMENT
        ]);

        PlanService::create([
            'name' => 'BRANDING PACK VIP ',
            'description' => 'Advanced community management for larger audiences',
            'features' => [
                'Manage 5 social media accounts Facebook, Instagram, TikTok',
                '5 stories per day',
                '2 reels per week',
                'Ads message traffic',
                '5 models',
            ],
            'image' => 'path_to_image_community_vip.jpg',
            'video' => 'path_to_video_community_vip.mp4',
            'link' => 'https://example.com/community_vip',
            'services_id' => 2, // Replace with appropriate Services ID for COMMUNITY MANAGEMENT
        ]);

        // Ads Service Plans
        PlanService::create([
            'name' => 'Ads Management',
            'description' => 'Basic ads management for small budgets',
            'features' => [
                'Manage ads on social media',
                'create and scale ads for up to 3 products',
                'product page with additional posts for scaling',
                'daily reports with scaling information',
                'live chat support',
                '4 ad accounts',

            ],
            'image' => 'path_to_image_ads_basic.jpg',
            'video' => 'path_to_video_ads_basic.mp4',
            'link' => 'https://example.com/ads_basic',
            'services_id' => 5, // Replace with appropriate Services ID for ADS
        ]);

        PlanService::create([
            'name' => 'Marketing Strategy',
            'description' => 'Comprehensive marketing package for established businesses',
            'features' => [
                'Develop a marketing strategy for your project',
                '2 months of application tracking',
                '30-minute ad review meetings every 2 weeks',
                '10 ad accounts',
            ],
            'image' => 'path_to_image_marketing_standard.jpg',
            'video' => 'path_to_video_marketing_standard.mp4',
            'link' => 'https://example.com/marketing_standard',
            'services_id' => 3,
        ]);

    }
}

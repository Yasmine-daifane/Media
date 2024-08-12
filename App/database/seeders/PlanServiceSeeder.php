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











         // CRM Service Plans
         PlanService::create([
            'name' => 'Basic',
            'description' => 'CRM solution for small businesses',
            'features' => [
                'Contact management',
                'Lead management',
                'Email integration',
            ],
            'image' => 'path_to_image_crm_basic.jpg',
            'video' => 'path_to_video_crm_basic.mp4',
            'link' => 'https://example.com/crm_basic',
            'services_id' => 4, // Replace with appropriate Services ID for CRM
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

        // Marketing Service Plans
        PlanService::create([
            'name' => 'Basic',
            'description' => 'Starter marketing package for new businesses',
            'features' => [
                'Social media strategy',
                'Email campaigns',
                'Basic SEO',
            ],
            'image' => 'path_to_image_marketing_basic.jpg',
            'video' => 'path_to_video_marketing_basic.mp4',
            'link' => 'https://example.com/marketing_basic',
            'services_id' => 3, // Replace with appropriate Services ID for MARKETING STRATEGY
        ]);

        PlanService::create([
            'name' => 'Standard',
            'description' => 'Comprehensive marketing package for established businesses',
            'features' => [
                'Content creation',
                'Ad campaign management',
                'Advanced SEO',
                'Analytics and reporting',
            ],
            'image' => 'path_to_image_marketing_standard.jpg',
            'video' => 'path_to_video_marketing_standard.mp4',
            'link' => 'https://example.com/marketing_standard',
            'services_id' => 3, // Replace with appropriate Services ID for MARKETING STRATEGY
        ]);

        // Community Management Service Plans
        PlanService::create([
            'name' => 'Basic',
            'description' => 'Basic community management for small audiences',
            'features' => [
                'Content moderation',
                'Engagement tracking',
                'Basic analytics',
            ],
            'image' => 'path_to_image_community_basic.jpg',
            'video' => 'path_to_video_community_basic.mp4',
            'link' => 'https://example.com/community_basic',
            'services_id' => 2, // Replace with appropriate Services ID for COMMUNITY MANAGEMENT
        ]);

        PlanService::create([
            'name' => 'Standard',
            'description' => 'Advanced community management for larger audiences',
            'features' => [
                'Campaign management',
                'Advanced engagement tools',
                'Custom analytics',
                'Influencer partnerships',
            ],
            'image' => 'path_to_image_community_standard.jpg',
            'video' => 'path_to_video_community_standard.mp4',
            'link' => 'https://example.com/community_standard',
            'services_id' => 2, // Replace with appropriate Services ID for COMMUNITY MANAGEMENT
        ]);

        // Ads Service Plans
        PlanService::create([
            'name' => 'Basic',
            'description' => 'Basic ads management for small budgets',
            'features' => [
                'Google Ads setup',
                'Keyword research',
                'Basic ad optimization',
            ],
            'image' => 'path_to_image_ads_basic.jpg',
            'video' => 'path_to_video_ads_basic.mp4',
            'link' => 'https://example.com/ads_basic',
            'services_id' => 5, // Replace with appropriate Services ID for ADS
        ]);

        PlanService::create([
            'name' => 'Standard',
            'description' => 'Standard ads management for higher impact',
            'features' => [
                'Ad campaign management',
                'A/B testing',
                'Conversion tracking',
                'Advanced keyword strategy',
            ],
            'image' => 'path_to_image_ads_standard.jpg',
            'video' => 'path_to_video_ads_standard.mp4',
            'link' => 'https://example.com/ads_standard',
            'services_id' => 5, // Replace with appropriate Services ID for ADS
        ]);

    }
}

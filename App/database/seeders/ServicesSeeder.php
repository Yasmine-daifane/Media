<?php



namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Services;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'WINING PRODUCT',
                'description' => 'Identify and manage winning products with comprehensive market analysis and performance tracking.',
            ],
            [
                'title' => 'COMMUNITY MANAGER',
                'description' => 'Build and manage your online community with strategic engagement and communication plans.',
            ],
            [
                'title' => 'MARKETING STRATEGY',
                'description' => 'Develop and implement effective marketing strategies to boost your brand and reach your target audience.',
            ],
            [
                'title' => 'CRM SITE WEB',
                'description' => 'Implement and maintain a CRM system to enhance customer relationships and streamline your sales process.',
            ],
            [
                'title' => 'ADS MANAGER',
                'description' => 'Manage and optimize your advertising campaigns to maximize ROI and reach your business goals.',
            ],
            [
                'title' => 'DESIGN',
                'description' => 'Create visually appealing and user-friendly designs for your website, branding, and marketing materials.',
            ],
            [
                'title' => 'VIDEOS',
                'description' => 'Produce high-quality videos for promotional, educational, and entertainment purposes.',
            ],
        ];

        foreach ($services as $service) {
            Services::create($service);
        }
    }
}

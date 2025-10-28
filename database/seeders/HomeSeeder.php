<?php

namespace Database\Seeders;

use App\Models\Home;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Home::create([
            'header_text' => 'Welcome to Adventure Tutorial',
            'header_notes' => ['Explore the world with us', 'Join our adventure community'],
            'brand_logos' => ['logo1.png', 'logo2.png'],
            'banner_images' => ['banner1.jpg', 'banner2.jpg'],
            'summary_of_places' => [
                [
                    'title_head' => 'Mountain Adventure',
                    'images' => ['place1.jpg', 'place2.jpg'],
                    'days' => 5,
                    'place' => 'Himalayas'
                ]
            ],
            'summary_of_services' => [
                [
                    'icon' => 'icon1.png',
                    'title' => 'Leadership Training',
                    'description' => 'Build your leadership skills',
                    'button_name' => 'Learn More'
                ]
            ],
            'summary_of_overview' => [
                'title' => 'Our Overview',
                'description' => 'We provide the best adventure experiences',
                'list' => [
                    ['icon' => 'icon1.png', 'title' => 'Experienced Guides'],
                    ['icon' => 'icon2.png', 'title' => 'Safe Adventures']
                ]
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'phone_numbers' => [
                ['phone' => '+1 (555) 123-4567'],
                ['phone' => '+1 (555) 987-6543'],
            ],
            'email_addresses' => [
                'info@360elevate.com',
                'support@360elevate.com',
            ],
            'physical_addresses' => [
                [
                    'address' => '123 Adventure Street, City, State 12345',
                ],
                [
                    'address' => '456 Exploration Blvd, City, State 67890',
                ],
            ],
            'websites' => [
                'https://www.360elevate.com',
            ],
            'banner_image' => 'contact-us/banner.jpg',
            'description' => 'Get in touch with 360 Elevate Learning Solutions for all your adventure training and development needs.',
        ]);
    }
}

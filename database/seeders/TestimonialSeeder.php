<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::create([
            'banner_image' => 'testimonials/01K8GQ88AW9H8RFPNX0QB0P31H.jpeg',
            'title' => 'What Our Clients Say',
            'description' => 'test test test',
            'detailed_testimonials' => [
                [
                    'profile_pic' => 'testimonials/attachments/01K8GQ88B202XQRVQYSRVG8YS9.jpeg',
                    'name' => 'Union Venture (Pvt) Ltd',
                    'role' => 'Union Venture (Pvt) Ltd',
                    'stars' => '5',
                    'review' => 'The most engaging training we\'ve ever done — fun, challenging, and full of \'aha\' moments!',
                ],
                [
                    'profile_pic' => 'testimonials/attachments/01K8GQAGSJ3GVTYXBGNMWH1X0Q.jpeg',
                    'name' => 'ABC Company   ',
                    'role' => 'Employer',
                    'stars' => '2',
                    'review' => 'Our students came back more confident and connected — real leadership growth through play.',
                ],
            ],
        ]);
    }
}

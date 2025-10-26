<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutUs::create([
            'banner_image' => 'about-us/attachments/01K8GWA7DM64GTRA4TM44NVAX7.jpg',
            'title' => 'Who we are ',
            'description' => 'At 360 Elevate Learning Solutions, we believe in learning through experience. Our programs combine psychology, neuroscience, and adventure-based learning to help people grow from the inside out. From corporate leaders to curious kids, we create powerful experiences that build confidence, collaboration, and creativity.',
            'years_of_experience' => '250',
            'years_of_experience_text' => 'Years of Experiencing',
            'text_in_image_tag' => '25,000 + Customer Worldwideaaaa',
            'more_about_button_text' => 'More About Us',
            'name_of_founder' => 'Nasik',
            'role' => 'CEO',
            'profile_image' => 'about-us/attachments/01K8GWA7EKYVWHM2M850Y1Y4B0.jpg',
            'front_image' => 'about-us/attachments/01K8GWA7ERSQMZWHY6DSJE7620.jpeg',
            'back_image' => 'about-us/attachments/01K8GWA7EXWJ5MY873KXX55KK0.jpeg',
        ]);
    }
}

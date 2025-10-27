<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gallery::create([
            'title' => 'Adventure Training',
            'subtitle' => 'Team Building',
            'images' => ['galleries/adventure1.jpg', 'galleries/adventure2.jpg'],
        ]);

        Gallery::create([
            'title' => 'Mountain Hiking',
            'subtitle' => 'Nature Exploration',
            'images' => ['galleries/mountain1.jpg', 'galleries/mountain2.jpg'],
        ]);

        Gallery::create([
            'title' => 'Corporate Outbound',
            'subtitle' => 'Leadership Development',
            'images' => ['galleries/corporate1.jpg', 'galleries/corporate2.jpg'],
        ]);

        Gallery::create([
            'title' => 'Youth Camp',
            'subtitle' => 'Skill Building',
            'images' => ['galleries/youth1.jpg', 'galleries/youth2.jpg'],
        ]);

        Gallery::create([
            'title' => 'NLP Workshop',
            'subtitle' => 'Mindset Training',
            'images' => ['galleries/nlp1.jpg', 'galleries/nlp2.jpg'],
        ]);

        Gallery::create([
            'title' => 'Group Activities',
            'subtitle' => 'Fun & Learning',
            'images' => ['galleries/group1.jpg', 'galleries/group2.jpg'],
        ]);
    }
}

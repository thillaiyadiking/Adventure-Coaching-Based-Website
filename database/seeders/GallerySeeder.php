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
            'banner_image' => 'galleries/banners/01K8HP98GPK7Y2D3HWAQVE5YY5.jpg',
            'title' => 'Initial Image',
            'subtitle' => 'First',
            'images' => ['galleries/01K8HP98H0C8B3Y2JNBW98JWTY.jpg', 'galleries/01K8HP98H50VK8R5V6AZVRDJSM.jpg', 'galleries/01K8HP98H832CJ0NRJST49CSVQ.jpg', 'galleries/01K8HP98HB2N9RWG4XMY6HYJ0E.jpg', 'galleries/01K8HP98HE77K4P8Y76SW46VW7.jpg', 'galleries/01K8HP98HHEQGYBQDWQYPAJ464.jpg'],
        ]);
    }
}

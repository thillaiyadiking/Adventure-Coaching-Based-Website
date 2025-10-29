<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory()->create([
            'name' => 'Nasik Admin',
            'email' => 'nasik@admin.com',
            'password' => bcrypt('123456'), // Assuming default password
        ]);

        $this->call([
            AboutUsSeeder::class,
            ServiceSeeder::class,
            TestimonialSeeder::class,
            GallerySeeder::class,
            ContactSeeder::class,
            HomeSeeder::class,
        ]);
    }
}

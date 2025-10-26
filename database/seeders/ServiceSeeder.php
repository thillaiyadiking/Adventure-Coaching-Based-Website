<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'banner_image' => 'services/attachments/01K8GWK8JDESDBBPSJE468332Y.jpg',
            'title' => 'What We Offer',
            'description' => null,
            'service_attachment' => 'services/attachments/01K8GVNDQGHE38PZCVHQSGY4BW.jpeg',
            'offers' => [
                [
                    'offer_title' => 'Leadership Development',
                    'offer_description' => 'Build confidence, influence, and emotional intelligence for impactful leadership.',
                ],
                [
                    'offer_title' => 'Outbound Training',
                    'offer_description' => 'Strengthen teamwork and trust through adventure-based learning experiences.',
                ],
                [
                    'offer_title' => 'Adventure & Hiking (Local & Foreign)',
                    'offer_description' => 'Explore nature while developing resilience and mindfulness.',
                ],
                [
                    'offer_title' => 'NLP Practitioner Programs',
                    'offer_description' => 'Reprogram your mindset for success with proven NLP techniques.',
                ],
                [
                    'offer_title' => 'Coaching & Mentoring',
                    'offer_description' => 'Achieve clarity, confidence, and career growth with guided support.',
                ],
                [
                    'offer_title' => 'Child & Youth Development',
                    'offer_description' => 'Nurture creativity, teamwork, and leadership in young minds through play and exploration.',
                ],
            ],
        ]);
    }
}

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
            'banner_image' => 'services/attachments/01K8JBBFA1SV736P773286WD5D.jpg',
            'title' => 'What We Offer',
            'description' => null,
            'service_attachment' => 'services/attachments/01K8JBBFCKJVYN1V7AZGAX4Z45.jpeg',
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
            'section_1_image' => 'services/section/01K8HRXZC1FD1W1R7GA21A6VFT.jpg',
            'section_1_image_text' => '<20> Students',
            'section_1_title' => 'Why LEGO Learning Works',
            'section_1_description' => 'At 360 Elevate, we use LEGO Serious Play and creative construction methods to develop problem-solving, innovation, and teamwork skills in both children and adults. LEGO is not just a toy — it\'s a thinking tool that connects imagination with real-world problem-solving.',
            'section_1_subtitles_points' => [
                [
                    'subtitle' => 'Learning Through Play, Thinking Through Creation',
                    'points' => [
                        ['point' => 'Leadership training & team creativity'],
                        ['point' => 'Child development & communication skills'],
                        ['point' => 'Emotional intelligence and collaboration exercises'],
                    ],
                ],
            ],
            'section_1_profile_pictures' => ['services/profiles/01K8HRAB321K7W9WB4KGY71KQD.jpg', 'services/profiles/01K8HRAB38RHRF4M3ZXGX9M98Z.jpg', 'services/profiles/01K8HRAB3A29TQQ3WSF2YY1ZWY.jpg', 'services/profiles/01K8HRAB3CEJMZYS0XG91VQ7WB.jpg'],
            'section_1_button_text' => 'More',
            'section_2_image' => 'services/section/01K8JD23NAGGD74ZV0N49CY4BK.jpg',
            'section_2_image_text' => 'Image Text Here',
            'section_2_title' => 'The 360 Elevate Approach',
            'section_2_description' => 'Every program at 360 Elevate is built around our experiential learning model, combining science, psychology, and creativity for lasting impact.',
            'section_2_subtitles_points' => [
                [
                    'subtitle' => 'We don\'t just train — we transform',
                    'points' => [
                        ['point' => 'LEGO Serious Play & Gamified Learning'],
                        ['point' => 'Neuro-Linguistic Programming (NLP)'],
                        ['point' => 'Adventure & Nature-Based Activities'],
                        ['point' => 'Coaching & Reflective Learning'],
                        ['point' => 'Customized Corporate Simulations'],
                    ],
                ],
            ],
            'section_2_profile_pictures' => ['services/profiles/01K8JD23NTD9VKAFD67MHTDRP4.jpg', 'services/profiles/01K8JD23NXM5T2YAXE67S84SGS.jpg', 'services/profiles/01K8JD23P039YFHZ75E8768K7N.jpg', 'services/profiles/01K8JD23P446TP01ZS2VNHFEZZ.jpg', 'services/profiles/01K8JD23P92WVH2APGGYKG5DN0.jpg'],
            'section_2_button_text' => 'More About Me',
            'section_3_image' => '["services\/section\/01K8K7JF0X9CFCRRHGD1C4FJFM.jpg","services\/section\/01K8K7JF11DRR4169E94KZVKEG.jpg","services\/section\/01K8K7JF1EF7DD0ZYD3KHBGD5K.jpg","services\/section\/01K8K7JF1HRBWY9E7T5RQ4WRA4.jpg","services\/section\/01K8K7JF1YVRNZGKC5ZZPA83QK.jpg","services\/section\/01K8K7JF22ZSWHJXQV0FP47QX7.jpg"]',
            'section_3_image_text' => '4 Images',
            'section_3_title' => 'Growing Future Leaders',
            'section_3_description' => 'We help children grow confident, creative, and connected — away from screens and closer to nature, imagination, and teamwork.',
            'section_3_subtitles_points' => [
                [
                    'subtitle' => 'For Nursery & Primary Students',
                    'points' => [
                        ['point' => 'LEGO Learning & Mindfulness Play'],
                        ['point' => 'Outdoor Adventures & Nature Hikes'],
                        ['point' => 'Emotional Awareness through Games'],
                    ],
                ],
                [
                    'subtitle' => 'For Upper-Class Students',
                    'points' => [
                        ['point' => 'Leadership & Communication Camps'],
                        ['point' => 'Team-Building through Adventure'],
                        ['point' => 'International Kids\' Hiking Expeditions'],
                    ],
                ],
            ],
            'section_3_profile_pictures' => [],
            'section_3_button_text' => 'More Click On Me ?',
        ]);

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
            'section_1_image' => 'services/section/section1.jpg',
            'section_1_image_text' => 'Explore the World',
            'section_1_title' => 'Adventure Training Programs',
            'section_1_description' => 'Our adventure training programs are designed to push boundaries and build resilience.',
            'section_1_subtitles_points' => [
                [
                    'subtitle' => 'Team Building Activities',
                    'points' => [
                        ['point' => 'Foster collaboration and trust'],
                        ['point' => 'Improve communication skills'],
                        ['point' => 'Build lasting relationships'],
                    ],
                ],
                [
                    'subtitle' => 'Leadership Development',
                    'points' => [
                        ['point' => 'Develop decision-making abilities'],
                        ['point' => 'Enhance motivational skills'],
                        ['point' => 'Build confidence in leadership roles'],
                    ],
                ],
            ],
            'section_1_profile_pictures' => ['services/profiles/profile1.jpg', 'services/profiles/profile2.jpg'],
            'section_1_button_text' => 'Learn More',
            'section_2_image' => 'services/section/section2.jpg',
            'section_2_image_text' => 'Mindset Transformation',
            'section_2_title' => 'NLP Practitioner Programs',
            'section_2_description' => 'Neuro-Linguistic Programming techniques to reprogram your mind for success.',
            'section_2_subtitles_points' => [
                [
                    'subtitle' => 'Personal Development',
                    'points' => [
                        ['point' => 'Overcome limiting beliefs'],
                        ['point' => 'Enhance self-awareness'],
                        ['point' => 'Achieve personal goals'],
                    ],
                ],
                [
                    'subtitle' => 'Professional Growth',
                    'points' => [
                        ['point' => 'Improve communication'],
                        ['point' => 'Build rapport quickly'],
                        ['point' => 'Enhance presentation skills'],
                    ],
                ],
            ],
            'section_2_profile_pictures' => ['services/profiles/profile3.jpg', 'services/profiles/profile4.jpg'],
            'section_2_button_text' => 'Enroll Now',
            'section_3_image' => 'services/section/section3.jpg',
            'section_3_image_text' => 'Youth Empowerment',
            'section_3_title' => 'Child & Youth Development',
            'section_3_description' => 'Nurturing young minds through adventure and learning experiences.',
            'section_3_subtitles_points' => [
                [
                    'subtitle' => 'Skill Development',
                    'points' => [
                        ['point' => 'Build problem-solving abilities'],
                        ['point' => 'Enhance creativity'],
                        ['point' => 'Develop critical thinking'],
                    ],
                ],
                [
                    'subtitle' => 'Character Building',
                    'points' => [
                        ['point' => 'Foster responsibility'],
                        ['point' => 'Build self-confidence'],
                        ['point' => 'Encourage teamwork'],
                    ],
                ],
            ],
            'section_3_profile_pictures' => ['services/profiles/profile5.jpg', 'services/profiles/profile6.jpg'],
            'section_3_button_text' => 'Join Our Programs',
        ]);
    }
}

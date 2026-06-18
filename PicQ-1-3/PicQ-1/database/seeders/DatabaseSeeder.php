<?php

namespace Database\Seeders;

use App\Models\Creator;
use App\Models\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seed Services
        $services = [
            ['name' => 'Instagram Reels', 'description' => 'High-energy edits with trending transitions.', 'badge' => 'Trending', 'sort_order' => 1],
            ['name' => 'Weddings',         'description' => 'Timeless memories captured with cinematic soul.', 'badge' => null, 'sort_order' => 2],
            ['name' => 'Fitness & Sports', 'description' => 'Dynamic movement and raw power edits.', 'badge' => null, 'sort_order' => 3],
            ['name' => 'Events & Parties', 'description' => 'Relive the vibe with expert highlight reels.', 'badge' => null, 'sort_order' => 4],
            ['name' => 'Product Demos',    'description' => 'Sell more with high-fidelity product stories.', 'badge' => null, 'sort_order' => 5],
            ['name' => 'Travel & Lifestyle','description' => 'Epic landscapes and wanderlust narratives.', 'badge' => null, 'sort_order' => 6],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }

        // Seed Creators
        $creators = [
            [
                'name'          => 'Marcus V.',
                'email'         => 'marcus@example.com',
                'specialty'     => 'Fashion',
                'city'          => 'New York',
                'status'        => 'active',
                'featured'      => true,
                'rating'        => 4.9,
                'reviews_count' => 230,
                'badge'         => 'Pro',
                'bio'           => 'Award-winning fashion filmmaker with 8+ years of experience.',
            ],
            [
                'name'          => 'Elena S.',
                'email'         => 'elena@example.com',
                'specialty'     => 'Weddings',
                'city'          => 'Los Angeles',
                'status'        => 'active',
                'featured'      => true,
                'rating'        => 5.0,
                'reviews_count' => 312,
                'badge'         => null,
                'bio'           => 'Specialist in emotional, cinematic wedding stories.',
            ],
            [
                'name'          => 'Jordan T.',
                'email'         => 'jordan@example.com',
                'specialty'     => 'Sports',
                'city'          => 'Chicago',
                'status'        => 'active',
                'featured'      => true,
                'rating'        => 4.8,
                'reviews_count' => 87,
                'badge'         => 'New',
                'bio'           => 'Action sports specialist bringing raw energy to every frame.',
            ],
        ];

        foreach ($creators as $creator) {
            Creator::create($creator);
        }
    }
}
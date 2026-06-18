<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $creators = collect([
            (object)[
                'id' => 1,
                'name' => 'Arjun Photography',
                'specialty' => 'Wedding Photography',
                'rating' => 4.9,
                'avatar' => null,
                'badge' => 'Pro'
            ],
            (object)[
                'id' => 2,
                'name' => 'Dream Frames',
                'specialty' => 'Cinematic Videography',
                'rating' => 4.8,
                'avatar' => null,
                'badge' => 'Elite'
            ],
            (object)[
                'id' => 3,
                'name' => 'Elite Weddings',
                'specialty' => 'Wedding Films',
                'rating' => 5.0,
                'avatar' => null,
                'badge' => 'Pro'
            ]
        ]);

        $services = collect([
            (object)[
                'id' => 1,
                'name' => 'Photography',
                'description' => 'Professional Photography Services',
                'badge' => 'Popular'
            ],
            (object)[
                'id' => 2,
                'name' => 'Videography',
                'description' => 'Cinematic Wedding Films',
                'badge' => 'Trending'
            ],
            (object)[
                'id' => 3,
                'name' => 'Drone Shoot',
                'description' => 'Aerial Wedding Coverage',
                'badge' => 'Premium'
            ],
            (object)[
                'id' => 4,
                'name' => 'Decoration',
                'description' => 'Luxury Wedding Decoration',
                'badge' => 'New'
            ],
            (object)[
                'id' => 5,
                'name' => 'Makeup Artist',
                'description' => 'Bridal Makeup Services',
                'badge' => 'Top Rated'
            ],
            (object)[
                'id' => 6,
                'name' => 'DJ & Music',
                'description' => 'Live Music & DJ Services',
                'badge' => 'Hot'
            ]
        ]);

        $stats = [
            ['value' => '215,000+', 'label' => 'Active Users'],
            ['value' => '50,000+', 'label' => 'Reels Created'],
            ['value' => '10m', 'label' => 'Avg. Delivery'],
            ['value' => '12,000+', 'label' => 'Expert Creators'],
        ];

        $plans = [
            [
                'name' => 'Starter',
                'price' => 29,
                'features' => [
                    '1 Reel / month',
                    'Standard quality',
                    'Email support'
                ],
                'popular' => false
            ],
            [
                'name' => 'Pro',
                'price' => 79,
                'features' => [
                    '5 Reels / month',
                    'Cinema-grade quality',
                    'Priority support'
                ],
                'popular' => true
            ],
            [
                'name' => 'Enterprise',
                'price' => 199,
                'features' => [
                    'Unlimited Reels',
                    '4K Delivery',
                    'Dedicated Creator'
                ],
                'popular' => false
            ]
        ];

        return view('home', compact(
            'creators',
            'services',
            'stats',
            'plans'
        ));
    }

    public function howItWorks()
    {
        return view('how-it-works');
    }

    public function pricing()
    {
        $plans = [
            [
                'name' => 'Starter',
                'price' => 2900,
                'features' => [
                    '1 Reel / month',
                    'Standard quality',
                    'Email support'
                ],
                'popular' => false
            ],
            [
                'name' => 'Pro',
                'price' => 7900,
                'features' => [
                    '5 Reels / month',
                    'Cinema-grade quality',
                    'Priority support'
                ],
                'popular' => true
            ],
            [
                'name' => 'Enterprise',
                'price' => 19900,
                'features' => [
                    'Unlimited Reels',
                    '4K Delivery',
                    'Dedicated Creator'
                ],
                'popular' => false
            ]
        ];

        return view('pricing', compact('plans'));
    }

    public function about()
    {
        return view('about');
    }
}
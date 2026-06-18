@extends('layouts.app')
@section('title', 'Pricing | Flashoot')

@section('content')
<section class="py-20 min-h-screen">
    <div class="max-w-[1280px] mx-auto px-12">
        <div class="text-center mb-20">
            <h1 class="font-bold mb-4" style="font-family:'Plus Jakarta Sans';font-size:48px;letter-spacing:-0.02em;">
                Simple <span class="gradient-heading">Pricing</span>
            </h1>
            <p class="text-on-surface-variant text-lg max-w-xl mx-auto">Cinema-grade quality at every level. No hidden fees.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($plans as $plan)
            <div class="glass-card p-10 rounded-[32px] flex flex-col {{ $plan['popular'] ? 'border-2 border-primary relative' : '' }}">
                @if($plan['popular'])
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 px-6 py-1 rounded-full bg-gradient-to-r from-primary-container to-secondary-container text-white text-sm font-bold">
                    Most Popular
                </div>
                @endif

                <div class="mb-8">
                    <h3 class="font-bold text-2xl mb-3" style="font-family:'Plus Jakarta Sans'">{{ $plan['name'] }}</h3>
                    <div class="flex items-end gap-1">
                        <span class="gradient-heading font-bold" style="font-size:56px;font-family:'Plus Jakarta Sans';line-height:1">${{ $plan['price'] }}</span>
                        <span class="text-on-surface-variant mb-2">/month</span>
                    </div>
                </div>

                <ul class="space-y-4 mb-10 flex-1">
                    @foreach($plan['features'] as $feature)
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary text-xl" style="font-variation-settings:'FILL' 1">check_circle</span>
                        <span class="text-on-surface-variant">{{ $feature }}</span>
                    </li>
                    @endforeach
                </ul>

                <a href="{{ route('booking.create') }}" class="block w-full py-4 rounded-2xl font-bold text-center transition-all hover:scale-[1.02]
                    {{ $plan['popular'] ? 'bg-gradient-to-r from-primary-container to-secondary-container text-white' : 'border border-white/10 hover:bg-white/5' }}">
                    Get Started
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
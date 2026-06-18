@extends('layouts.app')
@section('title', $creator->name . ' | PicQ Creator')

@section('content')
<section class="py-16 min-h-screen">
    <div class="max-w-[1280px] mx-auto px-8">
        <a href="{{ route('creators.index') }}" class="flex items-center gap-2 text-gray-400 hover:text-gray-200 mb-8 transition-colors text-sm">
            <span class="material-symbols-outlined text-base">arrow_back</span> Back to Creators
        </a>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="glass-card p-7 rounded-2xl flex flex-col items-center text-center gap-5 reveal">
                <div class="relative w-40 h-40 rounded-2xl overflow-hidden bg-gradient-to-br from-purple-900/30 to-pink-900/30 flex items-center justify-center">
                    @if($creator->avatar)
                        <img src="{{ asset('storage/' . $creator->avatar) }}" alt="{{ $creator->name }}" class="w-full h-full object-cover">
                    @else
                        <span class="material-symbols-outlined text-white/20 text-[80px]">person</span>
                    @endif
                    @if($creator->badge)
                    <div class="absolute top-3 right-3 px-2 py-0.5 {{ $creator->badge === 'Pro' ? 'bg-purple-500' : 'bg-pink-500' }} text-white font-bold text-[9px] rounded-full uppercase">{{ $creator->badge }}</div>
                    @endif
                </div>

                <div>
                    <h1 class="font-bold text-2xl mb-1" style="font-family:'Plus Jakarta Sans'">{{ $creator->name }}</h1>
                    <p class="text-gray-400 text-sm">{{ $creator->specialty }} Specialist</p>
                    <p class="text-gray-500 text-xs mt-1">📍 {{ $creator->city }}</p>
                </div>

                <div class="flex items-center gap-1 text-pink-400">
                    @for($i = 0; $i < 5; $i++)
                    <span class="material-symbols-outlined text-sm" style="font-variation-settings:'FILL' {{ $i < floor($creator->rating) ? 1 : 0 }}">star</span>
                    @endfor
                    <span class="font-bold text-white ml-1 text-sm">{{ number_format($creator->rating, 1) }}</span>
                    <span class="text-gray-400 text-xs">({{ $creator->reviews_count }} reviews)</span>
                </div>

                <a href="{{ route('booking.create') }}?creator={{ $creator->id }}" class="w-full py-3 rounded-xl bg-gradient-to-r from-purple-600 to-pink-600 font-bold text-white text-center text-sm hover:scale-105 transition-transform">
                    Book {{ $creator->name }}
                </a>
            </div>

            <div class="lg:col-span-2 space-y-5">
                <div class="glass-card p-7 rounded-2xl reveal">
                    <h2 class="font-bold text-xl mb-3" style="font-family:'Plus Jakarta Sans'">About</h2>
                    <p class="text-gray-400 text-sm leading-relaxed">{{ $creator->bio ?? 'No bio available.' }}</p>
                </div>

                @if($creator->portfolio)
                <div class="glass-card p-7 rounded-2xl reveal">
                    <h2 class="font-bold text-xl mb-3" style="font-family:'Plus Jakarta Sans'">Portfolio</h2>
                    <a href="{{ $creator->portfolio }}" target="_blank" class="flex items-center gap-2 text-purple-400 hover:underline text-sm">
                        <span class="material-symbols-outlined text-base">open_in_new</span>View Portfolio
                    </a>
                </div>
                @endif

                <div class="glass-card p-7 rounded-2xl reveal">
                    <h2 class="font-bold text-xl mb-4" style="font-family:'Plus Jakarta Sans'">Specialization</h2>
                    <div class="flex flex-wrap gap-2">
                        @foreach(['Cinema-grade gear','Professional lighting','Fast delivery','Post-production editing'] as $tag)
                        <span class="px-3 py-1.5 rounded-full bg-purple-900/20 border border-purple-500/30 text-purple-300 text-xs font-semibold">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
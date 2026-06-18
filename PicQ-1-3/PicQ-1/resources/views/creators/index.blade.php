@extends('layouts.app')
@section('title', 'Creators | PicQ')

@section('content')
<section class="py-16 min-h-screen">
    <div class="max-w-[1280px] mx-auto px-8">
        <div class="mb-12 reveal">
            <h1 class="font-bold mb-2" style="font-family:'Plus Jakarta Sans';font-size:clamp(28px,4vw,44px);letter-spacing:-0.02em;">
                Elite <span class="gradient-heading">Creators</span>
            </h1>
            <p class="text-gray-400 text-sm">Find the perfect cinema-grade creator for your project.</p>
        </div>

        <form method="GET" action="{{ route('creators.index') }}" class="flex flex-wrap gap-3 mb-10 reveal">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by name..."
                class="bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-gray-200 text-sm placeholder-gray-500 focus:outline-none focus:border-purple-500 transition-colors">
            <select name="specialty" class="bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
                <option value="">All Specialties</option>
                @foreach($specialties as $s)
                <option value="{{ $s }}" {{ request('specialty') === $s ? 'selected' : '' }}>{{ $s }}</option>
                @endforeach
            </select>
            <button type="submit" class="bg-gradient-to-r from-purple-600 to-pink-600 px-5 py-2.5 rounded-xl font-bold text-white text-sm hover:scale-105 transition-transform">Filter</button>
        </form>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
            @forelse($creators as $creator)
            <div class="glass-card p-5 rounded-2xl card-hover reveal">
                <div class="relative w-full aspect-square rounded-xl overflow-hidden mb-4 bg-gradient-to-br from-purple-900/30 to-pink-900/30 flex items-center justify-center">
                    @if($creator->avatar)
                        <img src="{{ asset('storage/' . $creator->avatar) }}" alt="{{ $creator->name }}" class="w-full h-full object-cover">
                    @else
                        <span class="material-symbols-outlined text-white/20 text-[60px]">person</span>
                    @endif
                    @if($creator->badge)
                    <div class="absolute top-3 right-3 px-2 py-0.5 {{ $creator->badge === 'Pro' ? 'bg-purple-500' : 'bg-pink-500' }} text-white font-bold text-[9px] rounded uppercase">{{ $creator->badge }}</div>
                    @endif
                </div>
                <div class="flex justify-between items-start mb-3">
                    <div>
                        <h4 class="font-bold text-base">{{ $creator->name }}</h4>
                        <p class="text-gray-400 text-xs">{{ $creator->specialty }}</p>
                        <p class="text-gray-500 text-xs mt-0.5">📍 {{ $creator->city }}</p>
                    </div>
                    <div class="flex items-center gap-1 text-pink-400">
                        <span class="material-symbols-outlined text-xs" style="font-variation-settings:'FILL' 1">star</span>
                        <span class="font-bold text-sm">{{ number_format($creator->rating, 1) }}</span>
                    </div>
                </div>
                <div class="flex gap-2">
                    <a href="{{ route('creators.show', $creator) }}" class="flex-1 py-2 rounded-xl border border-white/10 font-bold hover:bg-white/5 transition-colors text-center text-xs">Portfolio</a>
                    <a href="{{ route('booking.create') }}?creator={{ $creator->id }}" class="flex-1 py-2 rounded-xl bg-gradient-to-r from-purple-600 to-pink-600 font-bold text-white text-center text-xs hover:opacity-90 transition-opacity">Book</a>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center text-gray-400 py-16">
                <span class="material-symbols-outlined text-5xl mb-4 block">search_off</span>
                No creators found matching your criteria.
            </div>
            @endforelse
        </div>

        <div class="mt-10">{{ $creators->withQueryString()->links() }}</div>
    </div>
</section>
@endsection
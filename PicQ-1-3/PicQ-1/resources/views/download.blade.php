@extends('layouts.app')
@section('title', 'Download | PicQ')

@section('content')
<section class="hero-theme py-24 min-h-screen flex items-center">
    <div class="max-w-[1280px] mx-auto px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

        <div class="reveal order-2 lg:order-1">
            <h1 class="font-bold mb-5 text-theme-gradient"
                style="font-family:'Plus Jakarta Sans';font-size:clamp(32px,4.5vw,56px);letter-spacing:-0.03em;">
                Get the PicQ App
            </h1>
            <p class="text-gray-300 text-base mb-8 leading-relaxed max-w-md">
                Book elite photographers, videographers and drone operators on the go. Available on iOS and Android — production in your pocket.
            </p>

            <div class="flex flex-wrap gap-4 mb-10">
                <a href="#" class="theme-card flex items-center gap-3 px-6 py-4 hover:scale-105 transition-transform">
                    <span class="material-symbols-outlined text-2xl text-purple-300">apple</span>
                    <div>
                        <span class="text-[10px] block text-purple-300 uppercase tracking-widest">Download on</span>
                        <span class="font-bold text-sm text-white">App Store</span>
                    </div>
                </a>
                <a href="#" class="theme-card flex items-center gap-3 px-6 py-4 hover:scale-105 transition-transform">
                    <span class="material-symbols-outlined text-2xl text-purple-300">android</span>
                    <div>
                        <span class="text-[10px] block text-purple-300 uppercase tracking-widest">Get it on</span>
                        <span class="font-bold text-sm text-white">Google Play</span>
                    </div>
                </a>
            </div>

            <div class="grid grid-cols-2 gap-4 max-w-md">
                @foreach([
                    ['icon' => 'bolt', 'label' => 'Instant Booking'],
                    ['icon' => 'verified', 'label' => 'Verified Creators'],
                    ['icon' => 'photo_camera', 'label' => 'Cinema Quality'],
                    ['icon' => 'support_agent', 'label' => '24/7 Support'],
                ] as $feature)
                <div class="theme-card p-4 rounded-2xl flex items-center gap-3">
                    <span class="material-symbols-outlined text-purple-300 text-xl">{{ $feature['icon'] }}</span>
                    <span class="text-gray-200 text-sm font-semibold">{{ $feature['label'] }}</span>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Real phone screen UI mockup --}}
        <div class="relative flex justify-center order-1 lg:order-2 reveal">
            <div style="position:absolute;inset:0;background:radial-gradient(circle at 50% 50%,rgba(124,58,237,0.16) 0%,transparent 65%);pointer-events:none;z-index:0;border-radius:50%;"></div>
            <div class="relative w-72 h-[560px] bg-[#0d0d12] rounded-[40px] border-[8px] border-purple-500/30 shadow-2xl overflow-hidden animate-phone-float" style="z-index:1;">

                {{-- Status bar --}}
                <div class="flex items-center justify-between px-5 pt-3 pb-1 text-[11px] text-gray-300 font-semibold">
                    <span>9:41</span>
                    <div class="flex items-center gap-1">
                        <span class="material-symbols-outlined text-[14px]">signal_cellular_alt</span>
                        <span class="material-symbols-outlined text-[14px]">wifi</span>
                        <span class="material-symbols-outlined text-[14px]">battery_full</span>
                    </div>
                </div>

                {{-- App header --}}
                <div class="px-5 pt-3 pb-3 flex items-center justify-between border-b border-white/5">
                    <div>
                        <p class="text-white font-bold text-sm" style="font-family:'Plus Jakarta Sans'">PicQ</p>
                        <p class="text-gray-400 text-[11px]">Welcome back, Aravind</p>
                    </div>
                    <div class="w-9 h-9 rounded-full bg-gradient-to-br from-purple-600 to-pink-600 flex items-center justify-center">
                        <span class="material-symbols-outlined text-white text-[18px]">notifications</span>
                    </div>
                </div>

                {{-- Search bar --}}
                <div class="px-5 pt-4">
                    <div class="flex items-center gap-2 bg-white/5 border border-white/10 rounded-xl px-3 py-2.5">
                        <span class="material-symbols-outlined text-gray-400 text-[18px]">search</span>
                        <span class="text-gray-500 text-xs">Search photographers, services...</span>
                    </div>
                </div>

                {{-- Category chips --}}
                <div class="px-5 pt-4 flex gap-2 overflow-hidden">
                    @foreach(['Photo','Video','Drone','Makeup'] as $i => $chip)
                    <div class="px-3 py-1.5 rounded-full text-[11px] font-semibold {{ $i === 0 ? 'bg-gradient-to-r from-purple-600 to-pink-600 text-white' : 'bg-white/5 border border-white/10 text-gray-300' }}">
                        {{ $chip }}
                    </div>
                    @endforeach
                </div>

                {{-- Featured banner --}}
                <div class="px-5 pt-4">
                    <div class="rounded-2xl p-4 bg-gradient-to-br from-purple-700/40 to-pink-600/40 border border-purple-500/20">
                        <p class="text-[10px] text-purple-200 uppercase tracking-widest mb-1">Limited Offer</p>
                        <p class="text-sm font-bold text-white">20% off Wedding Packages</p>
                    </div>
                </div>

                {{-- Creator list --}}
                <div class="px-5 pt-4 space-y-2.5">
                    @foreach(['Arjun P.' => 'Wedding Expert','Priya S.' => 'Fashion Specialist','Rohit M.' => 'Event Pro'] as $cname => $cspec)
                    <div class="flex items-center gap-3 bg-white/5 border border-purple-500/15 rounded-xl p-2.5">
                        <div class="w-9 h-9 rounded-full bg-gradient-to-br from-purple-500/60 to-pink-500/60 flex-shrink-0 flex items-center justify-center text-[11px] font-bold text-white">
                            {{ substr($cname, 0, 1) }}
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs font-semibold text-white truncate">{{ $cname }}</p>
                            <p class="text-[10px] text-gray-400 truncate">{{ $cspec }}</p>
                        </div>
                        <span class="material-symbols-outlined text-pink-400 text-[16px]">favorite</span>
                    </div>
                    @endforeach
                </div>

                {{-- Bottom nav --}}
                <div class="absolute bottom-0 left-0 right-0 flex items-center justify-around py-3 border-t border-white/5 bg-[#0d0d12]/95">
                    <span class="material-symbols-outlined text-purple-400 text-[20px]">home</span>
                    <span class="material-symbols-outlined text-gray-500 text-[20px]">explore</span>
                    <span class="material-symbols-outlined text-gray-500 text-[20px]">calendar_month</span>
                    <span class="material-symbols-outlined text-gray-500 text-[20px]">person</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
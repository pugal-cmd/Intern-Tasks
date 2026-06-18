@extends('layouts.app')
@section('title', 'About | PicQ')

@section('content')
<section class="hero-theme py-16 min-h-screen">
    <div class="max-w-[1280px] mx-auto px-12">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h1 class="font-bold mb-6 text-theme-gradient" style="font-family:'Plus Jakarta Sans';font-size:clamp(36px,5vw,64px);letter-spacing:-0.03em;">
                Revolutionizing Photography
            </h1>
            <p class="text-gray-300 text-lg leading-relaxed">
                PicQ bridges the gap between creative vision and professional execution, making cinema-grade photography accessible to everyone, everywhere.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
            <div class="theme-card p-10 rounded-[32px] watermark-bg">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-600/30 to-purple-800/30 flex items-center justify-center mb-6 border border-purple-500/20">
                    <span class="text-purple-300 text-3xl">🚀</span>
                </div>
                <h3 class="font-bold text-2xl mb-4 text-theme-gradient" style="font-family:'Plus Jakarta Sans'">What We Do</h3>
                <p class="text-gray-300 leading-relaxed">We connect clients with elite photographers and videographers instantly. From corporate shoots to personal celebrations, we ensure every moment gets the cinematic treatment it deserves.</p>
            </div>

            <div class="theme-card p-10 rounded-[32px] watermark-bg">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-pink-600/30 to-pink-800/30 flex items-center justify-center mb-6 border border-pink-500/20">
                    <span class="text-pink-300 text-3xl">👥</span>
                </div>
                <h3 class="font-bold text-2xl mb-4 text-theme-gradient" style="font-family:'Plus Jakarta Sans'">Our Community</h3>
                <p class="text-gray-300 leading-relaxed">A curated network of professional creators who share our passion for visual storytelling and commitment to delivering exceptional results on every project.</p>
            </div>
        </div>

        <div class="text-center mb-12">
            <h2 class="font-bold mb-6 text-theme-gradient" style="font-family:'Plus Jakarta Sans';font-size:clamp(28px,4vw,48px);letter-spacing:-0.02em;">
                Why Choose PicQ?
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
            <div class="theme-card p-6 rounded-2xl text-center watermark-bg">
                <div class="w-12 h-12 rounded-xl bg-purple-900/30 flex items-center justify-center mx-auto mb-4 border border-purple-500/20">
                    <span class="text-purple-300 text-xl">⚡</span>
                </div>
                <h4 class="font-bold text-lg mb-2 text-theme-gradient" style="font-family:'Plus Jakarta Sans'">Instant Booking</h4>
                <p class="text-gray-300 text-sm">Book professional creators in minutes, not days.</p>
            </div>

            <div class="theme-card p-6 rounded-2xl text-center watermark-bg">
                <div class="w-12 h-12 rounded-xl bg-pink-900/30 flex items-center justify-center mx-auto mb-4 border border-pink-500/20">
                    <span class="text-pink-300 text-xl">✓</span>
                </div>
                <h4 class="font-bold text-lg mb-2 text-theme-gradient" style="font-family:'Plus Jakarta Sans'">Verified Professionals</h4>
                <p class="text-gray-300 text-sm">Every creator is vetted for quality and reliability.</p>
            </div>

            <div class="theme-card p-6 rounded-2xl text-center watermark-bg">
                <div class="w-12 h-12 rounded-xl bg-violet-900/30 flex items-center justify-center mx-auto mb-4 border border-violet-500/20">
                    <span class="text-violet-300 text-xl">🏆</span>
                </div>
                <h4 class="font-bold text-lg mb-2 text-theme-gradient" style="font-family:'Plus Jakarta Sans'">Premium Quality</h4>
                <p class="text-gray-300 text-sm">Cinema-grade equipment and professional expertise.</p>
            </div>
        </div>

        <div class="relative p-12 lg:p-16 rounded-3xl bg-gradient-to-br from-purple-700 to-pink-600 text-center overflow-hidden watermark-bg">
            <div class="absolute inset-0 opacity-10" style="background-image:radial-gradient(circle at 2px 2px,white 1px,transparent 0);background-size:36px 36px;"></div>
            <h2 class="relative font-bold text-white mb-4" style="font-family:'Plus Jakarta Sans';font-size:clamp(24px,3.5vw,40px);">Ready to Create?</h2>
            <p class="relative text-white/80 text-sm max-w-xl mx-auto mb-8">Join thousands of satisfied clients who trust PicQ for their photography needs.</p>
            <div class="relative flex justify-center gap-4">
                <a href="#" onclick="openBusinessEnquiry()" class="btn-theme inline-block bg-white text-purple-700 px-8 py-4 rounded-xl font-extrabold text-base hover:scale-105 transition-transform shadow-xl">
                    Get Started Today
                </a>
                {{-- <a href="#" onclick="document.getElementById('openVendorModal').click(); return false;" class="inline-block border-2 border-white text-white px-8 py-4 rounded-xl font-extrabold text-base hover:scale-105 transition-transform">
                    Join as Vendor
                </a> --}}
            </div>
        </div>
    </div>
</section>
@endsection
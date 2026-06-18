@extends('layouts.app')

@section('title', 'Reels Creator Booking | PicQ')

@push('styles')
<style>
/* ── Hide nav pill on this page ── */
.nav-pill { display: none !important; }
body { padding-top: 0 !important; }

/* ── Page hero gradient (Pink theme for Reels) ── */
.reels-hero {
    background:
        radial-gradient(ellipse 80% 60% at 50% -10%, rgba(236,72,153,0.55) 0%, transparent 65%),
        radial-gradient(ellipse 50% 40% at 80% 20%, rgba(236,72,153,0.25) 0%, transparent 60%),
        linear-gradient(180deg, #2a0d2a 0%, #2a1a2a 60%, #3a1d3a 100%);
    min-height: 100vh;
}

/* ── Glass pill nav (breadcrumb bar) ── */
.page-topbar {
    position: sticky;
    top: 0;
    z-index: 100;
    background: rgba(10,4,24,0.82);
    backdrop-filter: blur(28px);
    border-bottom: 1px solid rgba(236,72,153,0.18);
}

/* ── Stat chips ── */
.stat-chip {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(236,72,153,0.22);
    border-radius: 9999px;
}

/* ── Feature card ── */
.feat-card {
    background: rgba(255,255,255,0.03);
    border: 1px solid rgba(236,72,153,0.15);
    border-radius: 20px;
    transition: all 0.35s cubic-bezier(.4,0,.2,1);
}
.feat-card:hover {
    background: rgba(236,72,153,0.10);
    border-color: rgba(236,72,153,0.45);
    transform: translateY(-4px);
    box-shadow: 0 16px 48px rgba(236,72,153,0.20);
}

/* ── Creator type pill ── */
.type-pill {
    background: rgba(236,72,153,0.08);
    border: 1px solid rgba(236,72,153,0.22);
    border-radius: 9999px;
    transition: all 0.25s;
}
.type-pill:hover {
    background: rgba(236,72,153,0.18);
    border-color: rgba(236,72,153,0.5);
    transform: scale(1.04);
}

/* ── Pricing card ── */
.price-card {
    background: rgba(255,255,255,0.03);
    border: 1px solid rgba(236,72,153,0.18);
    border-radius: 24px;
    transition: all 0.35s;
    position: relative;
    overflow: hidden;
}
.price-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(236,72,153,0.08) 0%, transparent 60%);
    opacity: 0;
    transition: opacity 0.35s;
}
.price-card:hover { border-color: rgba(236,72,153,0.45); transform: translateY(-6px); box-shadow: 0 24px 60px rgba(236,72,153,0.22); }
.price-card:hover::before { opacity: 1; }
.price-card.featured {
    border-color: rgba(236,72,153,0.5);
    background: linear-gradient(135deg, rgba(236,72,153,0.14) 0%, rgba(236,72,153,0.08) 100%);
    box-shadow: 0 0 40px rgba(236,72,153,0.20), 0 0 80px rgba(236,72,153,0.10);
}

/* ── Section label ── */
.section-eyebrow {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    color: #f472b6;
}

/* ── Divider ── */
.grad-divider {
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(236,72,153,0.4), rgba(236,72,153,0.3), transparent);
}

/* ── Tag ── */
.tag {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 14px;
    border-radius: 9999px;
    font-size: 12px;
    font-weight: 500;
    color: #d4d4d8;
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(236,72,153,0.20);
    transition: all 0.2s;
}
.tag:hover { background: rgba(236,72,153,0.14); border-color: rgba(236,72,153,0.45); color: #fff; }

/* ── Glow orb ── */
.orb {
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
    filter: blur(80px);
}

/* ── CTA strip ── */
.cta-strip {
    background: linear-gradient(135deg, rgba(236,72,153,0.22) 0%, rgba(236,72,153,0.14) 100%);
    border: 1px solid rgba(236,72,153,0.28);
    border-radius: 28px;
}

/* ── Scroll reveal ── */
.sr { opacity: 0; transform: translateY(22px); transition: opacity 0.55s ease, transform 0.55s ease; }
.sr.in { opacity: 1; transform: none; }

/* ── Pink theme gradient ── */
.text-reels-gradient {
    background: linear-gradient(135deg, #f472b6 0%, #fb7185 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
</style>
@endpush

@section('content')

{{-- ── TOPBAR ── --}}
<div class="page-topbar">
    <div class="max-w-[1200px] mx-auto px-6 py-3 flex items-center justify-between">
        {{-- Breadcrumb --}}
        <nav class="flex items-center gap-2 text-xs text-gray-400">
            <a href="{{ route('home') }}" class="hover:text-pink-300 transition-colors flex items-center gap-1">
                <span class="material-symbols-outlined text-[14px]">home</span>
                <span>Home</span>
            </a>
            <span class="material-symbols-outlined text-[13px] text-gray-600">chevron_right</span>
            <a href="{{ route('home') }}#how-it-works" class="hover:text-pink-300 transition-colors">How It Works</a>
            <span class="material-symbols-outlined text-[13px] text-gray-600">chevron_right</span>
            <span class="text-pink-300 font-semibold">Reels Creator</span>
        </nav>
        {{-- Back + Book --}}
        <div class="flex items-center gap-3">
            <a href="{{ route('home') }}#how-it-works"
               class="flex items-center gap-1.5 text-xs text-gray-400 hover:text-white transition-colors px-3 py-1.5 rounded-full border border-white/10 hover:border-white/25">
                <span class="material-symbols-outlined text-[14px]">arrow_back</span>
                Back
            </a>
            <button onclick="openBusinessEnquiry()"
                    class="btn-theme px-5 py-2 rounded-full text-xs font-bold shining-btn">
                Book Now
            </button>
        </div>
    </div>
</div>

{{-- ── HERO ── --}}
<section class="reels-hero relative overflow-hidden pt-16 pb-24">
    {{-- Orbs --}}
    <div class="orb w-[600px] h-[600px] bg-pink-700/20 -top-32 -left-32"></div>
    <div class="orb w-[400px] h-[400px] bg-pink-700/15 top-20 right-0"></div>

    <div class="max-w-[1200px] mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            {{-- Left copy --}}
            <div class="sr">
                {{-- Eyebrow --}}
                <div class="inline-flex items-center gap-2.5 mb-6 px-4 py-2 rounded-full"
                     style="background:rgba(236,72,153,0.14);border:1px solid rgba(236,72,153,0.3);">
                    <span class="material-symbols-outlined text-pink-400 text-[16px]">videocam</span>
                    <span class="section-eyebrow" style="color:#f472b6;">Reels Creator Booking</span>
                </div>

                <h1 class="font-bold mb-6 leading-tight"
                    style="font-family:'Plus Jakarta Sans';font-size:clamp(38px,5vw,66px);letter-spacing:-0.04em;">
                    Every Moment Deserves <span class="text-reels-gradient">a Reel</span>
                </h1>

                <p class="text-gray-300 text-base leading-relaxed mb-8 max-w-lg">
                    Book professional content creators to capture your special moments and create engaging social media content. From events to brand promotions, get trend-based reels delivered fast.
                </p>

                {{-- Stat chips --}}
                <div class="flex flex-wrap gap-3 mb-10">
                    <div class="stat-chip px-5 py-2.5 flex items-center gap-2">
                        <span class="material-symbols-outlined text-pink-400 text-[18px]">videocam</span>
                        <span class="text-white font-bold text-sm">2+ Creator Types</span>
                    </div>
                    <div class="stat-chip px-5 py-2.5 flex items-center gap-2">
                        <span class="material-symbols-outlined text-pink-400 text-[18px]">verified</span>
                        <span class="text-white font-bold text-sm">Verified Creators</span>
                    </div>
                    <div class="stat-chip px-5 py-2.5 flex items-center gap-2">
                        <span class="material-symbols-outlined text-pink-400 text-[18px]">payments</span>
                        <span class="text-white font-bold text-sm">From ₹1,499</span>
                    </div>
                </div>

                <div class="flex flex-wrap gap-4">
                    <button onclick="openBusinessEnquiry()"
                            class="btn-theme px-8 py-4 rounded-2xl font-bold text-base shining-btn">
                        Book a Creator
                    </button>
                    <a href="#pricing"
                       class="px-8 py-4 rounded-2xl font-bold text-base text-white border border-white/15 hover:border-pink-500/50 hover:bg-pink-500/10 transition-all">
                        View Pricing
                    </a>
                </div>
            </div>

            {{-- Right — iPhone mockup --}}
           <a href="#" class="reveal hiw-img-link flex flex-col items-center gap-6 cursor-pointer group">
    <h3 class="font-bold text-lg text-white text-center"
        style="font-family:'Plus Jakarta Sans'">
        {{-- Reel Shoot --}}
    </h3>

    <div class="hiw-card overflow-hidden rounded-3xl shadow-2xl">
        <img src="{{ asset('images/creators/reel-0002.jpg') }}"
             alt="Reel"
             class="hiw-img w-full h-[420px] object-cover">
    </div>

    {{-- <p class="text-gray-400 text-xs -mt-2">Tap to explore →</p> --}}
</a>

        </div>
    </div>
</section>

<div class="grad-divider"></div>

{{-- ── PERFECT FOR ── --}}
<section class="py-20 relative overflow-hidden" style="background:rgba(10,4,24,0.6);">
    <div class="max-w-[1200px] mx-auto px-6">

        <div class="text-center mb-14 sr">
            <p class="section-eyebrow mb-3">Use Cases</p>
            <h2 class="font-bold" style="font-family:'Plus Jakarta Sans';font-size:clamp(28px,3.5vw,42px);letter-spacing:-0.03em;">
                Perfect <span class="text-reels-gradient">For</span>
            </h2>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach([
                ['🚗','Vehicle Delivery Reels'],['🏠','Home/Housewarming Reels'],['💍','Engagement & Wedding Reels'],
                ['🎂','Birthday Celebration Reels'],['👶','Baby Shower Reels'],['🎓','Graduation Reels'],
                ['🎉','Family Functions'],['🏢','Business Promotion'],
                ['🍽️','Restaurant & Cafe Content'],['🛍️','Shop Opening & Product Launch'],['🏋️','Gym & Fitness Content'],['🏨','Hotel & Resort Promotions'],
            ] as [$emoji,$label])
            <div class="feat-card p-5 flex items-center gap-3 sr">
                <span class="text-2xl flex-shrink-0">{{ $emoji }}</span>
                <span class="text-sm font-semibold text-gray-200">{{ $label }}</span>
            </div>
            @endforeach
        </div>

    </div>
</section>

<div class="grad-divider"></div>

{{-- ── CREATOR TYPES ── --}}
<section class="py-20" style="background:rgba(8,3,20,0.7);">
    <div class="max-w-[1200px] mx-auto px-6">

        <div class="text-center mb-14 sr">
            <p class="section-eyebrow mb-3">Creator Categories</p>
            <h2 class="font-bold" style="font-family:'Plus Jakarta Sans';font-size:clamp(28px,3.5vw,42px);letter-spacing:-0.03em;">
                Available Creator <span class="text-reels-gradient">Types</span>
            </h2>
        </div>

        <div class="flex flex-wrap gap-3 justify-center">
            @foreach([
                ['smartphone','Mobile Videographer + Editor'],['photo_camera','DSLR Videographer + Editor'],
            ] as [$icon,$label])
            <div class="type-pill px-5 py-3 flex items-center gap-2.5 sr cursor-default">
                <span class="material-symbols-outlined text-pink-400 text-[18px]">{{ $icon }}</span>
                <span class="text-sm font-semibold text-gray-200">{{ $label }}</span>
            </div>
            @endforeach
        </div>

    </div>
</section>

<div class="grad-divider"></div>

{{-- ── WHAT'S INCLUDED ── --}}
<section class="py-20 relative overflow-hidden" style="background:rgba(10,4,24,0.6);">
    <div class="orb w-[500px] h-[500px] bg-pink-700/10 -right-32 top-0"></div>

    <div class="max-w-[1100px] mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <div class="sr">
                <p class="section-eyebrow mb-4">Your Story</p>
                <h2 class="font-bold mb-5 leading-tight"
                    style="font-family:'Plus Jakarta Sans';font-size:clamp(28px,3.5vw,44px);letter-spacing:-0.03em;">
                    Your Event.<br>
                    <span class="text-reels-gradient">Your Story. Your Reel.</span>
                </h2>
                <p class="text-gray-300 text-sm leading-relaxed mb-8">
                    Professional content creators who understand trending styles and deliver social media-ready content. From concept to delivery, we handle everything.
                </p>
                <div class="space-y-3">
                    @foreach(['Professional Reel Shoot','Premium Editing','Trend-Based Content','Social Media Ready Delivery','Support Team Available'] as $item)
                    <div class="flex items-center gap-3">
                        <div class="w-5 h-5 rounded-full flex-shrink-0 flex items-center justify-center bg-gradient-to-br from-pink-600 to-rose-600">
                            <span class="material-symbols-outlined text-white text-[11px]">check</span>
                        </div>
                        <span class="text-gray-300 text-sm">{{ $item }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="sr">
                <div class="cta-strip p-8">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-pink-600 to-rose-600 flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined text-white text-2xl">videocam</span>
                        </div>
                        <div>
                            <h3 class="font-bold text-white text-lg" style="font-family:'Plus Jakarta Sans'">Ready-to-Post Reels</h3>
                            <p class="text-pink-300 text-xs">Capture. Create. Share.</p>
                        </div>
                    </div>
                    <p class="text-gray-300 text-sm leading-relaxed mb-6">
                        Book a professional creator and turn moments into memories that resonate with your audience.
                    </p>
                    <button onclick="openBusinessEnquiry()"
                            class="btn-theme w-full py-4 rounded-xl font-bold text-sm text-center shining-btn">
                        Book a Reel Creator
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="grad-divider"></div>

{{-- ── PRICING ── --}}
<section id="pricing" class="py-20" style="background:rgba(8,3,20,0.7);">
    <div class="max-w-[1100px] mx-auto px-6">

        <div class="text-center mb-14 sr">
            <p class="section-eyebrow mb-3">Transparent Pricing</p>
            <h2 class="font-bold" style="font-family:'Plus Jakarta Sans';font-size:clamp(28px,3.5vw,42px);letter-spacing:-0.03em;">
                Reel <span class="text-reels-gradient">Packages</span>
            </h2>
            <p class="text-gray-400 text-sm mt-3">Choose the perfect package for your content needs.</p>
        </div>

        {{-- Mobile Reel Packages --}}
        <div class="mb-16">
            <h3 class="font-bold text-white text-lg mb-6 text-center" style="font-family:'Plus Jakarta Sans'">📱 Mobile Reel Packages</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach([
                    ['Silver Package','₹1,499',false,['Best Reel Shoot','Basic Editing','Social Media Ready Delivery','Best Android Creator','Suitable for Personal & Business'],'star_half'],
                    ['Premium Package','₹1,999',true,['Professional Reel Shoot','Premium Editing','Social Media Ready Delivery','Premium Android/iPhone Creator','Enhanced Visual Quality','Priority Support'],'star'],
                    ['Elite Package','₹2,199',false,['Professional Reel Shoot','Premium Editing','Top iPhone Creator','Priority Booking','Top Creator Assignment','Partner Choice Available','Faster Allocation','Premium Experience'],'stars'],
                ] as [$name,$price,$popular,$features,$icon])
                <div class="price-card p-7 flex flex-col sr {{ $popular ? 'featured' : '' }}">
                    @if($popular)
                    <div class="inline-flex items-center gap-1.5 self-start mb-4 px-3 py-1 rounded-full bg-gradient-to-r from-pink-600 to-rose-600 text-[10px] font-bold text-white uppercase tracking-widest">
                        <span class="material-symbols-outlined text-[12px]">workspace_premium</span>
                        Most Popular
                    </div>
                    @endif
                    <div class="w-12 h-12 rounded-2xl mb-4 flex items-center justify-center"
                         style="background:rgba(236,72,153,0.18);border:1px solid rgba(236,72,153,0.3);">
                        <span class="material-symbols-outlined text-pink-300 text-2xl">{{ $icon }}</span>
                    </div>
                    <h3 class="font-bold text-white text-xl mb-1" style="font-family:'Plus Jakarta Sans'">{{ $name }}</h3>
                    <p class="text-reels-gradient font-bold mb-6" style="font-size:1.8rem;font-family:'Plus Jakarta Sans';">{{ $price }}</p>
                    <ul class="space-y-3 flex-1 mb-8">
                        @foreach($features as $f)
                        <li class="flex items-center gap-2.5">
                            <div class="w-4 h-4 rounded-full flex-shrink-0 flex items-center justify-center bg-gradient-to-br from-pink-600 to-rose-600">
                                <span class="material-symbols-outlined text-white text-[10px]">check</span>
                            </div>
                            <span class="text-gray-300 text-sm">{{ $f }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <button onclick="openBusinessEnquiry()"
                            class="{{ $popular ? 'btn-theme' : 'border border-pink-500/40 text-white hover:bg-pink-500/10' }} w-full py-3.5 rounded-xl font-bold text-sm transition-all shining-btn">
                        Book This Package
                    </button>
                </div>
                @endforeach
            </div>
        </div>

        {{-- DSLR Reel Packages --}}
        <div>
            <h3 class="font-bold text-white text-lg mb-6 text-center" style="font-family:'Plus Jakarta Sans'">🎥 DSLR Reel Packages</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach([
                    ['Silver Package','₹2,499',false,['DSLR Reel Shoot','Basic Editing','Social Media Ready','DSLR Creator','Standard Delivery'],'star_half'],
                    ['Premium Package','₹3,199',true,['Professional DSLR Shoot','Premium Editing','Social Media Ready','Premium DSLR Creator','Enhanced Quality','Priority Support'],'star'],
                    ['Elite Package','₹3,499',false,['Professional DSLR Shoot','Premium Editing','Top DSLR Creator','Priority Booking','Top Creator Assignment','Partner Choice Available','Faster Allocation','Premium Experience'],'stars'],
                ] as [$name,$price,$popular,$features,$icon])
                <div class="price-card p-7 flex flex-col sr {{ $popular ? 'featured' : '' }}">
                    @if($popular)
                    <div class="inline-flex items-center gap-1.5 self-start mb-4 px-3 py-1 rounded-full bg-gradient-to-r from-pink-600 to-rose-600 text-[10px] font-bold text-white uppercase tracking-widest">
                        <span class="material-symbols-outlined text-[12px]">workspace_premium</span>
                        Most Popular
                    </div>
                    @endif
                    <div class="w-12 h-12 rounded-2xl mb-4 flex items-center justify-center"
                         style="background:rgba(236,72,153,0.18);border:1px solid rgba(236,72,153,0.3);">
                        <span class="material-symbols-outlined text-pink-300 text-2xl">{{ $icon }}</span>
                    </div>
                    <h3 class="font-bold text-white text-xl mb-1" style="font-family:'Plus Jakarta Sans'">{{ $name }}</h3>
                    <p class="text-reels-gradient font-bold mb-6" style="font-size:1.8rem;font-family:'Plus Jakarta Sans';">{{ $price }}</p>
                    <ul class="space-y-3 flex-1 mb-8">
                        @foreach($features as $f)
                        <li class="flex items-center gap-2.5">
                            <div class="w-4 h-4 rounded-full flex-shrink-0 flex items-center justify-center bg-gradient-to-br from-pink-600 to-rose-600">
                                <span class="material-symbols-outlined text-white text-[10px]">check</span>
                            </div>
                            <span class="text-gray-300 text-sm">{{ $f }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <button onclick="openBusinessEnquiry()"
                            class="{{ $popular ? 'btn-theme' : 'border border-pink-500/40 text-white hover:bg-pink-500/10' }} w-full py-3.5 rounded-xl font-bold text-sm transition-all shining-btn">
                        Book This Package
                    </button>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

<div class="grad-divider"></div>

{{-- ── WHY PICQ ── --}}
<section class="py-20 relative overflow-hidden" style="background:rgba(10,4,24,0.6);">
    <div class="max-w-[1100px] mx-auto px-6">

        <div class="text-center mb-14 sr">
            <p class="section-eyebrow mb-3">Why Choose Us</p>
            <h2 class="font-bold" style="font-family:'Plus Jakarta Sans';font-size:clamp(28px,3.5vw,42px);letter-spacing:-0.03em;">
                Why Book Through <span class="text-reels-gradient">PicQ</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach([
                ['verified','Professional Creators','Every creator on PicQ is verified and experienced.','pink'],
                ['trending_up','Trend-Based Content','We stay updated with latest social media trends.','pink'],
                ['bolt','Fast Delivery','Get your reels ready in 48 hours or less.','pink'],
                ['movie','Quality Assured','Premium editing and production standards.','pink'],
                ['tune','Flexible Packages','Choose what suits your budget and needs.','pink'],
                ['support_agent','Support Team','Dedicated support for your booking and delivery.','pink'],
            ] as [$icon,$title,$desc,$color])
            <div class="feat-card p-6 sr">
                <div class="w-12 h-12 rounded-2xl mb-4 flex items-center justify-center"
                     style="background:rgba(236,72,153,0.18);border:1px solid rgba(236,72,153,0.3);">
                    <span class="material-symbols-outlined text-pink-300 text-2xl">{{ $icon }}</span>
                </div>
                <h3 class="font-bold text-white mb-2 text-base" style="font-family:'Plus Jakarta Sans'">{{ $title }}</h3>
                <p class="text-gray-400 text-xs leading-relaxed">{{ $desc }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>

<div class="grad-divider"></div>

{{-- ── CTA SECTION ── --}}
<section class="py-20 relative overflow-hidden" style="background:rgba(10,4,24,0.6);">
    <div class="orb w-[600px] h-[600px] bg-pink-700/20 -bottom-32 -right-32"></div>

    <div class="max-w-[1100px] mx-auto px-6 relative z-10">
        <div class="sr text-center">
            <h2 class="font-bold mb-4"
                style="font-family:'Plus Jakarta Sans';font-size:clamp(28px,4vw,44px);letter-spacing:-0.03em;">
                Ready to Create <span class="text-reels-gradient">Content</span>?
            </h2>
            <p class="text-gray-300 max-w-lg mx-auto mb-8">
                Book a professional reel creator today and transform your moments into engaging social media content.
            </p>
            <button onclick="openBusinessEnquiry()"
                    class="btn-theme px-8 py-4 rounded-2xl font-bold text-base shining-btn">
                Book Your Creator
            </button>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const reveals = document.querySelectorAll('.sr');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in');
            }
        });
    }, { threshold: 0.1 });
    reveals.forEach(el => observer.observe(el));
});
</script>
@endpush
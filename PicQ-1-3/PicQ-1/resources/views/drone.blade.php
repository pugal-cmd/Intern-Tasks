@extends('layouts.app')

@section('title', 'Drone Operator Booking | PicQ')

@push('styles')
<style>
/* ── Hide nav pill on this page ── */
.nav-pill { display: none !important; }
body { padding-top: 0 !important; }

/* ── Page hero gradient (Cyan/Blue theme for Drones) ── */
.drone-hero {
    background:
        radial-gradient(ellipse 80% 60% at 50% -10%, rgba(6,182,212,0.55) 0%, transparent 65%),
        radial-gradient(ellipse 50% 40% at 80% 20%, rgba(34,197,230,0.25) 0%, transparent 60%),
        linear-gradient(180deg, #0d2a2a 0%, #0d1a2a 60%, #0a1a3a 100%);
    min-height: 100vh;
}

/* ── Glass pill nav (breadcrumb bar) ── */
.page-topbar {
    position: sticky;
    top: 0;
    z-index: 100;
    background: rgba(10,4,24,0.82);
    backdrop-filter: blur(28px);
    border-bottom: 1px solid rgba(6,182,212,0.18);
}

/* ── Stat chips ── */
.stat-chip {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(6,182,212,0.22);
    border-radius: 9999px;
}

/* ── Feature card ── */
.feat-card {
    background: rgba(255,255,255,0.03);
    border: 1px solid rgba(6,182,212,0.15);
    border-radius: 20px;
    transition: all 0.35s cubic-bezier(.4,0,.2,1);
}
.feat-card:hover {
    background: rgba(6,182,212,0.10);
    border-color: rgba(6,182,212,0.45);
    transform: translateY(-4px);
    box-shadow: 0 16px 48px rgba(6,182,212,0.20);
}

/* ── Operator type pill ── */
.type-pill {
    background: rgba(6,182,212,0.08);
    border: 1px solid rgba(6,182,212,0.22);
    border-radius: 9999px;
    transition: all 0.25s;
}
.type-pill:hover {
    background: rgba(6,182,212,0.18);
    border-color: rgba(6,182,212,0.5);
    transform: scale(1.04);
}

/* ── Pricing card ── */
.price-card {
    background: rgba(255,255,255,0.03);
    border: 1px solid rgba(6,182,212,0.18);
    border-radius: 24px;
    transition: all 0.35s;
    position: relative;
    overflow: hidden;
}
.price-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(6,182,212,0.08) 0%, transparent 60%);
    opacity: 0;
    transition: opacity 0.35s;
}
.price-card:hover { border-color: rgba(6,182,212,0.45); transform: translateY(-6px); box-shadow: 0 24px 60px rgba(6,182,212,0.22); }
.price-card:hover::before { opacity: 1; }
.price-card.featured {
    border-color: rgba(6,182,212,0.5);
    background: linear-gradient(135deg, rgba(6,182,212,0.14) 0%, rgba(34,197,230,0.08) 100%);
    box-shadow: 0 0 40px rgba(6,182,212,0.20), 0 0 80px rgba(34,197,230,0.10);
}

/* ── Section label ── */
.section-eyebrow {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    color: #22c55e;
}

/* ── Divider ── */
.grad-divider {
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(6,182,212,0.4), rgba(34,197,230,0.3), transparent);
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
    border: 1px solid rgba(6,182,212,0.20);
    transition: all 0.2s;
}
.tag:hover { background: rgba(6,182,212,0.14); border-color: rgba(6,182,212,0.45); color: #fff; }

/* ── Glow orb ── */
.orb {
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
    filter: blur(80px);
}

/* ── CTA strip ── */
.cta-strip {
    background: linear-gradient(135deg, rgba(6,182,212,0.22) 0%, rgba(34,197,230,0.14) 100%);
    border: 1px solid rgba(6,182,212,0.28);
    border-radius: 28px;
}

/* ── Scroll reveal ── */
.sr { opacity: 0; transform: translateY(22px); transition: opacity 0.55s ease, transform 0.55s ease; }
.sr.in { opacity: 1; transform: none; }

/* ── Cyan theme gradient ── */
.text-drone-gradient {
    background: linear-gradient(135deg, #06b6d4 0%, #22d3ee 100%);
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
            <a href="{{ route('home') }}" class="hover:text-cyan-300 transition-colors flex items-center gap-1">
                <span class="material-symbols-outlined text-[14px]">home</span>
                <span>Home</span>
            </a>
            <span class="material-symbols-outlined text-[13px] text-gray-600">chevron_right</span>
            <a href="{{ route('home') }}#how-it-works" class="hover:text-cyan-300 transition-colors">How It Works</a>
            <span class="material-symbols-outlined text-[13px] text-gray-600">chevron_right</span>
            <span class="text-cyan-300 font-semibold">Drone Operator</span>
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
<section class="drone-hero relative overflow-hidden pt-16 pb-24">
    {{-- Orbs --}}
    <div class="orb w-[600px] h-[600px] bg-cyan-700/20 -top-32 -left-32"></div>
    <div class="orb w-[400px] h-[400px] bg-cyan-700/15 top-20 right-0"></div>

    <div class="max-w-[1200px] mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            {{-- Left copy --}}
            <div class="sr">
                {{-- Eyebrow --}}
                <div class="inline-flex items-center gap-2.5 mb-6 px-4 py-2 rounded-full"
                     style="background:rgba(6,182,212,0.14);border:1px solid rgba(6,182,212,0.3);">
                    <span class="material-symbols-outlined text-cyan-400 text-[16px]">language</span>
                    <span class="section-eyebrow" style="color:#22c55e;">Drone Operator Booking</span>
                </div>

                <h1 class="font-bold mb-6 leading-tight"
                    style="font-family:'Plus Jakarta Sans';font-size:clamp(38px,5vw,66px);letter-spacing:-0.04em;">
                    Capture Every Angle <span class="text-drone-gradient">From The Sky</span>
                </h1>

                <p class="text-gray-300 text-base leading-relaxed mb-8 max-w-lg">
                    Book professional drone operators for stunning aerial photography and cinematic videos. Whether it's a property, event, business promotion or special occasion — capture every angle from the sky.
                </p>

                {{-- Stat chips --}}
                <div class="flex flex-wrap gap-3 mb-10">
                    <div class="stat-chip px-5 py-2.5 flex items-center gap-2">
                        <span class="material-symbols-outlined text-cyan-400 text-[18px]">language</span>
                        <span class="text-white font-bold text-sm">Licensed Pilots</span>
                    </div>
                    <div class="stat-chip px-5 py-2.5 flex items-center gap-2">
                        <span class="material-symbols-outlined text-cyan-400 text-[18px]">verified</span>
                        <span class="text-white font-bold text-sm">Verified Operators</span>
                    </div>
                    <div class="stat-chip px-5 py-2.5 flex items-center gap-2">
                        <span class="material-symbols-outlined text-cyan-400 text-[18px]">payments</span>
                        <span class="text-white font-bold text-sm">Competitive Pricing</span>
                    </div>
                </div>

                <div class="flex flex-wrap gap-4">
                    <button onclick="openBusinessEnquiry()"
                            class="btn-theme px-8 py-4 rounded-2xl font-bold text-base shining-btn">
                        Book a Drone Operator
                    </button>
                    <a href="#pricing"
                       class="px-8 py-4 rounded-2xl font-bold text-base text-white border border-white/15 hover:border-cyan-500/50 hover:bg-cyan-500/10 transition-all">
                        View Pricing
                    </a>
                </div>
            </div>

            {{-- Right — iPhone mockup --}}
         <a href="#" class="reveal hiw-img-link flex flex-col items-center gap-6 cursor-pointer group">
    <h3 class="font-bold text-lg text-white text-center"
        style="font-family:'Plus Jakarta Sans'">
    
    </h3>

    <div class="hiw-card overflow-hidden rounded-3xl shadow-2xl">
        <img src="{{ asset('images/creators/drone-0002.jpg') }}"
             alt="Drone"
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
                Perfect <span class="text-drone-gradient">For</span>
            </h2>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach([
                ['🏢','Real Estate Showcases'],['🏗️','Construction Monitoring'],['🏘️','Villas & Apartments'],
                ['🏨','Resorts & Hotels'],['🎉','Weddings & Events'],['🏭','Factories & Industrial'],
                ['🌾','Farms & Agricultural'],['🚗','Vehicle Launches'],
                ['🏫','School & Campus Tours'],['⛪','Religious Events'],['🎪','Exhibitions & Festivals'],['🎬','Commercial Ads'],
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

{{-- ── OPERATOR TYPES ── --}}
<section class="py-20" style="background:rgba(8,3,20,0.7);">
    <div class="max-w-[1200px] mx-auto px-6">

        <div class="text-center mb-14 sr">
            <p class="section-eyebrow mb-3">Operator Categories</p>
            <h2 class="font-bold" style="font-family:'Plus Jakarta Sans';font-size:clamp(28px,3.5vw,42px);letter-spacing:-0.03em;">
                Available <span class="text-drone-gradient">Operator Types</span>
            </h2>
        </div>

        <div class="flex flex-wrap gap-3 justify-center">
            @foreach([
                ['verified_user','Licensed Drone Pilots'],['people','Drone Photography Teams'],
                ['video_call','Drone Videographers'],['cloud_upload','Aerial Content Creators'],
            ] as [$icon,$label])
            <div class="type-pill px-5 py-3 flex items-center gap-2.5 sr cursor-default">
                <span class="material-symbols-outlined text-cyan-400 text-[18px]">{{ $icon }}</span>
                <span class="text-sm font-semibold text-gray-200">{{ $label }}</span>
            </div>
            @endforeach
        </div>

    </div>
</section>

<div class="grad-divider"></div>

{{-- ── WHAT'S INCLUDED ── --}}
<section class="py-20 relative overflow-hidden" style="background:rgba(10,4,24,0.6);">
    <div class="orb w-[500px] h-[500px] bg-cyan-700/10 -right-32 top-0"></div>

    <div class="max-w-[1100px] mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <div class="sr">
                <p class="section-eyebrow mb-4">Professional Expertise</p>
                <h2 class="font-bold mb-5 leading-tight"
                    style="font-family:'Plus Jakarta Sans';font-size:clamp(28px,3.5vw,44px);letter-spacing:-0.03em;">
                    Turn Ordinary Views<br>
                    <span class="text-drone-gradient">Into Extraordinary Visuals</span>
                </h2>
                <p class="text-gray-300 text-sm leading-relaxed mb-8">
                    Professional drone operators with years of experience in aerial cinematography. We deliver high-quality photo and video content that elevates your story.
                </p>
                <div class="space-y-3">
                    @foreach(['Professional Aerial Photography','4K & 8K Video Capture','Fast & Easy Booking','Transparent Pricing','Multiple Package Options','Coverage Across Locations'] as $item)
                    <div class="flex items-center gap-3">
                        <div class="w-5 h-5 rounded-full flex-shrink-0 flex items-center justify-center bg-gradient-to-br from-cyan-600 to-blue-600">
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
                        <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-cyan-600 to-blue-600 flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined text-white text-2xl">airplanemode_active</span>
                        </div>
                        <div>
                            <h3 class="font-bold text-white text-lg" style="font-family:'Plus Jakarta Sans'">Aerial Cinematography</h3>
                            <p class="text-cyan-300 text-xs">Sky to Success</p>
                        </div>
                    </div>
                    <p class="text-gray-300 text-sm leading-relaxed mb-6">
                        Book a drone operator and elevate your story from the ground to the sky with stunning aerial visuals.
                    </p>
                    <button onclick="openBusinessEnquiry()"
                            class="btn-theme w-full py-4 rounded-xl font-bold text-sm text-center shining-btn">
                        Book a Drone Operator
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="grad-divider"></div>

{{-- ── PRICING ── --}}
<section id="pricing" class="py-20" style="background:rgba(8,3,20,0.7);">
    <div class="max-w-[1200px] mx-auto px-6">

        <div class="text-center mb-14 sr">
            <p class="section-eyebrow mb-3">Transparent Pricing</p>
            <h2 class="font-bold" style="font-family:'Plus Jakarta Sans';font-size:clamp(28px,3.5vw,42px);letter-spacing:-0.03em;">
                Drone <span class="text-drone-gradient">Packages</span>
            </h2>
            <p class="text-gray-400 text-sm mt-3">
                Affordable drone services for personal and business needs.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

            @foreach([
                [
                    'Non Licensed Silver',
                    '₹1,599',
                    false,
                    [
                        'Basic Drone Coverage',
                        'HD Video Recording',
                        '50+ Photos',
                        'Basic Editing',
                        '30 Minutes Coverage'
                    ],
                    'flight'
                ],

                [
                    'Non Licensed Premium',
                    '₹1,999',
                    true,
                    [
                        'Extended Coverage',
                        'Full HD Video Recording',
                        '100+ Photos',
                        'Professional Editing',
                        '45 Minutes Coverage'
                    ],
                    'workspace_premium'
                ],

                [
                    'Licensed Silver',
                    '₹2,499',
                    false,
                    [
                        'Licensed Drone Operator',
                        'Professional Aerial Coverage',
                        '4K Video Recording',
                        '150+ Photos',
                        'Basic Cinematic Editing'
                    ],
                    'verified'
                ],

                [
                    'Licensed Premium',
                    '₹3,200',
                    false,
                    [
                        'Licensed Drone Operator',
                        'Premium Aerial Coverage',
                        '4K Video Recording',
                        '300+ Photos',
                        'Advanced Cinematic Editing',
                        'Priority Booking'
                    ],
                    'stars'
                ]

            ] as [$name,$price,$popular,$features,$icon])

            <div class="price-card p-7 flex flex-col sr {{ $popular ? 'featured' : '' }}">

                @if($popular)
                <div class="inline-flex items-center gap-1.5 self-start mb-4 px-3 py-1 rounded-full bg-gradient-to-r from-cyan-600 to-blue-600 text-[10px] font-bold text-white uppercase tracking-widest">
                    <span class="material-symbols-outlined text-[12px]">workspace_premium</span>
                    Most Popular
                </div>
                @endif

                <div class="w-12 h-12 rounded-2xl mb-4 flex items-center justify-center"
                     style="background:rgba(6,182,212,0.18);border:1px solid rgba(6,182,212,0.3);">
                    <span class="material-symbols-outlined text-cyan-300 text-2xl">
                        {{ $icon }}
                    </span>
                </div>

                <h3 class="font-bold text-white text-xl mb-1"
                    style="font-family:'Plus Jakarta Sans'">
                    {{ $name }}
                </h3>

                <p class="text-drone-gradient font-bold mb-6"
                   style="font-size:1.8rem;font-family:'Plus Jakarta Sans';">
                    {{ $price }}
                </p>

                <ul class="space-y-3 flex-1 mb-8">
                    @foreach($features as $f)
                    <li class="flex items-center gap-2.5">
                        <div class="w-4 h-4 rounded-full flex-shrink-0 flex items-center justify-center bg-gradient-to-br from-cyan-600 to-blue-600">
                            <span class="material-symbols-outlined text-white text-[10px]">check</span>
                        </div>
                        <span class="text-gray-300 text-sm">{{ $f }}</span>
                    </li>
                    @endforeach
                </ul>

                <button onclick="openBusinessEnquiry()"
                        class="{{ $popular ? 'btn-theme' : 'border border-cyan-500/40 text-white hover:bg-cyan-500/10' }} w-full py-3.5 rounded-xl font-bold text-sm transition-all shining-btn">
                    Book This Package
                </button>

            </div>

            @endforeach

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
                Why Book Through <span class="text-drone-gradient">PicQ</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach([
                ['verified','Verified Operators','All drone operators are licensed and insured.','cyan'],
                ['airplanemode_active','Professional Cinematography','Award-winning operators with years of experience.','cyan'],
                ['bolt','Fast Delivery','High-quality footage delivered quickly.','cyan'],
['4k','4K & 8K Capabilities','Latest drone technology for stunning visuals.','cyan'],
['tune','Flexible Packages','Customizable solutions for any project.','cyan'],
['support_agent','Dedicated Support','End-to-end support for your project.','cyan'],
            ] as [$icon,$title,$desc,$color])
            <div class="feat-card p-6 sr">
                <div class="w-12 h-12 rounded-2xl mb-4 flex items-center justify-center"
                     style="background:rgba(6,182,212,0.18);border:1px solid rgba(6,182,212,0.3);">
                    <span class="material-symbols-outlined text-cyan-300 text-2xl">{{ $icon }}</span>
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
    <div class="orb w-[600px] h-[600px] bg-cyan-700/20 -bottom-32 -right-32"></div>

    <div class="max-w-[1100px] mx-auto px-6 relative z-10">
        <div class="sr text-center">
            <h2 class="font-bold mb-4"
                style="font-family:'Plus Jakarta Sans';font-size:clamp(28px,4vw,44px);letter-spacing:-0.03em;">
                Ready to Fly <span class="text-drone-gradient">High</span>?
            </h2>
            <p class="text-gray-300 max-w-lg mx-auto mb-8">
                Book a professional drone operator today and capture breathtaking aerial visuals for your project.
            </p>
            <button onclick="openBusinessEnquiry()"
                    class="btn-theme px-8 py-4 rounded-2xl font-bold text-base shining-btn">
                Book Your Operator
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
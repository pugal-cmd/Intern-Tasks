@extends('layouts.app')

@section('title', 'Studio Booking | PicQ')

@push('styles')
<style>
/* ── Hide nav pill on this page ── */
.nav-pill { display: none !important; }
body { padding-top: 0 !important; }

/* ── Page hero gradient ── */
.studio-hero {
    background:
        radial-gradient(ellipse 80% 60% at 50% -10%, rgba(109,40,217,0.55) 0%, transparent 65%),
        radial-gradient(ellipse 50% 40% at 80% 20%, rgba(219,39,119,0.25) 0%, transparent 60%),
        linear-gradient(180deg, #0d0418 0%, #130a2a 60%, #1a0d35 100%);
    min-height: 100vh;
}

/* ── Glass pill nav (breadcrumb bar) ── */
.page-topbar {
    position: sticky;
    top: 0;
    z-index: 100;
    background: rgba(10,4,24,0.82);
    backdrop-filter: blur(28px);
    border-bottom: 1px solid rgba(139,92,246,0.18);
}

/* ── Stat chips ── */
.stat-chip {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(139,92,246,0.22);
    border-radius: 9999px;
}

/* ── Feature card ── */
.feat-card {
    background: rgba(255,255,255,0.03);
    border: 1px solid rgba(139,92,246,0.15);
    border-radius: 20px;
    transition: all 0.35s cubic-bezier(.4,0,.2,1);
}
.feat-card:hover {
    background: rgba(109,40,217,0.10);
    border-color: rgba(139,92,246,0.45);
    transform: translateY(-4px);
    box-shadow: 0 16px 48px rgba(109,40,217,0.20);
}

/* ── Studio type pill ── */
.type-pill {
    background: rgba(139,92,246,0.08);
    border: 1px solid rgba(139,92,246,0.22);
    border-radius: 9999px;
    transition: all 0.25s;
}
.type-pill:hover {
    background: rgba(139,92,246,0.18);
    border-color: rgba(139,92,246,0.5);
    transform: scale(1.04);
}

/* ── Pricing card ── */
.price-card {
    background: rgba(255,255,255,0.03);
    border: 1px solid rgba(139,92,246,0.18);
    border-radius: 24px;
    transition: all 0.35s;
    position: relative;
    overflow: hidden;
}
.price-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(109,40,217,0.08) 0%, transparent 60%);
    opacity: 0;
    transition: opacity 0.35s;
}
.price-card:hover { border-color: rgba(139,92,246,0.45); transform: translateY(-6px); box-shadow: 0 24px 60px rgba(109,40,217,0.22); }
.price-card:hover::before { opacity: 1; }
.price-card.featured {
    border-color: rgba(139,92,246,0.5);
    background: linear-gradient(135deg, rgba(109,40,217,0.14) 0%, rgba(219,39,119,0.08) 100%);
    box-shadow: 0 0 40px rgba(109,40,217,0.20), 0 0 80px rgba(219,39,119,0.10);
}

/* ── Section label ── */
.section-eyebrow {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    color: #a78bfa;
}

/* ── Divider ── */
.grad-divider {
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(139,92,246,0.4), rgba(219,39,119,0.3), transparent);
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
    border: 1px solid rgba(139,92,246,0.20);
    transition: all 0.2s;
}
.tag:hover { background: rgba(109,40,217,0.14); border-color: rgba(139,92,246,0.45); color: #fff; }

/* ── Glow orb ── */
.orb {
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
    filter: blur(80px);
}

/* ── CTA strip ── */
.cta-strip {
    background: linear-gradient(135deg, rgba(109,40,217,0.22) 0%, rgba(219,39,119,0.14) 100%);
    border: 1px solid rgba(139,92,246,0.28);
    border-radius: 28px;
}

/* ── Scroll reveal ── */
.sr { opacity: 0; transform: translateY(22px); transition: opacity 0.55s ease, transform 0.55s ease; }
.sr.in { opacity: 1; transform: none; }
</style>
@endpush

@section('content')

{{-- ── TOPBAR ── --}}
<div class="page-topbar">
    <div class="max-w-[1200px] mx-auto px-6 py-3 flex items-center justify-between">
        {{-- Breadcrumb --}}
        <nav class="flex items-center gap-2 text-xs text-gray-400">
            <a href="{{ route('home') }}" class="hover:text-purple-300 transition-colors flex items-center gap-1">
                <span class="material-symbols-outlined text-[14px]">home</span>
                <span>Home</span>
            </a>
            <span class="material-symbols-outlined text-[13px] text-gray-600">chevron_right</span>
            <a href="{{ route('home') }}#how-it-works" class="hover:text-purple-300 transition-colors">How It Works</a>
            <span class="material-symbols-outlined text-[13px] text-gray-600">chevron_right</span>
            <span class="text-purple-300 font-semibold">Studio</span>
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
<section class="studio-hero relative overflow-hidden pt-16 pb-24">
    {{-- Orbs --}}
    <div class="orb w-[600px] h-[600px] bg-purple-700/20 -top-32 -left-32"></div>
    <div class="orb w-[400px] h-[400px] bg-pink-700/15 top-20 right-0"></div>

    <div class="max-w-[1200px] mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            {{-- Left copy --}}
            <div class="sr">
                {{-- Eyebrow --}}
                <div class="inline-flex items-center gap-2.5 mb-6 px-4 py-2 rounded-full"
                     style="background:rgba(109,40,217,0.14);border:1px solid rgba(139,92,246,0.3);">
                    <span class="material-symbols-outlined text-purple-400 text-[16px]">photo_camera</span>
                    <span class="section-eyebrow" style="color:#a78bfa;">Studio Booking</span>
                </div>

                <h1 class="font-bold mb-6 leading-tight"
                    style="font-family:'Plus Jakarta Sans';font-size:clamp(38px,5vw,66px);letter-spacing:-0.04em;">
                    Find the <span class="text-theme-gradient">Perfect Space</span><br>for Every Shoot
                </h1>

                <p class="text-gray-300 text-base leading-relaxed mb-8 max-w-lg">
                    Browse and book professional studios based on your requirements, budget and location. Whether you're a creator, photographer, business owner or production team — PicQ connects you in minutes.
                </p>

                {{-- Stat chips --}}
                <div class="flex flex-wrap gap-3 mb-10">
                    <div class="stat-chip px-5 py-2.5 flex items-center gap-2">
                        <span class="material-symbols-outlined text-purple-400 text-[18px]">domain</span>
                        <span class="text-white font-bold text-sm">9+ Studio Types</span>
                    </div>
                    <div class="stat-chip px-5 py-2.5 flex items-center gap-2">
                        <span class="material-symbols-outlined text-pink-400 text-[18px]">verified</span>
                        <span class="text-white font-bold text-sm">Verified Partners</span>
                    </div>
                    <div class="stat-chip px-5 py-2.5 flex items-center gap-2">
                        <span class="material-symbols-outlined text-purple-400 text-[18px]">payments</span>
                        <span class="text-white font-bold text-sm">From ₹8,000</span>
                    </div>
                </div>

                <div class="flex flex-wrap gap-4">
                    <button onclick="openBusinessEnquiry()"
                            class="btn-theme px-8 py-4 rounded-2xl font-bold text-base shining-btn">
                        Book a Studio
                    </button>
                    <a href="#pricing"
                       class="px-8 py-4 rounded-2xl font-bold text-base text-white border border-white/15 hover:border-purple-500/50 hover:bg-purple-500/10 transition-all">
                        View Pricing
                    </a>
                </div>
            </div>

            {{-- Right — iPhone mockup --}}
          <a href="#" class="reveal hiw-img-link flex flex-col items-center gap-6 cursor-pointer group">
    <h3 class="font-bold text-lg text-white text-center"
        style="font-family:'Plus Jakarta Sans'">
        {{-- Studio Rental --}}
    </h3>

    <div class="hiw-card overflow-hidden rounded-3xl shadow-2xl">
        <img src="{{ asset('images/creators/studio-0001.jpg') }}"
             alt="Studio"
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
                Perfect <span class="text-theme-gradient">For</span>
            </h2>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach([
                ['📸','Photography Shoots'],['🎥','Video Productions'],['📱','Reels & Content'],
                ['🛍️','Product Photography'],['👗','Fashion Shoots'],['💄','Beauty & Makeup'],
                ['🎙️','Podcasts & Interviews'],['🎬','YouTube Videos'],
                ['🟢','Green Screen'],['👶','Baby & Maternity'],['🏢','Corporate Shoots'],['📺','Commercial Ads'],
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

{{-- ── STUDIO TYPES ── --}}
<section class="py-20" style="background:rgba(8,3,20,0.7);">
    <div class="max-w-[1200px] mx-auto px-6">

        <div class="text-center mb-14 sr">
            <p class="section-eyebrow mb-3">What We Offer</p>
            <h2 class="font-bold" style="font-family:'Plus Jakarta Sans';font-size:clamp(28px,3.5vw,42px);letter-spacing:-0.03em;">
                Available Studio <span class="text-theme-gradient">Types</span>
            </h2>
        </div>

        <div class="flex flex-wrap gap-3 justify-center">
            @foreach([
                ['home','Indoor Studios'],['park','Outdoor Shoot Locations'],['filter_b_and_w','Green Screen Studios'],
                ['mic','Podcast Studios'],['inventory_2','Product Photography Studios'],['style','Fashion Studios'],
                ['child_care','Baby & Maternity Studios'],['movie','Video Production Studios'],['music_note','Dubbing & Music Studios'],
            ] as [$icon,$label])
            <div class="type-pill px-5 py-3 flex items-center gap-2.5 sr cursor-default">
                <span class="material-symbols-outlined text-purple-400 text-[18px]">{{ $icon }}</span>
                <span class="text-sm font-semibold text-gray-200">{{ $label }}</span>
            </div>
            @endforeach
        </div>

    </div>
</section>

<div class="grad-divider"></div>

{{-- ── STUDIO SERVICE PACKAGE HIGHLIGHT ── --}}
<section class="py-20 relative overflow-hidden" style="background:rgba(10,4,24,0.6);">
    <div class="orb w-[500px] h-[500px] bg-purple-700/10 -right-32 top-0"></div>

    <div class="max-w-[1100px] mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <div class="sr">
                <p class="section-eyebrow mb-4">Complete Experience</p>
                <h2 class="font-bold mb-5 leading-tight"
                    style="font-family:'Plus Jakarta Sans';font-size:clamp(28px,3.5vw,44px);letter-spacing:-0.03em;">
                    Don't just book a studio.<br>
                    <span class="text-theme-gradient">Book the entire experience.</span>
                </h2>
                <p class="text-gray-300 text-sm leading-relaxed mb-8">
                    Need a complete shoot solution? PicQ lets you book ready-made media packages with everything included — studio, photographer, videographer, reels creator and equipment, all in one booking.
                </p>
                <div class="space-y-3">
                    @foreach(['Studio space, fully equipped','Professional photographer or videographer','Reels creator on Mobile or DSLR','All equipment included','From Baby Shoots to Brand Shoots'] as $item)
                    <div class="flex items-center gap-3">
                        <div class="w-5 h-5 rounded-full flex-shrink-0 flex items-center justify-center bg-gradient-to-br from-purple-600 to-pink-600">
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
                        <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-purple-600 to-pink-600 flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined text-white text-2xl">movie</span>
                        </div>
                        <div>
                            <h3 class="font-bold text-white text-lg" style="font-family:'Plus Jakarta Sans'">Studio Service Package</h3>
                            <p class="text-purple-300 text-xs">Everything in one booking</p>
                        </div>
                    </div>
                    <p class="text-gray-300 text-sm leading-relaxed mb-6">
                        Whatever you want to create, PicQ helps you make it happen — from a simple photoshoot to a full-scale production, all under one platform.
                    </p>
                    <button onclick="openBusinessEnquiry()"
                            class="btn-theme w-full py-4 rounded-xl font-bold text-sm text-center shining-btn">
                        Book Studio Service Package
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
                Studio <span class="text-theme-gradient">Packages</span>
            </h2>
            <p class="text-gray-400 text-sm mt-3">No hidden fees. Choose what fits your shoot.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach([
                ['Starter Shoot','₹8,000',false,['Up to 2 hours studio access','Basic lighting setup','50+ edited photos','Ideal for quick shoots'],'photo_camera'],
                ['Studio Service Package','₹18,000',true,['Full-day studio access','Creator & equipment included','150+ edited photos','Online gallery delivery'],'workspace_premium'],
                ['Premium Package','₹35,000',false,['Multi-day coverage','Lead + assistant creator','Same-day highlights','Premium delivery'],'stars'],
            ] as [$name,$price,$popular,$features,$icon])
            <div class="price-card p-7 flex flex-col sr {{ $popular ? 'featured' : '' }}">
                @if($popular)
                <div class="inline-flex items-center gap-1.5 self-start mb-4 px-3 py-1 rounded-full bg-gradient-to-r from-purple-600 to-pink-600 text-[10px] font-bold text-white uppercase tracking-widest">
                    <span class="material-symbols-outlined text-[12px]">workspace_premium</span>
                    Most Popular
                </div>
                @endif
                <div class="w-12 h-12 rounded-2xl mb-4 flex items-center justify-center"
                     style="background:rgba(109,40,217,0.18);border:1px solid rgba(139,92,246,0.3);">
                    <span class="material-symbols-outlined text-purple-300 text-2xl">{{ $icon }}</span>
                </div>
                <h3 class="font-bold text-white text-xl mb-1" style="font-family:'Plus Jakarta Sans'">{{ $name }}</h3>
                <p class="text-theme-gradient font-bold mb-6" style="font-size:1.8rem;font-family:'Plus Jakarta Sans';">{{ $price }}</p>
                <ul class="space-y-3 flex-1 mb-8">
                    @foreach($features as $f)
                    <li class="flex items-center gap-2.5">
                        <div class="w-4 h-4 rounded-full flex-shrink-0 flex items-center justify-center bg-gradient-to-br from-purple-600 to-pink-600">
                            <span class="material-symbols-outlined text-white text-[10px]">check</span>
                        </div>
                        <span class="text-gray-300 text-sm">{{ $f }}</span>
                    </li>
                    @endforeach
                </ul>
                <button onclick="openBusinessEnquiry()"
                        class="{{ $popular ? 'btn-theme' : 'border border-purple-500/40 text-white hover:bg-purple-500/10' }} w-full py-3.5 rounded-xl font-bold text-sm transition-all shining-btn">
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
                Why Book Through <span class="text-theme-gradient">PicQ</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach([
                ['verified','Verified Studios','Every studio on PicQ is individually verified before listing.','purple'],
                ['compare_arrows','Compare Multiple Options','Side-by-side comparison of studios, pricing and portfolios.','pink'],
                ['bolt','Easy Booking Process','Confirm your studio in minutes, not days.','purple'],
                ['tune','Flexible Packages','From quick 2-hour slots to full-day multi-day packages.','pink'],
                ['receipt_long','Transparent Pricing','See everything upfront. No surprise fees.','purple'],
                ['savings','Save Time & Effort','One platform for studios, equipment and creators.','pink'],
            ] as [$icon,$title,$desc,$color])
            <div class="feat-card p-6 sr">
                <div class="w-12 h-12 rounded-2xl mb-4 flex items-center justify-center"
                     style="background:rgba({{ $color === 'purple' ? '109,40,217' : '219,39,119' }},0.15);border:1px solid rgba({{ $color === 'purple' ? '139,92,246' : '236,72,153' }},0.3);">
                    <span class="material-symbols-outlined text-[22px]" style="color:{{ $color === 'purple' ? '#a78bfa' : '#f472b6' }}">{{ $icon }}</span>
                </div>
                <h4 class="font-bold text-white mb-2 text-base" style="font-family:'Plus Jakarta Sans'">{{ $title }}</h4>
                <p class="text-gray-400 text-sm leading-relaxed">{{ $desc }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>

{{-- ── BOTTOM CTA ── --}}
<section class="py-20" style="background:rgba(8,3,20,0.8);">
    <div class="max-w-[800px] mx-auto px-6 text-center sr">
        <div class="cta-strip p-12 lg:p-16 relative overflow-hidden">
            <div class="orb w-64 h-64 bg-purple-600/20 -top-10 -right-10"></div>
            <div class="orb w-48 h-48 bg-pink-600/15 -bottom-10 -left-10"></div>
            <div class="relative z-10">
                <p class="section-eyebrow mb-4">Ready to Create?</p>
                <h2 class="font-bold text-white mb-4" style="font-family:'Plus Jakarta Sans';font-size:clamp(26px,3vw,40px);letter-spacing:-0.03em;">
                    One Platform. One Booking.<br><span class="text-theme-gradient">Endless Creativity.</span>
                </h2>
                <p class="text-gray-300 text-sm mb-8 max-w-md mx-auto">
                    From a simple photoshoot to a full-scale production, PicQ helps you find the right space, the right people, and the right equipment.
                </p>
                <div class="flex flex-wrap gap-4 justify-center">
                    <button onclick="openBusinessEnquiry()" class="btn-theme px-8 py-4 rounded-2xl font-bold text-base shining-btn">
                        Book a Studio Now
                    </button>
                    <a href="{{ route('home') }}" class="px-8 py-4 rounded-2xl font-bold text-base text-white border border-white/15 hover:border-purple-500/50 transition-all">
                        Explore PicQ
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
(function(){
    const els = document.querySelectorAll('.sr');
    const io = new IntersectionObserver(entries => {
        entries.forEach(e => { if(e.isIntersecting){ e.target.classList.add('in'); io.unobserve(e.target); } });
    }, { threshold: 0.08 });
    els.forEach(el => io.observe(el));
})();
</script>
@endpush
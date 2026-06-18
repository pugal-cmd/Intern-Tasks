@extends('layouts.app')

@section('title', 'PicQ | India\'s First Media Booking Platform')

@push('bg_shader')
@endpush

@section('content')

{{-- ══ HERO ══ --}}
<section id="hero" class="hero-theme relative min-h-screen flex items-center pt-4 pb-6 overflow-hidden">
    <div class="max-w-[1280px] mx-auto px-8 grid grid-cols-1 lg:grid-cols-12 gap-10 relative z-10 w-full">
        <div class="lg:col-span-7 flex flex-col justify-center gap-6 reveal">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-purple-500/30 w-fit">
                <span class="w-2 h-2 rounded-full bg-pink-400 animate-pulse"></span>
                <span class="text-xs font-semibold tracking-widest text-gray-300 uppercase">🚀 Launching Soon Across India</span>
            </div>

            <h1 class="font-bold leading-tight" style="font-family:'Plus Jakarta Sans';font-size:clamp(36px,5.5vw,68px);letter-spacing:-0.04em;">
                India's First <span class="text-theme-gradient">Media Booking</span> Platform.<br>
                Book. Create. <span class="text-theme-gradient">Grow</span>.
            </h1>

            <p class="text-base text-gray-300 max-w-lg leading-relaxed">
                Studios, Reels Creators, Drone Operators, Equipment Rentals &amp; Media Services — all in one place. Whether you're a business, creator, influencer, photographer, or brand, PicQ helps you find the right media professionals in minutes.
            </p>

            <div class="flex flex-wrap gap-4 items-center">
                <a href="#" onclick="openBusinessRequest()" class="btn-theme book-btn text-base shining-btn">Book Now</a>
                <div class="flex items-center gap-3">
                    <div class="flex -space-x-3">
                        <div class="w-10 h-10 rounded-full border-2 border-white/20 overflow-hidden">
                            <img src="https://i.pravatar.cc/100?img=12" alt="User" class="w-full h-full object-cover" loading="lazy">
                        </div>
                        <div class="w-10 h-10 rounded-full border-2 border-white/20 overflow-hidden">
                            <img src="https://i.pravatar.cc/100?img=32" alt="User" class="w-full h-full object-cover" loading="lazy">
                        </div>
                        <div class="w-10 h-10 rounded-full border-2 border-white/20 overflow-hidden">
                            <img src="https://i.pravatar.cc/100?img=45" alt="User" class="w-full h-full object-cover" loading="lazy">
                        </div>
                    </div>
                    <div>
                        <span class="font-bold text-white text-sm block">Studios, Creators & Drones</span>
                        <span class="text-xs text-purple-300 tracking-widest">All In One App</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-5 flex items-center justify-center reveal">
            <div style="position:relative; transform: translateX(-26px) rotate(6deg);">
                <div style="
                    position:absolute;
                    inset:-60px;
                    border-radius:50%;
                    background:radial-gradient(circle, rgba(124,58,237,0.18) 0%, transparent 70%);
                    pointer-events:none;
                    z-index:0;
                "></div>

                {{-- iPhone frame --}}
                <div class="relative w-64 h-[520px] bg-[#0d0d12] rounded-[36px] border-[7px] border-purple-500/30 shadow-2xl overflow-hidden transform rotate-2 hover:rotate-0 transition-transform duration-500 animate-phone-float" style="z-index:1;">

                    {{-- Notch --}}
                    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-24 h-5 bg-black rounded-b-2xl z-20"></div>

                    {{-- Status bar --}}
                    <div class="flex items-center justify-between px-5 pt-3 pb-1 text-[11px] text-gray-300 font-semibold relative z-10">
                        <span>9:41</span>
                        <div class="flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">signal_cellular_alt</span>
                            <span class="material-symbols-outlined text-[14px]">wifi</span>
                            <span class="material-symbols-outlined text-[14px]">battery_full</span>
                        </div>
                    </div>

                    {{-- Image shifted down inside frame using object-position --}}
                    <div class="px-3 pt-3" style="height:58%;">
                        <div class="w-full h-full rounded-2xl overflow-hidden border border-white/10 shadow-lg">
                            <img src="{{ asset('images/app-preview.jpg') }}" alt="PicQ App Preview"
                                 class="w-full h-full object-cover">
                        </div>
                    </div>

                    {{-- PicQ logo + name --}}
                    <div class="flex items-center justify-center gap-2 mt-4">
                        <img src="{{ asset('images/logo.png') }}" alt="PicQ" class="h-7 w-7 object-contain">
                        <span class="font-bold text-lg text-theme-gradient" style="font-family:'Plus Jakarta Sans'">PicQ</span>
                    </div>

                    {{-- Google Play button --}}
                    <div class="px-5 pt-3 flex justify-center">
                        <a href="{{ route('home') }}#download-app" class="theme-card flex items-center gap-3 px-6 py-2.5 hover:scale-105 transition-transform group">
                            <img src="assets/logos/google-play.svg" alt="Google Play" class="w-6 h-6 object-contain flex-shrink-0" loading="lazy">
                            <div>
                                <span class="text-[10px] block text-purple-300 uppercase tracking-widest">Get it on</span>
                                <span class="font-bold text-sm text-white">Google Play</span>
                            </div>
                        </a>
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
    </div>
</section>

{{-- ══ STATS — plain white text, no cards ══ --}}
<section class="section-primary py-3">
    <div class="max-w-[1280px] mx-auto px-8 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
        @php
            $photoStats = [
                ['value' => '5,000+',  'label' => 'Professional Photographers'],
                ['value' => '25,000+', 'label' => 'Events Captured'],
                ['value' => '500+',    'label' => 'Partner Studios'],
                ['value' => '50,000+', 'label' => 'Happy Clients'],
            ];
        @endphp
        @foreach($photoStats as $stat)
        <div class="reveal py-4">
            <p class="font-bold text-white" style="font-family:'Plus Jakarta Sans';font-size:clamp(28px,3.5vw,48px);">{{ $stat['value'] }}</p>
            <p class="text-white text-xs font-semibold uppercase tracking-widest mt-2 opacity-80">{{ $stat['label'] }}</p>
        </div>
        @endforeach
    </div>
</section>


{{-- ══ HOW IT WORKS — simple images, click to go to page ══ --}}
<section id="how-it-works" class="section-secondary py-6 relative overflow-hidden">
    <div class="max-w-[1280px] mx-auto px-8">

        <div class="text-center mb-14 reveal">
            <h2 class="font-bold mb-3"
                style="font-family:'Plus Jakarta Sans';font-size:clamp(28px,4vw,44px);letter-spacing:-0.02em;">
                How It <span class="text-theme-gradient">Works</span>
            </h2>
            <p class="text-gray-300 max-w-md mx-auto text-sm">
                Search, compare, book and create — it's that simple.
            </p>
        </div>

        {{-- 3 phone-framed images, title on top, click to redirect --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 justify-items-center">

            {{-- ── Studio ── --}}
            <a href="{{ route('studio') }}" class="reveal hiw-img-link flex flex-col items-center  cursor-pointer group">
                <h3 class="font-bold text-lg text-white text-center" style="font-family:'Plus Jakarta Sans'">Reel Shoot</h3>
                                <h3 class="font-bold text-lg text-white text-center" style="font-family:'Plus Jakarta Sans'">( Mobile )</h3>

              <div class="overflow-hidden rounded-3xl shadow-2xl">
    <img src="{{ asset('images/creators/studio-0001.jpg') }}"
         alt="Studio"
         class="hiw-img w-full h-[420px] object-cover">
</div>
                <p class="text-gray-400 text-xs -mt-2">Tap to explore →</p>
            </a>

            {{-- ── Reels ── --}}
            <a href="{{ route('reels') }}" class="reveal hiw-img-link flex flex-col items-center  cursor-pointer group">
                <h3 class="font-bold text-lg text-white text-center" style="font-family:'Plus Jakarta Sans'">Reels Shoot</h3>
                                <h3 class="font-bold text-lg text-white text-center" style="font-family:'Plus Jakarta Sans'">( DSLR )</h3>

             <div class="overflow-hidden rounded-3xl shadow-2xl">
    <img src="{{ asset('images/creators/reel-0001.jpg') }}"
         alt="Reels Shoot"
         class="hiw-img w-full h-[420px] object-cover">
</div>
                <p class="text-gray-400 text-xs -mt-2">Tap to explore →</p>
            </a>

            {{-- ── Drone ── --}}
            <a href="{{ route('drone') }}" class="reveal hiw-img-link flex flex-col items-center gap-6 cursor-pointer group">
                <h3 class="font-bold text-lg text-white text-center" style="font-family:'Plus Jakarta Sans'">Drone </h3>
               <div class="overflow-hidden rounded-3xl shadow-2xl">
    <img src="{{ asset('images/creators/drone-0001.jpg') }}"
         alt="Drone Services"
         class="hiw-img w-full h-[420px] object-cover">
</div>
                <p class="text-gray-400 text-xs -mt-2">Tap to explore →</p>
            </a>

        </div>
    </div>
</section>

<style>
.hiw-phone {
    transition: transform 0.45s cubic-bezier(0.22,1,0.36,1), box-shadow 0.45s ease;
    will-change: transform;
}
.hiw-img {
    transition: transform 0.6s cubic-bezier(0.22,1,0.36,1), filter 0.45s ease;
    will-change: transform;
}
.hiw-img-link:hover .hiw-phone {
    transform: translateY(-10px) scale(1.03);
    box-shadow: 0 22px 45px rgba(124,58,237,0.35);
}
.hiw-img-link:hover .hiw-img {
    transform: scale(1.08);
    filter: brightness(1.05);
}
</style>

{{-- ══ PRODUCTION SPECIALTIES ══ --}}
<section id="services" class="section-primary py-8">
    <div class="max-w-[1280px] mx-auto px-8">

        <h2 class="font-bold mb-12 text-center reveal"
            style="font-family:'Plus Jakarta Sans';font-size:clamp(28px,4vw,44px);letter-spacing:-0.02em;">
            Production <span class="text-theme-gradient">Specialties</span>
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
            $defaultServices = [
                [
                    'name' => 'Studio',
                    'short' => 'Find and book the perfect studio space, or a complete shoot package with everything included.',
                    'description' => 'Need a professional space for your next project? Browse and book studios based on your requirements, budget and location, whether you are a creator, photographer, business owner or production team. Choose from indoor, outdoor, green screen, podcast, product, fashion, baby and maternity, and video production studios. Perfect for photography shoots, video productions, reels and content creation, product and fashion shoots, podcasts, YouTube videos, corporate shoots and commercial advertisements. Or skip the search entirely and book a ready-made studio service package, studio, photographer, videographer, reels creator and equipment, all included.',
                    'badge' => 'Most Popular',
                    'image' => 'photography.jpg',
                    'icon' => 'photo_camera',
                    'perfect_for' => ['Photography Shoots', 'Video Productions', 'Reels & Content Creation', 'Product Photography', 'Fashion Shoots', 'Beauty & Makeup Content', 'Podcasts & Interviews', 'YouTube Videos', 'Green Screen Productions', 'Baby & Maternity Shoots', 'Corporate Shoots', 'Commercial Advertisements'],
                    'studio_types' => ['Indoor Studios', 'Outdoor Shoot Locations', 'Green Screen Studios', 'Podcast Studios', 'Product Photography Studios', 'Fashion Studios', 'Baby & Maternity Studios', 'Video Production Studios', 'Dubbing & Music Studios'],
                    'why' => ['Verified Studios & Service Providers', 'Compare Multiple Options', 'Easy Booking Process', 'Flexible Packages', 'Transparent Pricing', 'One Platform for Everything Media', 'Save Time & Effort'],
                ],
                [
                    'name' => 'Reels Shoot',
                    'short' => 'Book professional reels creators, on Mobile or DSLR, to turn your moments into trend-ready content.',
                    'description' => 'Every moment deserves a reel. Book professional content creators to capture your special moments and create engaging social media content.',
                    'badge' => null,
                    'image' => 'wedding.jpg',
                    'icon' => 'videocam',
                    'perfect_for' => ['New Vehicle Delivery Reels', 'New Home / Housewarming Reels', 'Engagement & Wedding Reels', 'Birthday Celebration Reels', 'Baby Shower & Naming Ceremony Reels', 'Graduation & Achievement Reels', 'Family Functions & Events', 'Business Promotion Reels', 'Restaurant & Cafe Content', 'Shop Opening & Product Launches', 'Gym & Fitness Content', 'Hotel & Resort Promotions', 'Personal Branding Content', 'Podcast & Interview Clips', 'Cinematic Lifestyle Videos'],
                    'studio_types' => [],
                    'why' => ['Professional Content Creators', 'Trend-Based Reels', 'Support Team Available', 'Affordable Packages', 'Easy Booking Process', 'Ready-to-Post Content'],
                ],
                [
                    'name' => 'Drone Services',
                    'short' => 'Professional drone operators for stunning aerial photography and cinematic videos, anywhere in India.',
                    'description' => 'Book professional drone operators for stunning aerial photography and cinematic videos. Whether it\'s a property, event, business promotion, or special occasion, capture every angle from the sky.',
                    'badge' => 'Trending',
                    'image' => 'drone.jpg',
                    'icon' => 'flight',
                    'perfect_for' => ['Real Estate Property Showcases', 'Construction Progress Monitoring', 'Villas, Apartments & Gated Communities', 'Resorts, Hotels & Tourist Destinations', 'Weddings & Grand Events', 'Factories & Industrial Sites', 'Farms & Agricultural Lands', 'Automobile Showrooms & Vehicle Launches', 'Schools, Colleges & Campus Tours', 'Temples, Churches & Religious Events', 'Exhibitions, Festivals & Public Gatherings', 'Commercial Advertisements & Brand Films', 'Travel & Tourism Content', 'YouTube & Social Media Content Creation'],
                    'studio_types' => [],
                    'why' => ['Verified Drone Operators', 'Professional Aerial Cinematography', 'High-Quality Photo & Video Delivery', 'Fast & Easy Booking', 'Transparent Pricing', 'Multiple Package Options', 'Coverage Across Various Locations'],
                ],
            ];
            $servicesToShow = collect($defaultServices)->map(fn($item) => (object) $item);
            @endphp

            @foreach($servicesToShow as $index => $service)
            <div class="reveal">
                <h4 class="font-bold text-xl mb-3 text-center text-white" style="font-family:'Plus Jakarta Sans'">
                    {{ $service->name }}
                </h4>

                <div class="service-card-enhanced group relative aspect-[4/3] rounded-3xl cursor-pointer overflow-hidden"
                     onclick="openServiceModal({{ $index }})">

                    <img src="{{ asset('images/services/' . ($service->image ?? 'photography.jpg')) }}"
                         alt="{{ $service->name }}"
                         class="absolute inset-0 w-full h-full object-cover rounded-3xl opacity-90 group-hover:opacity-100 transition-opacity duration-500"
                         style="z-index:1;"
                         loading="lazy"
                         onerror="this.style.display='none'">

                    <div class="absolute inset-0 bg-gradient-to-br from-purple-900/10 via-gray-900/20 to-pink-900/10 rounded-3xl" style="z-index:2;"></div>
                    <div class="absolute inset-0 rounded-3xl bg-gradient-to-br from-transparent via-purple-500/15 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-400" style="z-index:3;"></div>
                    <div class="absolute bottom-0 left-0 right-0 h-28 bg-gradient-to-t from-black/60 to-transparent rounded-b-3xl" style="z-index:4;"></div>

                    @if(isset($service->badge) && $service->badge)
                    <div class="absolute top-4 left-4" style="z-index:5;">
                        <div class="inline-block px-4 py-2 rounded-full bg-gradient-to-r from-purple-600/50 to-pink-600/50 border border-purple-400/50 text-xs font-bold text-purple-200 uppercase">
                            {{ $service->badge }}
                        </div>
                    </div>
                    @endif

                    <div class="absolute bottom-0 left-0 right-0 p-5" style="z-index:5;">
                        <p class="text-gray-200 text-sm leading-relaxed">
                            {{ $service->short }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Service Detail Modal --}}
<div id="service-modal" class="modal">
    <div class="modal-content" style="max-width:680px;max-height:85vh;overflow-y:auto;">
        <div class="p-8">
            <div class="flex justify-between items-start mb-6">
                <div class="flex items-center gap-4">
                    <div id="service-modal-icon" class="w-14 h-14 rounded-2xl bg-gradient-to-br from-purple-600/30 to-pink-600/30 border border-purple-500/30 flex items-center justify-center flex-shrink-0">
                        <span class="material-symbols-outlined text-3xl text-purple-300"></span>
                    </div>
                    <h2 id="service-modal-title" class="font-bold text-2xl text-theme-gradient" style="font-family:'Plus Jakarta Sans'"></h2>
                </div>
                <button onclick="closeServiceModal()" class="text-gray-400 hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-2xl">close</span>
                </button>
            </div>

            <img id="service-modal-image" src="" alt="" class="w-full h-56 object-cover rounded-2xl mb-6" loading="lazy">
            <p id="service-modal-description" class="text-gray-300 leading-relaxed mb-8"></p>

            <h3 class="font-bold text-sm uppercase tracking-widest text-purple-300 mb-3">Perfect For</h3>
            <div id="service-modal-perfect-for" class="flex flex-wrap gap-2 mb-8"></div>

            <div id="service-modal-studio-types-wrap" class="mb-8" style="display:none;">
                <h3 class="font-bold text-sm uppercase tracking-widest text-purple-300 mb-3">Available Studio Types</h3>
                <div id="service-modal-studio-types" class="flex flex-wrap gap-2"></div>
            </div>

            <h3 class="font-bold text-sm uppercase tracking-widest text-pink-300 mb-3">Why Book Through PicQ</h3>
            <ul id="service-modal-why" class="space-y-2 mb-8"></ul>

            <button onclick="openBusinessEnquiry(); closeServiceModal();" class="btn-theme block w-full py-4 rounded-xl font-bold text-center text-sm shining-btn">
                Book Now
            </button>
        </div>
    </div>
</div>

<script>
const picqServices = @json($servicesToShow->values());

function openServiceModal(index) {
    const s = picqServices[index];
    if (!s) return;
    document.getElementById('service-modal-title').textContent = s.name;
    document.getElementById('service-modal-description').textContent = s.description;
    document.getElementById('service-modal-image').src = "{{ asset('images/services/') }}/" + s.image;
    document.getElementById('service-modal-image').alt = s.name;
    document.getElementById('service-modal-icon').querySelector('span').textContent = s.icon || 'photo_camera';

    const pf = document.getElementById('service-modal-perfect-for');
    pf.innerHTML = '';
    (s.perfect_for || []).forEach(item => {
        const tag = document.createElement('span');
        tag.className = 'inline-block px-3 py-1.5 rounded-full bg-white/5 border border-purple-500/20 text-gray-300 text-xs';
        tag.textContent = item;
        pf.appendChild(tag);
    });

    const stWrap = document.getElementById('service-modal-studio-types-wrap');
    const st = document.getElementById('service-modal-studio-types');
    st.innerHTML = '';
    if (s.studio_types && s.studio_types.length) {
        s.studio_types.forEach(item => {
            const tag = document.createElement('span');
            tag.className = 'inline-block px-3 py-1.5 rounded-full bg-white/5 border border-pink-500/20 text-gray-300 text-xs';
            tag.textContent = item;
            st.appendChild(tag);
        });
        stWrap.style.display = 'block';
    } else {
        stWrap.style.display = 'none';
    }

    const why = document.getElementById('service-modal-why');
    why.innerHTML = '';
    (s.why || []).forEach(item => {
        const li = document.createElement('li');
        li.className = 'flex items-center gap-3';
        li.innerHTML = `<div class="w-5 h-5 rounded-full bg-gradient-to-r from-purple-600 to-pink-600 flex items-center justify-center flex-shrink-0"><span class="text-white text-xs">✓</span></div><span class="text-gray-300 text-sm">${item}</span>`;
        why.appendChild(li);
    });

    const modal = document.getElementById('service-modal');
    modal.classList.add('show');
    document.body.style.overflow = 'hidden';
}

function closeServiceModal() {
    const modal = document.getElementById('service-modal');
    modal.classList.remove('show');
    document.body.style.overflow = '';
}

document.getElementById('service-modal').addEventListener('click', function (e) {
    if (e.target === this) closeServiceModal();
});
</script>

{{-- ══ ELITE STUDIOS & VENDORS ══ --}}
<section id="creators" class="section-secondary py-8">
    <div class="max-w-[1280px] mx-auto px-8">

        <div class="flex justify-between items-end mb-10 reveal">
            <div>
                <h2 class="font-bold mb-2"
                    style="font-family:'Plus Jakarta Sans';font-size:clamp(28px,4vw,44px);letter-spacing:-0.02em;">
                    Elite <span class="text-theme-gradient">Studios & Vendors</span>
                </h2>
                <p class="text-gray-300 text-sm">Premium studios and professional vendor contributions.</p>
            </div>
            <a href="{{ route('home') }}#download-app" class="btn-theme px-6 py-2 rounded-xl font-bold text-sm shining-btn">
                Download App →
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $studioVendors = [
                    ['name' => 'Fashion Focus Studios',   'type' => 'Fashion Specialist',   'specialties' => 'Fashion Shoots, Product Photography',            'equipment' => 'Sony A7R IV, Studio Strobes',              'space' => 'Modern Fashion Studio',              'rating' => 4.8, 'price' => '₹15,000+', 'contribution' => 'Studio Space + Equipment + Expertise',       'image' => 'fashion.jpg'],
                    ['name' => 'Drone Masters',           'type' => 'Aerial Specialists',   'specialties' => 'Drone Photography, Real Estate',                 'equipment' => 'DJI Mavic 3, Aerial Cameras',             'space' => 'Outdoor Locations + Aerial Coverage','rating' => 4.6, 'price' => '₹18,000+', 'contribution' => 'Drone Services + Aerial Shots + Editing',    'image' => 'dronec.jpg'],
                    ['name' => 'Creative Content Labs',   'type' => 'Content Studio',       'specialties' => 'Social Media Content, Brand Shoots',             'equipment' => 'Mirrorless Cameras, Ring Lights',         'space' => 'Content Creation Studio',            'rating' => 4.8, 'price' => '₹10,000+', 'contribution' => 'Content Strategy + Shooting + Social Media Ready','image' => 'creative.jpg'],
                ];
            @endphp

            @foreach($studioVendors as $vendor)
            <div class="theme-card rounded-3xl reveal overflow-hidden group">

                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('images/creators/' . $vendor['image']) }}"
                         alt="{{ $vendor['name'] }}"
                         class="absolute inset-0 w-full h-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-[opacity,transform] duration-400"
                         loading="lazy"
                         onerror="this.style.display='none'">
                    <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/20 to-black/60"></div>
                    <div class="relative z-10 p-6 h-full flex flex-col justify-between">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-bold text-lg text-white mb-1" style="font-family:'Plus Jakarta Sans'">{{ $vendor['name'] }}</h4>
                                <span class="inline-block px-3 py-1 rounded-full bg-black/40 border border-purple-400/50 text-xs font-bold text-purple-200 uppercase">{{ $vendor['type'] }}</span>
                            </div>
                            <div class="flex items-center gap-1 bg-black/40 px-2 py-1 rounded-full">
                                <span class="text-yellow-400 text-xs">★</span>
                                <span class="font-bold text-sm text-white">{{ $vendor['rating'] }}</span>
                            </div>
                        </div>
                        <div class="self-start">
                            <span class="inline-block px-4 py-1.5 rounded-full bg-gradient-to-r from-purple-600/80 to-pink-600/80 text-white text-xs font-bold">
                                Starting {{ $vendor['price'] }}
                            </span>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <div class="space-y-4 mb-6">
                        <div>
                            <h5 class="text-purple-300 font-semibold text-xs uppercase tracking-wider mb-1">Specialties</h5>
                            <p class="text-gray-300 text-sm">{{ $vendor['specialties'] }}</p>
                        </div>
                        <div>
                            <h5 class="text-pink-300 font-semibold text-xs uppercase tracking-wider mb-1">Equipment & Space</h5>
                            <p class="text-gray-300 text-sm">{{ $vendor['equipment'] }}</p>
                            <p class="text-gray-400 text-xs mt-1">{{ $vendor['space'] }}</p>
                        </div>
                        <div>
                            <h5 class="text-purple-300 font-semibold text-xs uppercase tracking-wider mb-1">Vendor Contribution</h5>
                            <p class="text-gray-300 text-sm">{{ $vendor['contribution'] }}</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <button onclick="openBusinessEnquiry()" class="btn-theme py-2 px-4 rounded-xl font-bold text-xs shining-btn">Book Now</button>
                        <a href="#download-app" class="btn-theme py-2 px-4 rounded-xl font-bold text-xs text-center flex items-center justify-center">View App</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ══ APP DOWNLOAD ══ --}}
<section id="download-app" class="section-primary py-8">
    <div class="max-w-[1280px] mx-auto px-8">
        <div class="theme-card rounded-3xl overflow-hidden p-2">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center p-8 lg:p-16 bg-gradient-to-br from-purple-900/10 to-pink-900/10 rounded-2xl">

                <div class="reveal">
                    <h2 class="font-bold mb-5 text-theme-gradient"
                        style="font-family:'Plus Jakarta Sans';font-size:clamp(26px,3.5vw,42px);letter-spacing:-0.02em;">
                        The Creative Hub in Your Pocket
                    </h2>
                    <p class="text-gray-300 text-sm mb-8 leading-relaxed">
                        Available on iOS and Android. Search, compare and book studios, reels creators, drone operators and more, right from your phone.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#" class="theme-card flex items-center gap-3 px-6 py-4 hover:scale-105 transition-transform group">
                            <img src="assets/logos/app-store.svg" alt="App Store" class="w-6 h-6 object-contain flex-shrink-0 invert brightness-0" loading="lazy">
                            <div>
                                <span class="text-[10px] block text-purple-300 uppercase tracking-widest">Download on</span>
                                <span class="font-bold text-sm text-white">App Store</span>
                            </div>
                        </a>
                        <a href="#" class="theme-card flex items-center gap-3 px-6 py-4 hover:scale-105 transition-transform group">
                            <img src="assets/logos/google-play.svg" alt="Google Play" class="w-6 h-6 object-contain flex-shrink-0" loading="lazy">
                            <div>
                                <span class="text-[10px] block text-purple-300 uppercase tracking-widest">Get it on</span>
                                <span class="font-bold text-sm text-white">Google Play</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="relative flex justify-center reveal">
                    <div style="position:absolute;inset:0;background:radial-gradient(circle at 50% 50%,rgba(124,58,237,0.16) 0%,transparent 65%);pointer-events:none;z-index:0;border-radius:50%;"></div>
                    <div class="relative w-64 h-[500px] bg-[#0d0d12] rounded-[38px] border-[8px] border-purple-500/30 shadow-2xl overflow-hidden animate-phone-float" style="z-index:1;">
                        <div class="flex items-center justify-between px-5 pt-3 pb-1 text-[11px] text-gray-300 font-semibold">
                            <span>9:41</span>
                            <div class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-[14px]">signal_cellular_alt</span>
                                <span class="material-symbols-outlined text-[14px]">wifi</span>
                                <span class="material-symbols-outlined text-[14px]">battery_full</span>
                            </div>
                        </div>
                        <div class="px-5 pt-4 pb-3 text-center border-b border-white/5">
                            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-purple-600 to-pink-600 flex items-center justify-center mx-auto mb-2 shadow-lg">
                                <span class="text-white text-xl font-bold">P</span>
                            </div>
                            <p class="font-bold text-theme-gradient text-base" style="font-family:'Plus Jakarta Sans'">PicQ</p>
                            <p class="text-gray-400 text-[11px]">Book. Create. Grow.</p>
                        </div>
                        <div class="px-5 pt-4 grid grid-cols-3 gap-2 text-center">
                            @foreach([['photo_camera','Studio'],['videocam','Reels'],['flight','Drone']] as [$icon,$label])
                            <div class="bg-white/5 border border-white/10 rounded-xl py-3">
                                <span class="material-symbols-outlined text-purple-300 text-[20px]">{{ $icon }}</span>
                                <p class="text-[10px] text-gray-300 mt-1">{{ $label }}</p>
                            </div>
                            @endforeach
                        </div>
                        <div class="px-5 pt-4">
                            <div class="bg-white/5 border border-purple-500/15 rounded-xl p-3">
                                <p class="text-[10px] text-purple-300 uppercase tracking-widest mb-1">Upcoming Booking</p>
                                <p class="text-sm font-semibold text-white">Reels Shoot - Premium Package</p>
                                <p class="text-[11px] text-gray-400">Sat, 10:00 AM · Creator Assigned</p>
                            </div>
                        </div>
                        <div class="px-5 pt-4 space-y-2">
                            <div class="h-2 bg-white/10 rounded-full"></div>
                            <div class="h-2 bg-white/10 rounded-full w-3/4"></div>
                            <div class="h-2 bg-white/10 rounded-full w-1/2"></div>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 flex items-center justify-around py-3 border-t border-white/5 bg-[#0d0d12]/95">
                            <span class="material-symbols-outlined text-purple-400 text-[20px]">home</span>
                            <span class="material-symbols-outlined text-gray-500 text-[20px]">explore</span>
                            <span class="material-symbols-outlined text-gray-500 text-[20px]">calendar_month</span>
                            <span class="material-symbols-outlined text-gray-500 text-[20px]">person</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- ══ PRICING — simple images with titles above, click opens popup ══ --}}
<section id="pricing" class="section-secondary py-4">
    <div class="max-w-[1280px] mx-auto px-8">
        <div class="text-center mb-10 reveal">
            <h2 class="font-bold mb-3 text-theme-gradient"
                style="font-family:'Plus Jakarta Sans';font-size:clamp(28px,4vw,44px);letter-spacing:-0.02em;">
                Simple Pricing
            </h2>
            <p class="text-gray-300 text-sm max-w-sm mx-auto">Transparent pricing for every shoot. No hidden fees.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @php
            $pricingCategories = [
                [
                    'name' => 'Reel Shoot Mobile',
                    'icon' => 'photo_camera',
                    'image' => 'studio-0002.jpg',
                    'tagline' => 'Book a studio space or a complete shoot package, your choice.',
                    'highlights' => ['Indoor, Outdoor & Green Screen Studios', 'Podcast, Product & Fashion Studios', 'Verified Studios & Transparent Pricing', 'Ready-Made Studio Service Packages'],
                    'packages' => [
                        ['label' => 'Starter Shoot',  'price' => '₹8,000',  'details' => 'Up to 2 hours studio access, basic lighting setup, 50+ edited photos'],
                        ['label' => 'Studio Service Package',  'price' => '₹18,000', 'details' => 'Full-day studio access with creator and equipment, 150+ edited photos, online gallery'],
                        ['label' => 'Premium Package','price' => '₹35,000', 'details' => 'Multi-day coverage, lead and assistant creator, premium delivery, same-day highlights'],
                    ],
                ],
               
                [
                    'name' => 'Reels Shoot DSLR',
                    'icon' => 'videocam',
                    'image' => 'reel-0002.jpg',
                    'tagline' => 'Professional reels creators, Mobile or DSLR, for every moment.',
                    'highlights' => ['Mobile & DSLR Creator Options', 'Silver, Premium & Elite Tiers', 'Trend-Based, Social Ready Edits', 'Priority Booking on Elite Plans'],
                    'packages' => [
                        ['label' => 'Mobile - Silver Package',  'price' => '₹1,499 + GST', 'details' => 'Best reel shoot, basic editing, social media ready delivery, best Android creator allocation, suitable for personal and business content'],
                        ['label' => 'Mobile - Premium Package', 'price' => '₹1,999 + GST', 'details' => 'Professional reel shoot, premium editing, social media ready delivery, premium Android or iPhone creator allocation, enhanced visual quality, priority content support'],
                        ['label' => 'Mobile - Elite Package',   'price' => '₹2,199 + GST', 'details' => 'Professional reel shoot, premium editing, top iPhone creator allocation, priority booking, top creator assignment, partner choice option available, faster project allocation, premium content experience'],
                        ['label' => 'DSLR - Silver Package',    'price' => '₹2,499 + GST', 'details' => 'Cinematic DSLR reel shoot, premium editing, social media ready delivery, verified DSLR creator allocation'],
                        ['label' => 'DSLR - Premium Package',   'price' => '₹3,199 + GST', 'details' => 'Cinematic DSLR reel shoot, premium editing, enhanced visual quality, social media ready delivery, priority content support'],
                        ['label' => 'DSLR - Elite Package',     'price' => '₹3,499 + GST', 'details' => 'Cinematic DSLR reel shoot, premium editing, top creator allocation, priority booking, partner choice option available, premium content experience'],
                    ],
                ],
                 [
                    'name' => 'Drone',
                    'icon' => 'flight',
                    'image' => 'drone-0002.jpg',
                    'tagline' => 'Turn ordinary views into extraordinary visuals from the sky.',
                    'highlights' => ['Licensed Pilots & 4K Drones', 'Real Estate, Events & Business Coverage', 'Verified Drone Operators', 'Multiple Package Options'],
                    'packages' => [
                        ['label' => 'Quick Aerial',   'price' => '₹5,000',  'details' => '30-45 min flight time, 4K aerial photos and short clip'],
                        ['label' => 'Event Coverage', 'price' => '₹12,000', 'details' => 'Half-day coverage, edited highlight reel, raw footage included'],
                        ['label' => 'Cinematic Package','price' => '₹22,000','details' => 'Full-day coverage, multiple flight setups, cinematic edited film'],
                    ],
                ],
            ];
            @endphp

            @foreach($pricingCategories as $index => $cat)
            <div class="pricing-img-link reveal flex flex-col items-center gap-6 "> 
                 {{-- <onclick="openPricingModal({{ $index }}) class="cursor-pointer w-full"> --}}
                <h3 class="font-bold text-lg md:text-xl text-white text-center" style="font-family:'Plus Jakarta Sans'">
                    {{ $cat['name'] }}
                </h3>
               <div class="overflow-hidden rounded-3xl shadow-2xl">
    <img src="{{ asset('images/creators/' . $cat['image']) }}"
         alt="{{ $cat['name'] }}"
         class="pricing-img w-full h-[420px] object-cover">
</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<style>
.pricing-phone {
    transition: transform 0.45s cubic-bezier(0.22,1,0.36,1), box-shadow 0.45s ease;
    will-change: transform;
}
.pricing-img {
    transition: transform 0.6s cubic-bezier(0.22,1,0.36,1), filter 0.45s ease;
    will-change: transform;
}
.pricing-img-link:hover .pricing-phone {
    transform: translateY(-10px) scale(1.03);
    box-shadow: 0 22px 45px rgba(124,58,237,0.35);
}
.pricing-img-link:hover .pricing-img {
    transform: scale(1.08);
    filter: brightness(1.05);
}
</style>


{{-- 
{{-- Pricing Detail Modal --}}
<div id="pricing-modal" class="modal">
    <div class="modal-content" style="max-width:600px;max-height:85vh;overflow-y:auto;">
        <div class="p-8">
            <div class="flex justify-between items-start mb-6">
                <div class="flex items-center gap-4">
                    <div id="pricing-modal-icon" class="w-14 h-14 rounded-2xl bg-gradient-to-br from-purple-600/30 to-pink-600/30 border border-purple-500/30 flex items-center justify-center flex-shrink-0">
                        <span class="material-symbols-outlined text-3xl text-purple-300"></span>
                    </div>
                    <div>
                        <h2 id="pricing-modal-title" class="font-bold text-2xl text-theme-gradient" style="font-family:'Plus Jakarta Sans'"></h2>
                        <p id="pricing-modal-tagline" class="text-gray-400 text-sm"></p>
                    </div>
                </div>
                <button onclick="closePricingModal()" class="text-gray-400 hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-2xl">close</span>
                </button>
            </div>
            <div id="pricing-modal-packages" class="space-y-4 mb-8"></div>
            <p class="text-gray-500 text-xs mb-6">*Partner Choice Option Available on select Elite packages, subject to creator availability.</p>
            <button onclick="openBusinessEnquiry(); closePricingModal();" class="btn-theme block w-full py-4 rounded-xl font-bold text-center text-sm shining-btn">
                Get Started
            </button>
        </div>
    </div>
</div>

<script>
const picqPricing = @json($pricingCategories);

function openPricingModal(index) {
    const c = picqPricing[index];
    if (!c) return;
    document.getElementById('pricing-modal-title').textContent = c.name;
    document.getElementById('pricing-modal-tagline').textContent = c.tagline;
    document.getElementById('pricing-modal-icon').querySelector('span').textContent = c.icon;

    const wrap = document.getElementById('pricing-modal-packages');
    wrap.innerHTML = '';
    c.packages.forEach(pkg => {
        const row = document.createElement('div');
        row.className = 'bg-white/5 border border-white/10 rounded-2xl p-5';
        row.innerHTML = `
            <div class="flex items-center justify-between mb-1">
                <h4 class="font-bold text-white text-base">${pkg.label}</h4>
                <span class="text-theme-gradient font-bold text-lg" style="font-family:'Plus Jakarta Sans'">${pkg.price}</span>
            </div>
            ${pkg.tagline ? `<p class="text-gray-400 text-xs mb-3">${pkg.tagline}</p>` : ''}
            <p class="text-gray-300 text-sm leading-relaxed">${pkg.details}</p>
        `;
        wrap.appendChild(row);
    });

    const modal = document.getElementById('pricing-modal');
    modal.classList.add('show');
    document.body.style.overflow = 'hidden';
}

function closePricingModal() {
    const modal = document.getElementById('pricing-modal');
    modal.classList.remove('show');
    document.body.style.overflow = '';
}

document.getElementById('pricing-modal').addEventListener('click', function (e) {
    if (e.target === this) closePricingModal();
});
</script> --}}

{{-- ══ ABOUT ══ --}}
<section id="about" class="section-primary py-6">
    <div class="max-w-[1280px] mx-auto px-8">

        <div class="max-w-2xl mx-auto text-center mb-12 reveal">
            <h2 class="font-bold mb-4 text-theme-gradient"
                style="font-family:'Plus Jakarta Sans';font-size:clamp(28px,4vw,44px);letter-spacing:-0.03em;">
                Everything Media. One App.
            </h2>
            <p class="text-gray-300 text-sm leading-relaxed">
                PicQ brings together studios, reels creators, drone operators and media professionals on one platform,
                making it simple to find, compare and book the right service for any project, anywhere in India.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
            <div class="theme-card p-8 rounded-3xl reveal watermark-bg">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-600/20 to-purple-800/20 border border-purple-500/30 flex items-center justify-center mb-6">
                    <span class="material-symbols-outlined text-4xl text-purple-300">photo_camera</span>
                </div>
                <h3 class="font-bold text-2xl mb-4 text-theme-gradient" style="font-family:'Plus Jakarta Sans'">What We Do</h3>
                <p class="text-gray-300 leading-relaxed">
                    We connect clients with verified studios, reels creators, drone operators and media professionals across India.
                    From photography and videography to aerial shoots and full studio experiences,
                    PicQ helps you find, compare and book the right service in minutes.
                </p>
            </div>

            <div class="theme-card p-8 rounded-3xl reveal watermark-bg">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-pink-600/20 to-pink-800/20 border border-pink-500/30 flex items-center justify-center mb-6">
                    <span class="material-symbols-outlined text-4xl text-pink-300">groups</span>
                </div>
                <h3 class="font-bold text-2xl mb-4 text-theme-gradient" style="font-family:'Plus Jakarta Sans'">Our Community</h3>
                <p class="text-gray-300 leading-relaxed">
                    A growing network of studios, reels creators, drone operators and media professionals,
                    all verified and committed to delivering quality results
                    on every project across India.
                </p>
            </div>
        </div>

        <div class="relative p-12 lg:p-16 rounded-3xl bg-gradient-to-br from-purple-700 to-pink-600 text-center overflow-hidden reveal watermark-bg">
            <div class="absolute inset-0 opacity-10"
                 style="background-image:radial-gradient(circle at 2px 2px,white 1px,transparent 0);background-size:36px 36px;"></div>
            <h2 class="relative font-bold text-white mb-4"
                style="font-family:'Plus Jakarta Sans';font-size:clamp(24px,3.5vw,40px);">
                Join the Future of Media Booking
            </h2>
            <p class="relative text-white/80 text-sm max-w-xl mx-auto mb-8">
                Join the growing network of creators, studios and businesses connecting through PicQ.
            </p>
            <div class="relative flex flex-wrap justify-center gap-4">
                <a href="#" onclick="openBusinessEnquiry()"
                   class="inline-flex items-center justify-center bg-white text-purple-700 px-8 py-4 rounded-xl font-extrabold text-base hover:scale-105 transition-transform shadow-xl">
                    Get Started Today
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ══ WHY CHOOSE PICQ ══ --}}
<section id="why-picq" class="section-secondary py-8">
    <div class="max-w-[850px] mx-auto px-8">

        <div class="text-center mb-12 reveal">
            <h2 class="font-bold mb-3"
                style="font-family:'Plus Jakarta Sans';font-size:clamp(28px,4vw,44px);letter-spacing:-0.02em;">
                Why Choose <span class="text-theme-gradient">PicQ?</span>
            </h2>
            <p class="text-gray-300 max-w-md mx-auto text-sm">
                One Platform. Endless Possibilities.
            </p>
        </div>

        <div class="space-y-4">
            @php
            $whyChoose = [
                ['q' => 'Book Studios', 'icon' => 'photo_camera', 'a' => 'Browse and book professional studio spaces, indoor, outdoor, green screen, podcast, fashion and more, based on your requirements, budget and location.'],
                ['q' => 'Hire Reels Creators', 'icon' => 'videocam', 'a' => 'Connect with skilled Mobile and DSLR content creators who deliver trend-based, social media ready reels for any occasion.'],
                ['q' => 'Find Drone Operators', 'icon' => 'flight', 'a' => 'Book licensed drone pilots for stunning aerial photography and cinematic videos, covering real estate, events, business and more.'],
                ['q' => 'Equipment & More', 'icon' => 'add_circle', 'a' => 'Equipment rentals and additional media services are on the way, expanding PicQ into a complete one-stop media booking ecosystem.'],
                ['q' => 'Discover Creative Solutions', 'icon' => 'lightbulb', 'a' => 'Explore curated packages and ready-made shoot solutions designed to match every creative need, from personal moments to brand campaigns.'],
                ['q' => 'Secure Payments', 'icon' => 'credit_card', 'a' => 'All transactions are processed securely through the platform, giving both customers and vendors peace of mind.'],
                ['q' => 'Quick Booking Process', 'icon' => 'bolt', 'a' => 'Search, compare and confirm your booking in just a few minutes, no lengthy back-and-forth required.'],
                ['q' => 'Verified Partners', 'icon' => 'verified', 'a' => 'Every studio, creator and operator on PicQ goes through a verification process before being listed.'],
            ];
            @endphp

            @foreach($whyChoose as $index => $item)
            <div class="why-item rounded-2xl overflow-hidden reveal"
                 style="
                    background: linear-gradient(135deg, rgba(13,21,53,0.65), rgba(8,14,38,0.55));
                    border: 1px solid rgba(99,140,255,0.22);
                    backdrop-filter: blur(16px);
                    -webkit-backdrop-filter: blur(16px);
                    box-shadow: inset 0 1px 0 rgba(255,255,255,0.06), 0 8px 28px rgba(15,23,80,0.35);
                 ">
                <button type="button"
                        class="why-question w-full flex items-center justify-between gap-4 px-6 py-5 text-left transition-colors duration-200"
                        style="background:transparent;"
                        onmouseover="this.style.background='rgba(99,140,255,0.06)'"
                        onmouseout="this.style.background='transparent'"
                        onclick="toggleWhy({{ $index }})">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0"
                             style="background:linear-gradient(135deg, rgba(59,98,255,0.25), rgba(124,58,237,0.25)); border:1px solid rgba(99,140,255,0.35);">
                            <span class="material-symbols-outlined text-[20px]" style="color:#8fb4ff;">{{ $item['icon'] }}</span>
                        </div>
                        <span class="font-semibold text-white text-sm md:text-base">{{ $item['q'] }}</span>
                    </div>
                    <span id="why-icon-{{ $index }}" class="material-symbols-outlined flex-shrink-0 transition-transform duration-300" style="color:#8fb4ff;">expand_more</span>
                </button>
                <div id="why-answer-{{ $index }}" class="why-answer" style="max-height:0;overflow:hidden;transition:max-height .35s ease;">
                    <div class="px-6 pb-5 pl-[4.5rem]">
                        <p class="font-bold text-sm leading-relaxed pt-4" style="color:#dbe6ff;border-top:1px solid rgba(99,140,255,0.15);">{{ $item['a'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<script>
function toggleWhy(index) {
    const answer = document.getElementById('why-answer-' + index);
    const icon = document.getElementById('why-icon-' + index);
    const isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';

    document.querySelectorAll('.why-answer').forEach(el => el.style.maxHeight = '0px');
    document.querySelectorAll('[id^="why-icon-"]').forEach(el => el.style.transform = 'rotate(0deg)');

    if (!isOpen) {
        answer.style.maxHeight = answer.scrollHeight + 'px';
        icon.style.transform = 'rotate(180deg)';
    }
}

function toggleFaq(index) {
    const answer = document.getElementById('faq-answer-' + index);
    const icon = document.getElementById('faq-icon-' + index);
    const isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';

    document.querySelectorAll('.faq-answer').forEach(el => el.style.maxHeight = '0px');
    document.querySelectorAll('[id^="faq-icon-"]').forEach(el => el.textContent = 'add');

    if (!isOpen) {
        answer.style.maxHeight = answer.scrollHeight + 'px';
        icon.textContent = 'remove';
    }
}
</script>

{{-- ══ CONTACT ══ --}}
<style>
.contact-btn {
    position: relative;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 16px 42px;
    border-radius: 9999px;
    font-weight: 700;
    font-size: 16px;
    color: #fff;
    overflow: hidden;
    cursor: pointer;
    border: none;
    background: linear-gradient(90deg, #5b21b6 0%, #7c3aed 40%, #9333ea 75%, #c026d3 100%);
    box-shadow: 0 0 14px rgba(124,58,237,.3);
    transition: transform .3s, box-shadow .3s;
    will-change: transform;
    transform: translateZ(0);
}
.contact-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 0 22px rgba(124,58,237,.45);
}
.contact-btn::before {
    content:'';
    position:absolute;top:0;left:-120%;width:60%;height:100%;
    background:linear-gradient(120deg,transparent,rgba(255,255,255,.4),transparent);
    transform:skewX(-25deg);
}
.contact-btn:hover::before {
    animation: contactShine 0.7s ease-out;
}
@keyframes contactShine { from{left:-120%;} to{left:160%;} }
</style>

<div class="px-4 md:px-9 py-4">
    <section id="contact"
        class="contact-section-bg py-10 md:py-15 rounded-[36px] overflow-hidden border border-purple-500/20">
        <div class="max-w-[800px] mx-auto px-10 md:px-16 text-center reveal">
            <h2 class="font-bold mb-4"
                style="font-family:'Plus Jakarta Sans';font-size:clamp(28px,4vw,44px);letter-spacing:-0.02em;">
                Get in
                <span class="bg-gradient-to-r from-violet-400 via-purple-400 to-fuchsia-400 bg-clip-text text-transparent">
                    Touch
                </span>
            </h2>
            <p class="text-gray-400 text-base mb-10">
                We're here to help you create something extraordinary.
            </p>
            <button onclick="openContactModal()" class="contact-btn">
                Contact Us
            </button>
        </div>
    </section>
</div>

{{-- Contact Modal --}}
<div id="contact-modal" class="modal">
    <div class="modal-content">
        <div class="p-8">
            <div class="flex justify-between items-center mb-6">
                <h2 class="font-bold text-2xl gradient-heading">Get in Touch</h2>
                <button onclick="closeContactModal()" class="text-gray-400 hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-2xl">close</span>
                </button>
            </div>
            @if(session('success'))
            <div class="mb-4 px-4 py-3 rounded-xl bg-purple-900/30 border border-purple-500/30 text-gray-200 text-sm">
                {{ session('success') }}
            </div>
            @endif
            <form method="POST" action="{{ route('contact.store') }}" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-gray-400 mb-1.5">Name *</label>
                        <input type="text" name="name" value="{{ old('name') }}" required
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
                        @error('name')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-gray-400 mb-1.5">Email *</label>
                        <input type="email" name="email" value="{{ old('email') }}" required
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
                        @error('email')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-400 mb-1.5">Subject *</label>
                    <input type="text" name="subject" value="{{ old('subject') }}" required
                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-400 mb-1.5">Message *</label>
                    <textarea name="message" rows="4" required
                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors resize-none">{{ old('message') }}</textarea>
                </div>
                <button type="submit"
                    class="w-full py-3 rounded-xl bg-gradient-to-r from-purple-600 to-pink-600 font-bold text-white text-sm hover:scale-[1.02] transition-transform">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
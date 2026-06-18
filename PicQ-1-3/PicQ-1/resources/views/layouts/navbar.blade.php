<nav class="w-full fixed top-0 left-0 flex justify-center px-6 z-50">
        <div class="nav-pill w-full">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center gap-2 flex-shrink-0">
            <img src="{{ asset('images/logo.png') }}" alt="PicQ" class="w-10 h-10 object-contain">
            <span class="picq-brand">PicQ</span>
        </a>

        {{-- Desktop Links --}}
        <div class="hidden lg:flex items-center gap-1 flex-1 justify-center">
            <a href="{{ route('home') }}#hero" class="nav-link-pill">Home</a>
            <a href="{{ route('home') }}#how-it-works" class="nav-link-pill">How It Works</a>
            <a href="{{ route('home') }}#creators" class="nav-link-pill">Creators</a>
            <a href="{{ route('home') }}#pricing" class="nav-link-pill">Pricing</a>
            <a href="{{ route('home') }}#about" class="nav-link-pill">About</a>
            <a href="{{ route('home') }}#contact" class="nav-link-pill">Contact</a>
        </div>

        {{-- CTA Buttons --}}
        <div class="hidden lg:flex items-center gap-3 flex-shrink-0">
<button id="openVendorModal" class="nav-glow-btn">
    Join as Creator
</button>
<button id="openVendorModalMobile"
        class="nav-glow-btn mt-2"
        onclick="closeMob()">
    Join as Creator
</button>
            <a href="{{ route('booking.create') }}" class="nav-glow-btn">Book Now</a>
        </div>

        {{-- Mobile Hamburger --}}
        <button id="mob-toggle"
                class="lg:hidden w-9 h-9 flex flex-col justify-center items-center gap-1.5 ml-auto"
                aria-label="Menu">
            <span class="w-5 h-0.5 bg-white rounded transition-all"></span>
            <span class="w-5 h-0.5 bg-white rounded transition-all"></span>
            <span class="w-5 h-0.5 bg-white rounded transition-all"></span>
        </button>

    </div>
</nav>

{{-- Mobile Drawer --}}
<div id="mob-menu"
     class="hidden lg:hidden fixed inset-0 z-[60] pt-24 bg-black/95 backdrop-blur-2xl">

    <div class="flex flex-col gap-3 text-center px-6">

        <a href="{{ route('home') }}#hero" class="nav-mobile-link" onclick="closeMob()">Home</a>
        <a href="{{ route('home') }}#how-it-works" class="nav-mobile-link" onclick="closeMob()">How It Works</a>
        <a href="{{ route('home') }}#creators" class="nav-mobile-link" onclick="closeMob()">Creators</a>
        <a href="{{ route('home') }}#pricing" class="nav-mobile-link" onclick="closeMob()">Pricing</a>
        <a href="{{ route('home') }}#about" class="nav-mobile-link" onclick="closeMob()">About</a>
        <a href="{{ route('home') }}#contact" class="nav-mobile-link" onclick="closeMob()">Contact</a>

<button type="button" id="openVendorModal" class="nav-glow-btn">
    Join as Creator
</button>
        <a href="{{ route('booking.create') }}" class="nav-glow-btn" onclick="closeMob()">Book Now</a>

    </div>
</div>

<script>
function closeMob() {
    document.getElementById('mob-menu').classList.add('hidden');
}

document.getElementById('mob-toggle').addEventListener('click', function () {
    document.getElementById('mob-menu').classList.toggle('hidden');
});
</script>

<script>
const vendorModal = document.getElementById('vendorModal');

document.getElementById('openVendorModal')?.addEventListener('click', function () {
    vendorModal.classList.remove('hidden');
});

document.getElementById('openVendorModalMobile')?.addEventListener('click', function () {
    vendorModal.classList.remove('hidden');
});

document.getElementById('closeVendorModal')?.addEventListener('click', function () {
    vendorModal.classList.add('hidden');
});

vendorModal?.addEventListener('click', function (e) {
    if (e.target === vendorModal) {
        vendorModal.classList.add('hidden');
    }
});
</script>

<!-- Vendor Modal -->
<div id="vendorModal"
     class="hidden fixed inset-0 z-[9999] bg-black/80 backdrop-blur-sm flex items-center justify-center p-4">

    <div class="bg-[#111] border border-white/10 rounded-3xl w-full max-w-3xl max-h-[90vh] overflow-y-auto p-8 relative">

        <button id="closeVendorModal"
                class="absolute top-4 right-5 text-white text-3xl">
            &times;
        </button>

        <h2 class="text-3xl font-bold text-center text-white mb-6">
            Become a Vendor
        </h2>

        <form method="POST" action="{{ route('vendor.register.store') }}">
            @csrf

            <div class="grid md:grid-cols-2 gap-4">

                <input type="text"
                       name="name"
                       placeholder="Full Name"
                       required
                       class="w-full rounded-xl p-3 bg-white/5 border border-white/10 text-white">

                <input type="email"
                       name="email"
                       placeholder="Email"
                       required
                       class="w-full rounded-xl p-3 bg-white/5 border border-white/10 text-white">

                <input type="text"
                       name="mobile"
                       placeholder="Mobile Number"
                       required
                       class="w-full rounded-xl p-3 bg-white/5 border border-white/10 text-white">

                <input type="text"
                       name="city"
                       placeholder="City"
                       required
                       class="w-full rounded-xl p-3 bg-white/5 border border-white/10 text-white">

                <input type="text"
                       name="business_name"
                       placeholder="Business Name"
                       required
                       class="w-full rounded-xl p-3 bg-white/5 border border-white/10 text-white">

                <select name="business_type"
                        required
                        class="w-full rounded-xl p-3 bg-white/5 border border-white/10 text-white">
                    <option value="">Business Type</option>
                    <option>Photography Studio</option>
                    <option>Videography Studio</option>
                    <option>Wedding Photographer</option>
                    <option>Content Creator</option>
                </select>

            </div>

            <textarea name="about"
                      rows="4"
                      placeholder="Tell us about your business..."
                      class="w-full mt-4 rounded-xl p-3 bg-white/5 border border-white/10 text-white"></textarea>

            <button type="submit"
                    class="w-full mt-6 py-4 rounded-xl bg-gradient-to-r from-purple-600 to-pink-600 text-white font-bold">
                Submit Application
            </button>
        </form>

    </div>
</div>
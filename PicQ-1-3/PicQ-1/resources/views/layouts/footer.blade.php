<footer class="bg-black border-t border-white/10 mt-8">
    <div class="max-w-[1280px] mx-auto px-8 py-12">

        {{-- Main Content --}}
        <div class="flex flex-col md:flex-row-reverse justify-between items-start gap-10">

            {{-- Brand Section --}}
            <div class="flex-shrink-0 md:w-72">

                <a href="{{ route('home') }}" class="flex items-center gap-4 mb-5">

                    {{-- Logo Container --}}
                    <div class="w-20 h-20 rounded-2xl bg-white shadow-2xl p-2 flex items-center justify-center overflow-hidden">

                        <img
                            src="{{ asset('images/logo.png') }}"
                            alt="PicQ Logo"
                            class="w-full h-full object-contain"
                            onerror="this.style.border='2px solid red';"
                        >

                    </div>

                    {{-- Brand Name --}}
                    <span class="text-4xl font-extrabold bg-gradient-to-r from-violet-400 via-fuchsia-400 to-pink-400 bg-clip-text text-transparent">
                        PicQ
                    </span>

                </a>

                <p class="text-gray-400 text-sm leading-6 max-w-[260px]">
                    Connecting creators with India's finest photographers,
                    videographers and production professionals.
                </p>

                {{-- Social Icons --}}
                <div class="flex gap-3 mt-6">

                    <a href="#"
                       class="w-10 h-10 rounded-full bg-zinc-800 flex items-center justify-center hover:bg-violet-600 transition">
                        <span class="material-symbols-outlined">photo_camera</span>
                    </a>

                    <a href="#"
                       class="w-10 h-10 rounded-full bg-zinc-800 flex items-center justify-center hover:bg-violet-600 transition">
                        <span class="material-symbols-outlined">language</span>
                    </a>

                    <a href="#"
                       class="w-10 h-10 rounded-full bg-zinc-800 flex items-center justify-center hover:bg-violet-600 transition">
                        <span class="material-symbols-outlined">play_circle</span>
                    </a>

                </div>

            </div>

            {{-- Links --}}
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-8 flex-1">

                <div>
                    <h4 class="text-white font-bold uppercase tracking-wider text-xs mb-4">
                        Platform
                    </h4>

                    <div class="space-y-3">
                        <a href="{{ route('home') }}#how-it-works"
                           class="block text-gray-400 hover:text-white text-sm transition">
                            How It Works
                        </a>

                        <a href="{{ route('home') }}#pricing"
                           class="block text-gray-400 hover:text-white text-sm transition">
                            Pricing
                        </a>

                        <a href="{{ route('home') }}#creators"
                           class="block text-gray-400 hover:text-white text-sm transition">
                            Creators
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="text-white font-bold uppercase tracking-wider text-xs mb-4">
                        Company
                    </h4>

                    <div class="space-y-3">
                        <a href="{{ route('home') }}#about"
                           class="block text-gray-400 hover:text-white text-sm transition">
                            About Us
                        </a>

                        <a href="{{ route('home') }}#contact"
                           class="block text-gray-400 hover:text-white text-sm transition">
                            Contact
                        </a>

                        <a href="#"
                           class="block text-gray-400 hover:text-white text-sm transition">
                            Careers
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="text-white font-bold uppercase tracking-wider text-xs mb-4">
                        Legal
                    </h4>

                    <div class="space-y-3">
                        <a href="#"
                           class="block text-gray-400 hover:text-white text-sm transition">
                            Privacy Policy
                        </a>

                        <a href="#"
                           class="block text-gray-400 hover:text-white text-sm transition">
                            Terms of Service
                        </a>

                        <a href="#"
                           class="block text-gray-400 hover:text-white text-sm transition">
                            Cookie Policy
                        </a>
                    </div>
                </div>

            </div>

        </div>

        {{-- Bottom Bar --}}
        <div class="border-t border-white/10 mt-10 pt-6 flex flex-col md:flex-row justify-between items-center gap-4">

            <p class="text-gray-500 text-xs">
                © {{ date('Y') }} PicQ. All Rights Reserved.
            </p>

            <div class="flex items-center gap-6">

                <a href="#"
                   class="text-gray-400 hover:text-white text-xs transition">
                    Instagram
                </a>

                <a href="#"
                   class="text-gray-400 hover:text-white text-xs transition">
                    LinkedIn
                </a>

                <a href="#"
                   class="text-gray-400 hover:text-white text-xs transition">
                    YouTube
                </a>

            </div>

        </div>

    </div>
</footer>
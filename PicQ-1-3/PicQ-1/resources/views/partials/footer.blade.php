<footer class="bg-black border-t border-white/10 mt-20">
    <div class="max-w-7xl mx-auto px-3 py-3">

        <!-- Top Footer -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

            <!-- Brand Section - Left -->
            <div class="pl-6">
                <a href="{{ route('home') }}" class="flex items-center gap-4 mb-4">
<img src="{{ asset('images/logo.png') }}"
     alt="PicQ Logo"
     class="w-14 h-14 object-contain"
     loading="lazy">
                         <span class="text-4xl font-extrabold bg-gradient-to-r from-violet-400 via-fuchsia-400 to-pink-400 bg-clip-text text-transparent">
                        PicQ
                    </span>
                </a>

                <p class="text-gray-400 text-base leading-7 max-w-[280px] font-medium">
                    Connecting couples with India's finest photographers,
                    videographers and wedding professionals.
                </p>

                <!-- Social Icons -->
                <div class="flex gap-4 mt-5">
                    <a href="#" class="w-10 h-10 rounded-full bg-zinc-800 flex items-center justify-center hover:bg-violet-600 transition">
                        <span class="material-symbols-outlined text-[18px]">photo_camera</span>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-zinc-800 flex items-center justify-center hover:bg-violet-600 transition">
                        <span class="material-symbols-outlined text-[18px]">language</span>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-zinc-800 flex items-center justify-center hover:bg-violet-600 transition">
                        <span class="material-symbols-outlined text-[18px]">play_circle</span>
                    </a>
                </div>
            </div>

            <!-- Links Section - Right -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 pt-6 pl-6">
                <!-- Platform -->
                <div>
                    <h4 class="text-white font-bold uppercase tracking-wider text-sm mb-3">Platform</h4>
                    <div class="space-y-3">
                        <a href="{{ route('home') }}#how-it-works" class="block text-gray-400 hover:text-white font-medium">How It Works</a>
                        <a href="{{ route('home') }}#pricing" class="block text-gray-400 hover:text-white font-medium">Pricing</a>
                    </div>
                </div>

                <!-- Company -->
                <div>
                    <h4 class="text-white font-bold uppercase tracking-wider text-sm mb-3">Company</h4>
                    <div class="space-y-3">
                        <a href="{{ route('home') }}#about" class="block text-gray-400 hover:text-white font-medium">About Us</a>
                        <a href="{{ route('home') }}#contact" class="block text-gray-400 hover:text-white font-medium">Contact</a>
                    </div>
                </div>

                <!-- Legal -->
                <div>
                    <h4 class="text-white font-bold uppercase tracking-wider text-sm mb-3">Legal</h4>
                    <div class="space-y-3">
                        <a href="#" class="block text-gray-400 hover:text-white font-medium">Privacy Policy</a>
                        <a href="#" class="block text-gray-400 hover:text-white font-medium">Terms of Service</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Divider -->
        <div class="border-t border-white/10 mt-6 pt-4">

            <div class="flex flex-col md:flex-row justify-between items-center gap-4">

                <p class="text-gray-500 text-sm font-medium">
                    © {{ date('Y') }} PicQ. All Rights Reserved.
                </p>

                <div class="flex items-center gap-8">

                    <a href="#"
                       class="text-gray-400 hover:text-white text-sm font-medium">
                        Instagram
                    </a>

                    <a href="#"
                       class="text-gray-400 hover:text-white text-sm font-medium">
                        LinkedIn
                    </a>

                    <a href="#"
                       class="text-gray-400 hover:text-white text-sm font-medium">
                        YouTube
                    </a>

                </div>

            </div>

        </div>

    </div>
</footer>
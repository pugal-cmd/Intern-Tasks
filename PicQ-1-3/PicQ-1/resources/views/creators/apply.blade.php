@extends('layouts.app')
@section('title', 'Join as Creator | PicQ')

@section('content')
<section class="py-16 min-h-screen">
    <div class="max-w-xl mx-auto px-8">
        <div class="text-center mb-10 reveal">
            <h1 class="font-bold mb-3" style="font-family:'Plus Jakarta Sans';font-size:clamp(28px,4vw,44px);letter-spacing:-0.02em;">
                Turn <span class="gradient-heading">Pro</span>
            </h1>
            <p class="text-gray-400 text-sm">Join our global network of cinema-grade creators.</p>
        </div>

        <form method="POST" action="{{ route('creators.apply.store') }}" class="glass-card p-8 rounded-2xl space-y-5 reveal">
            @csrf
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div>
                    <label class="block text-xs font-semibold text-gray-400 mb-1.5">Full Name *</label>
                    <input type="text" name="name" value="{{ old('name') }}" required
                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors @error('name') border-red-500 @enderror">
                    @error('name')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-400 mb-1.5">Email *</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors @error('email') border-red-500 @enderror">
                    @error('email')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-400 mb-1.5">Phone *</label>
                    <input type="tel" name="phone" value="{{ old('phone') }}" required
                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-400 mb-1.5">City *</label>
                    <input type="text" name="city" value="{{ old('city') }}" required
                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
                </div>
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-400 mb-1.5">Specialty *</label>
                <select name="specialty" required class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
                    <option value="">Select your specialty</option>
                    @foreach(['Instagram Reels','Weddings','Fitness & Sports','Events & Parties','Product Demos','Travel & Lifestyle','Fashion','Corporate'] as $s)
                    <option value="{{ $s }}" {{ old('specialty') === $s ? 'selected' : '' }}>{{ $s }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-400 mb-1.5">Portfolio URL</label>
                <input type="url" name="portfolio" value="{{ old('portfolio') }}" placeholder="https://..."
                    class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-400 mb-1.5">About You *</label>
                <textarea name="bio" rows="4" required placeholder="Tell us about your experience and style..."
                    class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors resize-none">{{ old('bio') }}</textarea>
            </div>

            <button type="submit" class="w-full py-3 rounded-xl bg-gradient-to-r from-purple-600 to-pink-600 font-bold text-white text-sm hover:scale-[1.02] transition-transform">
                Submit Application
            </button>
        </form>
    </div>
</section>
@endsection
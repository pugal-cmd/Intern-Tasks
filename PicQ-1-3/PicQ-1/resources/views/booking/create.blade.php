@extends('layouts.app')
@section('title', 'Book a Creator | PicQ')

@section('content')
<section class="py-16 min-h-screen">
    <div class="max-w-xl mx-auto px-8">
        <div class="text-center mb-10 reveal">
            <h1 class="font-bold mb-3" style="font-family:'Plus Jakarta Sans';font-size:clamp(28px,4vw,44px);letter-spacing:-0.02em;">
                Book a <span class="gradient-heading">Shoot</span>
            </h1>
            <p class="text-gray-400 text-sm">Cinematic production, on demand.</p>
        </div>

        <form method="POST" action="{{ route('booking.store') }}" class="glass-card p-8 rounded-2xl space-y-5 reveal">
            @csrf
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div>
                    <label class="block text-xs font-semibold text-gray-400 mb-1.5">Your Name *</label>
                    <input type="text" name="name" value="{{ old('name') }}" required
                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors @error('name') border-red-500 @enderror">
                    @error('name')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-400 mb-1.5">Email *</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
                    @error('email')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-400 mb-1.5">Phone *</label>
                    <input type="tel" name="phone" value="{{ old('phone') }}" required
                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-400 mb-1.5">Date & Time *</label>
                    <input type="datetime-local" name="scheduled_at" value="{{ old('scheduled_at') }}" required
                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
                </div>
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-400 mb-1.5">Service *</label>
                <select name="service_id" required class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
                    <option value="">Select a service</option>
                    @foreach($services as $service)
                    <option value="{{ $service->id }}" {{ (old('service_id', request('service')) == $service->id) ? 'selected' : '' }}>{{ $service->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-400 mb-1.5">Preferred Creator (optional)</label>
                <select name="creator_id" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
                    <option value="">Any available creator</option>
                    @foreach($creators as $creator)
                    <option value="{{ $creator->id }}" {{ (old('creator_id', request('creator')) == $creator->id) ? 'selected' : '' }}>
                        {{ $creator->name }} — {{ $creator->specialty }} (⭐ {{ number_format($creator->rating,1) }})
                    </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-400 mb-1.5">Location / Address *</label>
                <input type="text" name="location" value="{{ old('location') }}" required placeholder="Where should the creator come?"
                    class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-400 mb-1.5">Additional Notes</label>
                <textarea name="notes" rows="3" placeholder="Describe your vision, theme, or any special requests..."
                    class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors resize-none">{{ old('notes') }}</textarea>
            </div>

            <button type="submit" class="w-full py-3 rounded-xl bg-gradient-to-r from-purple-600 to-pink-600 font-bold text-white text-sm hover:scale-[1.02] transition-transform">
                Confirm Booking
            </button>
        </form>
    </div>
</section>
@endsection
@extends('layouts.app')
@section('title', 'Booking Confirmed | PicQ')

@section('content')
<section class="py-16 min-h-screen flex items-center">
    <div class="max-w-md mx-auto px-8 text-center w-full">
        <div class="glass-card p-12 rounded-2xl reveal">
            <div class="w-20 h-20 rounded-full bg-gradient-to-br from-purple-600 to-pink-600 flex items-center justify-center mx-auto mb-6">
                <span class="material-symbols-outlined text-white text-4xl">check_circle</span>
            </div>
            <h1 class="font-bold text-3xl mb-3 gradient-heading" style="font-family:'Plus Jakarta Sans'">Booking Confirmed!</h1>
            <p class="text-gray-400 text-sm mb-6 leading-relaxed">Your cinematic experience is on its way. A creator will be with you soon.</p>

            <div class="bg-white/5 rounded-xl px-6 py-4 mb-8 inline-block">
                <p class="text-gray-400 text-xs mb-1">Booking Reference</p>
                <p class="font-bold text-xl text-purple-400 tracking-widest">{{ $ref }}</p>
            </div>

            <div class="flex flex-col gap-3">
                <a href="{{ route('home') }}" class="py-3 rounded-xl bg-gradient-to-r from-purple-600 to-pink-600 font-bold text-white text-sm hover:scale-105 transition-transform">
                    Back to Home
                </a>
                <a href="{{ route('booking.create') }}" class="py-3 rounded-xl border border-white/10 font-bold hover:bg-white/5 transition-colors text-sm">
                    Book Another
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
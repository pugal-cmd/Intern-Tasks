{{-- resources/views/pages/how-it-works.blade.php --}}
@extends('layouts.app')
@section('title','How It Works | PicQ')
@section('content')
<section class="py-16 min-h-screen">
    <div class="max-w-[1280px] mx-auto px-8 text-center">
        <h1 class="font-bold mb-4 gradient-heading" style="font-family:'Plus Jakarta Sans';font-size:clamp(28px,4vw,44px);">How It Works</h1>
        <p class="text-gray-400 text-sm">See the full process on our <a href="{{ route('home') }}#how-it-works" class="text-purple-400 hover:underline">home page</a>.</p>
    </div>
</section>
@endsection
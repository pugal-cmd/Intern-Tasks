@extends('layouts.app')

@section('title', 'Contact | Flashoot')

@section('content')

<section class="py-20 min-h-screen flex items-center justify-center bg-gradient-to-b from-gray-950 via-gray-900 to-black">

    <div class="text-center">

        <!-- Heading -->
        <h1 class="font-bold mb-4 text-white"
            style="font-family:'Plus Jakarta Sans';font-size:48px;letter-spacing:-0.02em;">
            Get in <span class="gradient-heading">Touch</span>
        </h1>

        <p class="text-gray-400 text-lg mb-10">
            We're here to help you create something extraordinary.
        </p>

        <!-- Contact Button -->
        <button onclick="openModal()"
            class="px-10 py-4 rounded-2xl bg-white text-black font-bold hover:bg-gray-200 transition">
            Contact Us
        </button>

    </div>
</section>


<!-- MODAL -->
<div id="contactModal"
     class="fixed inset-0 hidden items-center justify-center bg-black/70 backdrop-blur-md z-50">

    <div class="bg-gray-900 border border-white/10 rounded-[28px] w-full max-w-2xl mx-4 p-10 relative">

        <!-- Close Button -->
        <button onclick="closeModal()"
            class="absolute top-4 right-4 text-gray-400 hover:text-white text-2xl">
            &times;
        </button>

        <!-- Success Message -->
        @if(session('success'))
            <div class="mb-6 px-6 py-3 rounded-xl bg-green-500/20 border border-green-500/30 text-green-300">
                {{ session('success') }}
            </div>
        @endif

        <!-- FORM -->
        <form method="POST" action="{{ route('contact.store') }}" class="space-y-5">
            @csrf

            <!-- Name + Email -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div>
                    <label class="text-sm text-gray-400">Name *</label>
                    <input type="text" name="name" value="{{ old('name') }}" required
                        class="w-full mt-2 bg-gray-800 border border-gray-700 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-white">
                    @error('name')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label class="text-sm text-gray-400">Email *</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                        class="w-full mt-2 bg-gray-800 border border-gray-700 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-white">
                    @error('email')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
            </div>

            <!-- Subject -->
            <div>
                <label class="text-sm text-gray-400">Subject *</label>
                <input type="text" name="subject" value="{{ old('subject') }}" required
                    class="w-full mt-2 bg-gray-800 border border-gray-700 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-white">
            </div>

            <!-- Message -->
            <div>
                <label class="text-sm text-gray-400">Message *</label>
                <textarea name="message" rows="5" required
                    class="w-full mt-2 bg-gray-800 border border-gray-700 rounded-xl px-4 py-3 text-white resize-none focus:outline-none focus:border-white">{{ old('message') }}</textarea>
            </div>

            <!-- Submit -->
            <button type="submit"
                class="w-full py-4 rounded-2xl bg-white text-black font-bold hover:bg-gray-200 transition">
                Send Message
            </button>

        </form>

    </div>
</div>


<!-- SCRIPT -->
<script>
    function openModal() {
        document.getElementById('contactModal').classList.remove('hidden');
        document.getElementById('contactModal').classList.add('flex');
    }

    function closeModal() {
        document.getElementById('contactModal').classList.add('hidden');
        document.getElementById('contactModal').classList.remove('flex');
    }
</script>

@endsection
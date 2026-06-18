@extends('layouts.app')
@section('title', 'Vendor Registration | PicQ')

@push('styles')
<style>
.step-indicator {
    display: flex;
    justify-content: center;
    margin-bottom: 2rem;
    position: relative;
}
.step-indicator::before {
    content: '';
    position: absolute;
    top: 20px;
    left: 25%;
    right: 25%;
    height: 2px;
    background: rgba(255,255,255,0.1);
    z-index: 0;
}
.step {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 14px;
    position: relative;
    z-index: 1;
    background: rgba(0,0,0,0.5);
    border: 2px solid rgba(255,255,255,0.1);
    color: #666;
}
.step.active {
    background: linear-gradient(135deg, #6d28d9, #9333ea);
    border-color: #a855f7;
    color: white;
}
.step.completed {
    background: #10b981;
    border-color: #10b981;
    color: white;
}
.form-section {
    display: none;
}
.form-section.active {
    display: block;
    animation: fadeIn 0.3s ease;
}
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>
@endpush

@section('content')
<section class="py-16 min-h-screen">
    <div class="max-w-4xl mx-auto px-8">
        
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="font-bold mb-4" style="font-family:'Plus Jakarta Sans';font-size:clamp(32px,4vw,48px);letter-spacing:-0.02em;">
                Join Our <span class="gradient-heading">Creator Network</span>
            </h1>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                Become part of India's most prestigious photography and videography platform. Complete the 4-step registration process to start earning.
            </p>
        </div>

        <!-- Step Indicator -->
        <div class="step-indicator">
            <div class="step active" data-step="1">1</div>
            <div class="step" data-step="2">2</div>
            <div class="step" data-step="3">3</div>
            <div class="step" data-step="4">4</div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Left Sidebar - Benefits -->
            <div class="space-y-6">
                <div class="glass-card p-6 rounded-2xl">
                    <h3 class="font-bold text-lg mb-4 gradient-heading">Why Join PicQ?</h3>
                    <div class="space-y-3">
                        <div class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-purple-400 text-lg mt-0.5">trending_up</span>
                            <div>
                                <p class="font-semibold text-sm text-white">Increase Your Income</p>
                                <p class="text-xs text-gray-400">Earn 40% more than traditional bookings</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-purple-400 text-lg mt-0.5">schedule</span>
                            <div>
                                <p class="font-semibold text-sm text-white">Flexible Schedule</p>
                                <p class="text-xs text-gray-400">Work when you want, where you want</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-purple-400 text-lg mt-0.5">verified</span>
                            <div>
                                <p class="font-semibold text-sm text-white">Professional Growth</p>
                                <p class="text-xs text-gray-400">Build your portfolio with quality projects</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="glass-card p-6 rounded-2xl">
                    <h3 class="font-bold text-lg mb-4 text-pink-400">Services We Cover</h3>
                    <div class="grid grid-cols-2 gap-2 text-xs">
                        <span class="bg-white/5 px-2 py-1 rounded text-gray-300">Wedding Photography</span>
                        <span class="bg-white/5 px-2 py-1 rounded text-gray-300">Corporate Events</span>
                        <span class="bg-white/5 px-2 py-1 rounded text-gray-300">Fashion Shoots</span>
                        <span class="bg-white/5 px-2 py-1 rounded text-gray-300">Product Photography</span>
                        <span class="bg-white/5 px-2 py-1 rounded text-gray-300">Real Estate</span>
                        <span class="bg-white/5 px-2 py-1 rounded text-gray-300">Social Media</span>
                    </div>
                </div>
            </div>

            <!-- Main Form -->
            <div class="lg:col-span-2">
                <form id="vendor-form" method="POST" action="{{ route('vendor.register.store') }}" class="glass-card p-8 rounded-2xl">
                    @csrf
                    <input type="hidden" name="step" value="{{ request('step', 1) }}">
                    
                    <!-- Step 1: Basic Information -->
                    <div class="form-section {{ request('step', 1) == 1 ? 'active' : '' }}" data-step="1">
                        <h2 class="font-bold text-xl mb-6">Basic Information</h2>
                        
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-300 mb-2">Full Name *</label>
                                <input type="text" name="full_name" required 
                                       class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold text-gray-300 mb-2">Studio/Business Name *</label>
                                <input type="text" name="studio_name" required 
                                       class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors">
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-300 mb-2">Email *</label>
                                    <input type="email" name="email" required 
                                           class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors">
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-semibold text-gray-300 mb-2">Phone *</label>
                                    <input type="tel" name="phone" required 
                                           class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2: Professional Details -->
                    <div class="form-section {{ request('step') == 2 ? 'active' : '' }}" data-step="2">
                        <h2 class="font-bold text-xl mb-6">Professional Details</h2>
                        
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-300 mb-2">Services Provided *</label>
                                <textarea name="services_provided" required rows="3"
                                         placeholder="e.g., Wedding Photography, Corporate Events, Fashion Shoots..."
                                         class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors resize-none"></textarea>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold text-gray-300 mb-2">Starting Price (₹) *</label>
                                <input type="number" name="price" min="0" step="500" required 
                                       placeholder="e.g., 15000"
                                       class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold text-gray-300 mb-2">Experience *</label>
                                <textarea name="experience" required rows="3"
                                         placeholder="Tell us about your photography/videography experience..."
                                         class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors resize-none"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3: Portfolio & Equipment -->
                    <div class="form-section {{ request('step') == 3 ? 'active' : '' }}" data-step="3">
                        <h2 class="font-bold text-xl mb-6">Portfolio & Equipment</h2>
                        
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-300 mb-2">Portfolio Links</label>
                                <textarea name="portfolio_links" rows="3"
                                         placeholder="Instagram, website, or other portfolio links (one per line)"
                                         class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors resize-none"></textarea>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold text-gray-300 mb-2">Equipment Details</label>
                                <div class="space-y-2">
                                    <input type="text" name="equipment_details[camera]" 
                                           placeholder="Camera (e.g., Canon 5D Mark IV)"
                                           class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors">
                                    <input type="text" name="equipment_details[lens]" 
                                           placeholder="Lenses (e.g., 24-70mm f/2.8, 85mm f/1.4)"
                                           class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors">
                                    <input type="text" name="equipment_details[lighting]" 
                                           placeholder="Lighting Equipment"
                                           class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 4: Final Details -->
                    <div class="form-section {{ request('step') == 4 ? 'active' : '' }}" data-step="4">
                        <h2 class="font-bold text-xl mb-6">Additional Information</h2>
                        
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-300 mb-2">Additional Details</label>
                                <textarea name="additional_details" rows="4"
                                         placeholder="Any other information you'd like to share (travel availability, special skills, etc.)"
                                         class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors resize-none"></textarea>
                            </div>
                            
                            <div class="bg-purple-900/20 border border-purple-500/30 rounded-xl p-4">
                                <h3 class="font-bold text-purple-300 mb-2">What's Next?</h3>
                                <ul class="text-sm text-gray-300 space-y-1">
                                    <li>• Our team will review your application within 2-3 business days</li>
                                    <li>• You'll receive a confirmation email with next steps</li>
                                    <li>• Once approved, you'll get access to the creator dashboard</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="flex justify-between mt-8 pt-6 border-t border-white/10">
                        <button type="button" id="prev-btn" 
                                class="px-6 py-3 rounded-xl border border-white/10 hover:bg-white/5 transition-colors {{ request('step', 1) == 1 ? 'hidden' : '' }}">
                            Previous
                        </button>
                        
                        <div class="ml-auto">
                            <button type="button" id="next-btn" 
                                    class="px-8 py-3 rounded-xl bg-gradient-to-r from-purple-600 to-pink-600 font-bold text-white hover:scale-105 transition-transform">
                                {{ request('step') == 4 ? 'Complete Registration' : 'Next Step' }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

    let currentStep = 1;
    const totalSteps = 4;

    const sections = document.querySelectorAll('.form-section');
    const steps = document.querySelectorAll('.step');

    const nextBtn = document.getElementById('next-btn');
    const prevBtn = document.getElementById('prev-btn');
    const form = document.getElementById('vendor-form');

    function showStep(step) {

        sections.forEach(section => {
            section.classList.remove('active');
        });

        const activeSection = document.querySelector(
            `.form-section[data-step="${step}"]`
        );

        if (activeSection) {
            activeSection.classList.add('active');
        }

        steps.forEach((item, index) => {

            item.classList.remove('active', 'completed');

            if ((index + 1) < step) {
                item.classList.add('completed');
            } else if ((index + 1) === step) {
                item.classList.add('active');
            }

        });

        if (step === 1) {
            prevBtn.classList.add('hidden');
        } else {
            prevBtn.classList.remove('hidden');
        }

        if (step === totalSteps) {
            nextBtn.textContent = 'Complete Registration';
        } else {
            nextBtn.textContent = 'Next Step';
        }
    }

    nextBtn.addEventListener('click', function () {

        if (currentStep < totalSteps) {

            currentStep++;
            showStep(currentStep);

        } else {

            console.log('Submitting form...');
            form.submit();

        }

    });

    prevBtn.addEventListener('click', function () {

        if (currentStep > 1) {

            currentStep--;
            showStep(currentStep);

        }

    });

    showStep(1);

});
</script>
@endpush

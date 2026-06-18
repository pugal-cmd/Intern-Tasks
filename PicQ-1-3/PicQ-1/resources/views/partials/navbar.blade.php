<nav class="nav-pill fixed">
    <div class="flex items-center justify-between w-full">
        
        <!-- Logo and Name - Left -->
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <img src="{{ asset('images/logo.png') }}" alt="PicQ Logo" class="w-8 h-8 object-contain">
            <span class="text-xl font-extrabold bg-gradient-to-r from-violet-400 via-fuchsia-400 to-pink-400 bg-clip-text text-transparent">PicQ</span>
        </a>

        <!-- Desktop Navigation - Center -->
        <div class="hidden lg:flex items-center justify-center gap-2">
            <a href="#hero" class="nav-link-pill" data-section="hero">Home</a>
            <a href="#how-it-works" class="nav-link-pill" data-section="how-it-works">How It Works</a>
            <a href="#services" class="nav-link-pill" data-section="services">Services</a>
            <a href="#creators" class="nav-link-pill" data-section="creators">Creators</a>
            <a href="#pricing" class="nav-link-pill" data-section="pricing">Pricing</a>
            <a href="#about" class="nav-link-pill" data-section="about">About</a>
            <a href="#contact" class="nav-link-pill" data-section="contact">Contact</a>
        </div>

        <!-- Action Buttons - Right -->
        <div class="hidden lg:flex items-center gap-3">
            <button onclick="openBusinessRequest()" class="nav-glow-btn text-sm">Business Request</button>
            {{-- <button type="button" id="openVendorModal" class="nav-glow-btn text-sm">
                Onboard
            </button> --}}
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-btn" class="lg:hidden p-2 rounded-lg hover:bg-white/10 transition-colors">
            <span class="material-symbols-outlined text-white">menu</span>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="lg:hidden absolute top-full left-0 right-0 mt-2 bg-black/90 backdrop-blur-xl border border-white/10 rounded-2xl p-4 hidden">
        <div class="flex flex-col gap-2">
            <a href="#hero" class="nav-mobile-link" data-section="hero">Home</a>
            <a href="#how-it-works" class="nav-mobile-link" data-section="how-it-works">How It Works</a>
            <a href="#services" class="nav-mobile-link" data-section="services">Services</a>
            <a href="#creators" class="nav-mobile-link" data-section="creators">Creators</a>
            <a href="#pricing" class="nav-mobile-link" data-section="pricing">Pricing</a>
            <a href="#about" class="nav-mobile-link" data-section="about">About</a>
            <a href="#contact" class="nav-mobile-link" data-section="contact">Contact</a>
            <div class="border-t border-white/10 my-2"></div>
            <button onclick="openBusinessRequest()" class="nav-glow-btn text-center">Business Request</button>
            <button type="button" id="openVendorModalMobile" class="nav-glow-btn text-center">
                Onboard
            </button>
        </div>
    </div>
</nav>

<script>
// Mobile menu toggle
document.getElementById('mobile-menu-btn').addEventListener('click', function() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
});

// Smooth scrolling for navigation links
document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('a[href^="#"]');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);
            
            if (targetSection) {
                targetSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                
                // Close mobile menu if open
                const mobileMenu = document.getElementById('mobile-menu');
                if (!mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                }
            }
        });
    });
    
    // Active section highlighting
    const sections = document.querySelectorAll('section[id]');
    const navItems = document.querySelectorAll('.nav-link-pill[data-section], .nav-mobile-link[data-section]');
    
    function updateActiveNav() {
        let current = '';
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 100;
            const sectionHeight = section.clientHeight;
            
            if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                current = section.getAttribute('id');
            }
        });
        
        navItems.forEach(item => {
            item.classList.remove('active');
            if (item.getAttribute('data-section') === current) {
                item.classList.add('active');
            }
        });
    }
    
    window.addEventListener('scroll', updateActiveNav);
    updateActiveNav(); // Call once on load
});
</script>

<!-- Contact Form Modal -->
<div id="contact-form-modal" class="modal">
    <div class="modal-content">
        <div class="p-8">
            <div class="flex justify-between items-center mb-6">
                <h2 class="font-bold text-2xl text-theme-gradient">Contact Us</h2>
                <button onclick="closeContactForm()" class="text-gray-400 hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-2xl">close</span>
                </button>
            </div>
            
            <form id="contact-form" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-300 mb-2">Name *</label>
                        <input type="text" name="name" required 
                               class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-300 mb-2">Email *</label>
                        <input type="email" name="email" required 
                               class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors">
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-semibold text-gray-300 mb-2">Photography Service Required *</label>
                    <select name="subject" required 
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors">
                        <option value="">Select photography service</option>
                        <option value="Wedding Photography">Wedding Photography</option>
                        <option value="Pre-Wedding Shoot">Pre-Wedding Shoot</option>
                        <option value="Corporate Events">Corporate Events</option>
                        <option value="Birthday Parties">Birthday Parties</option>
                        <option value="Fashion Photography">Fashion Photography</option>
                        <option value="Product Photography">Product Photography</option>
                        <option value="Portrait Sessions">Portrait Sessions</option>
                        <option value="Real Estate Photography">Real Estate Photography</option>
                        <option value="Other Services">Other Services</option>
                    </select>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-300 mb-2">Event Date</label>
                        <input type="date" name="event_date" 
                               class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-300 mb-2">Budget Range</label>
                        <select name="budget" 
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors">
                            <option value="">Select budget</option>
                            <option value="₹15,000 - ₹30,000">₹15,000 - ₹30,000</option>
                            <option value="₹30,000 - ₹60,000">₹30,000 - ₹60,000</option>
                            <option value="₹60,000 - ₹1,20,000">₹60,000 - ₹1,20,000</option>
                            <option value="₹1,20,000+">₹1,20,000+</option>
                        </select>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-semibold text-gray-300 mb-2">Message *</label>
                    <textarea name="message" rows="4" required 
                              placeholder="Tell us about your photography requirements..."
                              class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors resize-none"></textarea>
                </div>
                
                <button type="submit" 
                        class="w-full py-3 rounded-xl btn-theme font-bold text-white shining-btn">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Vendor Onboarding Modal -->
<div id="vendorModal" class="modal hidden">
    <div class="modal-content vendor-modal-content">
        <div class="p-8">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h2 class="font-bold text-2xl text-theme-gradient">Become a Vendor</h2>
                    <p class="text-gray-400 text-sm mt-1">Join PicQ's elite network of photographers, studios, and creative professionals.</p>
                </div>
                <button type="button" id="closeVendorModal" class="text-gray-400 hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-2xl">close</span>
                </button>
            </div>

            <!-- Success / Error banners -->
            <div id="vendorSuccessMsg" class="hidden mb-6 px-6 py-4 rounded-2xl bg-purple-900/30 border border-purple-500/30 text-gray-200 text-sm text-center"></div>
            <div id="vendorErrorMsg" class="hidden mb-6 px-6 py-4 rounded-2xl bg-red-900/30 border border-red-500/30 text-gray-200 text-sm text-center"></div>

            <form id="vendorForm" class="space-y-6">
                @csrf

                {{-- SECTION: Personal Info --}}
                <div>
                    <h3 class="text-purple-300 font-bold text-xs uppercase tracking-widest mb-4">Personal Information</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-xs font-semibold text-gray-400 mb-1.5">Full Name *</label>
                            <input type="text" name="name" required
                                   placeholder="Enter your full name"
                                   class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
                            <p class="text-red-400 text-xs mt-1 hidden" data-error="name"></p>
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-gray-400 mb-1.5">Email Address *</label>
                            <input type="email" name="email" required
                                   placeholder="Enter your email"
                                   class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
                            <p class="text-red-400 text-xs mt-1 hidden" data-error="email"></p>
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-gray-400 mb-1.5">Mobile Number *</label>
                            <input type="tel" name="mobile" required
                                   placeholder="Enter your mobile number"
                                   class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
                            <p class="text-red-400 text-xs mt-1 hidden" data-error="mobile"></p>
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-gray-400 mb-1.5">City *</label>
                            <input type="text" name="city" required
                                   placeholder="Enter your city"
                                   class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
                            <p class="text-red-400 text-xs mt-1 hidden" data-error="city"></p>
                        </div>
                    </div>
                </div>

                <div class="border-t border-white/10"></div>

                {{-- SECTION: Business Info --}}
                <div>
                    <h3 class="text-purple-300 font-bold text-xs uppercase tracking-widest mb-4">Business Information</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-xs font-semibold text-gray-400 mb-1.5">Business Name *</label>
                            <input type="text" name="business_name" required
                                   placeholder="Enter your business name"
                                   class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
                            <p class="text-red-400 text-xs mt-1 hidden" data-error="business_name"></p>
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-gray-400 mb-1.5">Business Type *</label>
                            <select name="business_type" required
                                    class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
                                <option value="">Select business type</option>
                                <option value="Photography Studio">Photography Studio</option>
                                <option value="Videography Studio">Videography Studio</option>
                                <option value="Wedding Photographer">Wedding Photographer</option>
                                <option value="Fashion Photographer">Fashion Photographer</option>
                                <option value="Event Photographer">Event Photographer</option>
                                <option value="Drone Operator">Drone Operator</option>
                                <option value="Content Creator">Content Creator</option>
                                <option value="Other">Other</option>
                            </select>
                            <p class="text-red-400 text-xs mt-1 hidden" data-error="business_type"></p>
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-gray-400 mb-1.5">Years of Experience</label>
                            <select name="experience"
                                    class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
                                <option value="">Select experience</option>
                                <option value="Less than 1 year">Less than 1 year</option>
                                <option value="1-2 years">1-2 years</option>
                                <option value="3-5 years">3-5 years</option>
                                <option value="5-10 years">5-10 years</option>
                                <option value="10+ years">10+ years</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-gray-400 mb-1.5">Instagram Handle</label>
                            <input type="text" name="instagram_url"
                                   placeholder="@yourusername"
                                   class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
                        </div>
                    </div>
                </div>

                <div class="border-t border-white/10"></div>

                {{-- SECTION: More Details --}}
                <div>
                    <h3 class="text-purple-300 font-bold text-xs uppercase tracking-widest mb-4">More Details</h3>
                    <div class="space-y-5">
                        <div>
                            <label class="block text-xs font-semibold text-gray-400 mb-1.5">Equipment</label>
                            <input type="text" name="equipment"
                                   placeholder="e.g. Canon 5D Mark IV, DJI Mavic 3, Studio Lights"
                                   class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-gray-400 mb-1.5">Specialties</label>
                            <input type="text" name="specialties"
                                   placeholder="e.g. Wedding, Fashion, Corporate Events, Product Photography"
                                   class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-gray-400 mb-1.5">Portfolio URL</label>
                            <input type="url" name="portfolio_url"
                                   placeholder="https://yourportfolio.com"
                                   class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
                            <p class="text-red-400 text-xs mt-1 hidden" data-error="portfolio_url"></p>
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-gray-400 mb-1.5">About You</label>
                            <textarea name="about" rows="4"
                                      placeholder="Tell us about yourself, your style, and what makes you unique..."
                                      class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors resize-none"></textarea>
                        </div>
                    </div>
                </div>

                {{-- SUBMIT --}}
                <button type="submit"
                        class="w-full py-4 rounded-xl bg-gradient-to-r from-purple-600 to-pink-600 font-bold text-white text-base hover:scale-[1.02] transition-transform shining-btn">
                    Submit Application →
                </button>

                <p class="text-center text-xs text-gray-500">
                    By submitting, you agree to our terms. We'll review your application within 48 hours.
                </p>
            </form>
        </div>
    </div>
</div>

<style>
.vendor-modal-content {
    max-width: 48rem;
    width: 100%;
    max-height: 90vh;
    overflow-y: auto;
}
</style>

<script>
function openContactForm() {
    document.getElementById('contact-form-modal').classList.add('show');
    document.body.style.overflow = 'hidden';
}

function closeContactForm() {
    document.getElementById('contact-form-modal').classList.remove('show');
    document.body.style.overflow = '';
}

// Close contact modal on outside click
document.getElementById('contact-form-modal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeContactForm();
    }
});

// Handle contact form submission
document.getElementById('contact-form').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    
    submitBtn.textContent = 'Sending...';
    submitBtn.disabled = true;
    
    try {
        const response = await fetch('{{ route("contact.store") }}', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Accept': 'application/json'
            }
        });
        
        const result = await response.json();
        
        if (result.success || response.ok) {
            alert('Thank you! Your message has been sent. We will contact you soon.');
            closeContactForm();
            this.reset();
        } else {
            alert('There was an error sending your message. Please try again.');
        }
    } catch (error) {
        console.error('Error:', error);
        alert('Thank you! Your message has been sent. We will contact you soon.');
        closeContactForm();
        this.reset();
    } finally {
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
    }
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {

    const modal = document.getElementById('vendorModal');
    const vendorForm = document.getElementById('vendorForm');
    const successMsg = document.getElementById('vendorSuccessMsg');
    const errorMsg = document.getElementById('vendorErrorMsg');

    function openVendorModal() {
        modal.classList.remove('hidden');
        modal.classList.add('show');
        document.body.style.overflow = 'hidden';
    }

    function closeVendorModalFn() {
        modal.classList.add('hidden');
        modal.classList.remove('show');
        document.body.style.overflow = '';
    }

    document.getElementById('openVendorModal')?.addEventListener('click', openVendorModal);
    document.getElementById('openVendorModalMobile')?.addEventListener('click', openVendorModal);
    document.getElementById('closeVendorModal')?.addEventListener('click', closeVendorModalFn);

    modal?.addEventListener('click', function (e) {
        if (e.target === modal) {
            closeVendorModalFn();
        }
    });

    // Clear previous field errors
    function clearVendorErrors() {
        vendorForm.querySelectorAll('[data-error]').forEach(el => {
            el.textContent = '';
            el.classList.add('hidden');
        });
        successMsg.classList.add('hidden');
        errorMsg.classList.add('hidden');
    }

    // Handle vendor form submission via AJAX
    vendorForm.addEventListener('submit', async function (e) {
        e.preventDefault();

        clearVendorErrors();

        const formData = new FormData(this);
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;

        submitBtn.textContent = 'Submitting...';
        submitBtn.disabled = true;

        try {
            const response = await fetch('{{ route("vendor.register.store") }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json'
                }
            });

            const result = await response.json();

            if (response.ok && result.success) {
                successMsg.textContent = result.message || 'Thank you! Your application has been submitted.';
                successMsg.classList.remove('hidden');
                vendorForm.reset();

                setTimeout(closeVendorModalFn, 2000);

            } else if (response.status === 422 && result.errors) {
                // Show validation errors next to each field
                Object.keys(result.errors).forEach(field => {
                    const errorEl = vendorForm.querySelector(`[data-error="${field}"]`);
                    if (errorEl) {
                        errorEl.textContent = result.errors[field][0];
                        errorEl.classList.remove('hidden');
                    }
                });
                errorMsg.textContent = 'Please fix the highlighted fields and try again.';
                errorMsg.classList.remove('hidden');

            } else {
                errorMsg.textContent = result.message || 'Something went wrong. Please try again.';
                errorMsg.classList.remove('hidden');
            }

        } catch (error) {
            console.error('Error:', error);
            errorMsg.textContent = 'Something went wrong. Please try again.';
            errorMsg.classList.remove('hidden');
        } finally {
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
        }
    });

});
</script>
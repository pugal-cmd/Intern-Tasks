<!-- ── BUSINESS REQUEST MODAL ── -->
<div id="business-request-modal" class="modal">
    <div class="modal-content">
        <div class="p-8">
            <div class="flex justify-between items-center mb-6">
                <h2 class="font-bold text-2xl gradient-heading">Business Request</h2>
                <button onclick="closeBusinessRequest()" class="text-gray-400 hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-2xl">close</span>
                </button>
            </div>
            <form id="business-request-form" class="space-y-4">
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
                    <label class="block text-sm font-semibold text-gray-300 mb-2">Mobile *</label>
                    <input type="tel" name="mobile" required
                           class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-300 mb-2">Services Required *</label>
                    <select name="services_required" required
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors">
                        <option value="">Select a service</option>
                        <option value="Wedding Photography">Wedding Photography</option>
                        <option value="Corporate Events">Corporate Events</option>
                        <option value="Fashion Shoot">Fashion Shoot</option>
                        <option value="Product Photography">Product Photography</option>
                        <option value="Real Estate">Real Estate</option>
                        <option value="Social Media Content">Social Media Content</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-300 mb-2">Preferred Services</label>
                    <div class="grid grid-cols-2 gap-2 bg-white/5 border border-white/10 rounded-xl px-4 py-3">
                        <label class="flex items-center gap-2 text-gray-300 text-sm">
                            <input type="checkbox" name="preferred_services[]" value="Photography">
                            Photography
                        </label>
                        <label class="flex items-center gap-2 text-gray-300 text-sm">
                            <input type="checkbox" name="preferred_services[]" value="Videography">
                            Videography
                        </label>
                        <label class="flex items-center gap-2 text-gray-300 text-sm">
                            <input type="checkbox" name="preferred_services[]" value="Drone Coverage">
                            Drone Coverage
                        </label>
                        <label class="flex items-center gap-2 text-gray-300 text-sm">
                            <input type="checkbox" name="preferred_services[]" value="Photo Editing">
                            Photo Editing
                        </label>
                        <label class="flex items-center gap-2 text-gray-300 text-sm">
                            <input type="checkbox" name="preferred_services[]" value="Album Design">
                            Album Design
                        </label>
                        <label class="flex items-center gap-2 text-gray-300 text-sm">
                            <input type="checkbox" name="preferred_services[]" value="Live Streaming">
                            Live Streaming
                        </label>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-300 mb-2">Budget *</label>
                    <select name="budget" required
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors">
                        <option value="">Select budget range</option>
                        <option value="₹10,000 - ₹25,000">₹10,000 - ₹25,000</option>
                        <option value="₹25,000 - ₹50,000">₹25,000 - ₹50,000</option>
                        <option value="₹50,000 - ₹1,00,000">₹50,000 - ₹1,00,000</option>
                        <option value="₹1,00,000 - ₹2,50,000">₹1,00,000 - ₹2,50,000</option>
                        <option value="₹2,50,000+">₹2,50,000+</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-300 mb-2">Notes</label>
                    <textarea name="notes" rows="3"
                              placeholder="Any additional details about your requirements..."
                              class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors resize-none"></textarea>
                </div>
                <button type="submit"
                        class="w-full py-3 rounded-xl bg-gradient-to-r from-purple-600 to-pink-600 font-bold text-white hover:scale-105 transition-transform">
                    Submit
                </button>
            </form>
        </div>
    </div>
</div>

<script>
function openBusinessRequest() {
    document.getElementById('business-request-modal').classList.add('show');
    document.body.style.overflow = 'hidden';
}
function closeBusinessRequest() {
    document.getElementById('business-request-modal').classList.remove('show');
    document.body.style.overflow = '';
}
document.getElementById('business-request-modal').addEventListener('click', function (e) {
    if (e.target === this) closeBusinessRequest();
});

document.getElementById('business-request-form').addEventListener('submit', async function (e) {
    e.preventDefault();
    const formData = new FormData(this);
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    submitBtn.textContent = 'Submitting...';
    submitBtn.disabled = true;

    try {
        const response = await fetch('{{ route("business-request.store") }}', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Accept': 'application/json'
            }
        });
        const result = await response.json();
        if (result.success) {
            alert(result.message);
            closeBusinessRequest();
            this.reset();
        } else {
            alert('There was an error submitting your request. Please try again.');
        }
    } catch (error) {
        console.error('Error:', error);
        alert('There was an error submitting your request. Please try again.');
    } finally {
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
    }
});
</script>
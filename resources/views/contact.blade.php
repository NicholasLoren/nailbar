{{-- resources/views/contact.blade.php --}}

<x-app-layout>
    <x-slot name="title">Contact Us</x-slot>
    <x-slot name="description">Get in touch with The Nail Bar UG. Book your appointment for luxury nail services in
        Kampala. Call +256 772 054 361 or visit us at The Cube.</x-slot>

    <!-- Header Section -->
    <section class="pt-24 pb-16 bg-gradient-to-br from-rose-50 to-pink-50 dark:from-gray-800 dark:to-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 dark:text-white mb-6">
                    Contact Us
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Ready to book your appointment? Get in touch with us and let's make your nails beautiful.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Form and Info Section -->
    <section class="py-16 lg:py-24 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16">
                <!-- Contact Form -->
                <div class="bg-gray-50 dark:bg-gray-800 rounded-2xl p-8 lg:p-12">
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 dark:text-white mb-8">
                        Book Your Appointment
                    </h2>

                    @if(session('success'))
                        <div
                            class="mb-6 p-4 bg-green-100 dark:bg-green-900 border border-green-200 dark:border-green-800 rounded-lg">
                            <p class="text-green-800 dark:text-green-200 font-medium">{{ session('success') }}</p>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6" x-data="{ 
                        recaptchaLoaded: false,
                        recaptchaResponse: '',
                        initRecaptcha() {
                            if (typeof grecaptcha !== 'undefined') {
                                this.recaptchaLoaded = true;
                                grecaptcha.ready(() => {
                                    grecaptcha.execute('{{ config('services.recaptcha.site_key') }}', {action: 'contact'})
                                        .then((token) => {
                                            this.recaptchaResponse = token;
                                            document.getElementById('g-recaptcha-response').value = token;
                                        });
                                });
                            }
                        }
                    }" x-init="initRecaptcha()">
                        @csrf

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="name"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Full Name *
                                </label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-rose-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 transition-colors duration-200">
                                @error('name')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Email Address *
                                </label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-rose-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 transition-colors duration-200">
                                @error('email')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="phone"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Phone Number
                                </label>
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-rose-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 transition-colors duration-200">
                                @error('phone')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="service"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Service of Interest
                                </label>
                                <select id="service" name="service"
                                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-rose-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white transition-colors duration-200">
                                    <option value="">Select a service</option>
                                    <option value="manicure" {{ old('service') == 'manicure' ? 'selected' : '' }}>Manicure
                                    </option>
                                    <option value="pedicure" {{ old('service') == 'pedicure' ? 'selected' : '' }}>Pedicure
                                    </option>
                                    <option value="acrylic_nails" {{ old('service') == 'acrylic_nails' ? 'selected' : '' }}>Acrylic Nails</option>
                                    <option value="artificial_nails" {{ old('service') == 'artificial_nails' ? 'selected' : '' }}>Artificial Nails</option>
                                    <option value="gel_builder" {{ old('service') == 'gel_builder' ? 'selected' : '' }}>
                                        Gel Builder Nails</option>
                                    <option value="ombre_nails" {{ old('service') == 'ombre_nails' ? 'selected' : '' }}>
                                        Ombre Nails</option>
                                    <option value="eyelashes" {{ old('service') == 'eyelashes' ? 'selected' : '' }}>
                                        Eyelashes</option>
                                    <option value="eyebrow_shaping" {{ old('service') == 'eyebrow_shaping' ? 'selected' : '' }}>Eyebrow Shaping</option>
                                    <option value="consultation" {{ old('service') == 'consultation' ? 'selected' : '' }}>
                                        Consultation</option>
                                </select>
                                @error('service')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="preferred_date"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Preferred Date
                                </label>
                                <input type="date" id="preferred_date" name="preferred_date"
                                    value="{{ old('preferred_date') }}" min="{{ date('Y-m-d') }}"
                                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-rose-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white transition-colors duration-200">
                                @error('preferred_date')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="preferred_time"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Preferred Time
                                </label>
                                <select id="preferred_time" name="preferred_time"
                                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-rose-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white transition-colors duration-200">
                                    <option value="">Select a time</option>
                                    <option value="09:00" {{ old('preferred_time') == '09:00' ? 'selected' : '' }}>9:00 AM
                                    </option>
                                    <option value="10:00" {{ old('preferred_time') == '10:00' ? 'selected' : '' }}>10:00
                                        AM</option>
                                    <option value="11:00" {{ old('preferred_time') == '11:00' ? 'selected' : '' }}>11:00
                                        AM</option>
                                    <option value="12:00" {{ old('preferred_time') == '12:00' ? 'selected' : '' }}>12:00
                                        PM</option>
                                    <option value="13:00" {{ old('preferred_time') == '13:00' ? 'selected' : '' }}>1:00 PM
                                    </option>
                                    <option value="14:00" {{ old('preferred_time') == '14:00' ? 'selected' : '' }}>2:00 PM
                                    </option>
                                    <option value="15:00" {{ old('preferred_time') == '15:00' ? 'selected' : '' }}>3:00 PM
                                    </option>
                                    <option value="16:00" {{ old('preferred_time') == '16:00' ? 'selected' : '' }}>4:00 PM
                                    </option>
                                    <option value="17:00" {{ old('preferred_time') == '17:00' ? 'selected' : '' }}>5:00 PM
                                    </option>
                                    <option value="18:00" {{ old('preferred_time') == '18:00' ? 'selected' : '' }}>6:00 PM
                                    </option>
                                    <option value="19:00" {{ old('preferred_time') == '19:00' ? 'selected' : '' }}>7:00 PM
                                    </option>
                                    <option value="20:00" {{ old('preferred_time') == '20:00' ? 'selected' : '' }}>8:00 PM
                                    </option>
                                </select>
                                @error('preferred_time')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="message"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                Message *
                            </label>
                            <textarea id="message" name="message" rows="5" required
                                placeholder="Tell us about your requirements or any special requests..."
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-rose-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 transition-colors duration-200 resize-none">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- reCAPTCHA -->
                        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                        @error('g-recaptcha-response')
                            <p class="text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror

                        <button type="submit"
                            class="w-full bg-rose-600 hover:bg-rose-700 text-white font-medium py-4 px-8 rounded-lg transition-colors duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8">
                    <div>
                        <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 dark:text-white mb-8">
                            Get In Touch
                        </h2>
                        <p class="text-lg text-gray-600 dark:text-gray-400 mb-8">
                            We'd love to hear from you. Send us a message and we'll respond as soon as possible.
                        </p>
                    </div>

                    <div class="space-y-6">
                        <!-- Location -->
                        <div class="flex items-start space-x-4 p-6 bg-gray-50 dark:bg-gray-800 rounded-xl">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-rose-100 dark:bg-rose-900 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-rose-600 dark:text-rose-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-2">Location</h3>
                                <p class="text-gray-600 dark:text-gray-400">The Cube, First Floor</p>
                                <p class="text-gray-600 dark:text-gray-400">Kampala, Uganda</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start space-x-4 p-6 bg-gray-50 dark:bg-gray-800 rounded-xl">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-rose-100 dark:bg-rose-900 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-rose-600 dark:text-rose-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-2">Phone</h3>
                                <p class="text-gray-600 dark:text-gray-400">+256 772 054 361</p>
                                <p class="text-sm text-gray-500 dark:text-gray-500">Call to book or get information</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start space-x-4 p-6 bg-gray-50 dark:bg-gray-800 rounded-xl">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-rose-100 dark:bg-rose-900 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-rose-600 dark:text-rose-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-2">Email</h3>
                                <p class="text-gray-600 dark:text-gray-400">info@thenailbarug.com</p>
                                <p class="text-sm text-gray-500 dark:text-gray-500">Send us your questions</p>
                            </div>
                        </div>

                        <!-- Hours -->
                        <div class="flex items-start space-x-4 p-6 bg-gray-50 dark:bg-gray-800 rounded-xl">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-rose-100 dark:bg-rose-900 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-rose-600 dark:text-rose-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-2">Opening Hours</h3>
                                <p class="text-gray-600 dark:text-gray-400">Monday - Sunday</p>
                                <p class="text-gray-600 dark:text-gray-400">9:00 AM - 8:00 PM</p>
                            </div>
                        </div>
                    </div>

                    <!-- Map Placeholder -->
                    <div class="mt-8">
                        <div class="aspect-video bg-gray-200 dark:bg-gray-700 rounded-xl overflow-hidden">
                            <div class="w-full h-full flex items-center justify-center">
                                <div class="text-center">
                                    <svg class="w-12 h-12 mx-auto text-gray-400 dark:text-gray-500 mb-4" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <p class="text-gray-500 dark:text-gray-400 font-medium">Google Maps Integration</p>
                                    <p class="text-sm text-gray-400 dark:text-gray-500">The Cube, First Floor, Kampala
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
        <!-- Google reCAPTCHA -->
        <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>
    @endpush

</x-app-layout>
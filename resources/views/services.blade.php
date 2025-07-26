{{-- resources/views/services.blade.php --}}

<x-app-layout>
    <x-slot name="title">Services</x-slot>
    <x-slot name="description">Discover our luxury nail services: manicures, pedicures, acrylic nails, gel builder
        nails, ombre nails, eyelashes, and eyebrow shaping at The Nail Bar UG.</x-slot>

    <!-- Header Section -->
    <section class="pt-24 pb-16 bg-gradient-to-br from-rose-50 to-pink-50 dark:from-gray-800 dark:to-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 dark:text-white mb-6">
                    Our Services
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                    Browse through our finest work. There's nothing a good manicure and pedicure can't fix, don't you
                    think?
                    Mani-pedis are like a type of therapy for your soul –– and you end up looking good in the bargain.
                </p>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-16 lg:py-24 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-16 lg:space-y-24">

                @php
$services = [
    [
        'title' => 'Manicures',
        'subtitle' => 'Beauty Bliss',
        'description' => 'You\'d never go anywhere without your nails looking fresh to death. Our luxe service includes nail & cuticle care, Epsom salt scrub exfoliation, can\'t-live-without massage, and your choice of polish.',
        'features' => ['Nail & cuticle care', 'Epsom salt scrub exfoliation', 'Relaxing hand massage', 'Premium polish application', 'Nail art options'],
        'gradient' => 'from-pink-100 to-rose-200 dark:from-pink-900 dark:to-rose-800',
        'reverse' => false,
        'image' => asset('images/31.jpg')
    ],
    [
        'title' => 'Pedicures',
        'subtitle' => 'Glamour Touch',
        'description' => 'Our luxe service includes a soak in your choice of essential oil, nail and cuticle care, callus reduction, Epsom salt scrub exfoliation, can\'t-live-without massage, essential oil hot towel wrap, and your choice of polish.',
        'features' => ['Essential oil foot soak', 'Callus reduction', 'Epsom salt scrub', 'Relaxing foot massage', 'Hot towel treatment', 'Polish application'],
        'gradient' => 'from-purple-100 to-pink-200 dark:from-purple-900 dark:to-pink-800',
        'reverse' => true,
        'image' => asset('images/42.jpg')
    ],
    [
        'title' => 'Acrylic Nails',
        'subtitle' => 'Luxury Extensions',
        'description' => 'Acrylic nails remain a firm favorite in nail grooming, being a lady of leisure is purely justified by your acrylic nails. Perfect for adding length and strength to your natural nails.',
        'features' => ['Custom length & shape', 'Durable acrylic application', 'French tips available', 'Nail art designs', 'Long-lasting results'],
        'gradient' => 'from-rose-100 to-pink-200 dark:from-rose-900 dark:to-pink-800',
        'reverse' => false,
        'image' => asset('images/9.jpg')
    ],
    [
        'title' => 'Artificial Nails',
        'subtitle' => 'Enhanced Beauty',
        'description' => 'Artificial nails are a good way to add strength and length to your natural nails. Great for anyone with nails lacking in natural wow factor.',
        'features' => ['Strength enhancement', 'Length customization', 'Natural-looking finish', 'Damage protection', 'Professional application'],
        'gradient' => 'from-indigo-100 to-purple-200 dark:from-indigo-900 dark:to-purple-800',
        'reverse' => true,
        'image' => asset('images/29.jpg')
    ],
    [
        'title' => 'Gel Builder Nails',
        'subtitle' => 'Long-Lasting Shine',
        'description' => 'No-chip, long-lasting gel color offering incredible shine that lasts up to two weeks, following our quickie mani. Perfect for busy schedules, extended vacations or any occasion because… life.',
        'features' => ['2-week lasting power', 'No-chip formula', 'Incredible shine', 'Quick application', 'Perfect for busy lifestyles'],
        'gradient' => 'from-teal-100 to-cyan-200 dark:from-teal-900 dark:to-cyan-800',
        'reverse' => false,
        'image' => asset('images/28.jpg')
    ],
    [
        'title' => 'Ombre Nails',
        'subtitle' => 'Gradient Perfection',
        'description' => 'When you think of ombre nails, your mind might jump to the basic nude and white ombre nails that are always popular. But, if you have already tried that nail look and want something different, don\'t worry because there are a lot of different colors.',
        'features' => ['Custom color gradients', 'Nude & white classics', 'Colorful variations', 'Smooth transitions', 'Instagram-worthy results'],
        'gradient' => 'from-orange-100 to-red-200 dark:from-orange-900 dark:to-red-800',
        'reverse' => true,
        'image' => asset('images/8.jpg')
    ],

];
                @endphp

                @foreach($services as $index => $service)
                    <div
                        class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center {{ $service['reverse'] ? 'lg:grid-flow-col-dense' : '' }}">
                        <!-- Service Image -->
                        <div class="{{ $service['reverse'] ? 'lg:col-start-2' : '' }}">
                            <div class="relative">
                                <div
                                    class="aspect-[4/3] bg-gradient-to-br {{ $service['gradient'] }} rounded-2xl shadow-xl overflow-hidden" style="background-image: url('{{ $service['image'] }}'); background-size: cover; background-position: center;">
                                    <div class="w-full h-full flex items-center justify-center p-8">
                                        <div class="text-center space-y-4">
                                            {{-- <div
                                                class="w-20 h-20 mx-auto bg-white/20 rounded-full flex items-center justify-center">
                                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a4 4 0 004-4V5z" />
                                                </svg>
                                            </div>
                                            <p class="text-white font-medium text-lg">{{ $service['subtitle'] }}</p> --}}
                                        </div>
                                    </div>
                                </div>

                                <!-- Decorative elements -->
                                <div
                                    class="absolute -top-4 -right-4 w-32 h-32 bg-gradient-to-br from-yellow-200 to-orange-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse">
                                </div>
                                <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-gradient-to-br from-pink-200 to-rose-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"
                                    style="animation-delay: 2s;"></div>
                            </div>
                        </div>

                        <!-- Service Content -->
                        <div class="{{ $service['reverse'] ? 'lg:col-start-1' : '' }} space-y-6">
                            <div class="space-y-4">
                                <div>
                                    <p
                                        class="text-sm font-medium text-rose-600 dark:text-rose-400 uppercase tracking-wider mb-2">
                                        {{ $service['subtitle'] }}
                                    </p>
                                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white">
                                        {{ $service['title'] }}
                                    </h2>
                                </div>
                                <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed">
                                    {{ $service['description'] }}
                                </p>
                            </div>

                            <!-- Features List -->
                            <div class="space-y-3">
                                @foreach($service['features'] as $feature)
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="flex-shrink-0 w-6 h-6 bg-rose-100 dark:bg-rose-900 rounded-full flex items-center justify-center">
                                            <svg class="w-4 h-4 text-rose-600 dark:text-rose-400" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <span class="text-gray-700 dark:text-gray-300">{{ $feature }}</span>
                                    </div>
                                @endforeach
                            </div>

                            <a href="{{ route('contact') }}"
                                class="inline-flex items-center justify-center px-8 py-4 text-base font-medium text-white bg-gray-900 dark:bg-white dark:text-gray-900 rounded-lg hover:bg-gray-800 dark:hover:bg-gray-100 transition-colors duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                                Book This Service
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 lg:py-24 bg-gradient-to-br from-rose-600 to-pink-600 dark:from-rose-800 dark:to-pink-800">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">
                There's something very empowering about flaunting those perfect digits.
            </h2>
            <p class="text-xl text-rose-100 mb-8 max-w-2xl mx-auto">
                Ready to experience the luxury? Book your appointment today and step into a world where indulgence meets
                artistry.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center justify-center px-8 py-4 text-base font-medium text-rose-600 bg-white rounded-lg hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                    Book Your Appointment
                </a>
                <a href="{{ route('gallery') }}"
                    class="inline-flex items-center justify-center px-8 py-4 text-base font-medium text-white bg-transparent border-2 border-white rounded-lg hover:bg-white hover:text-rose-600 transition-all duration-200">
                    View Our Work
                </a>
            </div>
        </div>
    </section>

    <!-- Pricing Note -->
    <section class="py-12 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="bg-white dark:bg-gray-900 rounded-2xl p-8 shadow-lg">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">
                    Pricing & Packages
                </h3>
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    We offer competitive pricing for all our services. Contact us for detailed pricing information and
                    package deals.
                </p>
                <div class="grid md:grid-cols-3 gap-6 text-sm">
                    <div class="text-center">
                        <div
                            class="w-12 h-12 mx-auto bg-rose-100 dark:bg-rose-900 rounded-full flex items-center justify-center mb-3">
                            <svg class="w-6 h-6 text-rose-600 dark:text-rose-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1" />
                            </svg>
                        </div>
                        <h4 class="font-semibold text-gray-900 dark:text-white mb-1">Transparent Pricing</h4>
                        <p class="text-gray-600 dark:text-gray-400">No hidden fees or surprise costs</p>
                    </div>
                    <div class="text-center">
                        <div
                            class="w-12 h-12 mx-auto bg-rose-100 dark:bg-rose-900 rounded-full flex items-center justify-center mb-3">
                            <svg class="w-6 h-6 text-rose-600 dark:text-rose-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0A2.704 2.704 0 003 15.546V9.75A2.25 2.25 0 015.25 7.5h13.5A2.25 2.25 0 0121 9.75v5.796z" />
                            </svg>
                        </div>
                        <h4 class="font-semibold text-gray-900 dark:text-white mb-1">Package Deals</h4>
                        <p class="text-gray-600 dark:text-gray-400">Save with our combination packages</p>
                    </div>
                    <div class="text-center">
                        <div
                            class="w-12 h-12 mx-auto bg-rose-100 dark:bg-rose-900 rounded-full flex items-center justify-center mb-3">
                            <svg class="w-6 h-6 text-rose-600 dark:text-rose-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <h4 class="font-semibold text-gray-900 dark:text-white mb-1">Loyalty Rewards</h4>
                        <p class="text-gray-600 dark:text-gray-400">Regular clients get special discounts</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
 
<x-app-layout>
    <x-slot name="title">Home</x-slot>
    <x-slot name="description">Experience luxury nail care at The Nail Bar UG. Professional manicures, pedicures,
        acrylic nails, and beauty treatments in Kampala.</x-slot>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden"
        style="background: linear-gradient(135deg, var(--accent-blush-pink), var(--accent-rose-gold));">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml;utf8,<svg xmlns=\"
                http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\">
                <defs>
                    <pattern id=\"grain\" width=\"100\" height=\"100\" patternUnits=\"userSpaceOnUse\">
                        <circle cx=\"20\" cy=\"20\" r=\"1\" fill=\"%23000\" />
                        <circle cx=\"80\" cy=\"20\" r=\"1\" fill=\"%23000\" />
                        <circle cx=\"50\" cy=\"50\" r=\"1\" fill=\"%23000\" />
                        <circle cx=\"20\" cy=\"80\" r=\"1\" fill=\"%23000\" />
                        <circle cx=\"80\" cy=\"80\" r=\"1\" fill=\"%23000\" />
                    </pattern>
                </defs>
                <rect width=\"100\" height=\"100\" fill=\"url(%23grain)\" /></svg>');">
            </div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 lg:pt-24">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <!-- Hero Content -->
                <div class="text-center lg:text-left space-y-8">
                    <div class="space-y-4">
                        <p
                            class="text-sm lg:text-base font-medium text-gray-700 dark:text-gray-300 tracking-wider uppercase">
                            The Nail Bar UG Store
                        </p>
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold leading-tight">
                            <span class="text-gray-900 dark:text-white">Experience Luxury At</span>
                            <br>
                            <span class="text-gray-900 dark:text-white">Your Fingertips</span>
                        </h1>
                        <p
                            class="text-lg lg:text-xl text-gray-700 dark:text-gray-300 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                            Step into elegance with our luxurious nail and beauty treatments designed to make you shine.
                            Indulge in a serene salon experience.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="{{ route('services') }}"
                            class="inline-flex items-center justify-center px-8 py-4 text-base font-medium text-white bg-gray-900 dark:bg-white dark:text-gray-900 rounded-lg hover:bg-gray-800 dark:hover:bg-gray-100 transition-colors duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                            EXPLORE MORE
                        </a>
                        <a href="{{ route('contact') }}"
                            class="inline-flex items-center justify-center px-8 py-4 text-base font-medium text-gray-900 dark:text-white bg-transparent border-2 border-gray-900 dark:border-white rounded-lg hover:bg-gray-900 hover:text-white dark:hover:bg-white dark:hover:text-gray-900 transition-all duration-200">
                            BOOK NOW
                        </a>
                    </div>
                </div>

                <!-- Hero Image -->
                <div class="relative">
                    <div class="relative z-10">
                        <!-- Placeholder for hero image -->
                        <div
                            class="aspect-square bg-gradient-to-br from-pink-100 to-rose-200 dark:from-pink-900 dark:to-rose-800 rounded-3xl shadow-2xl overflow-hidden">
                            <div class="w-full h-full flex items-center justify-center">
                                <div class="text-center space-y-4 p-8">
                                    <div
                                        class="w-20 h-20 mx-auto bg-rose-500 rounded-full flex items-center justify-center">
                                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a4 4 0 004-4V5z" />
                                        </svg>
                                    </div>
                                    <p class="text-gray-600 dark:text-gray-300 font-medium">Beautiful hands with
                                        tropical flowers</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Decorative elements -->
                    <div
                        class="absolute -top-4 -right-4 w-72 h-72 bg-gradient-to-br from-yellow-200 to-orange-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse">
                    </div>
                    <div class="absolute -bottom-8 -left-8 w-72 h-72 bg-gradient-to-br from-pink-200 to-rose-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"
                        style="animation-delay: 2s;"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Preview Section -->
    <section class="py-16 lg:py-24 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white mb-4">Our Services</h2>
                <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Browse through our finest work. There's nothing a good manicure and pedicure can't fix, don't you
                    think?
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">
                @php
                    $services = [
                        [
                            'title' => 'Beauty Bliss',
                            'subtitle' => 'Manicures',
                            'description' => 'Our luxe service includes nail & cuticle care, Epsom salt scrub exfoliation, can\'t-live-without massage, and your choice of polish.',
                            'gradient' => 'from-pink-100 to-rose-200 dark:from-pink-900 dark:to-rose-800'
                        ],
                        [
                            'title' => 'Glamour Touch',
                            'subtitle' => 'Pedicures',
                            'description' => 'Includes a soak in essential oil, nail and cuticle care, callus reduction, Epsom salt scrub exfoliation, and massage.',
                            'gradient' => 'from-purple-100 to-pink-200 dark:from-purple-900 dark:to-pink-800'
                        ],
                        [
                            'title' => 'Luxury Lacquers',
                            'subtitle' => 'Acrylic Nails',
                            'description' => 'Acrylic nails remain a firm favorite in nail grooming, being a lady of leisure is purely justified by your acrylic nails.',
                            'gradient' => 'from-rose-100 to-pink-200 dark:from-rose-900 dark:to-pink-800'
                        ]
                    ];
                @endphp

                @foreach($services as $service)
                    <div class="group cursor-pointer">
                        <div
                            class="relative overflow-hidden rounded-2xl shadow-lg group-hover:shadow-2xl transition-all duration-300 transform group-hover:-translate-y-2">
                            <!-- Service Image Placeholder -->
                            <div
                                class="aspect-[4/3] bg-gradient-to-br {{ $service['gradient'] }} p-8 flex items-center justify-center">
                                <div class="text-center">
                                    <div
                                        class="w-16 h-16 mx-auto bg-white/20 rounded-full flex items-center justify-center mb-4">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a4 4 0 004-4V5z" />
                                        </svg>
                                    </div>
                                    <p class="text-white font-medium">{{ $service['subtitle'] }}</p>
                                </div>
                            </div>

                            <!-- Service Content -->
                            <div class="bg-white dark:bg-gray-800 p-6">
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">{{ $service['title'] }}
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-4 line-clamp-3">{{ $service['description'] }}
                                </p>
                                <button
                                    class="text-rose-600 dark:text-rose-400 font-medium hover:text-rose-700 dark:hover:text-rose-300 transition-colors duration-200 group-hover:underline">
                                    LEARN MORE
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('services') }}"
                    class="inline-flex items-center justify-center px-8 py-4 text-base font-medium text-white bg-rose-600 rounded-lg hover:bg-rose-700 transition-colors duration-200 shadow-lg hover:shadow-xl">
                    View All Services
                </a>
            </div>
        </div>
    </section>

    <!-- The Best Section -->
    <section class="py-16 lg:py-24 bg-gradient-to-br from-rose-50 to-pink-50 dark:from-gray-800 dark:to-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <!-- Content -->
                <div class="space-y-8">
                    <div class="space-y-6">
                        <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 dark:text-white leading-tight">
                            The Best.
                        </h2>
                        <div class="space-y-4 text-lg text-gray-700 dark:text-gray-300">
                            <p class="text-2xl font-medium text-rose-600 dark:text-rose-400">
                                You'd never go anywhere without your nails looking fresh to death.
                            </p>
                            <p>
                                You'll leave feeling long-lasting relief (and major "I swear it works" effects).
                            </p>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
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
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-1">The Cube, First Floor</h3>
                                <p class="text-gray-600 dark:text-gray-400">Find us there if you want to pay a visit and
                                    see one of the best nail services.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-rose-100 dark:bg-rose-900 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-rose-600 dark:text-rose-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-1">+256 772 054 361</h3>
                                <p class="text-gray-600 dark:text-gray-400">Give us a call to book an appointment or get
                                    more information about our services.</p>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center justify-center px-8 py-4 text-base font-medium text-white bg-gray-900 dark:bg-white dark:text-gray-900 rounded-lg hover:bg-gray-800 dark:hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                        Book Your Appointment
                    </a>
                </div>

                <!-- Image -->
                <div class="relative">
                    <div
                        class="aspect-square bg-gradient-to-br from-rose-200 to-pink-300 dark:from-rose-800 dark:to-pink-900 rounded-3xl shadow-2xl overflow-hidden">
                        <div class="w-full h-full flex items-center justify-center p-8">
                            <div class="text-center space-y-6">
                                <div
                                    class="w-24 h-24 mx-auto bg-white/20 rounded-full flex items-center justify-center">
                                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </div>
                                <div class="space-y-2">
                                    <h4 class="text-white font-bold text-xl">Luxury, Creativity,</h4>
                                    <h4 class="text-white font-bold text-xl">and Self-Care</h4>
                                    <h4 class="text-white font-bold text-xl">Combined</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 lg:py-24 bg-gray-900 dark:bg-gray-800">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">
                Ready to Experience Luxury?
            </h2>
            <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                Step into a world where indulgence meets artistry. Book your appointment today and let our skilled
                professionals bring your beauty vision to life.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center justify-center px-8 py-4 text-base font-medium text-gray-900 bg-white rounded-lg hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                    Book Appointment
                </a>
                <a href="{{ route('services') }}"
                    class="inline-flex items-center justify-center px-8 py-4 text-base font-medium text-white bg-transparent border-2 border-white rounded-lg hover:bg-white hover:text-gray-900 transition-all duration-200">
                    View Services
                </a>
            </div>
        </div>
    </section>

</x-app-layout>
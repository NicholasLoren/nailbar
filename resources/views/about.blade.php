<x-app-layout>
    <x-slot name="title">Gallery</x-slot>
    <x-slot name="description">Explore our portfolio of stunning nail art, manicures, pedicures, and beauty work at The
        Nail Bar UG. See the quality and creativity that awaits you.</x-slot>

{{-- About Us - Hero Section --}}
<section class="pt-24 pb-16 bg-gradient-to-br from-rose-50 to-pink-50 dark:from-gray-800 dark:to-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 dark:text-white mb-6">
                About The Nail Bar UG
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                Where luxury meets creativity, and indulgence meets artistry. We combine the elegance of luxury
                treatments with creative designs tailored to your unique style.
            </p>
        </div>
    </div>
</section>

{{-- About Us - Our Story Section --}}
<section class="py-16 lg:py-24 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <!-- Content -->
            <div class="space-y-6">
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white mb-6">
                        Our Story
                    </h2>
                    <div class="space-y-4 text-lg text-gray-600 dark:text-gray-400">
                        <p>
                            The Nail Bar UG was born from a passion for beauty and a commitment to excellence. Located
                            in the heart of Kampala at The Cube, we've created a sanctuary where luxury treatments meet
                            creative artistry.
                        </p>
                        <p>
                            Our journey began with a simple belief: everyone deserves to feel beautiful and confident.
                            We've built our reputation on providing exceptional nail care services that go beyond
                            expectations, creating an experience that's both relaxing and transformative.
                        </p>
                        <p>
                            Step into a world where indulgence meets artistry. At our nail & beauty salon, we combine
                            the elegance of luxury treatments with creative designs tailored to your unique style.
                            Experience the ultimate in self-care as our skilled professionals bring your beauty vision
                            to life.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Image -->
            <div class="relative">
                <div
                    class="aspect-square bg-gradient-to-br from-rose-200 to-pink-300 dark:from-rose-800 dark:to-pink-900 rounded-3xl shadow-2xl overflow-hidden">
                    <div class="w-full h-full flex items-center justify-center p-8" style="background-image: url('{{asset('images/5.jpg')}}'); background-size: cover; background-position: center;">
                        <div class="text-center space-y-6">
                            
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
    </div>
</section>

{{-- About Us - Our Values Section --}}
<section class="py-16 lg:py-24 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white mb-6">
                Our Values
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                These core values guide everything we do, from the services we provide to the experience we create.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="text-center group">
                <div
                    class="bg-white dark:bg-gray-900 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform group-hover:-translate-y-2">
                    <div
                        class="w-16 h-16 mx-auto bg-rose-100 dark:bg-rose-900 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-rose-200 dark:group-hover:bg-rose-800 transition-colors duration-300">
                        <svg class="w-8 h-8 text-rose-600 dark:text-rose-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 713.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 713.138-3.138z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Excellence</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">We strive for perfection in every
                        service, ensuring each client leaves feeling confident and beautiful.</p>
                </div>
            </div>

            <div class="text-center group">
                <div
                    class="bg-white dark:bg-gray-900 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform group-hover:-translate-y-2">
                    <div
                        class="w-16 h-16 mx-auto bg-rose-100 dark:bg-rose-900 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-rose-200 dark:group-hover:bg-rose-800 transition-colors duration-300">
                        <svg class="w-8 h-8 text-rose-600 dark:text-rose-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 712 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a4 4 0 004-4V5z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Creativity</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">We embrace artistic expression and
                        innovation, bringing unique designs and creative solutions to life.</p>
                </div>
            </div>

            <div class="text-center group">
                <div
                    class="bg-white dark:bg-gray-900 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform group-hover:-translate-y-2">
                    <div
                        class="w-16 h-16 mx-auto bg-rose-100 dark:bg-rose-900 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-rose-200 dark:group-hover:bg-rose-800 transition-colors duration-300">
                        <svg class="w-8 h-8 text-rose-600 dark:text-rose-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Luxury</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Every experience is designed to be
                        luxurious, from our premium products to our serene environment.</p>
                </div>
            </div>

            <div class="text-center group">
                <div
                    class="bg-white dark:bg-gray-900 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform group-hover:-translate-y-2">
                    <div
                        class="w-16 h-16 mx-auto bg-rose-100 dark:bg-rose-900 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-rose-200 dark:group-hover:bg-rose-800 transition-colors duration-300">
                        <svg class="w-8 h-8 text-rose-600 dark:text-rose-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Hygiene</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">We maintain the highest standards of
                        cleanliness and sanitation for your safety and peace of mind.</p>
                </div>
            </div>

            <div class="text-center group">
                <div
                    class="bg-white dark:bg-gray-900 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform group-hover:-translate-y-2">
                    <div
                        class="w-16 h-16 mx-auto bg-rose-100 dark:bg-rose-900 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-rose-200 dark:group-hover:bg-rose-800 transition-colors duration-300">
                        <svg class="w-8 h-8 text-rose-600 dark:text-rose-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Personalization</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">We tailor each service to your
                        individual needs and preferences, ensuring a unique experience.</p>
                </div>
            </div>

            <div class="text-center group">
                <div
                    class="bg-white dark:bg-gray-900 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform group-hover:-translate-y-2">
                    <div
                        class="w-16 h-16 mx-auto bg-rose-100 dark:bg-rose-900 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-rose-200 dark:group-hover:bg-rose-800 transition-colors duration-300">
                        <svg class="w-8 h-8 text-rose-600 dark:text-rose-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Relaxation</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Our serene environment is designed to
                        help you unwind and enjoy a peaceful escape from daily stress.</p>
                </div>
            </div>
        </div>
    </div>
</section>   


{{-- About Us - Why Choose Us Section --}}
<section class="py-16 lg:py-24 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white mb-6">
                Why Choose The Nail Bar UG?
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                We're not just another nail salon. Here's what sets us apart and makes us the preferred choice for nail
                care in Kampala.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="text-center group">
                <div
                    class="bg-white dark:bg-gray-900 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform group-hover:-translate-y-2 h-full">
                    <div
                        class="w-16 h-16 mx-auto bg-rose-100 dark:bg-rose-900 text-rose-600 dark:text-rose-400 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 713.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 713.138-3.138z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Premium Products</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">We use only the highest quality nail
                        products and equipment to ensure lasting results and your safety.</p>
                </div>
            </div>

            <div class="text-center group">
                <div
                    class="bg-white dark:bg-gray-900 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform group-hover:-translate-y-2 h-full">
                    <div
                        class="w-16 h-16 mx-auto bg-purple-100 dark:bg-purple-900 text-purple-600 dark:text-purple-400 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Expert Technicians</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Our skilled professionals are trained in
                        the latest techniques and trends in nail care and artistry.</p>
                </div>
            </div>

            <div class="text-center group">
                <div
                    class="bg-white dark:bg-gray-900 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform group-hover:-translate-y-2 h-full">
                    <div
                        class="w-16 h-16 mx-auto bg-green-100 dark:bg-green-900 text-green-600 dark:text-green-400 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Hygiene Standards</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">We maintain the highest hygiene and
                        sanitation standards to ensure your health and safety.</p>
                </div>
            </div>

            <div class="text-center group">
                <div
                    class="bg-white dark:bg-gray-900 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform group-hover:-translate-y-2 h-full">
                    <div
                        class="w-16 h-16 mx-auto bg-pink-100 dark:bg-pink-900 text-pink-600 dark:text-pink-400 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Relaxing Environment</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Our salon provides a peaceful, luxurious
                        atmosphere where you can unwind and enjoy your treatment.</p>
                </div>
            </div>

            <div class="text-center group">
                <div
                    class="bg-white dark:bg-gray-900 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform group-hover:-translate-y-2 h-full">
                    <div
                        class="w-16 h-16 mx-auto bg-indigo-100 dark:bg-indigo-900 text-indigo-600 dark:text-indigo-400 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Affordable Luxury</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">We believe everyone deserves luxury nail
                        care, which is why we offer competitive pricing without compromising quality.</p>
                </div>
            </div>

            <div class="text-center group">
                <div
                    class="bg-white dark:bg-gray-900 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform group-hover:-translate-y-2 h-full">
                    <div
                        class="w-16 h-16 mx-auto bg-amber-100 dark:bg-amber-900 text-amber-600 dark:text-amber-400 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 712 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a4 4 0 004-4V5z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Custom Designs</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">From classic elegance to bold artistic
                        expressions, we create custom nail art tailored to your personal style.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- About Us - Testimonials Section --}}
<section class="py-16 lg:py-24 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white mb-6">
                What Our Clients Say
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Don't just take our word for it. Here's what our amazing clients have to say about their experience at
                The Nail Bar UG.
            </p>
        </div>

        @php
$testimonials = [
    [
        'name' => 'Anita Kusiima',
        'service' => 'Gel Extensions',
        'rating' => 5,
        'review' => 'Absolutely love coming here! The staff is so professional and the nail art is incredible. My gel extensions lasted over 3 weeks and still looked perfect. Best nail salon in Kampala!',
        'initial' => 'A',
        'gradient' => 'from-pink-400 to-rose-500'
    ],
    [
        'name' => 'Mary Akello',
        'service' => 'Nail Art Design',
        'rating' => 5,
        'review' => 'The ambiance is so relaxing and luxurious. Grace did an amazing job on my nail art - exactly what I envisioned! The attention to detail is unmatched. Highly recommend!',
        'initial' => 'M',
        'gradient' => 'from-purple-400 to-pink-500'
    ],
    [
        'name' => 'Rebecca Namatovu',
        'service' => 'Regular Pedicure',
        'rating' => 5,
        'review' => 'I\'ve been coming here for 6 months now and every visit exceeds my expectations. The hygiene standards are top-notch and Joy always gives the most relaxing pedicures!',
        'initial' => 'R',
        'gradient' => 'from-green-400 to-teal-500'
    ],
    [
        'name' => 'Stella Namugga',
        'service' => 'Lash Extensions',
        'rating' => 5,
        'review' => 'Diana is incredible with lash extensions! My lashes look so natural and full. The whole team is friendly and professional. Plus, the location at The Cube is so convenient!',
        'initial' => 'S',
        'gradient' => 'from-blue-400 to-indigo-500'
    ]
];
        @endphp

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($testimonials as $testimonial)
                <div
                    class="bg-gray-50 dark:bg-gray-800 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 group">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            @for($i = 0; $i < $testimonial['rating']; $i++)
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            @endfor
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                        "{{ $testimonial['review'] }}"
                    </p>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 bg-gradient-to-br {{ $testimonial['gradient'] }} rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-bold text-lg">{{ $testimonial['initial'] }}</span>
                        </div>
                        <div>
                            <h4 class="text-gray-900 dark:text-white font-semibold">{{ $testimonial['name'] }}</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400">{{ $testimonial['service'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-12 text-center">
            <p class="text-lg text-gray-600 dark:text-gray-400 mb-6">
                Ready to experience the luxury and excellence our clients rave about?
            </p>
            <a href="{{ route('contact') }}"
                class="inline-flex items-center justify-center px-8 py-4 text-base font-medium text-white bg-gray-900 dark:bg-white dark:text-gray-900 rounded-lg hover:bg-gray-800 dark:hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                Book Your Appointment
            </a>
        </div>
    </div>
</section>

</x-app-layout>
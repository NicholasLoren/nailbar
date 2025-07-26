{{-- resources/views/gallery.blade.php --}}

<x-app-layout>
    <x-slot name="title">Gallery</x-slot>
    <x-slot name="description">Explore our portfolio of stunning nail art, manicures, pedicures, and beauty work at The
        Nail Bar UG. See the quality and creativity that awaits you.</x-slot>

    <!-- Header Section -->
    <section class="pt-24 pb-16 bg-gradient-to-br from-rose-50 to-pink-50 dark:from-gray-800 dark:to-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 dark:text-white mb-6">
                    Our Gallery
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                    Discover our finest work and get inspired for your next visit. From elegant classics to bold
                    artistic expressions, see what's possible at The Nail Bar UG.
                </p>
            </div>
        </div>
    </section>

    <!-- Gallery Section with Combined Filter and Lightbox Data -->
    <section x-data="{ 
        activeFilter: 'all',
        lightboxOpen: false,
        lightboxImage: '',
        lightboxTitle: '',
        
        // Gallery items with all data
        galleryItems: [
            { category: 'manicures', title: 'Classic French Manicure', gradient: 'from-pink-100 to-rose-200 dark:from-pink-900 dark:to-rose-800', image: '{{ asset('images/1.jpg') }}' },
            { category: 'nail-art', title: 'Floral Nail Art Design', gradient: 'from-purple-100 to-pink-200 dark:from-purple-900 dark:to-pink-800', image: '{{ asset('images/2.jpg') }}' },
            { category: 'acrylic', title: 'Long Acrylic Extensions', gradient: 'from-indigo-100 to-purple-200 dark:from-indigo-900 dark:to-purple-800', image: '{{ asset('images/3.jpg') }}' },
            { category: 'pedicures', title: 'Luxury Pedicure Treatment', gradient: 'from-teal-100 to-cyan-200 dark:from-teal-900 dark:to-cyan-800', image: '{{ asset('images/4.jpg') }}' },
            { category: 'gel', title: 'Gel Polish Manicure', gradient: 'from-emerald-100 to-teal-200 dark:from-emerald-900 dark:to-teal-800', image: '{{ asset('images/5.jpg') }}' },
            { category: 'nail-art', title: 'Geometric Patterns', gradient: 'from-amber-100 to-orange-200 dark:from-amber-900 dark:to-orange-800', image: '{{ asset('images/6.jpg') }}' },
            { category: 'manicures', title: 'Nude Elegance', gradient: 'from-rose-100 to-pink-200 dark:from-rose-900 dark:to-pink-800', image: '{{ asset('images/7.jpg') }}' },
            { category: 'acrylic', title: 'Stiletto Acrylics', gradient: 'from-violet-100 to-purple-200 dark:from-violet-900 dark:to-purple-800', image: '{{ asset('images/8.jpg') }}' },
            { category: 'lashes', title: 'Volume Lash Extensions', gradient: 'from-blue-100 to-indigo-200 dark:from-blue-900 dark:to-indigo-800', image: '{{ asset('images/9.jpg') }}' },
            { category: 'pedicures', title: 'Summer Toe Art', gradient: 'from-yellow-100 to-orange-200 dark:from-yellow-900 dark:to-orange-800', image: '{{ asset('images/10.jpg') }}' },
            { category: 'brows', title: 'Perfect Brow Shape', gradient: 'from-gray-100 to-slate-200 dark:from-gray-900 dark:to-slate-800', image: '{{ asset('images/11.jpg') }}' },
            { category: 'nail-art', title: 'Abstract Art Design', gradient: 'from-red-100 to-pink-200 dark:from-red-900 dark:to-pink-800', image: '{{ asset('images/12.jpg') }}' },
            { category: 'gel', title: 'Ombre Gel Nails', gradient: 'from-cyan-100 to-blue-200 dark:from-cyan-900 dark:to-blue-800', image: '{{ asset('images/13.jpg') }}' },
            { category: 'manicures', title: 'Minimalist Chic', gradient: 'from-stone-100 to-gray-200 dark:from-stone-900 dark:to-gray-800', image: '{{ asset('images/14.jpg') }}' },
            { category: 'acrylic', title: 'Coffin Shape Acrylics', gradient: 'from-fuchsia-100 to-pink-200 dark:from-fuchsia-900 dark:to-pink-800', image: '{{ asset('images/15.jpg') }}' },
            { category: 'lashes', title: 'Natural Lash Look', gradient: 'from-green-100 to-emerald-200 dark:from-green-900 dark:to-emerald-800', image: '{{ asset('images/16.jpg') }}' }
        ],
        
        // Computed property for filtered items
        get filteredItems() {
            if (this.activeFilter === 'all') {
                return this.galleryItems;
            }
            return this.galleryItems.filter(item => item.category === this.activeFilter);
        },
        
        openLightbox(image, title) {
            this.lightboxImage = image;
            this.lightboxTitle = title;
            this.lightboxOpen = true;
            document.body.style.overflow = 'hidden';
        },
        
        closeLightbox() {
            this.lightboxOpen = false;
            document.body.style.overflow = 'auto';
        }
    }">

        <!-- Filter Tabs -->
        <div class="py-12 bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap justify-center gap-4">
                    @php
                        $filters = [
                            'all' => 'All Work',
                            'manicures' => 'Manicures',
                            'pedicures' => 'Pedicures',
                            'acrylic' => 'Acrylic Nails',
                            'nail-art' => 'Nail Art',
                            'gel' => 'Gel Nails',
                            'lashes' => 'Lashes',
                            'brows' => 'Eyebrows'
                        ];
                    @endphp

                    @foreach($filters as $key => $label)
                        <button @click="activeFilter = '{{ $key }}'"
                            :class="{ 'bg-rose-600 text-white': activeFilter === '{{ $key }}', 'bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700': activeFilter !== '{{ $key }}' }"
                            class="px-6 py-3 rounded-full font-medium transition-all duration-200 border border-gray-200 dark:border-gray-600">
                            {{ $label }}
                        </button>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Gallery Grid -->
        <div class="py-16 lg:py-24 bg-white dark:bg-gray-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <template x-for="(item, index) in filteredItems" :key="index">
                        <div class="gallery-item group cursor-pointer"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            @click="openLightbox(item.image, item.title)">

                            <div class="relative aspect-square bg-gradient-to-br rounded-2xl overflow-hidden shadow-lg group-hover:shadow-2xl transition-all duration-300 transform group-hover:-translate-y-2"
                                :class="item.gradient">
                                <!-- Image -->
                                <div class="w-full h-full bg-cover bg-center"
                                    :style="`background-image: url('${item.image}');`">
                                </div>

                                <!-- Overlay -->
                                <div
                                    class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                                    <div
                                        class="bg-white/90 rounded-full p-3 transform scale-75 group-hover:scale-100 transition-transform duration-300">
                                        <svg class="w-6 h-6 text-gray-900" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </div>
                                </div>

                                <!-- Title overlay on hover -->
                                <div
                                    class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                    <h3 class="text-white font-medium text-sm" x-text="item.title"></h3>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>

        <!-- Lightbox Modal -->
        <div x-show="lightboxOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/90" @click="closeLightbox()"
            @keydown.escape.window="closeLightbox()">

            <div class="relative max-w-4xl w-full" @click.stop>
                <!-- Close Button -->
                <button @click="closeLightbox()"
                    class="absolute -top-12 right-0 text-white hover:text-gray-300 transition-colors duration-200 z-10">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Image Container -->
                <div class="relative aspect-square bg-black rounded-lg overflow-hidden">
                    <img :src="lightboxImage" :alt="lightboxTitle" class="w-full h-full object-cover" loading="lazy">

                    <!-- Title Overlay -->
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6">
                        <h3 class="text-white font-bold text-2xl" x-text="lightboxTitle"></h3>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Instagram Feed Section -->
    <section class="py-16 lg:py-24 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white mb-6">
                    Follow Us on Instagram
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto mb-8">
                    Stay updated with our latest work and get daily inspiration from our nail art creations.
                </p>
                <a href="#"
                    class="inline-flex items-center space-x-2 text-rose-600 hover:text-rose-700 dark:text-rose-400 dark:hover:text-rose-300 transition-colors duration-200 font-medium">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>@the_nail_bar_ug</span>
                </a>
            </div>

            <!-- Instagram Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                @php 
                    $works = [
                        'images/20.jpg',
                        'images/21.jpg',
                        'images/22.jpg',
                        'images/23.jpg',
                        'images/24.jpg',
                        'images/25.jpg',
                        'images/26.jpg',
                        'images/27.jpg',
                        'images/28.jpg',
                        'images/29.jpg',
                        'images/30.jpg',
                        'images/31.jpg',
                        'images/32.jpg',
                        'images/33.jpg',
                        'images/34.jpg',
                        'images/35.jpg',
                        'images/36.jpg',
                        'images/37.jpg',
                    ];
                @endphp
          @foreach($works as $work)
                    <div
                class="aspect-square bg-gradient-to-br from-pink-200 to-rose-300 dark:from-pink-800 dark:to-rose-900 rounded-lg overflow-hidden group cursor-pointer hover:shadow-lg transition-all duration-300">
                <div class="w-full h-full flex items-center justify-center" style="background-image: url('{{ asset($work) }}'); background-size: cover; background-position: center;">

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
                Ready to Create Your Own Masterpiece?
            </h2>
            <p class="text-xl text-rose-100 mb-8 max-w-2xl mx-auto">
                Book your appointment today and let our talented team create something beautiful just for you.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center justify-center px-8 py-4 text-base font-medium text-rose-600 bg-white rounded-lg hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                    Book Your Appointment
                </a>
                <a href="{{ route('services') }}"
                    class="inline-flex items-center justify-center px-8 py-4 text-base font-medium text-white bg-transparent border-2 border-white rounded-lg hover:bg-white hover:text-rose-600 transition-all duration-200">
                    View Our Services
                </a>
            </div>
        </div>
    </section>

</x-app-layout>
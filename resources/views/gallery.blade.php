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

    <!-- Filter Tabs -->
    <section class="py-12 bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap justify-center gap-4" x-data="{ activeFilter: 'all' }">
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
    </section>

    <!-- Gallery Grid -->
    <section class="py-16 lg:py-24 bg-white dark:bg-gray-900" x-data="{ 
        activeFilter: 'all',
        lightboxOpen: false,
        lightboxImage: '',
        lightboxTitle: '',
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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

                @php
                    $galleryItems = [
                        ['category' => 'manicures', 'title' => 'Classic French Manicure', 'gradient' => 'from-pink-100 to-rose-200 dark:from-pink-900 dark:to-rose-800'],
                        ['category' => 'nail-art', 'title' => 'Floral Nail Art Design', 'gradient' => 'from-purple-100 to-pink-200 dark:from-purple-900 dark:to-pink-800'],
                        ['category' => 'acrylic', 'title' => 'Long Acrylic Extensions', 'gradient' => 'from-indigo-100 to-purple-200 dark:from-indigo-900 dark:to-purple-800'],
                        ['category' => 'pedicures', 'title' => 'Luxury Pedicure Treatment', 'gradient' => 'from-teal-100 to-cyan-200 dark:from-teal-900 dark:to-cyan-800'],
                        ['category' => 'gel', 'title' => 'Gel Polish Manicure', 'gradient' => 'from-emerald-100 to-teal-200 dark:from-emerald-900 dark:to-teal-800'],
                        ['category' => 'nail-art', 'title' => 'Geometric Patterns', 'gradient' => 'from-amber-100 to-orange-200 dark:from-amber-900 dark:to-orange-800'],
                        ['category' => 'manicures', 'title' => 'Nude Elegance', 'gradient' => 'from-rose-100 to-pink-200 dark:from-rose-900 dark:to-pink-800'],
                        ['category' => 'acrylic', 'title' => 'Stiletto Acrylics', 'gradient' => 'from-violet-100 to-purple-200 dark:from-violet-900 dark:to-purple-800'],
                        ['category' => 'lashes', 'title' => 'Volume Lash Extensions', 'gradient' => 'from-blue-100 to-indigo-200 dark:from-blue-900 dark:to-indigo-800'],
                        ['category' => 'pedicures', 'title' => 'Summer Toe Art', 'gradient' => 'from-yellow-100 to-orange-200 dark:from-yellow-900 dark:to-orange-800'],
                        ['category' => 'brows', 'title' => 'Perfect Brow Shape', 'gradient' => 'from-gray-100 to-slate-200 dark:from-gray-900 dark:to-slate-800'],
                        ['category' => 'nail-art', 'title' => 'Abstract Art Design', 'gradient' => 'from-red-100 to-pink-200 dark:from-red-900 dark:to-pink-800'],
                        ['category' => 'gel', 'title' => 'Ombre Gel Nails', 'gradient' => 'from-cyan-100 to-blue-200 dark:from-cyan-900 dark:to-blue-800'],
                        ['category' => 'manicures', 'title' => 'Minimalist Chic', 'gradient' => 'from-stone-100 to-gray-200 dark:from-stone-900 dark:to-gray-800'],
                        ['category' => 'acrylic', 'title' => 'Coffin Shape Acrylics', 'gradient' => 'from-fuchsia-100 to-pink-200 dark:from-fuchsia-900 dark:to-pink-800'],
                        ['category' => 'lashes', 'title' => 'Natural Lash Look', 'gradient' => 'from-green-100 to-emerald-200 dark:from-green-900 dark:to-emerald-800'],
                    ];
                @endphp

                @foreach($galleryItems as $index => $item)
                    <div class="gallery-item group cursor-pointer" data-category="{{ $item['category'] }}"
                        x-show="activeFilter === 'all' || activeFilter === '{{ $item['category'] }}'"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        @click="openLightbox('{{ $item['gradient'] }}', '{{ $item['title'] }}')">

                        <div
                            class="relative aspect-square bg-gradient-to-br {{ $item['gradient'] }} rounded-2xl overflow-hidden shadow-lg group-hover:shadow-2xl transition-all duration-300 transform group-hover:-translate-y-2">
                            <!-- Image Placeholder -->
                            <div class="w-full h-full flex items-center justify-center p-6">
                                <div class="text-center">
                                    <div
                                        class="w-16 h-16 mx-auto bg-white/20 rounded-full flex items-center justify-center mb-4">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            @if(str_contains($item['category'], 'lashes'))
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            @elseif(str_contains($item['category'], 'brows'))
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            @else
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a4 4 0 004-4V5z" />
                                            @endif
                                        </svg>
                                    </div>
                                    <p class="text-white font-medium text-sm">{{ $item['title'] }}</p>
                                </div>
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
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button
                    class="inline-flex items-center justify-center px-8 py-4 text-base font-medium text-rose-600 bg-rose-50 dark:bg-rose-900/20 dark:text-rose-400 rounded-lg hover:bg-rose-100 dark:hover:bg-rose-900/30 transition-colors duration-200 border border-rose-200 dark:border-rose-800">
                    Load More Images
                </button>
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
                    class="absolute -top-12 right-0 text-white hover:text-gray-300 transition-colors duration-200">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Image -->
                <div class="aspect-square bg-gradient-to-br" :class="lightboxImage">
                    <div class="w-full h-full flex items-center justify-center p-12">
                        <div class="text-center">
                            <div
                                class="w-32 h-32 mx-auto bg-white/20 rounded-full flex items-center justify-center mb-8">
                                <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a4 4 0 004-4V5z" />
                                </svg>
                            </div>
                            <h3 class="text-white font-bold text-2xl" x-text="lightboxTitle"></h3>
                        </div>
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
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.042-3.441.219-.937 1.404-5.956 1.404-5.956s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738a.36.36 0 01.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.357-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146 1.447.647 3.058.988 4.75.988 6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z" />
                    </svg>
                    <span>@thenailbarug</span>
                </a>
            </div>

            <!-- Instagram Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                @for($i = 1; $i <= 12; $i++)
                    <div
                        class="aspect-square bg-gradient-to-br from-pink-200 to-rose-300 dark:from-pink-800 dark:to-rose-900 rounded-lg overflow-hidden group cursor-pointer hover:shadow-lg transition-all duration-300">
                        <div class="w-full h-full flex items-center justify-center">
                            <div class="text-center">
                                <div class="w-8 h-8 mx-auto bg-white/20 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
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
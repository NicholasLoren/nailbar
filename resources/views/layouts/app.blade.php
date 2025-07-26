 
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ darkMode: false }" x-init="
    darkMode = localStorage.getItem('darkMode') === 'true' || (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches);
    $watch('darkMode', val => localStorage.setItem('darkMode', val));
" :class="{ 'dark': darkMode }">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Logo --}}
    <link rel="icon" href="{{ asset('images/logo.jpg') }}" type="image/jpeg">


    {{-- SEO Meta Tags --}}
    
    <title>{{ isset($title) ? $title . ' - ' : '' }}The Nail Bar UG</title>
    <meta name="description" content="{{ $description ?? 'Professional nail care services in Kampala. Experience luxury manicures, pedicures, acrylic nails, and beauty treatments at The Nail Bar UG.' }}">
    <meta name="keywords" content="nail salon, manicure, pedicure, acrylic nails, nail art, beauty salon, Kampala, Uganda, nail care">
    <meta name="author" content="The Nail Bar UG">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ isset($title) ? $title . ' - ' : '' }}The Nail Bar UG">
    <meta property="og:description" content="{{ $description ?? 'Professional nail care services in Kampala. Experience luxury manicures, pedicures, acrylic nails, and beauty treatments at The Nail Bar UG.' }}">
    <meta property="og:image" content="{{ asset('images/nail-bar-og-image.jpg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ isset($title) ? $title . ' - ' : '' }}The Nail Bar UG">
    <meta property="twitter:description" content="{{ $description ?? 'Professional nail care services in Kampala. Experience luxury manicures, pedicures, acrylic nails, and beauty treatments at The Nail Bar UG.' }}">
    <meta property="twitter:image" content="{{ asset('images/nail-bar-og-image.jpg') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800&display=swap" rel="stylesheet" />
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        :root {
            /* Light Mode Colors */
            --primary-charcoal: #94959A;
            --primary-light-grey: #D2D3D4;
            --primary-warm-beige: #EAE8E5;
            --accent-rose-gold: #DCBBB3;
            --accent-blush-pink: #F2E2D9;
            --support-warm-white: #FFFFFF;
            --support-cream: #F8F6F0;
            --text-dark: #5A5A5A;
            --text-light: #FFFFFF;
            --text-primary: #1F2937;
            --text-secondary: #6B7280;
            --border-light: #E5E7EB;
            --shadow-light: rgba(0, 0, 0, 0.1);
        }
        
        .dark {
            /* Dark Mode Colors */
            --primary-charcoal: #6B6C70;
            --primary-light-grey: #4A4B4D;
            --primary-warm-beige: #2A2B2D;
            --accent-rose-gold: #B8958D;
            --accent-blush-pink: #3A3533;
            --support-warm-white: #1F2024;
            --support-cream: #2D2E32;
            --text-dark: #E5E5E5;
            --text-light: #FFFFFF;
            --text-primary: #F9FAFB;
            --text-secondary: #D1D5DB;
            --border-light: #374151;
            --shadow-light: rgba(255, 255, 255, 0.1);
        }
        
        /* Custom CSS Variables Usage */
        .text-primary-custom { color: var(--text-primary); }
        .text-secondary-custom { color: var(--text-secondary); }
        .text-dark-custom { color: var(--text-dark); }
        .text-light-custom { color: var(--text-light); }
        .bg-rose-gold { background-color: var(--accent-rose-gold); }
        .bg-blush { background-color: var(--accent-blush-pink); }
        .bg-warm-beige { background-color: var(--primary-warm-beige); }
        .bg-cream { background-color: var(--support-cream); }
        .border-rose-gold { border-color: var(--accent-rose-gold); }
        .border-light-custom { border-color: var(--border-light); }
        
        /* Smooth transitions for theme switching */
        * {
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: var(--support-cream);
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--accent-rose-gold);
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-charcoal);
        }
        
        /* Focus styles for accessibility */
        .focus-ring:focus {
            outline: 2px solid var(--accent-rose-gold);
            outline-offset: 2px;
        }
        
        /* Animation classes */
        .animate-fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .animate-slide-in-left {
            animation: slideInLeft 0.6s ease-out;
        }
        
        @keyframes slideInLeft {
            from { opacity: 0; transform: translateX(-30px); }
            to { opacity: 1; transform: translateX(0); }
        }
        
        .animate-slide-in-right {
            animation: slideInRight 0.6s ease-out;
        }
        
        @keyframes slideInRight {
            from { opacity: 0; transform: translateX(30px); }
            to { opacity: 1; transform: translateX(0); }
        }
        
        /* Custom button styles */
        .btn-primary {
            background-color: var(--accent-rose-gold);
            color: var(--text-light);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-charcoal);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px var(--shadow-light);
        }
        
        .btn-secondary {
            background-color: transparent;
            color: var(--text-dark);
            border: 2px solid var(--accent-rose-gold);
            transition: all 0.3s ease;
        }
        
        .btn-secondary:hover {
            background-color: var(--accent-rose-gold);
            color: var(--text-light);
            transform: translateY(-2px);
        }
        
        /* Navigation styles */
        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 50%;
            width: 0;
            height: 2px;
            background-color: var(--accent-rose-gold);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }
        
        /* Card hover effects */
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px var(--shadow-light);
        }
        
        /* Glass morphism effect */
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .dark .glass-effect {
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
    </style>
</head>

<body class="font-sans antialiased bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 transition-colors duration-300">
    <!-- Skip to main content for accessibility -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-rose-600 text-white px-4 py-2 rounded-lg z-50">
        Skip to main content
    </a>

    <!-- Navigation -->
    <nav x-data="{ 
            isOpen: false, 
            isScrolled: false,
            closeMenu() {
                this.isOpen = false;
            }
         }" 
         x-init="
            window.addEventListener('scroll', () => { 
                isScrolled = window.pageYOffset > 20;
            });
            // Close mobile menu when clicking outside
            document.addEventListener('click', (e) => {
                if (!$el.contains(e.target)) {
                    isOpen = false;
                }
            });
         "
         :class="{ 
             'bg-primary dark:bg-gray-900/95 backdrop-blur-md shadow-lg border-b border-gray-200/50 dark:border-gray-700/50': isScrolled, 
             'bg-primary dark:bg-gray-900/95': !isScrolled 
         }"
         class="fixed w-full top-0 z-50 transition-all duration-500"
         role="navigation"
         aria-label="Main navigation">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16 lg:h-20">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" 
                       class="text-2xl lg:text-3xl font-bold text-primary-custom tracking-wider hover:text-rose-600 transition-colors duration-300 focus-ring"
                       aria-label="The Nail Bar UG - Home">
                        The Nailbarug
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex lg:items-center lg:space-x-8">
                    <a href="{{ route('home') }}" 
                       class="nav-link {{ request()->routeIs('home') ? 'active border-b border-secondary' : 'text-dark-custom hover:text-rose-600' }} 
                              px-3 py-2 text-sm font-medium transition-colors duration-200 focus-ring"
                       aria-current="{{ request()->routeIs('home') ? 'page' : 'false' }}">
                        HOME
                    </a>
                    <a href="{{ route('about') }}" 
                       class="nav-link {{ request()->routeIs('about') ? 'active text-secondary' : 'text-dark-custom hover:text-secondary' }} 
                              px-3 py-2 text-sm font-medium transition-colors duration-200 focus-ring">
                        ABOUT US
                    </a>
                    <a href="{{ route('services') }}" 
                       class="nav-link {{ request()->routeIs('services') ? 'active text-secondary' : 'text-dark-custom hover:text-secondary' }} 
                              px-3 py-2 text-sm font-medium transition-colors duration-200 focus-ring">
                        SERVICES
                    </a>
                    <a href="{{ route('gallery') }}" 
                       class="nav-link {{ request()->routeIs('gallery') ? 'active text-secondary' : 'text-dark-custom hover:text-secondary' }} 
                              px-3 py-2 text-sm font-medium transition-colors duration-200 focus-ring">
                        GALLERY
                    </a>
                    <a href="{{ route('contact') }}" 
                       class="nav-link {{ request()->routeIs('contact') ? 'active text-secondary' : 'text-dark-custom hover:text-secondary' }} 
                              px-3 py-2 text-sm font-medium transition-colors duration-200 focus-ring">
                        CONTACT US
                    </a>
                    
                    <!-- Dark Mode Toggle -->
                    <button @click="darkMode = !darkMode" 
                            class="p-2 rounded-lg transition-all duration-200 focus-ring"
                            aria-label="Toggle dark mode"
                            :aria-pressed="darkMode">
                        <svg x-show="!darkMode" class="w-5 h-5 text-black dark:text-white" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                        </svg>
                        <svg x-show="darkMode" class="w-5 h-5 text-black dark:text-white" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                    </button>
                </div>

                <!-- Mobile menu button -->
                <div class="lg:hidden flex items-center space-x-2">
                    <!-- Dark Mode Toggle Mobile -->
                    <button @click="darkMode = !darkMode" 
                            class="p-2 rounded-lg bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 transition-all duration-200 focus-ring"
                            aria-label="Toggle dark mode"
                            :aria-pressed="darkMode">
                        <svg x-show="!darkMode" class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                        </svg>
                        <svg x-show="darkMode" class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                    </button>
                    
                    <button @click="isOpen = !isOpen" 
                            class="p-2 rounded-md text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-800 transition-all duration-200 focus-ring"
                            aria-label="Toggle mobile menu"
                            :aria-expanded="isOpen">
                        <svg x-show="!isOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg x-show="isOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation Menu -->
            <div x-show="isOpen" 
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 transform scale-95"
                 x-transition:enter-end="opacity-100 transform scale-100"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 transform scale-100"
                 x-transition:leave-end="opacity-0 transform scale-95"
                 class="lg:hidden bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700 glass-effect"
                 role="menu">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="{{ route('home') }}" 
                       @click="closeMenu()"
                       class="block px-3 py-2 text-base font-medium {{ request()->routeIs('home') ? 'text-rose-600 bg-rose-50 dark:bg-rose-900/20' : 'text-gray-700 dark:text-gray-300 hover:text-rose-600 hover:bg-gray-50 dark:hover:bg-gray-800' }} transition-all duration-200 rounded-lg focus-ring"
                       role="menuitem">
                        HOME
                    </a>
                    <a href="{{ route('about') }}" 
                       @click="closeMenu()"
                       class="block px-3 py-2 text-base font-medium {{ request()->routeIs('about') ? 'text-rose-600 bg-rose-50 dark:bg-rose-900/20' : 'text-gray-700 dark:text-gray-300 hover:text-rose-600 hover:bg-gray-50 dark:hover:bg-gray-800' }} transition-all duration-200 rounded-lg focus-ring"
                       role="menuitem">
                        ABOUT US
                    </a>
                    <a href="{{ route('services') }}" 
                       @click="closeMenu()"
                       class="block px-3 py-2 text-base font-medium {{ request()->routeIs('services') ? 'text-rose-600 bg-rose-50 dark:bg-rose-900/20' : 'text-gray-700 dark:text-gray-300 hover:text-rose-600 hover:bg-gray-50 dark:hover:bg-gray-800' }} transition-all duration-200 rounded-lg focus-ring"
                       role="menuitem">
                        SERVICES
                    </a>
                    <a href="{{ route('gallery') }}" 
                       @click="closeMenu()"
                       class="block px-3 py-2 text-base font-medium {{ request()->routeIs('gallery') ? 'text-rose-600 bg-rose-50 dark:bg-rose-900/20' : 'text-gray-700 dark:text-gray-300 hover:text-rose-600 hover:bg-gray-50 dark:hover:bg-gray-800' }} transition-all duration-200 rounded-lg focus-ring"
                       role="menuitem">
                        GALLERY
                    </a>
                    <a href="{{ route('contact') }}" 
                       @click="closeMenu()"
                       class="block px-3 py-2 text-base font-medium {{ request()->routeIs('contact') ? 'text-rose-600 bg-rose-50 dark:bg-rose-900/20' : 'text-gray-700 dark:text-gray-300 hover:text-rose-600 hover:bg-gray-50 dark:hover:bg-gray-800' }} transition-all duration-200 rounded-lg focus-ring"
                       role="menuitem">
                        CONTACT US
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main id="main-content" class="min-h-screen" role="main">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700" role="contentinfo">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
                <!-- Brand Info -->
                <div class="lg:col-span-2">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">THE NAIL BAR UG</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6 max-w-md leading-relaxed">
                        Experience luxury at your fingertips. Indulge in a serene salon experience with our premium nail and beauty treatments designed to make you shine.
                    </p>
                    
                    <!-- Instagram Gallery Preview -->
                    <div class="mb-6">
                        <h4 class="text-sm font-semibold text-gray-900 dark:text-white mb-3 uppercase tracking-wider">Latest Work</h4>

                        @php 
                            $works = [
    'images/8.jpg',
    'images/9.jpg',
    'images/10.jpg',
    'images/11.jpg',
    'images/12.jpg',
    'images/13.jpg',
    'images/14.jpg',
    'images/15.jpg',
    'images/16.jpg',
    'images/17.jpg',
];
                        @endphp
                        <div class="grid grid-cols-6 gap-2">
                            @foreach($works as $work)
                                <div class="aspect-square bg-gradient-to-br from-pink-200 to-rose-300 dark:from-pink-800 dark:to-rose-900 rounded-lg hover:scale-105 transition-transform duration-300 cursor-pointer">
                                    <div class="w-full h-full flex items-center justify-center">
                                        <img src={{asset($work)}} class="h-full w-full rounded shadow-sm"/>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <a href="https://www.instagram.com/the_nail_bar_ug" 
                       class="inline-flex items-center space-x-2 text-rose-600 hover:text-rose-700 dark:text-rose-400 dark:hover:text-rose-300 transition-colors duration-200 focus-ring">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Follow us on Instagram</span>
                    </a>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-6">Quick Links</h4>
                    <ul class="space-y-3" role="list">
                        <li><a href="{{ route('home') }}" class="text-gray-600 dark:text-gray-400 hover:text-rose-600 dark:hover:text-rose-400 transition-colors duration-200 focus-ring">Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-600 dark:text-gray-400 hover:text-rose-600 dark:hover:text-rose-400 transition-colors duration-200 focus-ring">About Us</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-600 dark:text-gray-400 hover:text-rose-600 dark:hover:text-rose-400 transition-colors duration-200 focus-ring">Services</a></li>
                        <li><a href="{{ route('gallery') }}" class="text-gray-600 dark:text-gray-400 hover:text-rose-600 dark:hover:text-rose-400 transition-colors duration-200 focus-ring">Gallery</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-600 dark:text-gray-400 hover:text-rose-600 dark:hover:text-rose-400 transition-colors duration-200 focus-ring">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-6">Contact Info</h4>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-rose-600 dark:text-rose-400 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <div>
                                <p class="text-gray-600 dark:text-gray-400 text-sm font-medium">Location</p>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">The Cube, First Floor</p>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Kampala, Uganda</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-rose-600 dark:text-rose-400 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <div>
                                <p class="text-gray-600 dark:text-gray-400 text-sm font-medium">Phone</p>
                                <a href="tel:+256772054361" class="text-gray-600 dark:text-gray-400 text-sm hover:text-rose-600 dark:hover:text-rose-400 transition-colors duration-200">+256 772 054 361</a>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-rose-600 dark:text-rose-400 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <div>
                                <p class="text-gray-600 dark:text-gray-400 text-sm font-medium">Email</p>
                                <a href="mailto:info@thenailbarug.com" class="text-gray-600 dark:text-gray-400 text-sm hover:text-rose-600 dark:hover:text-rose-400 transition-colors duration-200">info@thenailbarug.com</a>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-rose-600 dark:text-rose-400 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <div>
                                <p class="text-gray-600 dark:text-gray-400 text-sm font-medium">Hours</p>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Monday - Sunday</p>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">9:00 AM - 8:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Bottom Footer -->
            <div class="mt-12 pt-8 border-t border-gray-200 dark:border-gray-700">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <div class="text-center md:text-left">
                        <p class="text-gray-600 dark:text-gray-400 text-sm">
                            © {{ date('Y') }} The Nail Bar UG. All rights reserved.
                        </p>
                        <p class="text-gray-500 dark:text-gray-500 text-xs mt-1">
                            Designed with care for luxury nail services in Kampala.
                        </p>
                    </div>
                    
                    <!-- Social Media Links -->
                    <div class="flex items-center space-x-6"> 
                        <a href="https://www.instagram.com/the_nail_bar_ug" 
                           class="text-gray-400 hover:text-rose-600 dark:hover:text-rose-400 transition-colors duration-200 focus-ring"
                           aria-label="Follow us on Instagram">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="https://www.tiktok.com/@thenailbarug1" target="_blank"
                            class="text-gray-400 hover:text-rose-600 dark:hover:text-rose-400 transition-colors duration-200 focus-ring"
                            aria-label="Follow us on TikTok">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 012.31-4.64 2.93 2.93 0 01.88.13V9.4a6.84 6.84 0 00-.88-.05A6.33 6.33 0 005 20.1a6.34 6.34 0 0010.86-4.43v-7a8.16 8.16 0 004.77 1.52v-3.4a4.85 4.85 0 01-1-.1z"/>
                            </svg>
                        </a>
                        <a href="https://wa.me/256772054361"  target="_blank"
                           class="text-gray-400 hover:text-rose-600 dark:hover:text-rose-400 transition-colors duration-200 focus-ring"
                           aria-label="Find us on WhatsApp">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.465 3.488"></path>
                            </svg>
                        </a>
                    </div>
                </div> 
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button x-data="{ 
                show: false,
                scrollToTop() {
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                }
            }"
            x-init="window.addEventListener('scroll', () => { show = window.pageYOffset > 300 })"
            x-show="show"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-95"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-95"
            @click="scrollToTop()"
            class="fixed bottom-6 right-6 z-40 p-3 bg-rose-600 hover:bg-rose-700 text-white rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-110 focus-ring"
            aria-label="Back to top">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
        </svg>
    </button>

    <!-- Loading Overlay for Page Transitions -->
    <div x-data="{ loading: false }" 
         x-init="
            // Show loading for page navigation
            document.addEventListener('beforeunload', () => { loading = true });
            // Hide loading when page is ready
            window.addEventListener('load', () => { loading = false });
         "
         x-show="loading"
         class="fixed inset-0 z-50 bg-white dark:bg-gray-900 flex items-center justify-center">
        <div class="text-center">
            <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-rose-600 mx-auto mb-4"></div>
            <p class="text-gray-600 dark:text-gray-400">Loading...</p>
        </div>
    </div>

    <!-- Toast Notifications Container -->
    <div x-data="{ notifications: [] }" 
         @notify.window="notifications.push($event.detail); setTimeout(() => notifications.shift(), 5000)"
         class="fixed top-20 right-4 z-50 space-y-2">
        <template x-for="notification in notifications" :key="notification.id">
            <div x-show="true"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform translate-x-full"
                 x-transition:enter-end="opacity-100 transform translate-x-0"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 transform translate-x-0"
                 x-transition:leave-end="opacity-0 transform translate-x-full"
                 :class="{
                     'bg-green-500': notification.type === 'success',
                     'bg-red-500': notification.type === 'error',
                     'bg-blue-500': notification.type === 'info',
                     'bg-yellow-500': notification.type === 'warning'
                 }"
                 class="p-4 rounded-lg text-white shadow-lg max-w-sm">
                <p x-text="notification.message"></p>
            </div>
        </template>
    </div>

    @stack('scripts')

    <!-- Analytics -->
    @if(config('app.env') === 'production')
        <!-- Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'GA_MEASUREMENT_ID');
        </script>
    @endif

    <!-- Structured Data for SEO -->
    
</body>

</html> 
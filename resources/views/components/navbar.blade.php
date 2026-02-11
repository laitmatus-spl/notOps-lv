<nav x-data="{ open: false, scrolled: false }"
     x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })"
     :class="scrolled ? 'bg-notops-dark/95 backdrop-blur-md border-b border-white/5 shadow-xl' : 'bg-transparent'"
     class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">

            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center group">
                <img src="/assets/images/logo.png"
                     alt="NotOps"
                     class="h-8 lg:h-9 w-auto opacity-90 group-hover:opacity-100 transition-opacity duration-200">
            </a>

            <!-- Desktop Nav -->
            <div class="hidden md:flex items-center gap-8">
                <a href="{{ route('home') }}#services" class="text-gray-400 hover:text-white text-sm font-medium transition-colors duration-200">Services</a>
                <a href="{{ route('home') }}#framework" class="text-gray-400 hover:text-white text-sm font-medium transition-colors duration-200">Framework</a>
                <a href="{{ route('home') }}#results" class="text-gray-400 hover:text-white text-sm font-medium transition-colors duration-200">Results</a>
                <a href="{{ route('home') }}#why-notops" class="text-gray-400 hover:text-white text-sm font-medium transition-colors duration-200">Why Us</a>
                <a href="{{ route('contact.index') }}" class="text-gray-400 hover:text-white text-sm font-medium transition-colors duration-200">Contact</a>
            </div>

            <!-- CTA & Auth -->
            <div class="hidden md:flex items-center gap-4">
                @auth
                    <a href="{{ route('dashboard') }}" class="text-gray-400 hover:text-white text-sm font-medium transition-colors">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-gray-400 hover:text-white text-sm font-medium transition-colors">Sign in</a>
                @endauth
                <a href="{{ route('contact.index') }}" class="btn-primary text-sm">
                    Start Your Audit
                </a>
            </div>

            <!-- Mobile menu button -->
            <button @click="open = !open" class="md:hidden p-2 rounded-lg text-gray-400 hover:text-white hover:bg-white/5 transition-colors">
                <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="md:hidden bg-notops-dark/98 backdrop-blur-xl border-b border-white/5">
        <div class="px-4 py-6 space-y-4">
            <a href="{{ route('home') }}#services" @click="open = false" class="block text-gray-300 hover:text-white text-base font-medium py-2 transition-colors">Services</a>
            <a href="{{ route('home') }}#framework" @click="open = false" class="block text-gray-300 hover:text-white text-base font-medium py-2 transition-colors">Framework</a>
            <a href="{{ route('home') }}#results" @click="open = false" class="block text-gray-300 hover:text-white text-base font-medium py-2 transition-colors">Results</a>
            <a href="{{ route('home') }}#why-notops" @click="open = false" class="block text-gray-300 hover:text-white text-base font-medium py-2 transition-colors">Why Us</a>
            <a href="{{ route('contact.index') }}" @click="open = false" class="block text-gray-300 hover:text-white text-base font-medium py-2 transition-colors">Contact</a>
            <div class="pt-4 border-t border-white/5">
                <a href="{{ route('contact.index') }}" class="btn-primary w-full text-center block">Start Your Audit</a>
            </div>
        </div>
    </div>
</nav>

<header class="sticky top-0 z-50 bg-blush/90 backdrop-blur border-b border-bash-ink/10">
    <nav class="mx-auto max-w-7xl px-6 lg:px-10 flex items-center justify-between h-20">

        {{-- Logo --}}
        <a href="{{ url('/') }}" class="flex items-center">
            <img src="{{ asset('images/logo-mark-ink.png') }}" alt="BASH MANILA" class="h-6 w-auto">
        </a>

        {{-- Desktop links --}}
        <div class="hidden md:flex items-center gap-9 font-body text-sm font-medium">
            <a href="#home" class="hover:text-bash-pink transition-colors">Home</a>
            <a href="#features" class="hover:text-bash-pink transition-colors">Features</a>
            <a href="#pricing" class="hover:text-bash-pink transition-colors">Pricing</a>
            <a href="#testimonials" class="hover:text-bash-pink transition-colors">Testimonials</a>
            <a href="#contact" class="hover:text-bash-pink transition-colors">Contact</a>
        </div>

        {{-- Desktop actions --}}
        <div class="hidden md:flex items-center gap-3">
            <x-button href="#sign-in" variant="ghost">Sign In</x-button>
            <x-button href="#get-started" variant="primary">Get Started</x-button>
        </div>

        {{-- Mobile toggle --}}
        <button id="nav-toggle" aria-expanded="false" aria-controls="mobile-menu"
                class="md:hidden inline-flex flex-col justify-center gap-1.5 w-9 h-9">
            <span class="block h-0.5 w-6 bg-bash-ink"></span>
            <span class="block h-0.5 w-6 bg-bash-ink"></span>
            <span class="block h-0.5 w-4 bg-bash-ink"></span>
        </button>
    </nav>

    {{-- Mobile menu --}}
    <div id="mobile-menu" class="hidden md:hidden border-t border-bash-ink/10 px-6 pb-6 pt-2 flex flex-col gap-4 font-body text-sm">
        <a href="#home" class="py-1">Home</a>
        <a href="#features" class="py-1">Features</a>
        <a href="#pricing" class="py-1">Pricing</a>
        <a href="#testimonials" class="py-1">Testimonials</a>
        <a href="#contact" class="py-1">Contact</a>
        <div class="flex gap-3 pt-2">
            <x-button href="#sign-in" variant="ghost">Sign In</x-button>
            <x-button href="#get-started" variant="primary">Get Started</x-button>
        </div>
    </div>
</header>

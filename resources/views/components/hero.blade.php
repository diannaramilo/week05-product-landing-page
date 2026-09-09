<section id="home" class="relative overflow-hidden pt-14 pb-20 lg:pt-16 lg:pb-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-10 grid lg:grid-cols-12 gap-12 lg:gap-6 items-center">

        {{-- Copy --}}
        <div class="lg:col-span-6 relative z-20">
            <p class="reveal font-body text-xs font-semibold tracking-wide uppercase text-bash-pink mb-5">
                BASH MANILA — Season 04
            </p>

            <h1 class="reveal font-display font-extrabold text-6xl sm:text-7xl lg:text-[5.5rem] leading-[0.92] text-bash-ink">
                the city,<br>carried.
            </h1>

            <p class="reveal max-w-md font-body text-bash-ink/70 text-base lg:text-lg mt-7">
                Structured silhouettes, magnetic chrome hardware, and reflective stitching —
                bags made for Manila traffic, night markets, and everything after dark.
            </p>

            <div class="reveal flex flex-wrap gap-3 mt-8">
                <x-button href="#pricing" variant="primary">Shop the drop</x-button>
                <x-button href="#features" variant="outline">See what's inside</x-button>
            </div>
        </div>

        {{-- Product --}}
        <div class="lg:col-span-6 relative flex justify-center lg:justify-end">

            {{-- Soft color glow behind the bag, the one deliberate "wow" moment --}}
            <div class="absolute w-[26rem] h-[26rem] lg:w-[32rem] lg:h-[32rem] rounded-full bg-bash-pink/25 blur-[80px]"></div>

            {{-- Chrome accents, tucked against the bag rather than floating loose --}}
            <img src="{{ asset('images/chrome-blob-1.png') }}" alt=""
                 class="hidden sm:block absolute -top-10 right-0 lg:-right-14 w-56 lg:w-72 z-20 animate-float drop-shadow-xl" style="animation-delay:.3s">
            <img src="{{ asset('images/chrome-blob-2.png') }}" alt=""
                 class="hidden sm:block absolute -bottom-6 -left-6 lg:-left-16 w-44 lg:w-56 z-0 animate-float drop-shadow-xl" style="animation-delay:1.4s">

            <img src="{{ asset('images/hero-bag.png') }}"
                 alt="BASH MANILA structured tote"
                 class="reveal relative z-10 w-72 sm:w-96 lg:w-[30rem] -rotate-2 drop-shadow-2xl">

            {{-- Small floating detail chip — a real signal (season/drop), not decoration --}}
            <div class="reveal absolute bottom-2 sm:bottom-8 left-2 sm:left-4 lg:left-8 z-20 bg-white/90 backdrop-blur rounded-2xl pl-2 pr-4 py-2 flex items-center gap-3 shadow-lg shadow-bash-ink/10">
                <span class="w-9 h-9 rounded-full bg-bash-pink flex items-center justify-center text-white text-xs font-semibold flex-shrink-0">04</span>
                <div class="leading-tight">
                    <p class="font-display font-semibold text-xs text-bash-ink">Season 04 drop</p>
                    <p class="font-body text-[11px] text-bash-ink/50">Live now — while stocks last</p>
                </div>
            </div>
        </div>
    </div>
</section>
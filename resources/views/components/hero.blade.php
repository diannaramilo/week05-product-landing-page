<section id="home" class="relative overflow-hidden pt-14 pb-8 lg:pt-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">

        <p class="reveal font-body text-xs font-semibold tracking-wide uppercase text-bash-pink mb-4">
            BASH MANILA — Season 04
        </p>

        {{-- Oversized headline with the product image breaking through it --}}
        <div class="relative">
            <h1 class="reveal font-display font-extrabold text-[15vw] leading-[0.85] lg:text-[7.5rem] text-bash-ink select-none">
                the city,<br>carried.
            </h1>

            {{-- Floating chrome accents --}}
            <img src="{{ asset('images/chrome-blob-1.png') }}" alt=""
                 class="hidden lg:block absolute -top-6 right-[8%] w-24 animate-float" style="animation-delay:.3s">
            <img src="{{ asset('images/chrome-blob-2.png') }}" alt=""
                 class="hidden lg:block absolute bottom-0 left-[4%] w-16 animate-float" style="animation-delay:1.4s">

            {{-- Product shot, overlapping the type on desktop --}}
            <img src="{{ asset('images/hero-bag.png') }}"
                 alt="BASH MANILA structured tote in signature pink"
                 class="reveal relative z-10 mx-auto -mt-6 lg:-mt-24 w-64 sm:w-80 lg:w-[26rem] drop-shadow-2xl">
        </div>

        <div class="reveal mt-6 lg:mt-2 grid lg:grid-cols-[1fr_auto] gap-8 items-end">
            <p class="max-w-md font-body text-bash-ink/70 text-base lg:text-lg">
                Structured silhouettes, magnetic chrome hardware, and reflective stitching —
                bags made for Manila traffic, night markets, and everything after dark.
            </p>
            <div class="flex flex-wrap gap-3">
                <x-button href="#pricing" variant="primary">Shop the drop</x-button>
                <x-button href="#features" variant="outline">See what's inside</x-button>
            </div>
        </div>
    </div>
</section>

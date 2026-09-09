<section class="mx-auto max-w-7xl px-6 lg:px-10 py-24 lg:py-32">

    <div class="reveal flex flex-wrap items-end justify-between gap-4 mb-10">
        <h2 class="font-display font-extrabold text-4xl lg:text-5xl text-bash-ink">Our collections</h2>
        <x-button href="#pricing" variant="ghost">Browse all →</x-button>
    </div>

    {{-- Single items: rounded "blob" cards, each product floating on its
         own soft platform shadow. --}}
    <div class="grid sm:grid-cols-3 gap-5 lg:gap-6">

        <div class="reveal group tilt-card spotlight relative rounded-[2.5rem] bg-white border border-bash-ink/10 p-8 pt-7 flex flex-col items-center text-center overflow-hidden">
            <span class="absolute top-6 left-6 rounded-full bg-bash-ink text-blush text-[11px] font-semibold uppercase tracking-wide px-3 py-1">New</span>
            <div class="relative mt-8 mb-6 w-44 h-44 flex items-center justify-center">
                <span class="absolute bottom-2 w-28 h-6 bg-bash-ink/10 blur-xl rounded-full"></span>
                <img src="{{ asset('images/collection-tote.png') }}" alt="The Weekday Tote"
                     class="relative w-full h-full object-contain drop-shadow-xl transition-transform duration-500 group-hover:-translate-y-2">
            </div>
            <h3 class="font-display font-semibold text-lg text-bash-ink">The Weekday Tote</h3>
            <p class="font-body text-xs text-bash-ink/45 mt-1 mb-5">₱1,890</p>
            <x-button href="#" variant="outline">Learn more</x-button>
        </div>

        <div class="reveal group tilt-card spotlight relative rounded-[2.5rem] bg-white border border-bash-ink/10 p-8 pt-7 flex flex-col items-center text-center overflow-hidden">
            <span class="absolute top-6 left-6 rounded-full bg-bash-pink text-white text-[11px] font-semibold uppercase tracking-wide px-3 py-1">Bestseller</span>
            <div class="relative mt-8 mb-6 w-44 h-44 flex items-center justify-center">
                <span class="absolute bottom-2 w-28 h-6 bg-bash-ink/10 blur-xl rounded-full"></span>
                <img src="{{ asset('images/collection-luggage.png') }}" alt="The Carry-On"
                     class="relative w-full h-full object-contain drop-shadow-xl transition-transform duration-500 group-hover:-translate-y-2">
            </div>
            <h3 class="font-display font-semibold text-lg text-bash-ink">The Carry-On</h3>
            <p class="font-body text-xs text-bash-ink/45 mt-1 mb-5">₱4,250</p>
            <x-button href="#" variant="outline">Learn more</x-button>
        </div>

        <div class="reveal group tilt-card spotlight relative rounded-[2.5rem] bg-white border border-bash-ink/10 p-8 pt-7 flex flex-col items-center text-center overflow-hidden">
            <span class="absolute top-6 left-6 rounded-full bg-bash-coral text-white text-[11px] font-semibold uppercase tracking-wide px-3 py-1">Limited</span>
            <div class="relative mt-8 mb-6 w-44 h-44 flex items-center justify-center">
                <span class="absolute bottom-2 w-28 h-6 bg-bash-ink/10 blur-xl rounded-full"></span>
                <img src="{{ asset('images/collection-backpack.png') }}" alt="The Daily Backpack"
                     class="relative w-full h-full object-contain drop-shadow-xl transition-transform duration-500 group-hover:-translate-y-2">
            </div>
            <h3 class="font-display font-semibold text-lg text-bash-ink">The Daily Backpack</h3>
            <p class="font-body text-xs text-bash-ink/45 mt-1 mb-5">₱2,450</p>
            <x-button href="#" variant="outline">Learn more</x-button>
        </div>

    </div>

    {{-- Curated sets: the grouped shots get a heavier, darker treatment
         so they read as a step up from a single item, not more of the same. --}}
    <div class="grid sm:grid-cols-2 gap-5 lg:gap-6 mt-5 lg:mt-6">

        <div class="reveal group tilt-card spotlight spotlight-dark relative rounded-[2.5rem] bg-bash-ink text-blush p-8 flex flex-col sm:flex-row items-center gap-6 overflow-hidden">
            <div class="relative w-36 h-36 sm:w-40 sm:h-40 flex-shrink-0 flex items-center justify-center">
                <span class="absolute bottom-1 w-24 h-5 bg-black/40 blur-lg rounded-full"></span>
                <img src="{{ asset('images/collection-pouch-set.png') }}" alt="The Organizer Set"
                     class="relative w-full h-full object-contain drop-shadow-xl transition-transform duration-500 group-hover:-translate-y-1.5">
            </div>
            <div class="text-center sm:text-left">
                <p class="font-body text-xs uppercase tracking-wide text-blush/45 mb-2">Curated set</p>
                <h3 class="font-display font-semibold text-xl mb-2">The Organizer Set</h3>
                <p class="font-body text-sm text-blush/60 mb-5">Six pouches, one system — pack once, find everything.</p>
                <x-button href="#" variant="primary">Shop the set</x-button>
            </div>
        </div>

        <div class="reveal group tilt-card spotlight spotlight-dark relative rounded-[2.5rem] bg-bash-ink text-blush p-8 flex flex-col sm:flex-row items-center gap-6 overflow-hidden">
            <div class="relative w-36 h-36 sm:w-40 sm:h-40 flex-shrink-0 flex items-center justify-center">
                <span class="absolute bottom-1 w-24 h-5 bg-black/40 blur-lg rounded-full"></span>
                <img src="{{ asset('images/collection-luggage-set.png') }}" alt="The Expedition Set"
                     class="relative w-full h-full object-contain drop-shadow-xl transition-transform duration-500 group-hover:-translate-y-1.5">
            </div>
            <div class="text-center sm:text-left">
                <p class="font-body text-xs uppercase tracking-wide text-blush/45 mb-2">Curated set</p>
                <h3 class="font-display font-semibold text-xl mb-2">The Expedition Set</h3>
                <p class="font-body text-sm text-blush/60 mb-5">Carry-ons, totes, and duffels built to move as one.</p>
                <x-button href="#" variant="primary">Shop the set</x-button>
            </div>
        </div>

    </div>
</section>
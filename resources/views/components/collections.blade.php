<section class="mx-auto max-w-7xl px-6 lg:px-10 py-24 lg:py-32">

    <div class="reveal flex flex-wrap items-end justify-between gap-4 mb-10">
        <h2 class="font-display font-extrabold text-4xl lg:text-5xl text-bash-ink">Our collections</h2>
        <x-button href="#pricing" variant="ghost">Browse all →</x-button>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-5">

        {{-- Anchor tile --}}
        <div class="reveal col-span-2 row-span-2 rounded-3xl overflow-hidden bg-bash-ink/5 aspect-square lg:aspect-auto">
            <img src="{{ asset('images/collection-1.png') }}" alt="BASH Weekday Backpack"
                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
        </div>

        <div class="reveal rounded-3xl overflow-hidden bg-bash-ink/5 aspect-square">
            <img src="{{ asset('images/collection-2.png') }}" alt="BASH On-The-Go tote, Dune"
                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
        </div>

        <div class="reveal rounded-3xl overflow-hidden bg-bash-ink/5 aspect-square">
            <img src="{{ asset('images/collection-3.png') }}" alt="BASH Carry-On Luggage"
                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
        </div>

        <div class="reveal rounded-3xl overflow-hidden bg-bash-ink/5 aspect-square">
            <img src="{{ asset('images/collection-4.png') }}" alt="BASH pouch collection, grouped"
                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
        </div>

        <div class="reveal rounded-3xl overflow-hidden bg-bash-ink/5 aspect-square">
            <img src="{{ asset('images/collection-5.png') }}" alt="BASH luggage collection, grouped"
                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
        </div>

        {{-- Wide closer --}}
        <div class="reveal col-span-2 lg:col-span-4 rounded-3xl overflow-hidden bg-bash-ink/5 aspect-[3/1] lg:aspect-[5/1]">
            <img src="{{ asset('images/collection-6.png') }}" alt="Weekday Tote and Backpack range"
                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
        </div>

    </div>
</section>

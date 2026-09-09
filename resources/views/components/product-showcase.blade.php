<section class="mx-auto max-w-7xl px-6 lg:px-10 py-24 lg:py-32">

    <div class="reveal flex flex-wrap items-end justify-between gap-6 mb-12">
        <div class="max-w-xl">
            <h2 class="font-display font-extrabold text-4xl lg:text-5xl text-bash-ink leading-[1.05]">
                Every drop, tracked.<br>Every bag, authenticated.
            </h2>
            <p class="font-body text-bash-ink/65 mt-4">
                The BASH app is where the bag stops being just a bag — scan it, track it, repair it.
            </p>
        </div>

        {{-- Desktop nav — mobile relies on swipe --}}
        <div class="hidden sm:flex gap-2">
            <button type="button" data-showcase-prev aria-label="Previous photo"
                    class="w-11 h-11 rounded-full border border-bash-ink/15 flex items-center justify-center hover:border-bash-pink hover:text-bash-pink transition-colors">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <button type="button" data-showcase-next aria-label="Next photo"
                    class="w-11 h-11 rounded-full border border-bash-ink/15 flex items-center justify-center hover:border-bash-pink hover:text-bash-pink transition-colors">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            </button>
        </div>
    </div>

    {{-- Filmstrip: swipe or use the arrows above. Each photo carries its
         own caption, so the copy is read alongside the image it's about
         instead of sitting apart in a separate colored block. --}}
    <div data-showcase-track
         class="reveal flex gap-5 overflow-x-auto snap-x snap-mandatory pb-2 -mx-6 px-6 lg:mx-0 lg:px-0 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">

        <figure data-showcase-slide class="snap-center shrink-0 w-[82%] sm:w-[60%] lg:w-[68%]">
            <div class="tilt-card spotlight compass-track relative rounded-3xl overflow-hidden aspect-[4/3] lg:aspect-[16/10]">
                <img src="{{ asset('images/expedition-terrain.webp') }}" alt="BASH MANILA campaign — made for every terrain"
                     class="w-full h-full object-cover">
                <div class="expedition-compass" aria-hidden="true">
                    <svg class="compass-needle w-6 h-6" viewBox="0 0 24 24" fill="none">
                        <path d="M12 3 L15.5 12 L12 10.7 L8.5 12 Z" fill="#F0567A"/>
                        <path d="M12 21 L8.5 12 L12 13.3 L15.5 12 Z" fill="#FBF0EA"/>
                    </svg>
                </div>
            </div>
            <figcaption class="mt-5 font-body text-bash-ink/70 text-sm max-w-sm">
                <span class="font-display font-semibold text-bash-ink">Live drop countdowns.</span>
                Know the second a restock goes live, before it sells out.
            </figcaption>
        </figure>

        <figure data-showcase-slide class="snap-center shrink-0 w-[82%] sm:w-[60%] lg:w-[68%]">
            <div class="tilt-card spotlight rounded-3xl overflow-hidden aspect-[4/3] lg:aspect-[16/10]">
                <img src="{{ asset('images/expedition-awaits.webp') }}" alt="BASH MANILA campaign — an expedition awaits"
                     class="w-full h-full object-cover">
            </div>
            <figcaption class="mt-5 font-body text-bash-ink/70 text-sm max-w-sm">
                <span class="font-display font-semibold text-bash-ink">Authenticity QR on every bag.</span>
                One scan confirms it's real and pulls up its full history.
            </figcaption>
        </figure>

        <figure data-showcase-slide class="snap-center shrink-0 w-[82%] sm:w-[60%] lg:w-[68%]">
            <div class="tilt-card spotlight rounded-3xl overflow-hidden aspect-[4/3] lg:aspect-[16/10]">
                <img src="{{ asset('images/campaign-duo-bags.png') }}" alt="BASH MANILA duffel bags, campaign shot"
                     class="w-full h-full object-cover object-top">
            </div>
            <figcaption class="mt-5 font-body text-bash-ink/70 text-sm max-w-sm">
                <span class="font-display font-semibold text-bash-ink">One-tap repairs, Manila-fast tracking.</span>
                Request a fix or trace an order without leaving the app.
            </figcaption>
        </figure>

    </div>

    {{-- Progress dots --}}
    <div class="flex items-center gap-2 mt-8">
        <button type="button" data-showcase-dot aria-label="Show photo 1" aria-current="true"
                class="h-1.5 rounded-full bg-bash-ink w-8 transition-all duration-300"></button>
        <button type="button" data-showcase-dot aria-label="Show photo 2" aria-current="false"
                class="h-1.5 rounded-full bg-bash-ink/20 w-1.5 transition-all duration-300"></button>
        <button type="button" data-showcase-dot aria-label="Show photo 3" aria-current="false"
                class="h-1.5 rounded-full bg-bash-ink/20 w-1.5 transition-all duration-300"></button>
    </div>
</section>
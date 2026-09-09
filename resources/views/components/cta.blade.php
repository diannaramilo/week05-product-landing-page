<section id="get-started" class="mx-auto max-w-7xl px-6 lg:px-10 pb-24 lg:pb-32">
    <div class="reveal relative overflow-hidden rounded-3xl bg-bash-ink px-8 py-16 lg:py-20 text-center">

        <img src="{{ asset('images/chrome-blob-1.png') }}" alt=""
             class="hidden lg:block absolute -top-10 -left-6 w-32 opacity-90 animate-float">
        <img src="{{ asset('images/chrome-blob-2.png') }}" alt=""
             class="hidden lg:block absolute -bottom-8 right-4 w-24 opacity-90 animate-float" style="animation-delay:1s">

        <h2 class="font-display font-extrabold text-4xl lg:text-5xl text-blush max-w-2xl mx-auto leading-[1.05]">
            First dibs on the next drop.
        </h2>
        <p class="font-body text-blush/60 mt-4 max-w-md mx-auto">
            Join BASH Club free — early access, member pricing, and no spam. Ever.
        </p>

        <form class="mt-8 flex flex-col sm:flex-row gap-3 max-w-md mx-auto" action="#" method="POST">
            <label for="cta-email" class="sr-only">Email address</label>
            <input id="cta-email" type="email" required placeholder="you@email.com"
                   class="flex-1 rounded-full px-5 py-3 bg-white/10 border border-white/15 text-blush placeholder:text-blush/40 font-body text-sm focus:outline-none focus:border-bash-pink">
            <x-button href="#" variant="primary">Get Started</x-button>
        </form>

        <p class="font-body text-xs text-blush/40 mt-6">
            Prefer to talk it through? <a href="#contact" class="underline hover:text-bash-pink-soft">Contact sales</a>
            or <a href="#pricing" class="underline hover:text-bash-pink-soft">start with a free Street membership</a>.
        </p>
    </div>
</section>

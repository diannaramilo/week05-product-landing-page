<section class="mx-auto max-w-7xl px-6 lg:px-10 py-24 lg:py-32">

    <div class="reveal max-w-xl mb-14">
        <h2 class="font-display font-extrabold text-4xl lg:text-5xl text-bash-ink leading-[1.05]">
            Every drop, tracked.<br>Every bag, authenticated.
        </h2>
        <p class="font-body text-bash-ink/65 mt-4">
            The BASH app is where the bag stops being just a bag — scan it, track it, repair it.
        </p>
    </div>

    <div class="grid lg:grid-cols-12 gap-6">

        {{-- Product screenshot: wide lifestyle shot --}}
        <div class="reveal lg:col-span-7 rounded-3xl overflow-hidden bg-bash-ink/5 aspect-[4/3] lg:aspect-auto lg:h-[420px]">
            <img src="{{ asset('images/product-screenshot.png') }}" alt="BASH MANILA campaign — made for every terrain"
                 class="w-full h-full object-cover">
        </div>

        {{-- Mobile view, phone frame --}}
        <div class="reveal lg:col-span-2 rounded-3xl bg-bash-ink flex items-center justify-center py-8">
            <div class="phone-frame w-32 overflow-hidden bg-white">
                <img src="{{ asset('images/app-screen.png') }}" alt="BASH app mobile screen"
                     class="w-full h-auto">
            </div>
        </div>

        {{-- Key highlights --}}
        <div class="reveal lg:col-span-3 rounded-3xl bg-bash-pink text-white p-7 flex flex-col justify-center gap-5">
            <p class="font-body text-xs font-semibold uppercase tracking-wide text-white/80">Key highlights</p>
            <ul class="space-y-4 font-display font-semibold text-base leading-snug">
                <li>Live drop countdowns</li>
                <li>Authenticity QR on every bag</li>
                <li>One-tap repair requests</li>
                <li>Order tracking, Manila-fast</li>
            </ul>
        </div>

        {{-- Dashboard preview --}}
        <div class="reveal lg:col-span-12 rounded-3xl overflow-hidden bg-bash-ink/5 h-[260px] lg:h-[380px]">
            <img src="{{ asset('images/dashboard-preview.png') }}" alt="BASH order-tracking dashboard preview"
                 class="w-full h-full object-cover object-top">
        </div>

    </div>
</section>

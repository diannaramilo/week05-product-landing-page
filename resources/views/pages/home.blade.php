@extends('layouts.app')

@section('title', 'BASH MANILA — Bags built for the bash')

@section('content')

    <x-hero />

    <x-marquee text="NEW DROP — SEASON 04" />

    {{-- Features --}}
    <section id="features" class="mx-auto max-w-7xl px-6 lg:px-10 py-24 lg:py-32">
        <div class="reveal max-w-xl mb-14">
            <h2 class="font-display font-extrabold text-4xl lg:text-5xl text-bash-ink leading-[1.05]">
                Built to survive Manila.
            </h2>
            <p class="font-body text-bash-ink/65 mt-4">
                Six details that separate a BASH bag from everything else in your closet.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">

            <x-feature-card title="Vegan Leather Shell" description="Cruelty-free, scratch-resistant, and wipes clean after every jeepney ride.">
                <x-slot:icon>
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M4 7l8-4 8 4v10l-8 4-8-4V7z"/></svg>
                </x-slot:icon>
            </x-feature-card>

            <x-feature-card title="Magnetic Chrome Hardware" description="Snap closures that click shut in one motion — no fumbling at the register.">
                <x-slot:icon>
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="7"/><path stroke-linecap="round" d="M12 9v3l2 2"/></svg>
                </x-slot:icon>
            </x-feature-card>

            <x-feature-card title="Hidden Laptop Sleeve" description="A padded 14-inch sleeve tucked against your back, out of sight and out of reach.">
                <x-slot:icon>
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><rect x="4" y="5" width="16" height="11" rx="1.5"/><path stroke-linecap="round" d="M2 19h20"/></svg>
                </x-slot:icon>
            </x-feature-card>

            <x-feature-card title="Reflective Stitching" description="Seams that catch headlights, traffic-tested on EDSA after dark.">
                <x-slot:icon>
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M4 12h4l2-6 4 12 2-6h4"/></svg>
                </x-slot:icon>
            </x-feature-card>

            <x-feature-card title="Interchangeable Straps" description="Sling, tote, or crossbody — swap the strap in one click, no tools needed.">
                <x-slot:icon>
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M6 4v16M18 4v16M6 12h12"/></svg>
                </x-slot:icon>
            </x-feature-card>

            <x-feature-card title="Lifetime Repair Promise" description="Torn strap, broken zip, loose stitch — we fix it, free, for as long as you own it.">
                <x-slot:icon>
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21s-7-4.35-9-9.5C1.5 6.5 5 4 8 6c1.5 1 2.5 2 4 2s2.5-1 4-2c3-2 6.5.5 5 5.5-2 5.15-9 9.5-9 9.5z"/></svg>
                </x-slot:icon>
            </x-feature-card>

        </div>
    </section>

    <x-product-showcase />

    <x-collections />

    {{-- Pricing --}}
    <section id="pricing" class="mx-auto max-w-7xl px-6 lg:px-10 py-24 lg:py-32">
        <div class="reveal max-w-xl mb-14">
            <h2 class="font-display font-extrabold text-4xl lg:text-5xl text-bash-ink leading-[1.05]">
                Join BASH Club.
            </h2>
            <p class="font-body text-bash-ink/65 mt-4">
                Membership pays for itself on your first restock. Cancel anytime.
            </p>
        </div>

        <div class="grid lg:grid-cols-3 gap-6 items-stretch">

            <x-pricing-card plan="Street" price="Free" :features="[
                'Newsletter early access',
                'Member pricing on totes',
                'Birthday surprise',
            ]" />

            <x-pricing-card plan="Insider" price="₱499" period="year" :featured="true" :features="[
                'Everything in Street',
                'Free shipping, always',
                '48-hour early drop access',
                'Priority customer care',
            ]" />

            <x-pricing-card plan="Icon" price="₱1,999" period="year" :features="[
                'Everything in Insider',
                'One free repair per year',
                'Invites to Manila pop-ups',
                'Personalized embossing',
            ]" />

        </div>
    </section>

    {{-- Testimonials --}}
    <section id="testimonials" class="bg-bash-ink/5">
        <div class="mx-auto max-w-7xl px-6 lg:px-10 py-24 lg:py-32">
            <div class="reveal max-w-xl mb-14">
                <h2 class="font-display font-extrabold text-4xl lg:text-5xl text-bash-ink leading-[1.05]">
                    From closets across Manila.
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <x-testimonial-card
                    name="Ella Ramos"
                    position="Graphic Designer, Makati"
                    review="The chrome clasp still feels new after a year of commuting. It's the first bag that's survived my backpack rotation." />

                <x-testimonial-card
                    name="Miguel Santos"
                    position="Barista, QC"
                    review="Reflective stitching sounds gimmicky until a jeep almost clips you and the driver actually sees your bag first." />

                <x-testimonial-card
                    name="Dani Cruz"
                    position="Architecture Student"
                    review="Swapped the strap from tote to crossbody before my thesis defense. Small thing, but it made the bag feel made for me." />
            </div>
        </div>
    </section>

    <x-cta />

@endsection

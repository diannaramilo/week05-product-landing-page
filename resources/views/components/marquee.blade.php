@props(['text' => 'NEW DROP'])

<div class="bg-bash-ink py-4 overflow-hidden">
    <div class="flex whitespace-nowrap animate-marquee">
        @for ($i = 0; $i < 8; $i++)
            <span class="font-display font-extrabold text-2xl lg:text-3xl text-blush mx-6 flex items-center gap-6">
                {{ $text }}
                <span class="w-2 h-2 rounded-full bg-bash-pink inline-block"></span>
            </span>
        @endfor
    </div>
</div>

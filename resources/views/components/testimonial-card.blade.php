@props(['name' => '', 'position' => '', 'review' => ''])

@php
    // Build a two-letter monogram from the customer's name — no photo asset needed.
    $words = explode(' ', trim($name));
    $initials = strtoupper(($words[0][0] ?? '') . ($words[1][0] ?? ''));
@endphp

<figure class="reveal rounded-3xl bg-white border border-bash-ink/10 p-7 h-full flex flex-col">
    <blockquote class="font-body text-bash-ink/80 text-sm leading-relaxed flex-1">
        "{{ $review }}"
    </blockquote>
    <figcaption class="flex items-center gap-3 mt-6 pt-6 border-t border-bash-ink/10">
        <span class="w-11 h-11 rounded-full bg-bash-pink/10 text-bash-pink font-display font-semibold text-sm flex items-center justify-center flex-shrink-0">
            {{ $initials }}
        </span>
        <div>
            <p class="font-display font-semibold text-sm text-bash-ink">{{ $name }}</p>
            <p class="font-body text-xs text-bash-ink/50">{{ $position }}</p>
        </div>
    </figcaption>
</figure>

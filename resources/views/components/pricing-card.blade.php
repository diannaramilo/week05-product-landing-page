@props([
    'plan' => '',
    'price' => '',
    'period' => '',
    'features' => [],
    'featured' => false,
])

<div @class([
    'reveal rounded-3xl p-8 flex flex-col h-full transition-transform duration-300 hover:-translate-y-1',
    'bg-bash-ink text-blush scale-[1.03] shadow-2xl shadow-bash-ink/20' => $featured,
    'bg-white border border-bash-ink/10 text-bash-ink' => !$featured,
])>
    <p @class(['font-body text-xs font-semibold uppercase tracking-wide mb-3', 'text-bash-pink-soft' => $featured, 'text-bash-pink' => !$featured])>
        {{ $plan }}
    </p>

    <div class="flex items-end gap-1 mb-6">
        <span class="font-display font-extrabold text-4xl">{{ $price }}</span>
        @if($period)
            <span @class(['font-body text-sm mb-1', 'text-blush/60' => $featured, 'text-bash-ink/50' => !$featured])>/{{ $period }}</span>
        @endif
    </div>

    <ul class="space-y-3 mb-8 flex-1">
        @foreach($features as $feature)
            <li class="flex items-start gap-3 font-body text-sm">
                <svg class="w-4 h-4 mt-0.5 flex-shrink-0 {{ $featured ? 'text-bash-pink-soft' : 'text-bash-pink' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                </svg>
                <span @class(['text-blush/85' => $featured, 'text-bash-ink/75' => !$featured])>{{ $feature }}</span>
            </li>
        @endforeach
    </ul>

    <x-button href="#join" :variant="$featured ? 'primary' : 'outline'" class="w-full">
        Join {{ $plan }}
    </x-button>
</div>

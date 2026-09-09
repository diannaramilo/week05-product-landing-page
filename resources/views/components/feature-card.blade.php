@props([
    'title' => '',
    'description' => '',
    'size' => 'sm', // 'lg' for the big bento tile, 'sm' for everything else
    'dark' => false,
])

@php
$span = $size === 'lg' ? 'lg:col-span-2 lg:row-span-2' : '';
@endphp

<div @class([
    'reveal group relative spotlight rounded-3xl overflow-hidden p-7 flex flex-col justify-between transition-all duration-300 hover:-translate-y-1',
    $span,
    'lg:p-9' => $size === 'lg',
    'spotlight-dark bg-bash-ink text-blush' => $dark,
    'bg-white text-bash-ink border border-bash-ink/10 hover:border-bash-pink' => !$dark,
])>
    <div class="w-11 h-11 rounded-full flex items-center justify-center mb-5 transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6 {{ $dark ? 'bg-blush/10 text-bash-pink-soft' : 'bg-bash-pink/10 text-bash-pink' }}">
        {{ $icon ?? '' }}
    </div>
    <div>
        <h3 @class([
            'font-display font-semibold mb-2',
            'text-2xl' => $size === 'lg',
            'text-lg' => $size !== 'lg',
        ])>{{ $title }}</h3>
        <p @class([
            'font-body text-sm leading-relaxed',
            'text-blush/60' => $dark,
            'text-bash-ink/65' => !$dark,
        ])>{{ $description }}</p>
    </div>
</div>
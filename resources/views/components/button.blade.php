@props([
    'href' => '#',
    'variant' => 'primary', // primary | coral | ghost | dark
])

@php
$base = 'inline-flex items-center justify-center gap-2 rounded-full px-6 py-3 text-sm font-semibold font-body transition-all duration-200 whitespace-nowrap';

$variants = [
    'primary' => 'bg-bash-pink text-white hover:bg-bash-ink hover:-translate-y-0.5',
    'coral'   => 'bg-bash-coral text-white hover:bg-bash-ink hover:-translate-y-0.5',
    'ghost'   => 'text-bash-ink hover:text-bash-pink',
    'dark'    => 'bg-bash-ink text-blush hover:bg-bash-pink',
    'outline' => 'border border-bash-ink/20 text-bash-ink hover:border-bash-pink hover:text-bash-pink',
];

$classes = $base . ' ' . ($variants[$variant] ?? $variants['primary']);
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

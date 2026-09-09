@props(['title' => '', 'description' => ''])

<div class="reveal group rounded-3xl border border-bash-ink/10 bg-white/60 p-7 transition-all duration-300 hover:border-bash-pink hover:bg-white">
    <div class="w-11 h-11 rounded-full bg-bash-pink/10 flex items-center justify-center text-bash-pink mb-5 transition-colors duration-300 group-hover:bg-bash-pink group-hover:text-white">
        {{ $icon ?? '' }}
    </div>
    <h3 class="font-display font-semibold text-lg text-bash-ink mb-2">{{ $title }}</h3>
    <p class="font-body text-sm text-bash-ink/65 leading-relaxed">{{ $description }}</p>
</div>

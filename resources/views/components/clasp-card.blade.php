<div id="clasp-card" role="button" tabindex="0" aria-pressed="false"
     class="reveal group relative spotlight rounded-3xl overflow-hidden bg-white border border-bash-ink/10 p-7 flex flex-col justify-between cursor-pointer select-none transition-all duration-300 hover:-translate-y-1 hover:border-bash-pink focus:outline-none focus-visible:ring-2 focus-visible:ring-bash-pink">

    <div>
        <div class="w-11 h-11 rounded-full bg-bash-pink/10 flex items-center justify-center text-bash-pink mb-5 transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="7"/><path stroke-linecap="round" d="M12 9v3l2 2"/></svg>
        </div>
        <h3 class="font-display font-semibold text-lg text-bash-ink mb-2">Magnetic Chrome Hardware</h3>
        <p class="font-body text-sm text-bash-ink/65 leading-relaxed">Snap closures that click shut in one motion — no fumbling at the register.</p>
    </div>

    {{-- The demo: two chrome halves that actually slide together on click,
         so the feature is shown rather than just described. --}}
    <div class="mt-7 flex items-center justify-center gap-0.5 h-12">
        <span id="clasp-left" class="block w-11 h-9 rounded-l-xl bg-bash-chrome"></span>
        <span id="clasp-right" class="block w-11 h-9 rounded-r-xl bg-bash-chrome"></span>
    </div>
    <p id="clasp-label" class="text-center font-body text-[11px] uppercase tracking-wide text-bash-ink/40 mt-3">Tap to click it shut</p>
</div>
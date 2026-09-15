<header class="fixed inset-x-0 top-0 z-50 border-b border-white/10 bg-slate-950/80 backdrop-blur-xl">
    <nav class="mx-auto flex h-20 max-w-7xl items-center justify-between px-6 lg:px-8"
        aria-label="Navigație principală">

        <!-- Logo -->
        <a href="./index.php" class="group flex items-center gap-3" aria-label="Spike - Acasă">
            <span class="flex size-10 items-center justify-center rounded-xl
                 bg-gradient-to-br from-spike-400 to-spike-600
                 font-bold text-slate-950 shadow-lg shadow-spike-500/20">
                S
            </span>

            <span class="text-lg font-bold tracking-tight">
                spike<span class="text-spike-400">.</span>
            </span>
        </a>


        <!-- Desktop menu -->
        <div class="hidden items-center gap-10 md:flex">

            <a href="./servicii.php" class="text-sm font-medium text-slate-300 transition-colors
                 hover:text-white focus-visible:outline-2
                 focus-visible:outline-offset-4 focus-visible:outline-spike-400">
                Servicii
            </a>

            <a href="./about.php" class="text-sm font-medium text-slate-300 transition-colors
                 hover:text-white focus-visible:outline-2
                 focus-visible:outline-offset-4 focus-visible:outline-spike-400">
                Despre noi
            </a>

            <a href="./contact.php" class="text-sm font-medium text-slate-300 transition-colors
                 hover:text-white focus-visible:outline-2
                 focus-visible:outline-offset-4 focus-visible:outline-spike-400">
                Contact
            </a>

        </div>


        <!-- CTA -->
        <a href="#contact" class="hidden rounded-full bg-white px-5 py-2.5 text-sm
               font-semibold text-slate-950 transition-all
               hover:bg-spike-400 hover:shadow-lg
               hover:shadow-spike-500/20 md:inline-flex">
            Solicită o discuție
            <span class="ml-2">→</span>
        </a>


        <!-- Mobile menu button -->
        <button type="button" class="inline-flex size-10 items-center justify-center rounded-lg
               border border-white/10 bg-white/5 text-slate-200
               transition hover:bg-white/10 md:hidden" aria-label="Deschide meniul" aria-expanded="false">
            <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

    </nav>
</header>
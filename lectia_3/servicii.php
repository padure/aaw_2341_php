<!DOCTYPE html>
<html lang="ro">
<?php include "./partials/head.php"; ?>

<body class="bg-slate-950 text-white antialiased">

    <!-- NAVIGATION -->
    <?php include "./partials/menu.php"; ?>

    <!-- SERVICII -->
    <main>
        <section id="servicii" class="scroll-mt-20 border-t border-white/5 py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">

                <span class="text-sm font-semibold text-spike-400">
                    SERVICII
                </span>

                <h2 class="mt-4 max-w-2xl text-4xl font-bold tracking-tight">
                    Mai puțină muncă manuală.
                    <span class="text-slate-500">
                        Mai multă valoare.
                    </span>
                </h2>

                <div class="mt-12 grid gap-5 md:grid-cols-3">

                    <article class="rounded-2xl border border-white/10
                   bg-white/[0.03] p-7 transition
                   hover:-translate-y-1 hover:border-spike-400/30">
                        <div class="mb-8 text-3xl">⚡</div>
                        <h3 class="text-xl font-semibold">
                            Automatizarea proceselor
                        </h3>
                        <p class="mt-3 text-sm leading-6 text-slate-400">
                            Eliminăm task-urile repetitive și conectăm procesele
                            într-un flux automat.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-white/10
                   bg-white/[0.03] p-7 transition
                   hover:-translate-y-1 hover:border-spike-400/30">
                        <div class="mb-8 text-3xl">◈</div>
                        <h3 class="text-xl font-semibold">
                            Digitalizarea afacerii
                        </h3>
                        <p class="mt-3 text-sm leading-6 text-slate-400">
                            Transformăm procesele tradiționale în experiențe
                            digitale eficiente și scalabile.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-white/10
                   bg-white/[0.03] p-7 transition
                   hover:-translate-y-1 hover:border-spike-400/30">
                        <div class="mb-8 text-3xl">↗</div>
                        <h3 class="text-xl font-semibold">
                            Integrare & optimizare
                        </h3>
                        <p class="mt-3 text-sm leading-6 text-slate-400">
                            Facem sistemele existente să lucreze împreună,
                            mai simplu și mai eficient.
                        </p>
                    </article>

                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <?php include "./partials/footer.php"; ?>

</body>

</html>
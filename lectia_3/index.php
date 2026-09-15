<!DOCTYPE html>
<html lang="ro">
<?php include_once "./partials/head.php"; ?>

<body class="bg-slate-950 text-white antialiased">

  <!-- NAVIGATION -->
  <?php include_once "./partials/menu.php"; ?>


  <!-- HERO -->
  <main id="acasa">

    <section class="relative isolate overflow-hidden pt-20">

      <div
        class="absolute left-1/2 top-0 -z-10 size-[700px]
               -translate-x-1/2 rounded-full
               bg-spike-500/10 blur-3xl"
      ></div>

      <div
        class="mx-auto grid min-h-[calc(100vh-5rem)]
               max-w-7xl items-center gap-16 px-6 py-24
               lg:grid-cols-2 lg:px-8"
      >

        <div>
          <div
            class="mb-6 inline-flex items-center gap-2 rounded-full
                   border border-spike-400/20 bg-spike-400/10
                   px-3 py-1.5 text-xs font-medium text-spike-400"
          >
            <span class="size-1.5 rounded-full bg-spike-400"></span>
            Automatizare & digitalizare
          </div>

          <h1
            class="max-w-4xl text-5xl font-bold tracking-tight
                   text-white sm:text-6xl lg:text-7xl"
          >
            Afacerea ta.
            <span class="text-spike-400">
              Automatizată.
            </span>
          </h1>

          <p
            class="mt-7 max-w-xl text-lg leading-8 text-slate-400"
          >
            Transformăm procesele repetitive în sisteme inteligente,
            pentru ca echipa ta să se concentreze pe ceea ce contează
            cu adevărat.
          </p>

          <div class="mt-10 flex flex-wrap gap-4">

            <a
              href="#contact"
              class="rounded-full bg-spike-500 px-6 py-3.5
                     font-semibold text-white transition
                     hover:bg-spike-400 hover:shadow-xl
                     hover:shadow-spike-500/20"
            >
              Hai să automatizăm →
            </a>

            <a
              href="#servicii"
              class="rounded-full border border-white/10
                     bg-white/5 px-6 py-3.5 font-semibold
                     text-white transition hover:bg-white/10"
            >
              Vezi serviciile
            </a>

          </div>
        </div>


        <!-- Visual -->
        <div class="relative hidden lg:block">

          <div
            class="rounded-3xl border border-white/10
                   bg-white/[0.03] p-4 shadow-2xl
                   shadow-black/30 backdrop-blur"
          >
            <div
              class="rounded-2xl border border-white/10
                     bg-slate-900 p-6"
            >

              <div class="mb-8 flex items-center justify-between">
                <div>
                  <p class="text-xs text-slate-500">
                    Business automation
                  </p>
                  <p class="mt-1 font-semibold">
                    Procese optimizate
                  </p>
                </div>

                <span
                  class="rounded-full bg-emerald-400/10 px-3 py-1
                         text-xs font-medium text-emerald-400"
                >
                  +42%
                </span>
              </div>

              <div class="space-y-4">

                <div
                  class="rounded-xl border border-white/5
                         bg-white/[0.03] p-4"
                >
                  <div class="mb-3 flex justify-between text-sm">
                    <span class="text-slate-300">
                      Procese automatizate
                    </span>
                    <span class="text-spike-400">86%</span>
                  </div>

                  <div class="h-2 overflow-hidden rounded-full bg-white/5">
                    <div
                      class="h-full w-[86%] rounded-full
                             bg-gradient-to-r from-spike-600 to-spike-400"
                    ></div>
                  </div>
                </div>

                <div
                  class="grid grid-cols-2 gap-4"
                >
                  <div class="rounded-xl bg-white/[0.03] p-4">
                    <p class="text-2xl font-bold">24/7</p>
                    <p class="mt-1 text-xs text-slate-500">
                      Fluxuri active
                    </p>
                  </div>

                  <div class="rounded-xl bg-white/[0.03] p-4">
                    <p class="text-2xl font-bold">-38%</p>
                    <p class="mt-1 text-xs text-slate-500">
                      Timp operațional
                    </p>
                  </div>
                </div>

              </div>

            </div>
          </div>

        </div>

      </div>
    </section>
    
  </main>


  <!-- FOOTER -->
  <?php include_once "./partials/footer.php"; ?>

</body>
</html>

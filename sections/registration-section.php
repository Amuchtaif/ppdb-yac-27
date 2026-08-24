<section id="alur" class="pt-12 pb-16 lg:pt-16 lg:pb-20 bg-white scroll-mt-0">
    <div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8">
        
        <?php
        $eyebrow = 'ALUR PENDAFTARAN';
        $heading = 'Alur Pendaftaran PPDB Online';
        $description = '';
        require __DIR__ . '/../components/section-header.php';
        ?>

        <!-- Desktop Horizontal Timeline Steps with Connecting Line Connector -->
        <div class="hidden lg:grid lg:grid-cols-7 gap-4 relative py-2">
            <!-- Horizontal Connecting Line (Runs behind step circles) -->
            <div class="absolute top-9 left-[7%] right-[7%] h-0.5 bg-[#1E4E8C]/30 z-0"></div>

            <?php foreach ($registrationSteps as $step): ?>
                <div class="flex flex-col items-center text-center group relative z-10">
                    <!-- Step Number Circle -->
                    <div class="w-14 h-14 rounded-2xl bg-[#EFF6FF] text-[#1E4E8C] border-2 border-[#1E4E8C] group-hover:bg-[#1E4E8C] group-hover:text-white transition-all duration-300 flex items-center justify-center font-heading font-extrabold text-lg shadow-sm mb-4 relative z-10">
                        <?= htmlspecialchars($step['step']) ?>
                    </div>
                    <h3 class="font-heading font-bold text-sm text-[#0B192C] mb-1 group-hover:text-[#1E4E8C] transition-colors"><?= htmlspecialchars($step['title']) ?></h3>
                    <p class="text-xs text-[#64748B] leading-tight px-1"><?= htmlspecialchars($step['desc']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Mobile & Tablet Vertical Steps Grid -->
        <div class="lg:hidden grid grid-cols-1 sm:grid-cols-2 gap-4">
            <?php foreach ($registrationSteps as $step): ?>
                <div class="bg-[#F8FAFC] p-5 rounded-2xl border border-[#E2E8F0] flex items-start gap-4 shadow-sm">
                    <div class="w-12 h-12 rounded-xl bg-[#1E4E8C] text-white flex items-center justify-center font-heading font-bold text-base shrink-0 shadow-sm">
                        <?= htmlspecialchars($step['step']) ?>
                    </div>
                    <div>
                        <h3 class="font-heading font-bold text-base text-[#0B192C] mb-1"><?= htmlspecialchars($step['title']) ?></h3>
                        <p class="text-xs text-[#64748B] leading-relaxed"><?= htmlspecialchars($step['desc']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="mt-12 text-center">
            <a href="<?= htmlspecialchars($site['registration_url']) ?>" class="inline-flex items-center gap-2 px-8 py-3.5 rounded-xl font-heading font-bold text-sm bg-[#1E4E8C] hover:bg-[#122947] text-white shadow-md hover:shadow-lg transition-all">
                <span>Mulai Pendaftaran Online Sekarang</span>
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
        </div>

    </div>
</section>

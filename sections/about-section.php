<section id="profil" class="py-20 lg:py-24 bg-white">
    <div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8">
        
        <?php
        $eyebrow = 'VISI & MISI';
        $heading = 'Landasan Utama Yayasan Assunnah';
        require __DIR__ . '/../components/section-header.php';
        ?>

        <!-- Vision Highlight Card -->
        <div class="max-w-4xl mx-auto mb-12 bg-gradient-to-br from-[#0B192C] via-[#122947] to-[#1E4E8C] text-white p-8 sm:p-12 rounded-3xl shadow-xl relative overflow-hidden text-center">
            <div class="absolute top-0 right-0 w-48 h-48 bg-white/5 rounded-bl-full pointer-events-none"></div>
            <span class="text-xs font-bold uppercase tracking-widest text-[#E8D595] bg-[#D4AF37]/20 px-3.5 py-1 rounded-full border border-[#D4AF37]/30">
                VISI YAYASAN
            </span>
            <p class="font-heading font-extrabold text-xl sm:text-2xl lg:text-3xl text-white mt-4 leading-snug italic">
                "<?= htmlspecialchars($visionMission['vision']) ?>"
            </p>
        </div>

        <!-- Mission 3 Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <?php foreach ($visionMission['missions'] as $idx => $m): ?>
                <div class="bg-[#F8FAFC] rounded-2xl p-6 border border-[#E2E8F0] shadow-sm hover:shadow-md transition-all hover-lift flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-xl bg-[#1E4E8C] text-white flex items-center justify-center font-heading font-bold text-sm mb-4 shadow-sm">
                            0<?= $idx + 1 ?>
                        </div>
                        <h3 class="font-heading font-bold text-lg text-[#0B192C] mb-2"><?= htmlspecialchars($m['title']) ?></h3>
                        <p class="text-sm text-[#64748B] leading-relaxed"><?= htmlspecialchars($m['desc']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

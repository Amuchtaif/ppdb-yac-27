<div class="max-w-4xl mx-auto space-y-4 accordion-group">
    <?php foreach ($requirements as $slug => $req): ?>
        <div class="accordion-item bg-white rounded-2xl border border-[#E2E8F0] shadow-sm overflow-hidden transition-all duration-300">
            <!-- Accordion Header Button -->
            <button type="button" class="accordion-trigger w-full p-5 sm:p-6 text-left flex items-center justify-between gap-4 hover:bg-[#EFF6FF] transition-colors">
                <div class="flex items-center gap-3.5">
                    <div class="w-10 h-10 rounded-xl bg-[#DBEAFE] text-[#1E4E8C] flex items-center justify-center font-bold text-sm shrink-0">
                        <i data-lucide="file-text" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <h3 class="font-heading font-extrabold text-lg text-[#0B192C]"><?= htmlspecialchars($req['name']) ?></h3>
                        <span class="text-xs text-[#8A6A16] font-semibold bg-[#FDF8E8] px-2.5 py-0.5 rounded-full inline-block mt-0.5 border border-[#E8D595]/40">
                            Syarat Usia: <?= htmlspecialchars($req['age_limit']) ?>
                        </span>
                    </div>
                </div>
                <div class="w-9 h-9 rounded-full bg-slate-100 flex items-center justify-center text-slate-500 shrink-0">
                    <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                </div>
            </button>

            <!-- Accordion Hidden Content -->
            <div class="accordion-content">
                <div class="p-6 pt-2 border-t border-slate-100 bg-[#F8FAFC]">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-[#64748B] mb-3">Dokumen & Ketentuan Khusus:</h4>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm text-[#1E293B]">
                        <?php foreach ($req['items'] as $item): ?>
                            <li class="flex items-start gap-2.5 bg-white p-3 rounded-xl border border-slate-100 shadow-2xs">
                                <i data-lucide="check-circle-2" class="w-4 h-4 text-[#2563EB] shrink-0 mt-0.5"></i>
                                <span><?= htmlspecialchars($item) ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

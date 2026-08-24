<div class="max-w-4xl mx-auto space-y-6">
    <?php foreach ($faqs as $catKey => $catData): ?>
        <div class="space-y-3">
            <div class="flex items-center gap-2 mb-2">
                <span class="w-2.5 h-2.5 rounded-full bg-[#D4AF37]"></span>
                <h3 class="font-heading font-bold text-lg text-[#0B192C] uppercase tracking-wider">
                    Kategori: <?= htmlspecialchars($catData['category']) ?>
                </h3>
            </div>

            <div class="space-y-3 accordion-group">
                <?php foreach ($catData['questions'] as $qItem): ?>
                    <div class="accordion-item bg-white rounded-2xl border border-[#E2E8F0] shadow-sm overflow-hidden transition-all duration-300">
                        <button type="button" class="accordion-trigger w-full p-5 text-left flex items-center justify-between gap-4 hover:bg-[#EFF6FF] transition-colors">
                            <span class="font-heading font-bold text-base text-[#0B192C] flex items-start gap-3">
                                <i data-lucide="help-circle" class="w-5 h-5 text-[#1E4E8C] shrink-0 mt-0.5"></i>
                                <?= htmlspecialchars($qItem['q']) ?>
                            </span>
                            <i data-lucide="chevron-down" class="accordion-icon w-5 h-5 text-slate-400 shrink-0"></i>
                        </button>
                        <div class="accordion-content">
                            <div class="p-5 pt-2 border-t border-slate-100 bg-[#F8FAFC] text-sm text-[#64748B] leading-relaxed pl-12">
                                <?= htmlspecialchars($qItem['a']) ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>

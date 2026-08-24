<?php if (!empty($site['announcement']['active'])): ?>
<div class="bg-[#0B192C] text-white text-xs sm:text-sm py-2.5 px-4 sticky top-0 z-50 transition-all border-b border-[#183B68]">
    <div class="max-w-[1200px] mx-auto flex items-center justify-between gap-4">
        <div class="flex items-center gap-2.5 truncate">
            <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-semibold bg-[#D4AF37] text-[#0B192C] shrink-0">
                <i data-lucide="sparkles" class="w-3.5 h-3.5"></i>
                <?= htmlspecialchars($site['announcement']['badge']) ?>
            </span>
            <span class="truncate font-medium text-slate-200">
                <?= htmlspecialchars($site['announcement']['text']) ?>
            </span>
        </div>
        <a href="<?= htmlspecialchars($site['announcement']['cta_url']) ?>" class="hidden sm:inline-flex items-center gap-1 font-semibold text-[#E8D595] hover:text-white transition-colors shrink-0">
            <?= htmlspecialchars($site['announcement']['cta_text']) ?>
        </a>
    </div>
</div>
<?php endif; ?>

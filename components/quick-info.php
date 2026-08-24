<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
    <?php foreach ($quickInfos as $info): ?>
        <div class="bg-white rounded-2xl p-5 sm:p-6 border border-[#E2E8F0] shadow-sm hover:shadow-md transition-all hover-lift flex flex-col justify-between group">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 rounded-xl bg-[#EFF6FF] text-[#1E4E8C] group-hover:bg-[#1E4E8C] group-hover:text-white transition-colors flex items-center justify-center">
                    <i data-lucide="<?= htmlspecialchars($info['icon']) ?>" class="w-6 h-6"></i>
                </div>
                <span class="text-xs font-bold text-[#8A6A16] bg-[#FDF8E8] px-2.5 py-1 rounded-full uppercase">Info</span>
            </div>
            <div>
                <p class="text-xs font-semibold text-[#64748B] uppercase tracking-wider mb-1"><?= htmlspecialchars($info['label']) ?></p>
                <h3 class="font-heading font-extrabold text-xl sm:text-2xl text-[#0B192C] mb-1"><?= htmlspecialchars($info['value']) ?></h3>
                <p class="text-xs text-slate-500 font-medium"><?= htmlspecialchars($info['desc']) ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

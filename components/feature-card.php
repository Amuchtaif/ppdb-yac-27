<div class="bg-white rounded-2xl p-6 border border-[#E2E8F0] shadow-sm hover:shadow-lg transition-all duration-300 hover-lift group flex flex-col justify-between">
    <div>
        <div class="w-14 h-14 rounded-2xl bg-[#EFF6FF] text-[#1E4E8C] group-hover:bg-[#1E4E8C] group-hover:text-white transition-all duration-300 flex items-center justify-center mb-5 shadow-sm">
            <i data-lucide="<?= htmlspecialchars($feat['icon']) ?>" class="w-7 h-7"></i>
        </div>
        <h3 class="font-heading font-bold text-xl text-[#0B192C] mb-2.5">
            <?= htmlspecialchars($feat['title']) ?>
        </h3>
        <p class="text-sm text-[#64748B] leading-relaxed">
            <?= htmlspecialchars($feat['description']) ?>
        </p>
    </div>
</div>

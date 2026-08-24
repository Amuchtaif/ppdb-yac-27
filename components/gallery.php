<!-- Gallery Grid (16 facility images) -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="gallery-grid">
    <?php foreach ($galleries as $index => $gal): ?>
        <div class="gallery-item group relative rounded-2xl overflow-hidden aspect-[4/3] bg-slate-100 border border-[#E2E8F0] shadow-sm hover:shadow-xl transition-all duration-300 cursor-pointer"
             data-index="<?= $index ?>"
             data-image="<?= htmlspecialchars($gal['image']) ?>"
             data-title="<?= htmlspecialchars($gal['title']) ?>"
             data-category="<?= htmlspecialchars($gal['category']) ?>">
            
            <img src="<?= htmlspecialchars($gal['image']) ?>" alt="<?= htmlspecialchars($gal['title']) ?>" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            
            <!-- Hover Zoom Icon Overlay -->
            <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                <div class="w-10 h-10 rounded-full bg-white/90 text-[#0B192C] flex items-center justify-center shadow-lg transform group-hover:scale-110 transition-transform">
                    <i data-lucide="maximize-2" class="w-5 h-5"></i>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
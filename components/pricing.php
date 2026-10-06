<!-- Tab Controls Navigation -->
<div class="flex items-center justify-start lg:justify-center gap-2 overflow-x-auto pb-4 mb-10 no-scrollbar scroll-smooth">
    <?php 
    $firstKey = !empty($pricing) ? array_keys($pricing)[0] : null;
    foreach ($pricing as $slug => $pr): 
        $isActive = ($slug === $firstKey);
    ?>
        <button type="button" 
                data-target="<?= htmlspecialchars($slug) ?>" 
                class="pricing-tab-btn px-5 py-3 rounded-xl font-heading font-bold text-sm whitespace-nowrap transition-all duration-200 border <?= $isActive ? 'tab-btn-active bg-[#1E4E8C] text-white border-[#1E4E8C]' : 'bg-white text-[#1E293B] border-slate-200 hover:border-[#1E4E8C] hover:bg-[#EFF6FF]' ?>">
            <?= htmlspecialchars($pr['name']) ?>
        </button>
    <?php endforeach; ?>
</div>

<!-- Tab Panes Content -->
<div class="max-w-4xl mx-auto">
    <?php foreach ($pricing as $slug => $pr): 
        $isFirst = ($slug === $firstKey);
    ?>
        <div id="pricing-pane-<?= htmlspecialchars($slug) ?>" class="pricing-pane <?= $isFirst ? '' : 'hidden' ?> transition-all duration-300">
            <div class="bg-white rounded-3xl p-6 sm:p-10 border border-[#E2E8F0] shadow-lg relative overflow-hidden">
                <div class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-bl from-[#DBEAFE] to-transparent rounded-bl-full pointer-events-none opacity-70"></div>
                
                <!-- Main Header Highlight -->
                <div class="pb-6 border-b border-slate-100">
                    <div class="flex items-center justify-between gap-4 mb-3">
                        <div>
                            <h3 class="font-heading font-extrabold text-2xl sm:text-3xl text-[#0B192C]"><?= htmlspecialchars($pr['name']) ?></h3>
                        </div>
                    </div>

                    <!-- Dominant Total Cost Card (Full Width Single Column) -->
                    <div class="bg-gradient-to-r from-[#0B192C] via-[#122947] to-[#1E4E8C] text-white p-6 rounded-2xl shadow-md flex flex-col sm:flex-row sm:items-center justify-between gap-4 w-full mt-4">
                        <div>
                            <span class="text-xs text-[#E8D595] uppercase tracking-wider font-semibold block">Total Biaya Masuk Awal</span>
                            <span class="font-heading font-extrabold text-3xl sm:text-4xl text-white my-1 block"><?= htmlspecialchars($pr['total_entrance']) ?></span>
                            <?php if (!empty($pr['note'])): ?>
                                <p class="text-xs text-slate-300 mt-1 max-w-xl leading-relaxed">
                                    <?= htmlspecialchars($pr['note']) ?>
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="sm:text-right shrink-0 border-t sm:border-t-0 border-white/10 pt-3 sm:pt-0">
                            <span class="text-xs text-slate-300 block">Biaya Pendaftaran:</span>
                            <span class="font-heading font-bold text-lg text-[#E8D595]"><?= htmlspecialchars($pr['registration']) ?></span>
                        </div>
                    </div>
                </div>

                <!-- Secondary Highlight Fees (SPP & Registration) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 py-6 border-b border-slate-100">
                    <div class="p-4 rounded-xl bg-[#EFF6FF] border border-[#DBEAFE] flex items-center justify-between">
                        <div>
                            <span class="text-xs text-[#64748B] font-semibold uppercase block">SPP Bulanan</span>
                            <span class="font-heading font-bold text-lg text-[#0B192C]">
                                <?= htmlspecialchars($pr['monthly_spp']) ?>
                                <?php if (strpos($pr['monthly_spp'], 'Rp') !== false): ?>
                                    <span class="text-xs font-normal text-slate-500">/ Bulan</span>
                                <?php endif; ?>
                            </span>
                        </div>
                        <div class="w-10 h-10 rounded-lg bg-[#1E4E8C] text-white flex items-center justify-center">
                            <i data-lucide="calendar" class="w-5 h-5"></i>
                        </div>
                    </div>

                    <div class="p-4 rounded-xl bg-[#FDF8E8] border border-[#E8D595] flex items-center justify-between">
                        <div>
                            <span class="text-xs text-[#8A6A16] font-semibold uppercase block">Biaya Formulir & Pendaftaran</span>
                            <span class="font-heading font-bold text-lg text-[#8A6A16]"><?= htmlspecialchars($pr['registration']) ?></span>
                        </div>
                        <div class="w-10 h-10 rounded-lg bg-[#D4AF37] text-[#0B192C] flex items-center justify-center">
                            <i data-lucide="receipt" class="w-5 h-5"></i>
                        </div>
                    </div>
                </div>

                <?php if (!empty($pr['has_brochure'])): ?>
                <!-- Action Preview Brosur (Hanya di Unit Baru: I'dad Mahad Aly & Mahad Aly) -->
                <div class="mt-6 pt-2">
                    <div class="p-5 sm:p-6 rounded-2xl bg-gradient-to-r from-blue-50/90 via-slate-50 to-amber-50/50 border border-blue-200/90 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 shadow-xs">
                        <div class="flex items-center gap-3.5">
                            <div class="w-12 h-12 rounded-2xl bg-[#1E4E8C] text-white flex items-center justify-center shrink-0 shadow-sm">
                                <i data-lucide="book-open" class="w-6 h-6 text-[#E8D595]"></i>
                            </div>
                            <div>
                                <div class="flex items-center gap-2">
                                    <h4 class="font-heading font-bold text-base text-[#0B192C]">Brosur Informasi <?= htmlspecialchars($pr['name']) ?></h4>
                                    <span class="px-2 py-0.5 rounded-full text-[10px] font-extrabold uppercase bg-amber-100 text-amber-800 border border-amber-300">Resmi</span>
                                </div>
                                <p class="text-xs text-slate-600 mt-1 leading-relaxed">
                                    Lihat rincian lengkap kurikulum, fasilitas asrama, program beasiswa, dan panduan PPDB.
                                </p>
                            </div>
                        </div>
                        <button type="button" 
                                onclick="openBrochureModal('<?= htmlspecialchars(addslashes($pr['name'])) ?>', '<?= htmlspecialchars(addslashes($pr['brochure_url'] ?? '')) ?>')"
                                class="btn-preview-brochure w-full sm:w-auto shrink-0 px-6 py-3 rounded-xl font-heading font-bold text-xs sm:text-sm bg-gradient-to-r from-[#1E4E8C] to-[#122947] hover:from-[#122947] hover:to-[#0B192C] text-white transition-all shadow-md hover:shadow-lg flex items-center justify-center gap-2.5 cursor-pointer transform hover:-translate-y-0.5 active:translate-y-0"
                                data-unit="<?= htmlspecialchars($pr['name']) ?>"
                                data-brochure="<?= htmlspecialchars($pr['brochure_url'] ?? '') ?>">
                            <i data-lucide="eye" class="w-4 h-4 text-[#E8D595]"></i>
                            <span>Preview Brosur</span>
                        </button>
                    </div>
                </div>
                <?php endif; ?>

            </div>
        </div>
    <?php endforeach; ?>
</div>

<!-- Brochure Preview Modal Popup Container (Image Viewer) -->
<div id="brochure-modal" 
     class="fixed inset-0 bg-black/85 backdrop-blur-md hidden items-center justify-center p-2 sm:p-5 transition-all duration-300 select-none" 
     style="display: none; z-index: 99999;" 
     role="dialog" 
     aria-modal="true" 
     aria-labelledby="brochure-modal-title"
     onclick="if (event.target === this) closeBrochureModal();">
    <div class="relative w-full max-w-5xl max-h-[92vh] bg-white rounded-3xl shadow-2xl flex flex-col overflow-hidden border border-slate-200" onclick="event.stopPropagation()">
        <!-- Modal Header -->
        <div class="flex items-center justify-between px-5 sm:px-7 py-3.5 sm:py-4 border-b border-slate-100 bg-slate-50/95 shrink-0">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-[#1E4E8C] text-[#E8D595] flex items-center justify-center shrink-0 shadow-xs">
                    <i data-lucide="image" class="w-5 h-5"></i>
                </div>
                <div>
                    <h3 id="brochure-modal-title" class="font-heading font-extrabold text-base sm:text-lg text-[#0B192C] leading-snug">
                        Preview Brosur
                    </h3>
                    <p class="text-xs text-slate-500 hidden sm:block">PPDB Yayasan Assunnah Cirebon T.A. 2027/2028</p>
                </div>
            </div>
            
            <div class="flex items-center gap-2">
                <a id="brochure-modal-download" href="#" download class="inline-flex items-center gap-1.5 px-3.5 sm:px-4 py-2 rounded-xl text-xs font-heading font-bold bg-[#D4AF37] hover:bg-[#A17B1E] text-[#0B192C] hover:text-white transition-all shadow-xs cursor-pointer">
                    <i data-lucide="download" class="w-4 h-4"></i>
                    <span class="hidden sm:inline">Simpan Brosur</span>
                </a>
                <a id="brochure-modal-external" href="#" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 px-3.5 sm:px-4 py-2 rounded-xl text-xs font-heading font-bold bg-slate-200 hover:bg-slate-300 text-slate-700 transition-all cursor-pointer">
                    <i data-lucide="external-link" class="w-4 h-4"></i>
                    <span class="hidden sm:inline">Buka Penuh</span>
                </a>
                <button type="button" 
                        id="brochure-modal-close" 
                        onclick="closeBrochureModal()" 
                        aria-label="Tutup Preview Brosur" 
                        class="w-9 h-9 rounded-xl bg-slate-100 hover:bg-rose-50 text-slate-600 hover:text-rose-600 flex items-center justify-center transition-all cursor-pointer border border-slate-200/60 ml-1">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>
        </div>
        
        <!-- Modal Body / High-Resolution Image Viewer -->
        <div class="flex-1 w-full bg-slate-950/95 overflow-auto p-3 sm:p-5 flex items-center justify-center min-h-[300px]">
            <img id="brochure-modal-img" src="" alt="Preview Brosur" class="max-w-full max-h-[76vh] w-auto h-auto object-contain rounded-xl shadow-2xl border border-white/10 transition-transform duration-200">
        </div>
    </div>
</div>

<!-- Standalone Brochure Modal Controller Script (Self-contained for zero caching dependency) -->
<script>
function openBrochureModal(unitName, brochureUrl) {
    var modal = document.getElementById('brochure-modal');
    if (!modal) return;
    var title = document.getElementById('brochure-modal-title');
    var img = document.getElementById('brochure-modal-img');
    var dl = document.getElementById('brochure-modal-download');
    var ext = document.getElementById('brochure-modal-external');

    if (title) title.textContent = 'Preview Brosur - ' + unitName;
    if (img) {
        img.src = brochureUrl;
        img.alt = 'Brosur ' + unitName;
    }
    if (dl) {
        dl.href = brochureUrl;
        var clean = unitName.replace(/[^a-zA-Z0-9]/g, '-');
        dl.setAttribute('download', 'Brosur-' + clean + '.jpg');
    }
    if (ext) ext.href = brochureUrl;

    modal.style.display = 'flex';
    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
    if (typeof lucide !== 'undefined') lucide.createIcons();
}

function closeBrochureModal() {
    var modal = document.getElementById('brochure-modal');
    if (!modal) return;
    modal.style.display = 'none';
    modal.classList.add('hidden');
    var img = document.getElementById('brochure-modal-img');
    if (img) img.src = '';
    document.body.style.overflow = '';
}

window.openBrochureModal = openBrochureModal;
window.closeBrochureModal = closeBrochureModal;

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' || e.keyCode === 27) {
        var modal = document.getElementById('brochure-modal');
        if (modal && modal.style.display !== 'none' && !modal.classList.contains('hidden')) {
            closeBrochureModal();
        }
    }
});
</script>



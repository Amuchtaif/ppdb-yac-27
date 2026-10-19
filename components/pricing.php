<?php
$waNumber = $site['whatsapp_number'] ?? '6281321114500';
?>

<!-- Tab Controls Navigation -->
<div class="flex justify-center mb-8 sm:mb-10">
    <div class="flex flex-wrap items-center justify-center gap-1.5 sm:gap-2 max-w-4xl mx-auto p-1.5 bg-slate-100 rounded-xl border border-slate-200">
        <?php 
        $firstKey = !empty($pricing) ? array_keys($pricing)[0] : null;
        foreach ($pricing as $slug => $pr): 
            $isActive = ($slug === $firstKey);
        ?>
            <button type="button" 
                    data-target="<?= htmlspecialchars($slug) ?>" 
                    class="pricing-tab-btn px-3.5 sm:px-4 py-2 rounded-lg font-heading font-bold text-xs sm:text-sm transition-all duration-150 border cursor-pointer <?= $isActive ? 'tab-btn-active bg-[#1E4E8C] text-white border-[#1E4E8C] shadow-xs' : 'bg-white text-[#1E293B] border-slate-200 hover:text-slate-900 hover:border-slate-300' ?>">
                <?= htmlspecialchars($pr['name']) ?>
            </button>
        <?php endforeach; ?>
    </div>
</div>

<!-- Tab Panes Content -->
<div class="max-w-4xl mx-auto">
    <?php foreach ($pricing as $slug => $pr): 
        $isFirst = ($slug === $firstKey);
        $isBoarding = (strpos($pr['name'], 'Boarding') !== false || strpos($pr['badge'] ?? '', 'Boarding') !== false || $slug === 'idad');
    ?>
        <div id="pricing-pane-<?= htmlspecialchars($slug) ?>" class="pricing-pane <?= $isFirst ? '' : 'hidden' ?>">
            <div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
                
                <!-- Card Header -->
                <div class="px-6 sm:px-8 py-5 border-b border-slate-200 bg-slate-50/60 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                    <div>
                        <div class="flex items-center gap-2.5">
                            <h3 class="font-heading font-extrabold text-xl sm:text-2xl text-slate-900">
                                <?= htmlspecialchars($pr['name']) ?>
                            </h3>
                            <?php if (!empty($pr['badge'])): ?>
                                <span class="px-2.5 py-0.5 rounded-md text-[11px] font-bold uppercase tracking-wider <?= $isBoarding ? 'bg-blue-100 text-[#1E4E8C]' : 'bg-emerald-100 text-emerald-800' ?>">
                                    <?= htmlspecialchars($pr['badge']) ?>
                                </span>
                            <?php endif; ?>
                        </div>
                        <p class="text-xs text-slate-500 mt-0.5">
                            Lembar Informasi Biaya Pendidikan PPDB T.A. 2027/2028 · Yayasan Assunnah Cirebon
                        </p>
                    </div>

                    <div class="flex items-center gap-2">
                        <?php if (!empty($pr['has_brochure'])): ?>
                            <button type="button" 
                                    onclick="openBrochureModal('<?= htmlspecialchars(addslashes($pr['name'])) ?>', '<?= htmlspecialchars(addslashes($pr['brochure_url'] ?? '')) ?>')"
                                    class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-heading font-bold text-[#1E4E8C] bg-blue-50 hover:bg-blue-100 border border-blue-200 transition-colors cursor-pointer">
                                <i data-lucide="eye" class="w-3.5 h-3.5"></i>
                                <span>Preview Brosur</span>
                            </button>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Financial Ledger Summary (Clean 3-Column Ledger without AI Gradients) -->
                <div class="p-6 sm:p-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-slate-200 border border-slate-200 rounded-xl overflow-hidden bg-slate-50/40">
                        
                        <!-- 1. Total Biaya Masuk Awal (Dominant) -->
                        <div class="p-5 sm:p-6 bg-[#EFF6FF]/60 flex flex-col justify-between">
                            <div>
                                <div class="flex items-center justify-between gap-1 mb-1.5">
                                    <span class="text-[11px] font-bold uppercase tracking-wider text-[#1E4E8C]">
                                        Total Biaya Masuk Awal
                                    </span>
                                </div>
                                <div class="font-heading font-black text-2xl sm:text-3xl lg:text-[34px] text-slate-900 tracking-tight leading-tight">
                                    <?= htmlspecialchars($pr['total_entrance']) ?>
                                </div>
                            </div>
                        </div>

                        <!-- 2. SPP Bulanan -->
                        <div class="p-5 sm:p-6 flex flex-col justify-between">
                            <div>
                                <span class="text-[11px] font-bold uppercase tracking-wider text-slate-500 block mb-1.5">
                                    SPP Bulanan
                                </span>
                                <div class="font-heading font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight leading-tight">
                                    <?= htmlspecialchars($pr['monthly_spp']) ?>
                                    <?php if (strpos($pr['monthly_spp'], 'Rp') !== false): ?>
                                        <span class="text-xs font-normal text-slate-500">/ bln</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <!-- 3. Biaya Pendaftaran -->
                        <div class="p-5 sm:p-6 flex flex-col justify-between">
                            <div>
                                <span class="text-[11px] font-bold uppercase tracking-wider text-slate-500 block mb-1.5">
                                    Biaya Pendaftaran
                                </span>
                                <div class="font-heading font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight leading-tight">
                                    <?= htmlspecialchars($pr['registration']) ?>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Itemized Breakdown Table / Multi-track Table -->
                    <?php if (!empty($pr['details']) && !empty($pr['has_brochure'])): ?>
                        <!-- Perbandingan Opsi Jalur untuk Unit Multi-Jalur (Mahad Aly & I'dad) -->
                        <div class="mt-6">
                            <h4 class="font-heading font-bold text-xs uppercase tracking-wider text-slate-700 mb-2.5 flex items-center gap-1.5">
                                <i data-lucide="layers" class="w-3.5 h-3.5 text-[#1E4E8C]"></i>
                                <span>Perbandingan Rincian Biaya per Jalur:</span>
                            </h4>
                            <div class="border border-slate-200 rounded-xl overflow-hidden">
                                <table class="w-full text-left text-xs sm:text-sm">
                                    <thead class="bg-slate-50 border-b border-slate-200 text-slate-600 font-heading font-bold text-[11px] uppercase tracking-wider">
                                        <tr>
                                            <th class="py-2.5 px-4">Komponen / Opsi Program</th>
                                            <th class="py-2.5 px-4 text-right">Nominal</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-slate-100">
                                        <?php foreach ($pr['details'] as $det): ?>
                                            <tr class="hover:bg-slate-50/70 transition-colors">
                                                <td class="py-2.5 px-4 text-slate-700 font-medium">
                                                    <?= htmlspecialchars($det['item']) ?>
                                                </td>
                                                <td class="py-2.5 px-4 text-right font-heading font-bold text-slate-900">
                                                    <?= htmlspecialchars($det['cost']) ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php else: ?>
                        <!-- Rincian Komponen Cakupan Biaya Masuk Awal Standar Institusi -->
                        <div class="mt-6 border border-slate-200 rounded-xl overflow-hidden">
                            <div class="bg-slate-50/80 px-4 py-2.5 border-b border-slate-200 flex items-center justify-between">
                                <span class="font-heading font-bold text-xs uppercase tracking-wider text-slate-700 flex items-center gap-1.5">
                                    <i data-lucide="check-circle" class="w-3.5 h-3.5 text-emerald-600"></i>
                                    <span>Rincian Komponen Biaya Masuk Awal (Sudah Termasuk):</span>
                                </span>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 divide-y sm:divide-y-0 sm:divide-x divide-slate-100 text-xs text-slate-700 bg-white">
                                <ul class="divide-y divide-slate-100">
                                    <li class="py-2 px-4 flex items-center gap-2.5">
                                        <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 shrink-0"></i>
                                        <span>Uang Pangkal & Pengembangan Fasilitas</span>
                                    </li>
                                    <li class="py-2 px-4 flex items-center gap-2.5">
                                        <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 shrink-0"></i>
                                        <span>Infak Bangunan & Sarana Pendidikan</span>
                                    </li>
                                    <li class="py-2 px-4 flex items-center gap-2.5">
                                        <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 shrink-0"></i>
                                        <span>SPP Perdana Bulan Juli 2027</span>
                                    </li>
                                    <li class="py-2 px-4 flex items-center gap-2.5">
                                        <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 shrink-0"></i>
                                        <span>Biaya Komite Sekolah & Kegiatan Santri</span>
                                    </li>
                                </ul>
                                <ul class="divide-y divide-slate-100">
                                    <li class="py-2 px-4 flex items-center gap-2.5">
                                        <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 shrink-0"></i>
                                        <span>Paket Seragam Lengkap & Atribut Sekolah</span>
                                    </li>
                                    <li class="py-2 px-4 flex items-center gap-2.5">
                                        <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 shrink-0"></i>
                                        <span>Buku Paket Kurikulum Nasional & Diniyah</span>
                                    </li>
                                    <li class="py-2 px-4 flex items-center gap-2.5">
                                        <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 shrink-0"></i>
                                        <span>Foto Administrasi & Kartu Pelajar / Santri</span>
                                    </li>
                                    <li class="py-2 px-4 flex items-center gap-2.5">
                                        <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 shrink-0"></i>
                                        <span><?= $isBoarding ? 'Perlengkapan Makan & Kamar Asrama' : 'Peralatan Makan & Penunjang KBM' ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>

                <!-- Card Footer Action Bar -->
                <div class="px-6 sm:px-8 py-4 bg-slate-50/70 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-3">
                    <div class="text-xs text-slate-500 text-center sm:text-left">
                        Pertanyaan seputar rincian pembiayaan?
                        <a href="https://wa.me/<?= htmlspecialchars($waNumber) ?>?text=<?= urlencode('Bismillah, saya ingin menanyakan rincian biaya PPDB untuk jenjang ' . $pr['name']) ?>" 
                           target="_blank" 
                           rel="noopener noreferrer" 
                           class="font-bold text-[#1E4E8C] hover:underline inline-flex items-center gap-1 ml-1">
                            <span>Hubungi Admin Panitia</span>
                            <i data-lucide="external-link" class="w-3 h-3"></i>
                        </a>
                    </div>

                    <div class="flex items-center gap-2.5 w-full sm:w-auto">
                        <a href="daftar.php" 
                           class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-lg bg-[#1E4E8C] hover:bg-[#122947] text-white text-xs font-heading font-bold transition-colors shadow-xs">
                            <span>Daftar <?= htmlspecialchars($pr['name']) ?></span>
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    <?php endforeach; ?>
</div>

<!-- Brochure Preview Modal Popup Container (Image Viewer) -->
<div id="brochure-modal" 
     class="fixed inset-0 bg-black/80 backdrop-blur-sm hidden items-center justify-center p-2 sm:p-5 transition-all duration-300 select-none" 
     style="display: none; z-index: 99999;" 
     role="dialog" 
     aria-modal="true" 
     aria-labelledby="brochure-modal-title"
     onclick="if (event.target === this) closeBrochureModal();">
    <div class="relative w-full max-w-5xl max-h-[92vh] bg-white rounded-2xl shadow-2xl flex flex-col overflow-hidden border border-slate-200" onclick="event.stopPropagation()">
        <!-- Modal Header -->
        <div class="flex items-center justify-between px-5 sm:px-6 py-3.5 border-b border-slate-200 bg-slate-50 shrink-0">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-lg bg-[#1E4E8C] text-white flex items-center justify-center shrink-0">
                    <i data-lucide="image" class="w-4 h-4"></i>
                </div>
                <div>
                    <h3 id="brochure-modal-title" class="font-heading font-bold text-sm sm:text-base text-slate-900 leading-snug">
                        Preview Brosur
                    </h3>
                    <p class="text-xs text-slate-500 hidden sm:block">PPDB Yayasan Assunnah Cirebon T.A. 2027/2028</p>
                </div>
            </div>
            
            <div class="flex items-center gap-2">
                <a id="brochure-modal-download" href="#" download class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-heading font-bold bg-[#1E4E8C] hover:bg-[#122947] text-white transition-all shadow-xs cursor-pointer">
                    <i data-lucide="download" class="w-3.5 h-3.5"></i>
                    <span class="hidden sm:inline">Simpan Brosur</span>
                </a>
                <a id="brochure-modal-external" href="#" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-heading font-bold bg-slate-200 hover:bg-slate-300 text-slate-700 transition-all cursor-pointer">
                    <i data-lucide="external-link" class="w-3.5 h-3.5"></i>
                    <span class="hidden sm:inline">Buka Penuh</span>
                </a>
                <button type="button" 
                        id="brochure-modal-close" 
                        onclick="closeBrochureModal()" 
                        aria-label="Tutup Preview Brosur" 
                        class="w-8 h-8 rounded-lg bg-slate-100 hover:bg-rose-50 text-slate-500 hover:text-rose-600 flex items-center justify-center transition-all cursor-pointer border border-slate-200 ml-1">
                    <i data-lucide="x" class="w-3.5 h-3.5"></i>
                </button>
            </div>
        </div>
        
        <!-- Modal Body / High-Resolution Image Viewer -->
        <div class="flex-1 w-full bg-slate-950 overflow-auto p-3 sm:p-5 flex items-center justify-center min-h-[300px]">
            <img id="brochure-modal-img" src="" alt="Preview Brosur" class="max-w-full max-h-[76vh] w-auto h-auto object-contain rounded-lg shadow-xl border border-white/10 transition-transform duration-200">
        </div>
    </div>
</div>

<!-- Standalone Brochure Modal Controller Script -->
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

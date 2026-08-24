<!-- Tab Controls Navigation -->
<div class="flex items-center justify-start lg:justify-center gap-2 overflow-x-auto pb-4 mb-10 no-scrollbar scroll-smooth">
    <?php 
    $firstKey = array_key_first($pricing);
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
                            <span class="font-heading font-bold text-lg text-[#0B192C]"><?= htmlspecialchars($pr['monthly_spp']) ?> <span class="text-xs font-normal text-slate-500">/ Bulan</span></span>
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



            </div>
        </div>
    <?php endforeach; ?>
</div>


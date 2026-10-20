<!-- Footer Section (Light Theme) -->
<footer class="bg-white text-slate-700 pt-16 pb-8 relative overflow-hidden">
    <div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8 pb-8">
            
            <!-- Column 1: Organization Branding (lg:col-span-4) -->
            <div class="lg:col-span-4 flex flex-col gap-4">
                <div class="flex items-center gap-3">
                    <img src="assets/images/favicon.png" alt="Logo Assunnah" class="w-12 h-12 object-contain">
                    <div>
                        <h3 class="font-heading font-extrabold text-xl text-[#0B192C] tracking-tight">ASSUNNAH CIREBON</h3>
                        <p class="text-xs font-semibold text-[#1E4E8C] uppercase tracking-wider">Yayasan Pendidikan & Dakwah</p>
                    </div>
                </div>
                <p class="text-sm text-slate-600 leading-relaxed pr-2">
                    Membentuk generasi muslim yang berakidah lurus, beribadah sesuai sunnah, berakhlak mulia, cerdas, dan siap mengabdi untuk ummat.
                </p>
                <!-- Social Media Badges (Font Awesome Brand Icons) -->
                <div class="flex items-center gap-3 pt-2">
                    <?php if (!empty($site['socials']['facebook'])): ?>
                        <a href="<?= htmlspecialchars($site['socials']['facebook']) ?>" target="_blank" rel="noopener" aria-label="Facebook" class="w-9 h-9 rounded-lg bg-slate-100 hover:bg-[#1E4E8C] flex items-center justify-center text-slate-600 hover:text-white border border-slate-200 transition-all">
                            <i class="fa-brands fa-facebook-f text-sm"></i>
                        </a>
                    <?php endif; ?>
                    <?php if (!empty($site['socials']['instagram'])): ?>
                        <a href="<?= htmlspecialchars($site['socials']['instagram']) ?>" target="_blank" rel="noopener" aria-label="Instagram" class="w-9 h-9 rounded-lg bg-slate-100 hover:bg-[#1E4E8C] flex items-center justify-center text-slate-600 hover:text-white border border-slate-200 transition-all">
                            <i class="fa-brands fa-instagram text-sm"></i>
                        </a>
                    <?php endif; ?>
                    <?php if (!empty($site['socials']['youtube'])): ?>
                        <a href="<?= htmlspecialchars($site['socials']['youtube']) ?>" target="_blank" rel="noopener" aria-label="YouTube" class="w-9 h-9 rounded-lg bg-slate-100 hover:bg-[#1E4E8C] flex items-center justify-center text-slate-600 hover:text-white border border-slate-200 transition-all">
                            <i class="fa-brands fa-youtube text-sm"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Column 2: Quick Links (lg:col-span-2) -->
            <div class="lg:col-span-2 flex flex-col gap-3">
                <h4 class="font-heading font-bold text-base text-[#0B192C] uppercase tracking-wider mb-1">Navigasi</h4>
                <ul class="flex flex-col gap-2.5 text-sm text-slate-600">
                    <li><a href="#hero" class="hover:text-[#1E4E8C] transition-colors">Beranda</a></li>
                    <li><a href="#program" class="hover:text-[#1E4E8C] transition-colors">Program Pendidikan</a></li>
                    <li><a href="#keunggulan" class="hover:text-[#1E4E8C] transition-colors">Keunggulan</a></li>
                    <li><a href="#alur" class="hover:text-[#1E4E8C] transition-colors">Alur PPDB</a></li>
                    <li><a href="#jadwal" class="hover:text-[#1E4E8C] transition-colors">Jadwal PPDB</a></li>
                    <li><a href="#biaya" class="hover:text-[#1E4E8C] transition-colors">Rincian Biaya</a></li>
                    <li><a href="#syarat" class="hover:text-[#1E4E8C] transition-colors">Persyaratan</a></li>
                    <li><a href="#faq" class="hover:text-[#1E4E8C] transition-colors">FAQ / Pertanyaan</a></li>
                </ul>
            </div>

            <!-- Column 3: Contact Info (lg:col-span-3) -->
            <div class="lg:col-span-3 flex flex-col gap-3">
                <h4 class="font-heading font-bold text-base text-[#0B192C] uppercase tracking-wider mb-1">Kontak PPDB</h4>
                <ul class="flex flex-col gap-3 text-sm text-slate-600">
                    <li class="flex items-center gap-3">
                        <i data-lucide="phone" class="w-5 h-5 text-[#1E4E8C] shrink-0"></i>
                        <span><?= htmlspecialchars($site['phone']) ?></span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i data-lucide="mail" class="w-5 h-5 text-[#1E4E8C] shrink-0"></i>
                        <span><?= htmlspecialchars($site['email']) ?></span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="map-pin" class="w-5 h-5 text-[#1E4E8C] shrink-0 mt-0.5"></i>
                        <span><?= htmlspecialchars($site['address'] ?? '') ?></span>
                    </li>
                </ul>
            </div>

            <!-- Column 4: Google Maps Embed (lg:col-span-3) -->
            <div class="lg:col-span-3 flex flex-col gap-3">
                <h4 class="font-heading font-bold text-base text-[#0B192C] uppercase tracking-wider mb-1">Lokasi Sekolah</h4>
                <div class="w-full h-36 rounded-xl overflow-hidden border border-slate-200 shadow-sm">
                    <iframe src="<?= htmlspecialchars($site['map_embed']) ?>" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>

        </div>

        <!-- Bottom Copyright -->
        <div class="pt-4 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
            <p>© <?= date('Y') ?> <?= htmlspecialchars($site['organization']) ?>. Hak Cipta Dilindungi Undang-Undang.</p>
            <p class="flex items-center gap-2">
                <span>Made with <span class="text-rose-500 font-bold">♥</span> by <strong class="text-slate-700 font-semibold">Abu Aufar</strong></span>
                <span>•</span>
                <span>PPDB <?= htmlspecialchars($site['academic_year']) ?></span>
                <span>•</span>
                <a href="index.php#hero" class="hover:text-[#1E4E8C] transition-colors">Kembali ke Atas ↑</a>
            </p>
        </div>
    </div>
</footer>


<!-- =========================================================================
     1. Brochure Preview Modal (Sleek High-Res Viewer with Scroll-to-Zoom & Pan)
     ========================================================================= -->
<div id="brochure-modal"
     class="fixed inset-0 z-[99999] bg-[#070D18]/95 backdrop-blur-md hidden flex flex-col select-none overflow-hidden"
     role="dialog"
     aria-modal="true"
     aria-labelledby="brochure-modal-title">

    <!-- Top Navigation & Controls Toolbar -->
    <header class="w-full h-14 bg-slate-900/90 border-b border-white/10 px-3 sm:px-6 flex items-center justify-between text-white shrink-0 z-30 backdrop-blur-md">
        <!-- Title & Unit Context -->
        <div class="flex items-center gap-2.5 sm:gap-3 min-w-0 pr-2">
            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-[11px] font-heading font-bold uppercase tracking-wider bg-white/10 text-[#E8D595] shrink-0 border border-white/10">
                <i data-lucide="file-text" class="w-3.5 h-3.5"></i>
                <span>Brosur</span>
            </span>
            <div class="min-w-0">
                <h3 id="brochure-modal-title" class="font-heading font-bold text-sm sm:text-base text-white truncate leading-snug">
                    Preview Brosur
                </h3>
                <p class="text-[11px] text-slate-400 truncate hidden sm:block">PPDB Yayasan Assunnah Cirebon 2027/2028</p>
            </div>
        </div>

        <!-- Zoom Controls Center -->
        <div class="flex items-center gap-1 sm:gap-1.5 bg-slate-950/70 p-1 rounded-lg border border-white/10 shrink-0">
            <button type="button" 
                    id="brochure-zoom-out" 
                    title="Zoom Out (-)" 
                    class="w-7 h-7 sm:w-8 sm:h-8 rounded-md hover:bg-white/10 text-slate-300 hover:text-white flex items-center justify-center transition-all cursor-pointer">
                <i data-lucide="minus" class="w-4 h-4"></i>
            </button>
            <button type="button" 
                    id="brochure-zoom-reset" 
                    title="Reset Zoom (100%)" 
                    class="px-2 h-7 sm:h-8 rounded-md hover:bg-white/10 text-slate-300 hover:text-white font-mono text-xs font-semibold flex items-center justify-center transition-all cursor-pointer">
                <span id="brochure-zoom-percent">100%</span>
            </button>
            <button type="button" 
                    id="brochure-zoom-in" 
                    title="Zoom In (+)" 
                    class="w-7 h-7 sm:w-8 sm:h-8 rounded-md hover:bg-white/10 text-slate-300 hover:text-white flex items-center justify-center transition-all cursor-pointer">
                <i data-lucide="plus" class="w-4 h-4"></i>
            </button>
            <button type="button" 
                    id="brochure-zoom-fit" 
                    title="Sesuaikan Layar" 
                    class="w-7 h-7 sm:w-8 sm:h-8 rounded-md hover:bg-white/10 text-slate-300 hover:text-white hidden sm:flex items-center justify-center transition-all cursor-pointer">
                <i data-lucide="maximize" class="w-3.5 h-3.5"></i>
            </button>
        </div>

        <!-- Actions: Download & Close -->
        <div class="flex items-center gap-1.5 sm:gap-2 shrink-0 pl-2">
            <!-- Dedicated Fixed Download Button -->
            <a id="brochure-modal-download" 
               href="#" 
               download 
               class="inline-flex items-center gap-1.5 px-3 sm:px-3.5 py-1.5 rounded-lg text-xs font-heading font-bold bg-[#1E4E8C] hover:bg-[#2868b8] text-white transition-all shadow-md cursor-pointer border border-blue-400/30">
                <i data-lucide="download" class="w-3.5 h-3.5"></i>
                <span class="hidden sm:inline">Download Brosur</span>
            </a>
            <a id="brochure-modal-external" 
               href="#" 
               target="_blank" 
               rel="noopener noreferrer" 
               title="Buka Gambar di Tab Baru" 
               class="w-8 h-8 rounded-lg bg-white/10 hover:bg-white/20 text-slate-300 hover:text-white hidden sm:flex items-center justify-center transition-all cursor-pointer border border-white/5">
                <i data-lucide="external-link" class="w-3.5 h-3.5"></i>
            </a>
            <button type="button" 
                    id="brochure-modal-close" 
                    onclick="closeBrochureModal()" 
                    aria-label="Tutup Preview Brosur" 
                    title="Tutup (Esc)" 
                    class="w-8 h-8 rounded-lg bg-white/10 hover:bg-rose-500/80 text-slate-300 hover:text-white flex items-center justify-center transition-all cursor-pointer border border-white/5 ml-1">
                <i data-lucide="x" class="w-4 h-4"></i>
            </button>
        </div>
    </header>

    <!-- Main Zoomable Viewport Area -->
    <div id="brochure-zoom-viewport" 
         class="flex-1 w-full relative overflow-hidden flex items-center justify-center cursor-default zoom-stage touch-none">
        <img id="brochure-modal-img" 
             src="" 
             alt="Preview Brosur" 
             class="zoom-image max-w-[94vw] max-h-[85vh] w-auto h-auto object-contain rounded-md shadow-2xl select-none pointer-events-auto">
        
        <!-- Floating Interaction Hint Badge -->
        <div id="brochure-hint-badge" class="absolute bottom-5 left-1/2 -translate-x-1/2 pointer-events-none px-4 py-1.5 rounded-full bg-slate-900/80 border border-white/10 backdrop-blur-md text-[11px] text-slate-300 flex items-center gap-2 shadow-xl opacity-90 transition-opacity duration-300">
            <i data-lucide="mouse-pointer" class="w-3.5 h-3.5 text-[#E8D595]"></i>
            <span>Scroll mouse untuk zoom • Drag untuk menggeser • Dobel klik reset</span>
        </div>
    </div>
</div>


<!-- =========================================================================
     2. Facility Lightbox Modal (High-Res Gallery with Scroll-to-Zoom, Pan & Nav)
     ========================================================================= -->
<div id="lightbox-modal"
     class="fixed inset-0 z-[99999] bg-[#070D18]/95 backdrop-blur-md hidden flex flex-col select-none overflow-hidden"
     role="dialog"
     aria-modal="true"
     aria-labelledby="lightbox-title">

    <!-- Top Navigation & Controls Toolbar -->
    <header class="w-full h-14 bg-slate-900/90 border-b border-white/10 px-3 sm:px-6 flex items-center justify-between text-white shrink-0 z-30 backdrop-blur-md">
        <!-- Title & Category Context -->
        <div class="flex items-center gap-2 sm:gap-2.5 min-w-0 pr-2">
            <span id="lightbox-category" class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-heading font-bold uppercase tracking-wider bg-white/10 text-[#E8D595] border border-white/10 shrink-0">
                Fasilitas
            </span>
            <div class="min-w-0">
                <h3 id="lightbox-title" class="font-heading font-bold text-sm sm:text-base text-white truncate leading-snug">
                    Galeri Fasilitas
                </h3>
                <p id="lightbox-counter-mobile" class="text-[11px] text-slate-400 truncate sm:hidden">Foto 1 dari 16</p>
            </div>
        </div>

        <!-- Center: Counter & Zoom Controls -->
        <div class="flex items-center gap-1.5 sm:gap-2 shrink-0">
            <!-- Counter Badge -->
            <span id="lightbox-counter" class="hidden sm:inline-flex items-center px-2.5 py-1 rounded-md text-xs font-mono font-semibold text-slate-300 bg-slate-950/70 border border-white/10">
                1 / 16
            </span>

            <!-- Zoom Controls Group -->
            <div class="flex items-center gap-1 sm:gap-1.5 bg-slate-950/70 p-1 rounded-lg border border-white/10">
                <button type="button" 
                        id="lightbox-zoom-out" 
                        title="Zoom Out (-)" 
                        class="w-7 h-7 sm:w-8 sm:h-8 rounded-md hover:bg-white/10 text-slate-300 hover:text-white flex items-center justify-center transition-all cursor-pointer">
                    <i data-lucide="minus" class="w-4 h-4"></i>
                </button>
                <button type="button" 
                        id="lightbox-zoom-reset" 
                        title="Reset Zoom (100%)" 
                        class="px-2 h-7 sm:h-8 rounded-md hover:bg-white/10 text-slate-300 hover:text-white font-mono text-xs font-semibold flex items-center justify-center transition-all cursor-pointer">
                    <span id="lightbox-zoom-percent">100%</span>
                </button>
                <button type="button" 
                        id="lightbox-zoom-in" 
                        title="Zoom In (+)" 
                        class="w-7 h-7 sm:w-8 sm:h-8 rounded-md hover:bg-white/10 text-slate-300 hover:text-white flex items-center justify-center transition-all cursor-pointer">
                    <i data-lucide="plus" class="w-4 h-4"></i>
                </button>
                <button type="button" 
                        id="lightbox-zoom-fit" 
                        title="Sesuaikan Layar" 
                        class="w-7 h-7 sm:w-8 sm:h-8 rounded-md hover:bg-white/10 text-slate-300 hover:text-white hidden sm:flex items-center justify-center transition-all cursor-pointer">
                    <i data-lucide="maximize" class="w-3.5 h-3.5"></i>
                </button>
            </div>
        </div>

        <!-- Right: Download Image & Close -->
        <div class="flex items-center gap-1.5 sm:gap-2 shrink-0 pl-2">
            <!-- Dedicated Fixed Download Button for Facility -->
            <a id="lightbox-download" 
               href="#" 
               download 
               class="inline-flex items-center gap-1.5 px-3 sm:px-3.5 py-1.5 rounded-lg text-xs font-heading font-bold bg-[#1E4E8C] hover:bg-[#2868b8] text-white transition-all shadow-md cursor-pointer border border-blue-400/30">
                <i data-lucide="download" class="w-3.5 h-3.5"></i>
                <span class="hidden sm:inline">Download Foto</span>
            </a>
            <a id="lightbox-external" 
               href="#" 
               target="_blank" 
               rel="noopener noreferrer" 
               title="Buka Foto di Tab Baru" 
               class="w-8 h-8 rounded-lg bg-white/10 hover:bg-white/20 text-slate-300 hover:text-white hidden sm:flex items-center justify-center transition-all cursor-pointer border border-white/5">
                <i data-lucide="external-link" class="w-3.5 h-3.5"></i>
            </a>
            <button type="button" 
                    id="lightbox-close" 
                    aria-label="Tutup Galeri" 
                    title="Tutup (Esc)" 
                    class="w-8 h-8 rounded-lg bg-white/10 hover:bg-rose-500/80 text-slate-300 hover:text-white flex items-center justify-center transition-all cursor-pointer border border-white/5 ml-1">
                <i data-lucide="x" class="w-4 h-4"></i>
            </button>
        </div>
    </header>

    <!-- Main Zoomable Viewport Area -->
    <div id="lightbox-zoom-viewport" 
         class="flex-1 w-full relative overflow-hidden flex items-center justify-center cursor-default zoom-stage touch-none">
        
        <!-- Navigation Prev / Next Floating Arrows -->
        <button id="lightbox-prev" 
                type="button" 
                aria-label="Foto Sebelumnya" 
                title="Sebelumnya (Panah Kiri)" 
                class="absolute left-3 sm:left-6 top-1/2 -translate-y-1/2 w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-slate-900/70 hover:bg-slate-800 text-white/90 hover:text-white border border-white/15 flex items-center justify-center shadow-xl backdrop-blur-md transition-all z-20 cursor-pointer">
            <i data-lucide="chevron-left" class="w-6 h-6"></i>
        </button>

        <button id="lightbox-next" 
                type="button" 
                aria-label="Foto Selanjutnya" 
                title="Selanjutnya (Panah Kanan)" 
                class="absolute right-3 sm:right-6 top-1/2 -translate-y-1/2 w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-slate-900/70 hover:bg-slate-800 text-white/90 hover:text-white border border-white/15 flex items-center justify-center shadow-xl backdrop-blur-md transition-all z-20 cursor-pointer">
            <i data-lucide="chevron-right" class="w-6 h-6"></i>
        </button>

        <img id="lightbox-img" 
             src="" 
             alt="Galeri Preview" 
             class="zoom-image max-w-[94vw] max-h-[85vh] w-auto h-auto object-contain rounded-md shadow-2xl select-none pointer-events-auto">

        <!-- Floating Interaction Hint Badge -->
        <div id="lightbox-hint-badge" class="absolute bottom-5 left-1/2 -translate-x-1/2 pointer-events-none px-4 py-1.5 rounded-full bg-slate-900/80 border border-white/10 backdrop-blur-md text-[11px] text-slate-300 flex items-center gap-2 shadow-xl opacity-90 transition-opacity duration-300">
            <i data-lucide="mouse-pointer" class="w-3.5 h-3.5 text-[#E8D595]"></i>
            <span>Scroll mouse untuk zoom • Drag untuk menggeser • Tombol ◀ ▶ untuk ganti foto</span>
        </div>
    </div>
</div>


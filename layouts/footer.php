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


<!-- Lightbox Image Modal Container -->
<div id="lightbox-modal" class="fixed inset-0 z-50 bg-black/90 hidden flex items-center justify-center p-4 select-none">
    <button id="lightbox-close" aria-label="Tutup" class="absolute top-6 right-6 text-white/80 hover:text-white p-2 rounded-full bg-white/10 hover:bg-white/20 transition-all z-10 cursor-pointer">
        <i data-lucide="x" class="w-7 h-7"></i>
    </button>
    <button id="lightbox-prev" aria-label="Sebelumnya" class="absolute left-4 sm:left-6 top-1/2 -translate-y-1/2 text-white/80 hover:text-white p-3 rounded-full bg-white/10 hover:bg-white/20 transition-all z-10 cursor-pointer">
        <i data-lucide="chevron-left" class="w-8 h-8"></i>
    </button>
    <button id="lightbox-next" aria-label="Selanjutnya" class="absolute right-4 sm:right-6 top-1/2 -translate-y-1/2 text-white/80 hover:text-white p-3 rounded-full bg-white/10 hover:bg-white/20 transition-all z-10 cursor-pointer">
        <i data-lucide="chevron-right" class="w-8 h-8"></i>
    </button>
    <div class="max-w-4xl max-h-[90vh] flex flex-col items-center">
        <img id="lightbox-img" src="" alt="Galeri Preview" class="max-h-[75vh] w-auto object-contain rounded-lg shadow-2xl border border-white/10 transition-all duration-200">
        <div id="lightbox-caption" class="mt-4 text-center"></div>
    </div>
</div>

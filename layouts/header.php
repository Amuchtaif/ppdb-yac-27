<?php
$currentScript = basename($_SERVER['PHP_SELF'] ?? '');
$navPrefix = ($currentScript === 'index.php' || $currentScript === '') ? '' : 'index.php';
$waNumber = $site['whatsapp_number'] ?? '6281321114500';
?>
<!-- Main Sticky Navbar -->
<header id="main-navbar" class="sticky top-0 z-40 w-full bg-white/95 backdrop-blur-md border-b border-slate-200/80 shadow-xs transition-all duration-300">
    <div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between gap-6">
        
        <!-- Brand Logo -->
        <a href="<?= $navPrefix ?>#hero" class="flex items-center gap-3 group">
            <img src="assets/images/png-logo-high.png" alt="Logo Assunnah Cirebon" class="w-10 h-10 object-contain group-hover:scale-105 transition-transform">
            <div class="flex flex-col">
                <span class="font-heading font-extrabold text-base sm:text-lg text-[#0B192C] tracking-tight leading-none">
                    PPDB ASSUNNAH
                </span>
                <span class="text-[10px] font-bold text-[#1E4E8C] tracking-wider uppercase mt-0.5">
                    Tahun Ajaran 2027/2028
                </span>
            </div>
        </a>

        <!-- Desktop Navigation Menu -->
        <nav class="hidden lg:flex items-center gap-7 text-sm font-semibold text-slate-700">
            <a href="<?= $navPrefix ?>#hero" class="hover:text-[#1E4E8C] transition-colors">Beranda</a>
            <a href="<?= $navPrefix ?>#program" class="hover:text-[#1E4E8C] transition-colors">Program</a>
            <a href="<?= $navPrefix ?>#keunggulan" class="hover:text-[#1E4E8C] transition-colors">Keunggulan</a>
            <a href="<?= $navPrefix ?>#biaya" class="hover:text-[#1E4E8C] transition-colors">Rincian Biaya</a>
            <a href="<?= $navPrefix ?>#syarat" class="hover:text-[#1E4E8C] transition-colors">Persyaratan</a>
            <a href="<?= $navPrefix ?>#faq" class="hover:text-[#1E4E8C] transition-colors">FAQ</a>
            <a href="<?= $navPrefix ?>#galeri" class="hover:text-[#1E4E8C] transition-colors">Galeri</a>
        </nav>

        <!-- Header Actions -->
        <div class="flex items-center gap-4">
            <a href="<?= htmlspecialchars($site['registration_url']) ?>" class="hidden sm:inline-flex items-center justify-center px-6 py-2.5 rounded-xl font-heading font-bold text-sm bg-[#1E4E8C] hover:bg-[#122947] text-white shadow-xs hover:shadow-md transition-all">
                Daftar PPDB Online
            </a>

            <!-- Mobile Hamburger Button -->
            <button id="mobile-menu-btn" type="button" class="lg:hidden p-2 rounded-xl text-slate-700 hover:text-slate-900 hover:bg-slate-100 transition-colors border border-slate-200/80 cursor-pointer" aria-label="Buka Menu">
                <i data-lucide="menu" class="w-5 h-5"></i>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Navigation Drawer & Backdrop -->
<div id="mobile-backdrop" class="fixed inset-0 bg-slate-900/50 z-50 hidden backdrop-blur-xs transition-opacity duration-300"></div>

<div id="mobile-drawer" class="fixed top-0 right-0 bottom-0 w-[320px] max-w-[85vw] bg-white z-50 shadow-2xl transform translate-x-full transition-transform duration-300 ease-in-out flex flex-col justify-between border-l border-slate-200">
    <!-- Top Content Area -->
    <div class="flex-1 overflow-y-auto">
        <!-- Drawer Header -->
        <div class="p-5 border-b border-slate-200/80 flex items-center justify-between bg-white">
            <div class="flex items-center gap-2.5">
                <img src="assets/images/png-logo-high.png" alt="Logo Assunnah" class="w-9 h-9 object-contain">
                <div class="flex flex-col">
                    <span class="font-heading font-bold text-sm text-[#0B192C]">PPDB Assunnah</span>
                    <span class="text-[10px] font-bold text-[#1E4E8C] uppercase tracking-wider">T.A. 2027/2028</span>
                </div>
            </div>
            <button id="mobile-menu-close" type="button" class="w-8 h-8 rounded-lg text-slate-500 hover:text-slate-900 hover:bg-slate-100 flex items-center justify-center transition-colors border border-slate-200/60 cursor-pointer" aria-label="Tutup Menu">
                <i data-lucide="x" class="w-4 h-4"></i>
            </button>
        </div>

        <!-- Navigation Links: Typography-first, clean editorial list -->
        <nav class="px-5 py-4 divide-y divide-slate-100 text-sm font-semibold text-slate-700">
            <a href="<?= $navPrefix ?>#hero" class="mobile-nav-link flex items-center justify-between py-3 hover:text-[#1E4E8C] transition-colors group">
                <span>Beranda</span>
                <i data-lucide="chevron-right" class="w-4 h-4 text-slate-300 group-hover:text-[#1E4E8C] group-hover:translate-x-0.5 transition-all"></i>
            </a>
            <a href="<?= $navPrefix ?>#program" class="mobile-nav-link flex items-center justify-between py-3 hover:text-[#1E4E8C] transition-colors group">
                <span>Program Pendidikan</span>
                <i data-lucide="chevron-right" class="w-4 h-4 text-slate-300 group-hover:text-[#1E4E8C] group-hover:translate-x-0.5 transition-all"></i>
            </a>
            <a href="<?= $navPrefix ?>#keunggulan" class="mobile-nav-link flex items-center justify-between py-3 hover:text-[#1E4E8C] transition-colors group">
                <span>Keunggulan</span>
                <i data-lucide="chevron-right" class="w-4 h-4 text-slate-300 group-hover:text-[#1E4E8C] group-hover:translate-x-0.5 transition-all"></i>
            </a>
            <a href="<?= $navPrefix ?>#alur" class="mobile-nav-link flex items-center justify-between py-3 hover:text-[#1E4E8C] transition-colors group">
                <span>Alur Pendaftaran</span>
                <i data-lucide="chevron-right" class="w-4 h-4 text-slate-300 group-hover:text-[#1E4E8C] group-hover:translate-x-0.5 transition-all"></i>
            </a>
            <a href="<?= $navPrefix ?>#jadwal" class="mobile-nav-link flex items-center justify-between py-3 hover:text-[#1E4E8C] transition-colors group">
                <span>Jadwal PPDB</span>
                <i data-lucide="chevron-right" class="w-4 h-4 text-slate-300 group-hover:text-[#1E4E8C] group-hover:translate-x-0.5 transition-all"></i>
            </a>
            <a href="<?= $navPrefix ?>#biaya" class="mobile-nav-link flex items-center justify-between py-3 hover:text-[#1E4E8C] transition-colors group">
                <span>Rincian Biaya</span>
                <i data-lucide="chevron-right" class="w-4 h-4 text-slate-300 group-hover:text-[#1E4E8C] group-hover:translate-x-0.5 transition-all"></i>
            </a>
            <a href="<?= $navPrefix ?>#syarat" class="mobile-nav-link flex items-center justify-between py-3 hover:text-[#1E4E8C] transition-colors group">
                <span>Syarat Pendaftaran</span>
                <i data-lucide="chevron-right" class="w-4 h-4 text-slate-300 group-hover:text-[#1E4E8C] group-hover:translate-x-0.5 transition-all"></i>
            </a>
            <a href="<?= $navPrefix ?>#faq" class="mobile-nav-link flex items-center justify-between py-3 hover:text-[#1E4E8C] transition-colors group">
                <span>FAQ & Pertanyaan</span>
                <i data-lucide="chevron-right" class="w-4 h-4 text-slate-300 group-hover:text-[#1E4E8C] group-hover:translate-x-0.5 transition-all"></i>
            </a>
            <a href="<?= $navPrefix ?>#galeri" class="mobile-nav-link flex items-center justify-between py-3 hover:text-[#1E4E8C] transition-colors group">
                <span>Galeri</span>
                <i data-lucide="chevron-right" class="w-4 h-4 text-slate-300 group-hover:text-[#1E4E8C] group-hover:translate-x-0.5 transition-all"></i>
            </a>
        </nav>
    </div>

    <!-- Drawer Footer Actions -->
    <div class="p-5 border-t border-slate-200 bg-slate-50/70 space-y-2.5">
        <a href="<?= htmlspecialchars($site['registration_url']) ?>" class="mobile-nav-link w-full py-3 rounded-xl font-heading font-bold text-center text-sm bg-[#1E4E8C] hover:bg-[#122947] text-white shadow-xs transition-colors flex items-center justify-center gap-2">
            <span>Daftar PPDB Online</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
        <a href="https://wa.me/<?= htmlspecialchars($waNumber) ?>" target="_blank" rel="noopener noreferrer" class="w-full py-2.5 rounded-xl font-semibold text-center text-xs text-slate-700 bg-white hover:bg-slate-100 border border-slate-200 transition-colors flex items-center justify-center gap-2">
            <i data-lucide="message-circle" class="w-4 h-4 text-emerald-600"></i>
            <span>Konsultasi Panitia PPDB</span>
        </a>
    </div>
</div>

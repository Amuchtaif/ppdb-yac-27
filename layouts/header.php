<!-- Main Sticky Navbar -->
<header id="main-navbar" class="sticky top-0 z-40 w-full bg-white/90 backdrop-blur-md border-b border-slate-100 shadow-xs transition-all duration-300">
    <div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between gap-6">
        
        <!-- Brand Logo -->
        <a href="#hero" class="flex items-center gap-3 group">
            <img src="assets/images/png-logo-high.png" alt="Logo Assunnah Cirebon" class="w-10 h-10 object-contain group-hover:scale-105 transition-transform">
            <div class="flex flex-col">
                <span class="font-heading font-extrabold text-base sm:text-lg text-slate-700 tracking-tight leading-none">
                    PPDB ASSUNNAH
                </span>
                <span class="text-[10px] font-bold text-[#1E4E8C] tracking-wider uppercase">
                    Tahun Ajaran 2027/2028
                </span>
            </div>
        </a>

        <!-- Desktop Navigation Menu -->
        <nav class="hidden lg:flex items-center gap-7 text-sm font-semibold text-slate-700">
            <a href="index.php#hero" class="hover:text-[#1E4E8C] transition-colors">Beranda</a>
            <a href="index.php#program" class="hover:text-[#1E4E8C] transition-colors">Program</a>
            <a href="index.php#keunggulan" class="hover:text-[#1E4E8C] transition-colors">Keunggulan</a>
            <a href="index.php#biaya" class="hover:text-[#1E4E8C] transition-colors">Rincian Biaya</a>
            <a href="index.php#syarat" class="hover:text-[#1E4E8C] transition-colors">Persyaratan</a>
            <a href="index.php#faq" class="hover:text-[#1E4E8C] transition-colors">FAQ</a>
            <a href="index.php#galeri" class="hover:text-[#1E4E8C] transition-colors">Galeri</a>
        </nav>
        <!-- Header Actions -->
        <div class="flex items-center gap-4">
            <a href="<?= htmlspecialchars($site['registration_url']) ?>" class="hidden sm:inline-flex items-center justify-center px-6 py-2.5 rounded-xl font-heading font-bold text-sm bg-[#4F46E5] hover:bg-[#4338CA] text-white shadow-md shadow-blue-900/20 hover:shadow-lg transition-all transform hover:-translate-y-0.5 active:translate-y-0">
                Daftar PPDB Online
            </a>

            <!-- Mobile Hamburger Button -->
            <button id="mobile-menu-btn" type="button" class="lg:hidden p-2.5 rounded-xl text-slate-900 hover:bg-slate-100 transition-colors" aria-label="Buka Menu">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Navigation Drawer & Backdrop -->
<div id="mobile-backdrop" class="fixed inset-0 bg-black/60 z-50 hidden backdrop-blur-sm transition-opacity"></div>

<div id="mobile-drawer" class="fixed top-0 right-0 bottom-0 w-[300px] max-w-[85vw] bg-white z-50 shadow-2xl transform translate-x-full transition-transform duration-300 ease-in-out flex flex-col justify-between">
    <div>
        <!-- Drawer Header -->
        <div class="p-5 border-b border-gray-100 flex items-center justify-between bg-[#EFF6FF]">
            <div class="flex items-center gap-2.5">
                <img src="assets/images/png-logo-high.png" alt="Logo Assunnah" class="w-9 h-9 object-contain">
                <div class="flex flex-col">
                    <span class="font-heading font-bold text-sm text-[#0B192C]">PPDB Assunnah</span>
                    <span class="text-[10px] font-semibold text-[#1E4E8C]">T.A 2027/2028</span>
                </div>
            </div>
            <button id="mobile-menu-close" type="button" class="p-2 rounded-lg text-gray-500 hover:text-gray-800 hover:bg-gray-200/60 transition-colors">
                <i data-lucide="x" class="w-5 h-5"></i>
            </button>
        </div>

        <!-- Drawer Navigation Links -->
        <nav class="p-5 flex flex-col gap-1 text-sm font-semibold text-[#1E293B]">
            <a href="index.php#hero" class="mobile-nav-link flex items-center gap-3 px-3 py-3 rounded-lg hover:bg-[#EFF6FF] hover:text-[#1E4E8C] transition-colors">
                <i data-lucide="home" class="w-4 h-4 text-[#D4AF37]"></i> Beranda
            </a>
            <a href="index.php#program" class="mobile-nav-link flex items-center gap-3 px-3 py-3 rounded-lg hover:bg-[#EFF6FF] hover:text-[#1E4E8C] transition-colors">
                <i data-lucide="book-open" class="w-4 h-4 text-[#D4AF37]"></i> Program Pendidikan
            </a>
            <a href="index.php#keunggulan" class="mobile-nav-link flex items-center gap-3 px-3 py-3 rounded-lg hover:bg-[#EFF6FF] hover:text-[#1E4E8C] transition-colors">
                <i data-lucide="award" class="w-4 h-4 text-[#D4AF37]"></i> Keunggulan
            </a>
            <a href="index.php#alur" class="mobile-nav-link flex items-center gap-3 px-3 py-3 rounded-lg hover:bg-[#EFF6FF] hover:text-[#1E4E8C] transition-colors">
                <i data-lucide="git-merge" class="w-4 h-4 text-[#D4AF37]"></i> Alur Pendaftaran
            </a>
            <a href="index.php#jadwal" class="mobile-nav-link flex items-center gap-3 px-3 py-3 rounded-lg hover:bg-[#EFF6FF] hover:text-[#1E4E8C] transition-colors">
                <i data-lucide="calendar" class="w-4 h-4 text-[#D4AF37]"></i> Jadwal PPDB
            </a>
            <a href="index.php#biaya" class="mobile-nav-link flex items-center gap-3 px-3 py-3 rounded-lg hover:bg-[#EFF6FF] hover:text-[#1E4E8C] transition-colors">
                <i data-lucide="wallet" class="w-4 h-4 text-[#D4AF37]"></i> Biaya Pendidikan
            </a>
            <a href="index.php#syarat" class="mobile-nav-link flex items-center gap-3 px-3 py-3 rounded-lg hover:bg-[#EFF6FF] hover:text-[#1E4E8C] transition-colors">
                <i data-lucide="file-check" class="w-4 h-4 text-[#D4AF37]"></i> Syarat Pendaftaran
            </a>
            <a href="index.php#faq" class="mobile-nav-link flex items-center gap-3 px-3 py-3 rounded-lg hover:bg-[#EFF6FF] hover:text-[#1E4E8C] transition-colors">
                <i data-lucide="help-circle" class="w-4 h-4 text-[#D4AF37]"></i> FAQ
            </a>
            <a href="index.php#galeri" class="mobile-nav-link flex items-center gap-3 px-3 py-3 rounded-lg hover:bg-[#EFF6FF] hover:text-[#1E4E8C] transition-colors">
                <i data-lucide="image" class="w-4 h-4 text-[#D4AF37]"></i> Galeri & Dokumentasi
            </a>
        </nav>
    </div>

    <!-- Drawer Footer CTA -->
    <div class="p-5 border-t border-gray-100 bg-gray-50 flex flex-col gap-2.5">
        <a href="<?= htmlspecialchars($site['registration_url']) ?>" class="mobile-nav-link w-full py-3 rounded-xl font-heading font-bold text-center text-sm bg-[#0B192C] text-[#E8D595] shadow-md">
            Daftar PPDB Online
        </a>
        <a href="https://wa.me/<?= htmlspecialchars($site['whatsapp_number']) ?>" target="_blank" class="w-full py-3 rounded-xl font-semibold text-center text-xs text-white bg-[#25D366] hover:bg-[#20ba5a] transition-colors flex items-center justify-center gap-2">
            <i class="fa-brands fa-whatsapp text-lg"></i> Chat Admin PPDB
        </a>
    </div>
</div>


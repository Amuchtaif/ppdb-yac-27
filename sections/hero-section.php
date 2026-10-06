<section id="hero" class="relative overflow-hidden bg-gradient-to-b from-slate-50/80 via-white to-slate-50 text-slate-900 pt-12 sm:pt-16 lg:pt-20 pb-16 lg:pb-24 scroll-mt-20">
    <!-- React Bits Particles Background -->
    <?php 
    $id = 'hero-particles';
    $class = 'opacity-40';
    require __DIR__ . '/../components/particles.php'; 
    ?>

    <!-- Subtle Ambient Background Light Orbs -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[700px] h-[350px] bg-gradient-to-b from-indigo-100/40 via-amber-100/20 to-transparent rounded-full blur-3xl pointer-events-none"></div>

    <!-- Subtle Grid Pattern -->
    <div class="absolute inset-0 opacity-[0.025] pointer-events-none bg-[radial-gradient(#000000_1px,transparent_1px)] [background-size:24px_24px]"></div>

    <div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Centered Hero Top Content -->
        <div class="text-center max-w-4xl mx-auto mb-10 sm:mb-12">
            
            <!-- Status Badge (Compact & Small on Mobile) -->
            <div class="inline-flex items-center gap-1.5 sm:gap-2 px-2.5 py-0.5 sm:px-3.5 sm:py-1 rounded-full text-[10px] sm:text-xs font-semibold bg-slate-100/90 text-slate-700 border border-slate-200/80 shadow-xs mb-4 sm:mb-5 backdrop-blur-sm max-w-[92vw] sm:max-w-none">
                <span class="w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full bg-indigo-600 animate-pulse shrink-0"></span>
                <span class="truncate sm:whitespace-normal">Pendaftaran Siswa Baru Tahun Ajaran 2027/2028 Telah Dibuka</span>
            </div>

            <!-- Main Title -->
            <h1 class="font-heading font-extrabold text-3xl sm:text-5xl lg:text-6xl text-slate-900 tracking-tight leading-[1.15] mb-6">
                Membina Generasi Rabbani <br class="hidden sm:inline">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 via-blue-600 to-indigo-800">
                    Berakidah, Cerdas & Berakhlak
                </span>
            </h1>

            <!-- Supporting Description -->
            <p class="text-base sm:text-lg text-slate-600 leading-relaxed max-w-2xl mx-auto font-normal mb-8">
                Membangun Generasi, Menyempurnakan Pendidikan. <br class="hidden sm:inline"> Selama lebih dari tiga dekade, Yayasan Assunnah Cirebon terus mengembangkan pendidikan Islam yang menyeluruh, dari pendidikan anak usia dini hingga jenjang perguruan tinggi.
            </p>

            <!-- Hero Action Buttons (Pill buttons matching reference image) -->
            <div class="flex flex-wrap items-center justify-center gap-3 sm:gap-4">
                <a href="<?= htmlspecialchars($site['registration_url']) ?>" class="px-7 py-3.5 rounded-xl font-heading font-bold text-sm sm:text-base bg-[#4F46E5] hover:bg-[#4338CA] text-white shadow-lg shadow-indigo-500/25 hover:shadow-indigo-500/40 transform hover:-translate-y-0.5 transition-all flex items-center justify-center gap-2.5">
                    <span>Daftar Online</span>
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>

                <a href="#video-profil" class="px-6 py-3.5 rounded-xl font-heading font-semibold text-sm sm:text-base bg-white hover:bg-slate-50 text-slate-700 border border-slate-200/90 shadow-xs hover:shadow-md transition-all flex items-center justify-center gap-2">
                    <i data-lucide="play" class="w-4 h-4 fill-slate-700 text-slate-700"></i>
                    <span>Tonton Profil</span>
                </a>
            </div>

        </div>

        <!-- Centered Showcase Image (Smaller & Frameless) -->
        <?php
        $heroImage = 'assets/images/hero-image.jpg';
        if (!file_exists(__DIR__ . '/../' . $heroImage)) {
            $heroImage = file_exists(__DIR__ . '/../assets/images/hero-image.png') 
                ? 'assets/images/hero-image.png' 
                : 'assets/images/hero-image-temp.png';
        }
        ?>
        <div class="relative max-w-xl mx-auto mt-6 sm:mt-8 mb-12 lg:mb-14 z-10 group">
            <!-- Soft warm artistic glow behind image -->
            <div class="absolute inset-0 bg-gradient-to-t from-blue-100/60 via-amber-100/30 to-transparent rounded-3xl blur-2xl pointer-events-none -z-10"></div>

            <div class="relative rounded-2xl overflow-hidden shadow-xl border border-slate-200/80 group-hover:shadow-2xl transition-all duration-500 bg-white">
                <img src="<?= htmlspecialchars($heroImage) ?>" 
                     alt="PPDB Assunnah Cirebon 2027/2028" 
                     width="640" 
                     height="853"
                     loading="eager" 
                     fetchpriority="high"
                     onerror="if(this.src.indexOf('hero-image.png') === -1){this.src='assets/images/hero-image.png';}else if(this.src.indexOf('hero-image-temp.png') === -1){this.src='assets/images/hero-image-temp.png';}"
                     class="w-full h-auto object-contain rounded-2xl group-hover:scale-[1.02] transition-transform duration-700">
            </div>
        </div>

    </div>
</section>


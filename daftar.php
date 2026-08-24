<?php
require_once __DIR__ . '/config/site.php';
require_once __DIR__ . '/config/content.php';

// Custom page title for Head layout
$pageTitle = "Pendaftaran PPDB Online 2027/2028 - " . $site['organization'];
require_once __DIR__ . '/layouts/head.php';
?>

<body class="font-sans antialiased text-slate-800 bg-[#F8FAFC] selection:bg-[#1E4E8C] selection:text-white min-h-screen flex flex-col justify-between">

    <!-- Header Navbar -->
    <?php require_once __DIR__ . '/layouts/header.php'; ?>

    <!-- Main Registration Page Content -->
    <main class="flex-grow pb-20">

        <!-- Page Header Banner -->
        <section class="relative bg-gradient-to-br from-[#0B192C] via-[#122947] to-[#1E4E8C] text-white pt-8 sm:pt-12 lg:pt-14 pb-16 lg:pb-20 overflow-hidden">
            <!-- Ambient Lighting & Shapes -->
            <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute bottom-0 left-10 w-72 h-72 bg-[#D4AF37]/10 rounded-full blur-2xl pointer-events-none"></div>

            <div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-extrabold uppercase tracking-wider bg-[#D4AF37]/20 text-[#E8D595] border border-[#D4AF37]/30 mb-4 backdrop-blur-md">
                    <span class="w-2 h-2 rounded-full bg-[#E8D595] animate-pulse"></span>
                    Portal Resmi Pendaftaran PPDB T.A. 2027/2028
                </span>

                <h1 class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-white tracking-tight mb-4 leading-tight">
                    Pendaftaran Online & Informasi Seleksi
                </h1>

                <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed font-normal">
                    Panduan lengkap pembayaran pendaftaran, formulir online, pelaksanaan tes masuk, hingga konfirmasi penerimaan santri baru Yayasan Assunnah Cirebon.
                </p>
            </div>
        </section>

        <div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 -mt-8 relative z-20">

            <!-- Interactive Tab Bar Navigation -->
            <div class="bg-white rounded-2xl p-2 shadow-lg border border-slate-200/80 max-w-3xl mx-auto mb-12 flex flex-wrap sm:flex-nowrap gap-2">
                <button type="button" 
                        data-tab="online" 
                        class="reg-tab-btn flex-1 py-3 px-4 rounded-xl font-heading font-bold text-xs sm:text-sm text-center transition-all duration-300 flex items-center justify-center gap-2 bg-[#1E4E8C] text-white shadow-sm">
                    <i data-lucide="globe" class="w-4 h-4"></i>
                    <span>Alur Online</span>
                </button>

                <button type="button" 
                        data-tab="offline" 
                        class="reg-tab-btn flex-1 py-3 px-4 rounded-xl font-heading font-bold text-xs sm:text-sm text-center transition-all duration-300 flex items-center justify-center gap-2 bg-slate-100 text-slate-600 hover:bg-slate-200/70 hover:text-slate-900">
                    <i data-lucide="building" class="w-4 h-4"></i>
                    <span>Pendaftaran Offline</span>
                </button>

                <button type="button" 
                        data-tab="test" 
                        class="reg-tab-btn flex-1 py-3 px-4 rounded-xl font-heading font-bold text-xs sm:text-sm text-center transition-all duration-300 flex items-center justify-center gap-2 bg-slate-100 text-slate-600 hover:bg-slate-200/70 hover:text-slate-900">
                    <i data-lucide="file-check" class="w-4 h-4"></i>
                    <span>Portal Tes Online</span>
                </button>
            </div>

            <!-- TAB 1: ALUR PENDAFTARAN ONLINE -->
            <div id="tab-pane-online" class="reg-tab-pane space-y-12 transition-all duration-300">

                <!-- Step 1: Transfer Biaya Pendaftaran & Bank Accounts Card -->
                <div class="bg-white rounded-3xl p-6 sm:p-10 border border-slate-200/90 shadow-md relative overflow-hidden">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 rounded-xl bg-[#1E4E8C] text-white flex items-center justify-center font-heading font-extrabold text-lg shadow-sm">
                            1
                        </div>
                        <div>
                            <span class="text-xs font-extrabold text-[#1E4E8C] uppercase tracking-wider block">Langkah Pertama</span>
                            <h2 class="font-heading font-extrabold text-xl sm:text-2xl text-[#0B192C]">Pembayaran Biaya Pendaftaran</h2>
                        </div>
                    </div>

                    <p class="text-sm text-slate-600 leading-relaxed mb-6">
                        Lakukan pembayaran biaya pendaftaran sesuai jenjang yang dituju dengan **menambahkan 3 digit terakhir Nomor HP calon pendaftar** untuk memudahkan verifikasi otomatis sistem.
                    </p>

                    <!-- Nominal Pricing Badges Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                        <div class="p-4 rounded-2xl bg-amber-50/80 border border-amber-200/80">
                            <span class="text-xs font-bold text-amber-800 uppercase block">PG & TKIT</span>
                            <span class="font-heading font-extrabold text-xl text-[#0B192C]">Rp 300.000</span>
                            <span class="text-[11px] text-amber-700 block mt-0.5">+ 3 Digit Akhir No. HP</span>
                        </div>
                        <div class="p-4 rounded-2xl bg-blue-50/80 border border-blue-200/80">
                            <span class="text-xs font-bold text-blue-800 uppercase block">SDIT Assunnah</span>
                            <span class="font-heading font-extrabold text-xl text-[#0B192C]">Rp 500.000</span>
                            <span class="text-[11px] text-blue-700 block mt-0.5">+ 3 Digit Akhir No. HP</span>
                        </div>
                        <div class="p-4 rounded-2xl bg-teal-50/80 border border-teal-200/80">
                            <span class="text-xs font-bold text-teal-800 uppercase block">MTs, MA, I'dad Lughoh</span>
                            <span class="font-heading font-extrabold text-xl text-[#0B192C]">Rp 550.000</span>
                            <span class="text-[11px] text-teal-700 block mt-0.5">+ 3 Digit Akhir No. HP</span>
                        </div>
                        <div class="p-4 rounded-2xl bg-purple-50/80 border border-purple-200/80">
                            <span class="text-xs font-bold text-purple-800 uppercase block">Ma'had Aly</span>
                            <span class="font-heading font-extrabold text-xl text-[#0B192C]">Rp 500.000</span>
                            <span class="text-[11px] text-purple-700 block mt-0.5">+ 3 Digit Akhir No. HP</span>
                        </div>
                    </div>

                    <!-- Transfer Example Alert Box -->
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 text-xs sm:text-sm text-slate-700 flex items-start gap-3 mb-8">
                        <i data-lucide="info" class="w-5 h-5 text-[#1E4E8C] shrink-0 mt-0.5"></i>
                        <div>
                            <span class="font-bold text-[#0B192C] block">Contoh Cara Transfer:</span>
                            Pendaftaran MTs (Rp 550.000) dengan No. HP <code class="bg-white px-1.5 py-0.5 rounded border text-[#1E4E8C] font-mono">081321114500</code>, maka nominal transfer sebesar <strong class="text-[#1E4E8C]">Rp 550.500</strong>.
                        </div>
                    </div>

                    <!-- Official Bank Account Cards Grid (Light Theme with Bank Logos) -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- BSI Light Theme Card -->
                        <div class="p-6 rounded-3xl bg-white border-2 border-teal-500/30 hover:border-teal-500/70 shadow-md hover:shadow-xl transition-all duration-300 relative overflow-hidden group">
                            <!-- Top Accent Line -->
                            <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-teal-500 via-emerald-500 to-amber-500"></div>

                            <div class="flex items-center justify-between gap-4 mb-4 pt-1">
                                <!-- BSI Logo & Title -->
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-teal-600 text-white font-heading font-extrabold text-xs tracking-tighter flex items-center justify-center shadow-xs shrink-0">
                                        BSI
                                    </div>
                                    <div>
                                        <h3 class="font-heading font-extrabold text-base text-[#0B192C] leading-tight">Bank Syariah Indonesia</h3>
                                        <span class="text-[10px] font-bold text-teal-700 uppercase tracking-wider">Kode Bank: 451</span>
                                    </div>
                                </div>

                                <span class="px-3 py-1 text-[10px] font-extrabold uppercase tracking-wider rounded-full bg-teal-50 text-teal-800 border border-teal-200">
                                    Rekening Utama
                                </span>
                            </div>

                            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200/80 mb-3">
                                <span class="text-xs text-slate-500 font-semibold block mb-1">Nomor Rekening Resmi (BSI):</span>
                                <div class="flex items-center justify-between gap-2">
                                    <span class="font-heading font-extrabold text-2xl text-teal-800 tracking-wider font-mono select-all">7154934997</span>
                                    <button type="button" 
                                            onclick="navigator.clipboard.writeText('7154934997'); alert('Nomor Rekening BSI berhasil disalin!')" 
                                            class="px-3.5 py-1.5 rounded-xl bg-teal-600 hover:bg-teal-700 text-white text-xs font-bold transition-all shadow-xs flex items-center gap-1.5 cursor-pointer">
                                        <i data-lucide="copy" class="w-3.5 h-3.5"></i> Salin
                                    </button>
                                </div>
                            </div>

                            <div class="flex items-center justify-between text-xs text-slate-600 font-medium px-1">
                                <span>Atas Nama:</span>
                                <span class="font-bold text-[#0B192C]">YAYASAN ASSUNNAH CIREBON</span>
                            </div>
                        </div>

                        <!-- Bank Muamalat Light Theme Card -->
                        <div class="p-6 rounded-3xl bg-white border-2 border-purple-500/30 hover:border-purple-500/70 shadow-md hover:shadow-xl transition-all duration-300 relative overflow-hidden group">
                            <!-- Top Accent Line -->
                            <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-purple-600 via-indigo-600 to-purple-800"></div>

                            <div class="flex items-center justify-between gap-4 mb-4 pt-1">
                                <!-- Bank Muamalat Logo & Title -->
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-purple-700 text-white font-heading font-extrabold text-xs tracking-tighter flex items-center justify-center shadow-xs shrink-0">
                                        BMI
                                    </div>
                                    <div>
                                        <h3 class="font-heading font-extrabold text-base text-[#0B192C] leading-tight">Bank Muamalat</h3>
                                        <span class="text-[10px] font-bold text-purple-700 uppercase tracking-wider">Kode Bank: 147</span>
                                    </div>
                                </div>

                                <span class="px-3 py-1 text-[10px] font-extrabold uppercase tracking-wider rounded-full bg-purple-50 text-purple-800 border border-purple-200">
                                    Rekening Alternatif
                                </span>
                            </div>

                            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200/80 mb-3">
                                <span class="text-xs text-slate-500 font-semibold block mb-1">Nomor Rekening Resmi (Muamalat):</span>
                                <div class="flex items-center justify-between gap-2">
                                    <span class="font-heading font-extrabold text-2xl text-purple-900 tracking-wider font-mono select-all">1310131313</span>
                                    <button type="button" 
                                            onclick="navigator.clipboard.writeText('1310131313'); alert('Nomor Rekening Bank Muamalat berhasil disalin!')" 
                                            class="px-3.5 py-1.5 rounded-xl bg-purple-700 hover:bg-purple-800 text-white text-xs font-bold transition-all shadow-xs flex items-center gap-1.5 cursor-pointer">
                                        <i data-lucide="copy" class="w-3.5 h-3.5"></i> Salin
                                    </button>
                                </div>
                            </div>

                            <div class="flex items-center justify-between text-xs text-slate-600 font-medium px-1">
                                <span>Atas Nama:</span>
                                <span class="font-bold text-[#0B192C]">YAYASAN ASSUNNAH</span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Step 2: Form Pendaftaran Online & Password Info -->
                <div class="bg-white rounded-3xl p-6 sm:p-10 border border-slate-200/90 shadow-md">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 rounded-xl bg-[#1E4E8C] text-white flex items-center justify-center font-heading font-extrabold text-lg shadow-sm">
                            2
                        </div>
                        <div>
                            <span class="text-xs font-extrabold text-[#1E4E8C] uppercase tracking-wider block">Langkah Kedua</span>
                            <h2 class="font-heading font-extrabold text-xl sm:text-2xl text-[#0B192C]">Pengisian Formulir Pendaftaran</h2>
                        </div>
                    </div>

                    <p class="text-sm text-slate-600 leading-relaxed mb-6">
                        Setelah melakukan transfer bukti pembayaran pendaftaran, silakan buka formulir pendaftaran online dan lengkapi data calon santri dengan teliti.
                    </p>

                    <div class="p-6 rounded-2xl bg-[#EFF6FF] border border-[#DBEAFE] flex flex-col sm:flex-row items-center justify-between gap-6">
                        <div>
                            <span class="text-xs font-bold text-[#1E4E8C] uppercase tracking-wider block mb-1">Form Pendaftaran Resmi</span>
                            <h3 class="font-heading font-extrabold text-lg text-[#0B192C]">Formulir Pendaftaran Santri Baru</h3>
                            <p class="text-xs text-slate-600 mt-1">
                                * Password pembuka form pendaftaran dapat diperoleh melalui WhatsApp Panitia.
                            </p>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto shrink-0">
                            <a href="https://bit.ly/1FormPendaftaranAssunnah" target="_blank" rel="noopener" class="px-6 py-3.5 rounded-xl font-heading font-bold text-sm bg-[#4F46E5] hover:bg-[#4338CA] text-white shadow-md hover:shadow-lg transition-all flex items-center justify-center gap-2">
                                <span>Buka Form Pendaftaran</span>
                                <i data-lucide="external-link" class="w-4 h-4"></i>
                            </a>

                            <a href="https://wa.me/<?= htmlspecialchars($site['whatsapp_number']) ?>?text=<?= urlencode('Assalamu\'alaikum admin, mohon informasi password form pendaftaran PPDB Assunnah 2027/2028') ?>" target="_blank" rel="noopener" class="px-5 py-3.5 rounded-xl font-heading font-bold text-xs sm:text-sm bg-white hover:bg-slate-50 text-[#1E4E8C] border border-[#DBEAFE] transition-all flex items-center justify-center gap-2">
                                <i class="fa-brands fa-whatsapp text-base text-[#25D366]"></i>
                                <span>Minta Password WA</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Step 3 & 4: Ujian Seleksi & Upload Berkas -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Step 3 -->
                    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/90 shadow-md">
                        <div class="flex items-center gap-3 mb-5">
                            <div class="w-10 h-10 rounded-xl bg-[#1E4E8C] text-white flex items-center justify-center font-heading font-extrabold text-lg shadow-sm">
                                3
                            </div>
                            <div>
                                <span class="text-xs font-extrabold text-[#1E4E8C] uppercase tracking-wider block">Langkah Ketiga</span>
                                <h2 class="font-heading font-bold text-lg text-[#0B192C]">Ujian & Seleksi Santri</h2>
                            </div>
                        </div>

                        <ul class="space-y-3 text-xs sm:text-sm text-slate-600">
                            <li class="flex items-start gap-2.5">
                                <i data-lucide="check-circle-2" class="w-4 h-4 text-[#1E4E8C] shrink-0 mt-0.5"></i>
                                <span><strong>Tes Akademis Online</strong>: Berlaku untuk jenjang MTs, MA, I'dad Lughoh, dan Ma'had Aly.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i data-lucide="check-circle-2" class="w-4 h-4 text-[#1E4E8C] shrink-0 mt-0.5"></i>
                                <span><strong>Tes BTQ (Baca Tulis Al-Qur'an)</strong>: Pengujian hafalan dan kelancaran membaca Al-Qur'an.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i data-lucide="check-circle-2" class="w-4 h-4 text-[#1E4E8C] shrink-0 mt-0.5"></i>
                                <span><strong>Wawancara Wali Santri</strong>: Dilakukan secara offline di kantor atau panggilan telepon WA.</span>
                            </li>
                            <li class="flex items-start gap-2.5 text-amber-700 bg-amber-50 p-2.5 rounded-xl border border-amber-200/60 mt-2">
                                <i data-lucide="info" class="w-4 h-4 shrink-0 mt-0.5"></i>
                                <span>PG & TKIT tanpa tes masuk. SDIT berupa pemetaan asesmen kompetensi dan BTQ.</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Step 4 -->
                    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/90 shadow-md">
                        <div class="flex items-center gap-3 mb-5">
                            <div class="w-10 h-10 rounded-xl bg-[#1E4E8C] text-white flex items-center justify-center font-heading font-extrabold text-lg shadow-sm">
                                4
                            </div>
                            <div>
                                <span class="text-xs font-extrabold text-[#1E4E8C] uppercase tracking-wider block">Langkah Keempat</span>
                                <h2 class="font-heading font-bold text-lg text-[#0B192C]">Melengkapi Berkas Pendaftaran</h2>
                            </div>
                        </div>

                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4">
                            Pengunggahan berkas dilakukan setelah bukti pendaftaran diterima dan calon santri menyelesaikan rangkaian tes seleksi.
                        </p>

                        <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 text-xs text-slate-600 space-y-2">
                            <div class="flex items-center gap-2 font-semibold text-[#0B192C]">
                                <i data-lucide="file-check" class="w-4 h-4 text-[#1E4E8C]"></i>
                                Tautan Upload Berkas Personal:
                            </div>
                            <p>Tautan khusus untuk mengunggah berkas persyaratan akan dikirimkan langsung oleh panitia Front Office melalui WhatsApp Konfirmasi.</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- TAB 2: PENDAFTARAN OFFLINE -->
            <div id="tab-pane-offline" class="reg-tab-pane hidden space-y-8 transition-all duration-300">
                <div class="bg-white rounded-3xl p-6 sm:p-10 border border-slate-200/90 shadow-md">
                    <div class="max-w-3xl mb-8">
                        <span class="inline-block px-3 py-1 text-xs font-extrabold rounded-full bg-[#FDF8E8] text-[#8A6A16] border border-[#E8D595]/40 uppercase tracking-wider mb-2">
                            Pendaftaran Langsung Di Tempat
                        </span>
                        <h2 class="font-heading font-extrabold text-2xl sm:text-3xl text-[#0B192C]">Alur Pendaftaran Offline (One Day Service)</h2>
                        <p class="text-sm text-slate-600 mt-2 leading-relaxed">
                            Bagi calon wali murid yang ingin mendaftar secara langsung, Panitia PPDB Yayasan Assunnah Cirebon melayani pendaftaran offline di kantor Sekretariat PPDB.
                        </p>
                    </div>

                    <!-- Steps Timeline Cards Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200/80 relative">
                            <span class="w-8 h-8 rounded-lg bg-[#1E4E8C] text-white font-heading font-bold text-sm flex items-center justify-center mb-3">01</span>
                            <h3 class="font-heading font-bold text-base text-[#0B192C] mb-1">Kedatangan & Persyaratan</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Datang langsung ke kantor Sekretariat PPDB Assunnah dengan membawa kelengkapan persyaratan pendaftaran.</p>
                        </div>

                        <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200/80 relative">
                            <span class="w-8 h-8 rounded-lg bg-[#1E4E8C] text-white font-heading font-bold text-sm flex items-center justify-center mb-3">02</span>
                            <h3 class="font-heading font-bold text-base text-[#0B192C] mb-1">Pengisian Buku Tamu</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Mengisi buku tamu kedatangan pendaftaran di meja petugas Front Office.</p>
                        </div>

                        <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200/80 relative">
                            <span class="w-8 h-8 rounded-lg bg-[#1E4E8C] text-white font-heading font-bold text-sm flex items-center justify-center mb-3">03</span>
                            <h3 class="font-heading font-bold text-base text-[#0B192C] mb-1">Pengisian Form Formulir</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Mengisi formulir pendaftaran fisik dengan data yang lengkap dan jelas.</p>
                        </div>

                        <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200/80 relative">
                            <span class="w-8 h-8 rounded-lg bg-[#1E4E8C] text-white font-heading font-bold text-sm flex items-center justify-center mb-3">04</span>
                            <h3 class="font-heading font-bold text-base text-[#0B192C] mb-1">Pembayaran Biaya Pendaftaran</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Melakukan pembayaran biaya pendaftaran sesuai jenjang di bendahara & menerima kwitansi bukti pembayaran.</p>
                        </div>

                        <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200/80 relative">
                            <span class="w-8 h-8 rounded-lg bg-[#1E4E8C] text-white font-heading font-bold text-sm flex items-center justify-center mb-3">05</span>
                            <h3 class="font-heading font-bold text-base text-[#0B192C] mb-1">Pengukuran Seragam</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Melakukan pengukuran baju seragam calon santri di kantor Paket Assunnah.</p>
                        </div>

                        <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200/80 relative">
                            <span class="w-8 h-8 rounded-lg bg-[#1E4E8C] text-white font-heading font-bold text-sm flex items-center justify-center mb-3">06</span>
                            <h3 class="font-heading font-bold text-base text-[#0B192C] mb-1">Pelaksanaan Tes Offline</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Mengikuti tes seleksi penerimaan santri baru secara langsung di tempat (One Day Service).</p>
                        </div>
                    </div>

                    <!-- Address Callout Card -->
                    <div class="mt-8 p-6 rounded-2xl bg-[#EFF6FF] border border-[#DBEAFE] flex flex-col sm:flex-row items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <i data-lucide="map-pin" class="w-5 h-5 text-[#1E4E8C] shrink-0 mt-1"></i>
                            <div>
                                <span class="font-bold text-[#0B192C] block">Alamat Sekretariat PPDB Assunnah:</span>
                                <p class="text-xs text-slate-600 leading-relaxed"><?= htmlspecialchars($site['address']) ?></p>
                            </div>
                        </div>

                        <a href="https://maps.google.com/?q=<?= urlencode($site['address']) ?>" target="_blank" rel="noopener" class="px-5 py-2.5 rounded-xl font-heading font-bold text-xs bg-[#1E4E8C] hover:bg-[#122947] text-white transition-all shrink-0 flex items-center gap-2">
                            <span>Petunjuk Arah Maps</span>
                            <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- TAB 3: PORTAL TES ONLINE -->
            <div id="tab-pane-test" class="reg-tab-pane hidden space-y-12 transition-all duration-300">

                <!-- Academic Test Links Container -->
                <div class="bg-white rounded-3xl p-6 sm:p-10 border border-slate-200/90 shadow-md">
                    <div class="max-w-3xl mb-8">
                        <span class="inline-block px-3 py-1 text-xs font-extrabold rounded-full bg-indigo-50 text-indigo-700 border border-indigo-200 uppercase tracking-wider mb-2">
                            Ujian Akademik Online
                        </span>
                        <h2 class="font-heading font-extrabold text-2xl sm:text-3xl text-[#0B192C]">Portal Tes Seleksi Akademis Santri Baru</h2>
                        <p class="text-sm text-slate-600 mt-2 leading-relaxed">
                            Tes akademik dikerjakan secara online dengan durasi **60 menit**. Sebelum memulai, hubungi panitia via WA untuk mendapatkan PIN Tes resmi.
                        </p>
                    </div>

                    <!-- Direct Test Links per Level Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <!-- MTs Test -->
                        <div class="p-6 rounded-2xl bg-white border border-slate-200 hover:border-[#1E4E8C] shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
                            <div>
                                <span class="px-3 py-1 text-[10px] font-extrabold uppercase tracking-wider rounded-full bg-teal-100 text-teal-800 border border-teal-200 inline-block mb-3">
                                    Jenjang MTs
                                </span>
                                <h3 class="font-heading font-extrabold text-xl text-[#0B192C] group-hover:text-[#1E4E8C] transition-colors mb-2">Tes Akademik MTs</h3>
                                <p class="text-xs text-slate-600 leading-relaxed mb-6">Tes seleksi akademis bagi calon santri Madrasah Tsanawiyah Assunnah.</p>
                            </div>

                            <a href="https://bit.ly/43MbFXy" target="_blank" rel="noopener" class="w-full py-3 px-4 rounded-xl font-heading font-bold text-xs bg-[#1E4E8C] hover:bg-[#122947] text-white transition-all flex items-center justify-center gap-2">
                                <span>Mulai Tes MTs</span>
                                <i data-lucide="external-link" class="w-4 h-4"></i>
                            </a>
                        </div>

                        <!-- MA & I'dad Test -->
                        <div class="p-6 rounded-2xl bg-white border border-slate-200 hover:border-[#1E4E8C] shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
                            <div>
                                <span class="px-3 py-1 text-[10px] font-extrabold uppercase tracking-wider rounded-full bg-indigo-100 text-indigo-800 border border-indigo-200 inline-block mb-3">
                                    MA & I'dad Lughoh
                                </span>
                                <h3 class="font-heading font-extrabold text-xl text-[#0B192C] group-hover:text-[#1E4E8C] transition-colors mb-2">Tes MA & I’dad Lughoh</h3>
                                <p class="text-xs text-slate-600 leading-relaxed mb-6">Tes seleksi akademis untuk Madrasah Aliyah dan program persiapan Bahasa Arab.</p>
                            </div>

                            <a href="https://bit.ly/3N0OB0k" target="_blank" rel="noopener" class="w-full py-3 px-4 rounded-xl font-heading font-bold text-xs bg-[#1E4E8C] hover:bg-[#122947] text-white transition-all flex items-center justify-center gap-2">
                                <span>Mulai Tes MA & I'dad</span>
                                <i data-lucide="external-link" class="w-4 h-4"></i>
                            </a>
                        </div>

                        <!-- Ma'had Aly Test -->
                        <div class="p-6 rounded-2xl bg-white border border-slate-200 hover:border-[#1E4E8C] shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
                            <div>
                                <span class="px-3 py-1 text-[10px] font-extrabold uppercase tracking-wider rounded-full bg-amber-100 text-amber-900 border border-amber-200 inline-block mb-3">
                                    Ma'had Aly
                                </span>
                                <h3 class="font-heading font-extrabold text-xl text-[#0B192C] group-hover:text-[#1E4E8C] transition-colors mb-2">Tes Ma’had Aly</h3>
                                <p class="text-xs text-slate-600 leading-relaxed mb-6">Tes seleksi akademis perguruan tinggi kader da'i Ma'had Aly Assunnah.</p>
                            </div>

                            <a href="https://bit.ly/3PNCchP" target="_blank" rel="noopener" class="w-full py-3 px-4 rounded-xl font-heading font-bold text-xs bg-[#1E4E8C] hover:bg-[#122947] text-white transition-all flex items-center justify-center gap-2">
                                <span>Mulai Tes Ma'had Aly</span>
                                <i data-lucide="external-link" class="w-4 h-4"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Important Test Notes -->
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 text-xs text-slate-600 space-y-1.5">
                        <div class="font-bold text-[#0B192C] flex items-center gap-2">
                            <i data-lucide="alert-circle" class="w-4 h-4 text-amber-600"></i> Catatan Pilihan Tes Jenjang Lainnya:
                        </div>
                        <p>• <strong>PG & TKIT</strong>: Tidak ada ujian seleksi / tes masuk.</p>
                        <p>• <strong>SDIT Assunnah</strong>: Tes pemetaan asesmen kompetensi dan BTQ dilaksanakan secara offline di sekolah.</p>
                    </div>
                </div>

                <!-- BTQ & Interview Schedules Section -->
                <div class="bg-white rounded-3xl p-6 sm:p-10 border border-slate-200/90 shadow-md">
                    <div class="max-w-3xl mb-8">
                        <span class="inline-block px-3 py-1 text-xs font-extrabold rounded-full bg-emerald-50 text-emerald-700 border border-emerald-200 uppercase tracking-wider mb-2">
                            Tahap Selanjutnya
                        </span>
                        <h2 class="font-heading font-extrabold text-2xl sm:text-3xl text-[#0B192C]">Tes BTQ & Wawancara Wali Santri</h2>
                        <p class="text-sm text-slate-600 mt-2 leading-relaxed">
                            Silakan isi jadwal pengerjaan tes BTQ serta formulir wawancara wali murid setelah menyelesaikan registrasi.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="p-6 rounded-2xl bg-[#F8FAFC] border border-slate-200 flex flex-col justify-between">
                            <div>
                                <h3 class="font-heading font-bold text-lg text-[#0B192C] mb-2">Form Penjadwalan Tes BTQ</h3>
                                <p class="text-xs text-slate-600 leading-relaxed mb-6">Pilih jadwal waktu tes BTQ dan wawancara yang disesuaikan dengan kesempatan wali murid.</p>
                            </div>
                            <a href="https://bit.ly/3PAGs4g" target="_blank" rel="noopener" class="w-full py-3 px-4 rounded-xl font-heading font-bold text-xs bg-[#1E4E8C] hover:bg-[#122947] text-white transition-all flex items-center justify-center gap-2">
                                <span>Isi Jadwal Tes BTQ</span>
                                <i data-lucide="external-link" class="w-4 h-4"></i>
                            </a>
                        </div>

                        <div class="p-6 rounded-2xl bg-[#F8FAFC] border border-slate-200 flex flex-col justify-between">
                            <div>
                                <h3 class="font-heading font-bold text-lg text-[#0B192C] mb-2">Form Wawancara Wali Murid</h3>
                                <p class="text-xs text-slate-600 leading-relaxed mb-6">Pengisian form wawancara online bagi wali murid (Password dikirim via email nota pendaftaran).</p>
                            </div>
                            <a href="https://bit.ly/43OL0JB" target="_blank" rel="noopener" class="w-full py-3 px-4 rounded-xl font-heading font-bold text-xs bg-[#1E4E8C] hover:bg-[#122947] text-white transition-all flex items-center justify-center gap-2">
                                <span>Isi Form Wawancara</span>
                                <i data-lucide="external-link" class="w-4 h-4"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </main>

    <!-- Footer -->
    <?php require_once __DIR__ . '/layouts/footer.php'; ?>

    <!-- Floating Actions (WhatsApp & Back to top) -->
    <?php require_once __DIR__ . '/components/whatsapp.php'; ?>

    <!-- Tab Switching Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tabBtns = document.querySelectorAll('.reg-tab-btn');
            const tabPanes = document.querySelectorAll('.reg-tab-pane');

            tabBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    const targetTab = btn.getAttribute('data-tab');

                    // Reset buttons
                    tabBtns.forEach(b => {
                        b.classList.remove('bg-[#1E4E8C]', 'text-white', 'shadow-sm');
                        b.classList.add('bg-slate-100', 'text-slate-600');
                    });

                    // Set active button
                    btn.classList.remove('bg-slate-100', 'text-slate-600');
                    btn.classList.add('bg-[#1E4E8C]', 'text-white', 'shadow-sm');

                    // Show target pane
                    tabPanes.forEach(pane => {
                        if (pane.id === `tab-pane-${targetTab}`) {
                            pane.classList.remove('hidden');
                        } else {
                            pane.classList.add('hidden');
                        }
                    });
                });
            });

            // Auto switch tab if URL hash exists (#offline or #test)
            const hash = window.location.hash.replace('#', '');
            if (['online', 'offline', 'test'].includes(hash)) {
                const targetBtn = document.querySelector(`.reg-tab-btn[data-tab="${hash}"]`);
                if (targetBtn) targetBtn.click();
            }
        });
    </script>
</body>
</html>

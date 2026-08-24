<?php
require_once __DIR__ . '/config/site.php';

// Target Countdown Time: 28 Agustus 2026 Jam 23:59:00 (WIB / UTC+7)
$targetIsoDate = '2026-08-28T23:59:00+07:00';
$targetFormatted = 'Jum\'at, 28 Agustus 2026';
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown Pembukaan PPDB 2027/2028 - <?= htmlspecialchars($site['organization']) ?></title>
    <meta name="description" content="Hitung mundur pembukaan Pendaftaran Peserta Didik Baru (PPDB) Yayasan Assunnah Cirebon Tahun Ajaran 2027/2028.">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Outfit:wght@500;600;700;800;900&family=JetBrains+Mono:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        heading: ['"Outfit"', 'sans-serif'],
                        mono: ['"JetBrains Mono"', 'monospace'],
                    }
                }
            }
        }
    </script>

    <!-- Lucide Icons & FontAwesome -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="font-sans antialiased bg-[#F8FAFC] text-slate-800 min-h-screen flex flex-col items-center justify-center p-4 sm:p-6 lg:p-8 relative overflow-x-hidden selection:bg-[#1E4E8C] selection:text-white">

    <!-- Main Content Container (Pure Centered Layout Without Header/Footer) -->
    <main class="relative z-10 w-full max-w-4xl mx-auto my-auto text-center space-y-8 py-8">

        <!-- Logo & Organization Header -->
        <div class="flex items-center justify-center gap-3 mb-2">
            <img src="assets/images/png-logo-high.png" alt="Logo Assunnah Cirebon" class="w-12 h-12 object-contain">
            <div class="text-left">
                <span class="font-heading font-extrabold text-lg sm:text-xl text-[#0B192C] tracking-tight leading-none block">
                    PPDB ASSUNNAH
                </span>
                <span class="text-xs font-bold text-[#1E4E8C] tracking-wider uppercase">
                    Tahun Ajaran 2027/2028
                </span>
            </div>
        </div>

        <!-- Status Pill Badge -->
        <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full text-xs sm:text-sm font-extrabold uppercase tracking-wider bg-amber-50 text-[#8A6A16] border border-amber-200/90 shadow-sm">
            <span class="w-2.5 h-2.5 rounded-full bg-[#D4AF37] animate-ping"></span>
            <span>Hitung Mundur Resmi Pembukaan PPDB</span>
        </div>

        <!-- Main Title & Label -->
        <div class="space-y-3">
            <h1 class="font-heading font-extrabold text-3xl sm:text-5xl lg:text-6xl text-[#0B192C] tracking-tight leading-tight max-w-3xl mx-auto">
                InsyaAllah pembukaan akan dibuka dalam:
            </h1>
            <p class="text-sm sm:text-base text-slate-600 max-w-xl mx-auto font-medium">
                Waktu Target Pembukaan: <strong class="text-[#1E4E8C] font-mono"><?= $targetFormatted ?></strong>
            </p>
        </div>

        <!-- LIVE COUNTDOWN TIMER GRID (Light Theme Cards) -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 sm:gap-6 max-w-3xl mx-auto pt-2">
            <!-- Days Card -->
            <div class="bg-white rounded-3xl p-6 sm:p-8 flex flex-col items-center justify-center border border-slate-200/90 shadow-lg hover:shadow-xl transition-all duration-300 group">
                <span id="cd-days" class="font-mono font-extrabold text-4xl sm:text-6xl lg:text-7xl text-[#1E4E8C] leading-none mb-2">
                    00
                </span>
                <span class="font-heading font-bold text-xs sm:text-sm text-slate-500 uppercase tracking-widest">
                    Hari
                </span>
            </div>

            <!-- Hours Card -->
            <div class="bg-white rounded-3xl p-6 sm:p-8 flex flex-col items-center justify-center border border-slate-200/90 shadow-lg hover:shadow-xl transition-all duration-300 group">
                <span id="cd-hours" class="font-mono font-extrabold text-4xl sm:text-6xl lg:text-7xl text-[#0B192C] leading-none mb-2">
                    00
                </span>
                <span class="font-heading font-bold text-xs sm:text-sm text-slate-500 uppercase tracking-widest">
                    Jam
                </span>
            </div>

            <!-- Minutes Card -->
            <div class="bg-white rounded-3xl p-6 sm:p-8 flex flex-col items-center justify-center border border-slate-200/90 shadow-lg hover:shadow-xl transition-all duration-300 group">
                <span id="cd-minutes" class="font-mono font-extrabold text-4xl sm:text-6xl lg:text-7xl text-[#0B192C] leading-none mb-2">
                    00
                </span>
                <span class="font-heading font-bold text-xs sm:text-sm text-slate-500 uppercase tracking-widest">
                    Menit
                </span>
            </div>

            <!-- Seconds Card -->
            <div class="bg-white rounded-3xl p-6 sm:p-8 flex flex-col items-center justify-center border-2 border-[#1E4E8C]/30 shadow-lg hover:shadow-xl transition-all duration-300 group">
                <span id="cd-seconds" class="font-mono font-extrabold text-4xl sm:text-6xl lg:text-7xl text-[#1E4E8C] leading-none mb-2">
                    00
                </span>
                <span class="font-heading font-bold text-xs sm:text-sm text-[#1E4E8C] uppercase tracking-widest flex items-center gap-1">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#1E4E8C] animate-ping"></span> Detik
                </span>
            </div>
        </div>

        <!-- Expiry Message Container (Hidden by Default) -->
        <div id="cd-opened-msg" class="hidden p-6 rounded-3xl bg-emerald-50 border border-emerald-200 text-[#0B192C] max-w-2xl mx-auto shadow-md">
            <div class="flex items-center justify-center gap-3 mb-2 text-emerald-700 font-heading font-extrabold text-xl">
                <i data-lucide="check-circle-2" class="w-6 h-6"></i>
                <span>Alhamdulillah, Pendaftaran PPDB Telah Resmi Dibuka!</span>
            </div>
            <p class="text-sm text-slate-600 mb-4">Silakan klik tombol di bawah ini untuk memulai pengisian formulir pendaftaran online.</p>
            <a href="daftar.php" class="inline-flex items-center gap-2 px-8 py-3.5 rounded-xl font-heading font-bold text-sm bg-[#1E4E8C] hover:bg-[#122947] text-white shadow-md transition-all">
                <span>Lanjut ke Formulir Pendaftaran</span>
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
        </div>

    </main>

    <!-- REAL-TIME COUNTDOWN JAVASCRIPT TICKER -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Target Time: 28 August 2026 23:59:00 WIB (UTC+7)
            const targetTime = new Date('<?= $targetIsoDate ?>').getTime();

            const daysEl = document.getElementById('cd-days');
            const hoursEl = document.getElementById('cd-hours');
            const minutesEl = document.getElementById('cd-minutes');
            const secondsEl = document.getElementById('cd-seconds');
            const openedMsgEl = document.getElementById('cd-opened-msg');

            function padZero(num) {
                return num < 10 ? '0' + num : num;
            }

            function updateCountdown() {
                const now = new Date().getTime();
                const distance = targetTime - now;

                if (distance <= 0) {
                    daysEl.innerText = '00';
                    hoursEl.innerText = '00';
                    minutesEl.innerText = '00';
                    secondsEl.innerText = '00';

                    if (openedMsgEl) {
                        openedMsgEl.classList.remove('hidden');
                    }
                    return;
                }

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                daysEl.innerText = padZero(days);
                hoursEl.innerText = padZero(hours);
                minutesEl.innerText = padZero(minutes);
                secondsEl.innerText = padZero(seconds);
            }

            // Initial call & Interval 1000ms
            updateCountdown();
            setInterval(updateCountdown, 1000);

            // Initialize Lucide icons
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        });
    </script>
</body>
</html>

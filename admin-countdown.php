<?php
require_once __DIR__ . '/config/site.php';

$message = '';
$messageType = '';

// Helper function for Indonesian date formatting
function formatIndonesianDate($timestamp) {
    $days = [
        'Sunday' => 'Minggu', 'Monday' => 'Senin', 'Tuesday' => 'Selasa',
        'Wednesday' => 'Rabu', 'Thursday' => 'Kamis', 'Friday' => "Jum'at", 'Saturday' => 'Sabtu'
    ];
    $months = [
        1 => 'Agustus', 'Januari', 'Februari', 'Maret', 'April', 'Mei',
        'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    ];
    $actualMonths = [
        1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April', 5 => 'Mei', 6 => 'Juni',
        7 => 'Juli', 8 => 'Agustus', 9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'
    ];

    $dayName = $days[date('l', $timestamp)] ?? date('l', $timestamp);
    $dayNum = date('j', $timestamp);
    $monthNum = (int)date('n', $timestamp);
    $monthName = $actualMonths[$monthNum] ?? date('F', $timestamp);
    $year = date('Y', $timestamp);

    return "{$dayName}, {$dayNum} {$monthName} {$year}";
}

// Ensure WIB Timezone
date_default_timezone_set('Asia/Jakarta');

// Handle Form Action Submit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    
    if ($action === 'toggle_status') {
        $newActiveStatus = !empty($_POST['active_status']);
        $rawPicker = trim($_POST['target_picker'] ?? '');

        if (!empty($rawPicker)) {
            $timestamp = strtotime($rawPicker);
            if ($timestamp !== false) {
                $newDatetime = date('Y-m-d\TH:i:s+07:00', $timestamp);
                $newFormatted = formatIndonesianDate($timestamp);
            } else {
                $newDatetime = trim($_POST['target_datetime'] ?? '2026-08-28T23:59:00+07:00');
                $newFormatted = trim($_POST['target_formatted'] ?? "Jum'at, 28 Agustus 2026");
            }
        } else {
            $newDatetime = trim($_POST['target_datetime'] ?? '2026-08-28T23:59:00+07:00');
            $newFormatted = trim($_POST['target_formatted'] ?? "Jum'at, 28 Agustus 2026");
        }

        // Read site.php content
        $siteFile = __DIR__ . '/config/site.php';
        $content = file_get_contents($siteFile);

        if ($content !== false) {
            $activePhp = $newActiveStatus ? 'true' : 'false';
            $targetDtExport = var_export($newDatetime, true);
            $targetFmtExport = var_export($newFormatted, true);

            $newCountdownBlock = "'countdown' => [\n" .
                "        'active' => {$activePhp},\n" .
                "        'target_datetime' => {$targetDtExport},\n" .
                "        'target_formatted' => {$targetFmtExport}\n" .
                "    ]";

            $content = preg_replace("/'countdown'\s*=>\s*\[[^\]]+\]/s", $newCountdownBlock, $content, 1);

            if (file_put_contents($siteFile, $content)) {
                $message = "Pengaturan Countdown berhasil diperbarui!";
                $messageType = "success";
                // Reload config
                require __DIR__ . '/config/site.php';
            } else {
                $message = "Gagal menyimpan file config/site.php. Periksa izin file.";
                $messageType = "error";
            }
        }
    }
}

$isCountdownActive = !empty($site['countdown']['active']);
$currentDatetime = $site['countdown']['target_datetime'] ?? '2026-08-28T23:59:00+07:00';
$currentFormatted = $site['countdown']['target_formatted'] ?? "Jum'at, 28 Agustus 2026";
$currentPickerValue = date('Y-m-d\TH:i', strtotime($currentDatetime));
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontrol Countdown PPDB Assunnah 2027/2028</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&family=Outfit:wght@600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        h1, h2, h3 { font-family: 'Outfit', sans-serif; }
    </style>
</head>
<body class="bg-slate-100 text-slate-800 min-h-screen flex items-center justify-center p-4">

    <div class="max-w-xl w-full bg-white rounded-3xl p-6 sm:p-8 shadow-xl border border-slate-200">
        
        <!-- Header logo -->
        <div class="flex items-center gap-3 mb-6 pb-6 border-b border-slate-100">
            <img src="assets/images/png-logo-high.png" alt="Logo" class="w-12 h-12 object-contain">
            <div>
                <h1 class="font-extrabold text-xl text-[#0B192C]">Panel Kontrol Countdown PPDB</h1>
                <span class="text-xs text-slate-500 font-semibold">Pengaturan Mode Pre-Launch Website</span>
            </div>
        </div>



        <!-- Current Status Banner -->
        <div class="p-5 rounded-2xl mb-6 <?= $isCountdownActive ? 'bg-amber-50 border border-amber-200 text-amber-900' : 'bg-emerald-50 border border-emerald-200 text-emerald-900' ?> flex items-center justify-between">
            <div class="flex items-center gap-3">
                <span class="w-3 h-3 rounded-full <?= $isCountdownActive ? 'bg-amber-500 animate-ping' : 'bg-emerald-500' ?>"></span>
                <div>
                    <span class="text-xs uppercase font-extrabold tracking-wider block text-slate-500">Status Saat Ini:</span>
                    <strong class="text-base font-extrabold">
                        <?= $isCountdownActive ? 'MODE COUNTDOWN AKTIF' : 'MODE HOMEPAGE LIVE' ?>
                    </strong>
                </div>
            </div>
            
            <span class="px-3 py-1 text-xs font-bold rounded-full <?= $isCountdownActive ? 'bg-amber-200/60 text-amber-900' : 'bg-emerald-200/60 text-emerald-900' ?>">
                <?= $isCountdownActive ? 'Aktif' : 'Non-Aktif' ?>
            </span>
        </div>

        <!-- Form Settings -->
        <form method="POST" class="space-y-5">
            <input type="hidden" name="action" value="toggle_status">

            <!-- Switch Active Toggle -->
            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 flex items-center justify-between">
                <div>
                    <label for="active_status" class="font-extrabold text-sm text-[#0B192C] block">Aktifkan Mode Countdown</label>
                    <span class="text-xs text-slate-500 block mt-0.5">Jika aktif & sebelum tanggal target, pengunjung otomatis melihat halaman countdown.</span>
                </div>
                <input type="checkbox" id="active_status" name="active_status" value="1" <?= $isCountdownActive ? 'checked' : '' ?> class="w-6 h-6 text-[#1E4E8C] rounded border-slate-300 focus:ring-[#1E4E8C] cursor-pointer">
            </div>

            <!-- Date & Time Picker Field -->
            <div>
                <label for="target_picker" class="block text-xs font-extrabold uppercase text-slate-700 mb-1 flex items-center gap-1.5">
                    <i data-lucide="calendar" class="w-4 h-4 text-[#1E4E8C]"></i>
                    <span>Pilih Tanggal & Jam Target (Date and Time Picker)</span>
                </label>
                <input type="datetime-local" id="target_picker" name="target_picker" value="<?= htmlspecialchars($currentPickerValue) ?>" class="w-full px-4 py-3 rounded-xl border border-slate-300 font-sans text-sm focus:ring-2 focus:ring-[#1E4E8C] focus:border-transparent outline-none bg-slate-50">
                <span class="text-[11px] text-slate-500 block mt-1">Pilih tanggal dan jam pembukaan secara langsung dari kalender interaktif.</span>
            </div>

            <!-- Preview Target Values -->
            <div class="p-4 rounded-2xl bg-blue-50/70 border border-blue-200 text-xs text-blue-900 space-y-1">
                <div class="font-bold flex items-center gap-1.5">
                    <i data-lucide="info" class="w-4 h-4 text-[#1E4E8C]"></i>
                    <span>Teks Label Otomatis Terformat:</span>
                </div>
                <p class="font-mono text-sm text-[#0B192C] font-extrabold pt-1">"<?= htmlspecialchars($currentFormatted) ?>"</p>
                <span class="text-[11px] text-slate-500 block">ISO Datetime: <code><?= htmlspecialchars($currentDatetime) ?></code></span>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full py-3.5 px-6 rounded-xl bg-[#1E4E8C] hover:bg-[#122947] text-white font-heading font-extrabold text-sm shadow-md transition-all flex items-center justify-center gap-2 cursor-pointer">
                <i data-lucide="save" class="w-4 h-4"></i>
                <span>Simpan Pengaturan Countdown</span>
            </button>
        </form>

        <!-- Quick Links -->
        <div class="mt-6 pt-6 border-t border-slate-100 flex flex-wrap items-center justify-between gap-3 text-xs">
            <a href="index.php" target="_blank" class="text-[#1E4E8C] hover:underline font-bold flex items-center gap-1">
                <i data-lucide="external-link" class="w-3.5 h-3.5"></i> Buka Website Utama
            </a>

            <a href="index.php?preview_homepage=1" target="_blank" class="text-slate-600 hover:text-slate-900 font-semibold flex items-center gap-1">
                <i data-lucide="eye" class="w-3.5 h-3.5"></i> Preview Homepage (Bypass)
            </a>

            <a href="countdown.php" target="_blank" class="text-slate-600 hover:text-slate-900 font-semibold flex items-center gap-1">
                <i data-lucide="clock" class="w-3.5 h-3.5"></i> Preview Halaman Countdown
            </a>
        </div>

    </div>

    <!-- Floating Premium Light Theme Toast Notification -->
    <?php if (!empty($message)): ?>
    <style>
        @keyframes toastProgress {
            0% { width: 100%; }
            100% { width: 0%; }
        }
        .toast-progress-animate {
            animation: toastProgress 4.5s linear forwards;
        }
    </style>
    <div id="premium-toast" class="fixed top-6 right-6 z-50 max-w-md w-[90vw] sm:w-[380px] bg-white/95 text-slate-800 backdrop-blur-xl rounded-2xl p-4 pt-5 pb-5 shadow-2xl shadow-slate-900/10 border border-slate-200/90 transform translate-y-0 opacity-100 transition-all duration-500 ease-out flex items-start gap-3.5 group overflow-hidden">
        <!-- Top Accent Line -->
        <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r <?= $messageType === 'success' ? 'from-emerald-500 via-teal-500 to-amber-500' : 'from-rose-500 to-pink-500' ?>"></div>
        
        <!-- Icon Badge -->
        <div class="w-10 h-10 rounded-xl <?= $messageType === 'success' ? 'bg-emerald-50 text-emerald-600 border border-emerald-200' : 'bg-rose-50 text-rose-600 border border-rose-200' ?> flex items-center justify-center shrink-0 mt-0.5 shadow-xs">
            <i data-lucide="<?= $messageType === 'success' ? 'check-circle-2' : 'alert-triangle' ?>" class="w-5 h-5"></i>
        </div>

        <!-- Content -->
        <div class="flex-1 pr-2">
            <div class="flex items-center gap-2 mb-0.5">
                <h4 class="font-heading font-extrabold text-sm text-[#0B192C] leading-tight">
                    <?= $messageType === 'success' ? 'Pengaturan Disimpan' : 'Terjadi Kesalahan' ?>
                </h4>
                <span class="px-2 py-0.5 text-[10px] font-extrabold uppercase tracking-wider rounded-md <?= $messageType === 'success' ? 'bg-emerald-100 text-emerald-800 border border-emerald-200' : 'bg-rose-100 text-rose-800 border border-rose-200' ?>">
                    <?= $messageType === 'success' ? 'Sukses' : 'Gagal' ?>
                </span>
            </div>
            <p class="text-xs text-slate-600 font-medium leading-relaxed">
                <?= htmlspecialchars($message) ?>
            </p>
        </div>

        <!-- Close Button -->
        <button type="button" onclick="closeToast()" class="text-slate-400 hover:text-slate-700 p-1.5 rounded-lg hover:bg-slate-100 transition-colors cursor-pointer shrink-0">
            <i data-lucide="x" class="w-4 h-4"></i>
        </button>

        <!-- Bottom Animated Duration Progress Bar -->
        <div class="absolute bottom-0 left-0 right-0 h-1 bg-slate-100/90 overflow-hidden">
            <div class="h-full <?= $messageType === 'success' ? 'bg-gradient-to-r from-emerald-500 to-teal-500' : 'bg-rose-500' ?> toast-progress-animate"></div>
        </div>
    </div>

    <script>
        function closeToast() {
            const toast = document.getElementById('premium-toast');
            if (toast) {
                toast.classList.add('-translate-y-4', 'opacity-0');
                setTimeout(() => toast.remove(), 400);
            }
        }
        setTimeout(closeToast, 4500);
    </script>
    <?php endif; ?>

    <script>
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    </script>
</body>
</html>

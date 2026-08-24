<?php
$waMessage = urlencode("Assalamu'alaikum, saya ingin mendapatkan informasi PPDB Assunnah Cirebon.");
$waUrl = "https://wa.me/{$site['whatsapp_number']}?text={$waMessage}";
?>

<!-- Floating Actions Column (Bottom Right) -->
<div class="fixed bottom-6 right-6 z-40 flex flex-col items-end gap-3">
    
    <!-- Floating Back to Top Button (Above WhatsApp Button) -->
    <div id="back-to-top" class="transition-all duration-300 opacity-0 pointer-events-none">
        <button type="button" 
                id="back-to-top-btn"
                class="w-12 h-12 rounded-full bg-[#0B192C] hover:bg-[#1E4E8C] text-[#E8D595] hover:text-white shadow-2xl border border-white/20 transition-all duration-300 flex items-center justify-center group hover:scale-110 cursor-pointer"
                aria-label="Kembali ke atas">
            <i data-lucide="arrow-up" class="w-6 h-6 group-hover:-translate-y-0.5 transition-transform"></i>
        </button>
    </div>

    <!-- Floating Chat Admin PPDB (Font Awesome WhatsApp Icon) -->
    <a href="<?= htmlspecialchars($waUrl) ?>" 
       target="_blank" 
       rel="noopener" 
       class="wa-float-btn w-14 h-14 sm:w-auto sm:h-auto p-0 sm:px-5 sm:py-3.5 rounded-full bg-[#25D366] hover:bg-[#20ba5a] text-white shadow-2xl transition-all duration-300 flex items-center justify-center sm:justify-start gap-0 sm:gap-3 group hover:scale-105 shrink-0"
       aria-label="Tanya Admin via WhatsApp">
        
        <div class="flex items-center justify-center shrink-0">
            <i class="fa-brands fa-whatsapp text-2xl sm:text-3xl text-white"></i>
        </div>

        <div class="hidden sm:flex flex-col text-left">
            <span class="text-[10px] font-semibold text-slate-100 uppercase tracking-wider leading-none">Ada Pertanyaan?</span>
            <span class="font-heading font-extrabold text-sm text-white leading-tight">Chat Admin PPDB</span>
        </div>
    </a>

</div>




<div class="relative bg-white text-[#1E293B] rounded-3xl p-8 sm:p-14 border border-[#E2E8F0] shadow-xl overflow-hidden text-center max-w-5xl mx-auto">
    <!-- Decorative background glowing shapes -->
    <div class="absolute -top-24 -left-24 w-72 h-72 rounded-full bg-[#DBEAFE]/60 blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-24 -right-24 w-72 h-72 rounded-full bg-[#FDF8E8]/80 blur-3xl pointer-events-none"></div>

    <div class="relative z-10 max-w-3xl mx-auto space-y-6">
        <span class="inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full text-xs font-extrabold uppercase tracking-wider bg-[#0B192C] text-[#E8D595] shadow-xs">
            <i data-lucide="sparkles" class="w-4 h-4"></i> Siap Menjadi Bagian dari Assunnah?
        </span>

        <h2 class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-[#0B192C] leading-tight">
            Wujudkan Pendidikan Islami Terbaik untuk Putra-Putri Anda
        </h2>

        <p class="text-base sm:text-lg text-[#64748B] leading-relaxed font-normal">
            Daftarkan putra-putri Anda sekarang untuk mendapatkan pendidikan yang memadukan keunggulan sains, ilmu syar'i, akidah lurus, dan akhlakul karimah.
        </p>

        <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="<?= htmlspecialchars($site['registration_url']) ?>" class="w-full sm:w-auto px-8 py-4 rounded-xl font-heading font-bold text-base bg-[#1E4E8C] hover:bg-[#0B192C] text-white transition-all shadow-lg hover:shadow-2xl transform hover:-translate-y-0.5 flex items-center justify-center gap-2">
                <i data-lucide="user-plus" class="w-5 h-5"></i>
                <span>Daftar PPDB Online</span>
            </a>

            <a href="https://wa.me/<?= htmlspecialchars($site['whatsapp_number']) ?>?text=<?= urlencode('Assalamu\'alaikum admin PPDB, saya ingin bertanya seputar pendaftaran Assunnah Cirebon.') ?>" target="_blank" class="w-full sm:w-auto px-8 py-4 rounded-xl font-heading font-bold text-base bg-[#25D366] hover:bg-[#20ba5a] text-white transition-all shadow-md flex items-center justify-center gap-2">
                <i class="fa-brands fa-whatsapp text-xl"></i>
                <span>Hubungi Admin PPDB</span>
            </a>
        </div>
    </div>
</div>


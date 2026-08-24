<div class="max-w-4xl mx-auto bg-gradient-to-br from-[#0B192C] via-[#122947] to-[#1E4E8C] text-white rounded-3xl p-8 sm:p-12 border border-[#183B68] shadow-xl relative overflow-hidden flex flex-col md:flex-row items-center gap-8 justify-between">
    <!-- Decorative Circle Overlay -->
    <div class="absolute -top-16 -right-16 w-64 h-64 rounded-full bg-white/5 pointer-events-none"></div>

    <div class="flex-1 space-y-4 text-center md:text-left">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-[#D4AF37] text-[#0B192C] uppercase tracking-wider">
            <i data-lucide="file-text" class="w-3.5 h-3.5"></i> Dokumen Resmi PPDB
        </span>
        <h3 class="font-heading font-extrabold text-2xl sm:text-3xl text-white leading-tight">
            Unduh Brosur Informasi PPDB 2027/2028
        </h3>
        <p class="text-sm text-slate-200 leading-relaxed max-w-xl">
            Dapatkan katalog lengkap mencakup profil yayasan, rincian kurikulum tiap jenjang, fasilitas pesantren, ketentuan seragam, serta jadwal tes pendaftaran.
        </p>
    </div>

    <!-- Download Buttons -->
    <div class="shrink-0 w-full md:w-auto">
        <a href="<?= htmlspecialchars($site['brochure_url'] ?? 'assets/pdf/Brosur PPDB 27-28.pdf') ?>" download target="_blank" class="w-full px-7 py-4 rounded-xl font-heading font-bold text-sm bg-[#D4AF37] hover:bg-[#A17B1E] text-[#0B192C] hover:text-white transition-all shadow-md flex items-center justify-center gap-2.5">
            <i data-lucide="download" class="w-5 h-5"></i>
            <span>Download Brosur PDF</span>
        </a>
    </div>
</div>

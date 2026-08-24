<section id="program" class="pt-12 pb-16 lg:pt-16 lg:pb-20 bg-[#F8FAFC] scroll-mt-0">
    <div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8">
        
        <?php
        $eyebrow = 'PROGRAM PENDIDIKAN';
        $heading = 'Temukan Jenjang Pendidikan Terbaik';
        $description = 'Yayasan Assunnah Cirebon menyelenggarakan jenjang pendidikan berkesinambungan dari anak usia dini hingga perguruan tinggi dengan pembinaan akidah dan karakter islami.';
        require __DIR__ . '/../components/section-header.php';
        ?>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">
            <?php foreach ($programs as $prog): ?>
                <?php require __DIR__ . '/../components/program-card.php'; ?>
            <?php endforeach; ?>
        </div>

    </div>
</section>


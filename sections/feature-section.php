<section id="keunggulan" class="pt-12 pb-16 lg:pt-16 lg:pb-20 bg-[#F1F5F9] scroll-mt-0">
    <div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8">
        
        <?php
        $eyebrow = 'KEUNGGULAN KAMI';
        $heading = 'Mengapa Memilih Assunnah Cirebon?';
        $description = '';
        require __DIR__ . '/../components/section-header.php';
        ?>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($features as $feat): ?>
                <?php require __DIR__ . '/../components/feature-card.php'; ?>
            <?php endforeach; ?>
        </div>

    </div>
</section>

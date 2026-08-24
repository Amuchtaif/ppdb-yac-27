<?php
/**
 * Master Entry Point
 * Website PPDB Assunnah Cirebon 2027/2028
 */

// 1. Load Site & Content Configurations
require_once __DIR__ . '/config/site.php';
require_once __DIR__ . '/config/content.php';

// Check if pre-launch Countdown Mode is active & target datetime is in the future
if (!empty($site['countdown']['active']) && !isset($_GET['preview_homepage'])) {
    $targetTime = strtotime($site['countdown']['target_datetime'] ?? '2026-08-28T23:59:00+07:00');
    if (time() < $targetTime) {
        require __DIR__ . '/countdown.php';
        exit;
    }
}

// 2. Load Head & Header Layouts
require __DIR__ . '/layouts/head.php';
require __DIR__ . '/layouts/header.php';

// 3. Load Main Content Sections
require __DIR__ . '/sections/hero-section.php';
require __DIR__ . '/sections/video-section.php';
require __DIR__ . '/sections/program-section.php';
require __DIR__ . '/sections/about-section.php';
require __DIR__ . '/sections/feature-section.php';
require __DIR__ . '/sections/registration-section.php';
require __DIR__ . '/sections/schedule-section.php';
require __DIR__ . '/sections/pricing-section.php';
require __DIR__ . '/sections/requirement-section.php';
require __DIR__ . '/sections/faq-section.php';
require __DIR__ . '/sections/brochure-section.php';
require __DIR__ . '/sections/gallery-section.php';
require __DIR__ . '/sections/cta-section.php';

// 4. Load Floating WhatsApp Component
require __DIR__ . '/components/whatsapp.php';

// 5. Load Footer & Scripts Layouts
require __DIR__ . '/layouts/footer.php';
require __DIR__ . '/layouts/scripts.php';

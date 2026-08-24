<?php
/**
 * Site Configuration
 * PPDB Assunnah Cirebon 2027/2028
 */

// Set Default Timezone to WIB (Asia/Jakarta, UTC+7)
date_default_timezone_set('Asia/Jakarta');

$site = [
    'name' => 'PPDB Assunnah Cirebon',
    'organization' => 'Yayasan Assunnah Cirebon',
    'academic_year' => '2027/2028',
    'status' => 'Dibuka',
    'title' => 'PPDB Assunnah Cirebon 2027/2028 - Penerimaan Peserta Didik Baru',
    'description' => 'Website resmi Penerimaan Peserta Didik Baru (PPDB) Yayasan Assunnah Cirebon Tahun Ajaran 2027/2028. Jenjang PG & TKIT, SDIT, MTs, MA, I\'dad Lughowi, dan Ma\'had Aly.',
    'url' => (isset($_SERVER['HTTP_HOST']) ? ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST']) : 'http://localhost/ppdb-27-28'),
    'whatsapp_number' => '6281321114500',
    'whatsapp_formatted' => '081 321 114 500',
    'phone' => '081 321 114 500',
    'email' => 'ppdb.assunnahcirebon@gmail.com',
    'address' => 'Jl. Kalitanjung No. 52B, Karyamulya, Kesambi, Kota Cirebon, Jawa Barat 45131',
    'registration_url' => 'daftar.php',
    'brochure_url' => 'assets/pdf/Brosur PPDB 27-28.pdf',
    'countdown_url' => 'countdown.php',
    'countdown' => [
        'active' => true,
        'target_datetime' => '2026-08-24T13:47:00+07:00',
        'target_formatted' => 'Senin, 24 Agustus 2026'
    ],
    'announcement' => [
        'active' => true,
        'badge' => 'PPDB 2027/2028',
        'text' => 'Pendaftaran Peserta Didik Baru Tahun Ajaran 2027/2028 Telah Resmi Dibuka!',
        'cta_text' => 'Daftar Sekarang →',
        'cta_url' => '#daftar'
    ],
    'socials' => [
        'facebook' => 'https://www.facebook.com/assunnahcirebonofficial',
        'instagram' => 'https://www.instagram.com/assunnahcirebonofficial/',
        'youtube' => 'https://www.youtube.com/@Assunnahcirebonofficial'
    ],
    'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.298545802263!2d108.5369!3d-6.7335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNDQnMDAuNiJTIDEwOMKwMzInMTIuOCJF!5e0!3m2!1sid!2sid!4v1620000000000!5m2!1sid!2sid'
];

# System Structure
## Landing Page PPDB Assunnah Cirebon 2027/2028

## 1. Overview

Website ini merupakan **landing page statis/dinamis ringan** untuk PPDB Assunnah Cirebon 2027/2028.

Teknologi:

- PHP Native
- HTML5
- Tailwind CSS
- JavaScript Vanilla
- Bootstrap Icons atau Lucide Icons
- Tidak menggunakan database
- Tidak menggunakan Laravel
- Tidak menggunakan CMS
- Tidak menggunakan authentication

Fokus utama:

```text
Fast
Responsive
SEO Friendly
Easy to Maintain
Easy to Deploy
```

---

# 2. Architecture

Arsitektur sederhana:

```text
Browser
   │
   ▼
PHP Entry Point
   │
   ├── Layout
   ├── Components
   ├── Static Content
   └── Assets
          │
          ├── CSS
          ├── JavaScript
          ├── Images
          └── Documents
```

Karena tidak menggunakan database, semua konten bersifat:

- static HTML;
- PHP array;
- PHP configuration;
- file JSON opsional.

---

# 3. Recommended Folder Structure

```text
ppdb-assunnah/
│
├── index.php
├── .htaccess
├── robots.txt
├── sitemap.xml
├── favicon.ico
│
├── config/
│   ├── site.php
│   └── content.php
│
├── layouts/
│   ├── head.php
│   ├── header.php
│   ├── footer.php
│   └── scripts.php
│
├── components/
│   ├── announcement.php
│   ├── hero.php
│   ├── quick-info.php
│   ├── program-card.php
│   ├── feature-card.php
│   ├── section-header.php
│   ├── timeline.php
│   ├── pricing.php
│   ├── requirement.php
│   ├── faq.php
│   ├── brochure.php
│   ├── gallery.php
│   ├── final-cta.php
│   └── whatsapp.php
│
├── sections/
│   ├── hero-section.php
│   ├── program-section.php
│   ├── about-section.php
│   ├── feature-section.php
│   ├── registration-section.php
│   ├── schedule-section.php
│   ├── pricing-section.php
│   ├── requirement-section.php
│   ├── faq-section.php
│   ├── brochure-section.php
│   ├── gallery-section.php
│   └── cta-section.php
│
├── assets/
│   ├── css/
│   │   └── app.css
│   │
│   ├── js/
│   │   └── app.js
│   │
│   ├── images/
│   │   ├── hero/
│   │   ├── programs/
│   │   ├── gallery/
│   │   └── logo/
│   │
│   └── documents/
│       └── brosur.pdf
│
└── README.md
```

---

# 4. Entry Point

File:

```text
index.php
```

Tugas:

- load configuration;
- load content;
- render layout;
- render seluruh section.

Contoh:

```php
<?php

require_once __DIR__ . '/config/site.php';
require_once __DIR__ . '/config/content.php';

require __DIR__ . '/layouts/head.php';
require __DIR__ . '/layouts/header.php';

require __DIR__ . '/sections/hero-section.php';
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

require __DIR__ . '/layouts/footer.php';
require __DIR__ . '/layouts/scripts.php';
```

---

# 5. Site Configuration

File:

```text
config/site.php
```

Contoh:

```php
<?php

$site = [
    'name' => 'PPDB Assunnah Cirebon',
    'year' => '2027/2028',
    'title' => 'PPDB Assunnah Cirebon 2027/2028',
    'description' => 'Informasi Penerimaan Peserta Didik Baru Assunnah Cirebon Tahun Ajaran 2027/2028.',
    'url' => 'https://ppdb.assunnahcirebon.com',
    'whatsapp' => '628xxxxxxxxxx',
    'registration_url' => '#daftar',
    'logo' => '/assets/images/logo/logo.png',
];
```

Tujuan file ini adalah menyimpan konfigurasi global.

---

# 6. Content Configuration

File:

```text
config/content.php
```

Gunakan PHP array.

Contoh:

```php
<?php

$programs = [
    [
        'name' => 'PG & TKIT',
        'type' => 'Full Day School',
        'description' => 'Pendidikan anak usia dini dengan lingkungan pembelajaran islami.',
        'image' => '/assets/images/programs/tkit.webp',
        'slug' => 'tkit',
    ],

    [
        'name' => 'SDIT',
        'type' => 'Full Day School',
        'description' => 'Pendidikan dasar terpadu dengan pembinaan karakter islami.',
        'image' => '/assets/images/programs/sdit.webp',
        'slug' => 'sdit',
    ],

    [
        'name' => 'MTs',
        'type' => 'Full Day & Boarding',
        'description' => 'Pendidikan menengah dengan pembinaan akademik dan kepesantrenan.',
        'image' => '/assets/images/programs/mts.webp',
        'slug' => 'mts',
    ],
];
```

Dengan pola ini konten dapat diubah tanpa menyentuh struktur HTML component.

---

# 7. Layout System

## Head

File:

```text
layouts/head.php
```

Berisi:

- doctype;
- html;
- meta charset;
- viewport;
- title;
- description;
- Open Graph;
- favicon;
- Tailwind CSS;
- custom CSS.

Contoh:

```php
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title><?= htmlspecialchars($site['title']) ?></title>

    <meta
        name="description"
        content="<?= htmlspecialchars($site['description']) ?>"
    >

    <link
        rel="icon"
        href="/favicon.ico"
    >

    <script src="https://cdn.tailwindcss.com"></script>

    <link
        rel="stylesheet"
        href="/assets/css/app.css"
    >
</head>

<body class="bg-[#F7F9F7] text-[#1D2922]">
```

---

# 8. Header

File:

```text
layouts/header.php
```

Struktur:

```text
Announcement
Navbar
Mobile Menu
```

Navbar:

```text
Logo
Beranda
Profil
Program
PPDB
Biaya
Jadwal
FAQ
[Daftar Sekarang]
```

---

# 9. Footer

File:

```text
layouts/footer.php
```

Berisi:

- logo;
- deskripsi;
- navigasi;
- program;
- kontak;
- alamat;
- copyright.

---

# 10. Section Architecture

Setiap section dibuat sebagai file terpisah.

Contoh:

```text
sections/
├── hero-section.php
├── program-section.php
├── feature-section.php
├── schedule-section.php
└── faq-section.php
```

Keuntungan:

- mudah debugging;
- mudah memindahkan section;
- mudah menghapus section;
- kode tidak menjadi satu file raksasa.

---

# 11. Hero Section

File:

```text
sections/hero-section.php
```

Struktur:

```text
Section
├── Eyebrow
├── H1
├── Description
├── CTA
└── Image
```

Tailwind:

```html
<section
    class="relative overflow-hidden bg-[#063B24] text-white"
>
    <div
        class="mx-auto grid max-w-7xl
               grid-cols-1 items-center gap-12
               px-5 py-16
               lg:grid-cols-2 lg:px-8 lg:py-24"
    >
        ...
    </div>
</section>
```

---

# 12. Quick Info

Component:

```text
components/quick-info.php
```

Data:

```php
$quickInfos = [
    [
        'icon' => 'graduation-cap',
        'label' => 'Jenjang',
        'value' => '6 Program',
    ],
    [
        'icon' => 'calendar',
        'label' => 'Tahun Ajaran',
        'value' => '2027/2028',
    ],
    [
        'icon' => 'file-text',
        'label' => 'Pendaftaran',
        'value' => 'Online',
    ],
    [
        'icon' => 'message-circle',
        'label' => 'Admin',
        'value' => 'WhatsApp',
    ],
];
```

Grid:

```html
<div class="grid grid-cols-2 gap-3 lg:grid-cols-4 lg:gap-5">
```

---

# 13. Program Section

Render data:

```php
foreach ($programs as $program) {
    require __DIR__ . '/../components/program-card.php';
}
```

Program card menggunakan:

```text
Image
Badge
Title
Description
CTA
```

---

# 14. Feature Section

Data:

```php
$features = [
    [
        'title' => 'Kurikulum Terpadu',
        'description' => 'Kurikulum nasional dan kurikulum khas pesantren.',
    ],
    [
        'title' => 'Lingkungan Islami',
        'description' => 'Lingkungan pendidikan yang mendukung pembentukan karakter.',
    ],
    [
        'title' => 'Fasilitas Pendukung',
        'description' => 'Fasilitas pendidikan dan kegiatan siswa yang mendukung proses belajar.',
    ],
];
```

Render dengan:

```php
foreach ($features as $feature) {
    require __DIR__ . '/../components/feature-card.php';
}
```

---

# 15. Registration Flow

Tidak membutuhkan database.

Data:

```php
$registrationSteps = [
    [
        'number' => '01',
        'title' => 'Pilih Jenjang',
    ],
    [
        'number' => '02',
        'title' => 'Cek Persyaratan',
    ],
    [
        'number' => '03',
        'title' => 'Bayar Pendaftaran',
    ],
    [
        'number' => '04',
        'title' => 'Isi Formulir',
    ],
    [
        'number' => '05',
        'title' => 'Ikuti Seleksi',
    ],
    [
        'number' => '06',
        'title' => 'Pengumuman',
    ],
    [
        'number' => '07',
        'title' => 'Daftar Ulang',
    ],
];
```

---

# 16. Schedule

Data static:

```php
$schedules = [
    [
        'date' => 'September 2026',
        'title' => 'Pendaftaran Dibuka',
    ],
    [
        'date' => 'April 2027',
        'title' => 'Seleksi / Pemetaan',
    ],
    [
        'date' => 'Mei 2027',
        'title' => 'Pengumuman',
    ],
    [
        'date' => 'Juli 2027',
        'title' => 'Ta’aruf / MATSAMA',
    ],
];
```

Jadwal dapat diperbarui langsung melalui file:

```text
config/content.php
```

---

# 17. Pricing

Karena tidak menggunakan database, biaya disimpan dalam PHP array.

Contoh:

```php
$pricing = [
    'tkit' => [
        'name' => 'PG & TKIT',
        'registration' => 500000,
        'entrance' => 5000000,
        'monthly' => 750000,
    ],

    'sdit' => [
        'name' => 'SDIT',
        'registration' => 500000,
        'entrance' => 7500000,
        'monthly' => 850000,
    ],
];
```

Rendering menggunakan tab JavaScript.

---

# 18. Requirements

Contoh:

```php
$requirements = [
    'tkit' => [
        'name' => 'PG & TKIT',
        'items' => [
            'Mengisi formulir pendaftaran',
            'Fotokopi dokumen identitas',
            'Memenuhi ketentuan usia',
        ],
    ],

    'sdit' => [
        'name' => 'SDIT',
        'items' => [
            'Mengisi formulir pendaftaran',
            'Dokumen calon peserta didik',
            'Mengikuti proses seleksi',
        ],
    ],
];
```

Ditampilkan sebagai accordion.

---

# 19. FAQ

Data:

```php
$faqs = [
    [
        'question' => 'Kapan pendaftaran dibuka?',
        'answer' => 'Pendaftaran mengikuti jadwal resmi PPDB 2027/2028.',
    ],
    [
        'question' => 'Bagaimana cara mendaftar?',
        'answer' => 'Pendaftaran dilakukan melalui sistem pendaftaran online.',
    ],
];
```

JavaScript hanya digunakan untuk membuka/tutup accordion.

---

# 20. Gallery

Tidak perlu database.

Struktur:

```text
assets/images/gallery/
├── kegiatan-01.webp
├── kegiatan-02.webp
├── kegiatan-03.webp
├── fasilitas-01.webp
└── fasilitas-02.webp
```

PHP:

```php
$gallery = [
    '/assets/images/gallery/kegiatan-01.webp',
    '/assets/images/gallery/kegiatan-02.webp',
    '/assets/images/gallery/kegiatan-03.webp',
];
```

---

# 21. Brochure

File:

```text
assets/documents/brosur-ppdb-2027-2028.pdf
```

CTA:

```html
<a
    href="/assets/documents/brosur-ppdb-2027-2028.pdf"
    target="_blank"
    class="..."
>
    Lihat Brosur
</a>
```

---

# 22. WhatsApp

Nomor disimpan di:

```text
config/site.php
```

PHP:

```php
$whatsappMessage = urlencode(
    'Assalamu’alaikum, saya ingin mendapatkan informasi PPDB Assunnah Cirebon.'
);

$whatsappUrl =
    "https://wa.me/{$site['whatsapp']}?text={$whatsappMessage}";
```

Button:

```html
<a
    href="<?= htmlspecialchars($whatsappUrl) ?>"
    target="_blank"
    rel="noopener"
>
    Tanya Admin
</a>
```

---

# 23. Tailwind Configuration

Untuk production sebaiknya gunakan Tailwind CLI, bukan CDN.

Install:

```bash
npm install -D tailwindcss
npx tailwindcss init
```

Struktur:

```text
tailwind.config.js
```

Contoh:

```js
/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './*.php',
        './config/**/*.php',
        './layouts/**/*.php',
        './components/**/*.php',
        './sections/**/*.php',
    ],

    theme: {
        extend: {
            colors: {
                primary: {
                    900: '#063B24',
                    800: '#08472C',
                    700: '#0A5A36',
                    600: '#0F6B42',
                    500: '#168653',
                    400: '#36A56F',
                    100: '#DDF3E7',
                    50: '#F1FAF4',
                },

                gold: {
                    700: '#8A6A16',
                    600: '#A17B1E',
                    500: '#C8A951',
                    300: '#E4D39A',
                    100: '#F7F1DD',
                },
            },

            fontFamily: {
                heading: ['Plus Jakarta Sans', 'sans-serif'],
                body: ['Inter', 'sans-serif'],
            },

            maxWidth: {
                site: '1200px',
            },
        },
    },

    plugins: [],
};
```

---

# 24. Tailwind Input CSS

File:

```text
assets/css/app.css
```

Isi:

```css
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700&display=swap');

@tailwind base;
@tailwind components;
@tailwind utilities;

@layer base {
    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: 'Inter', sans-serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Plus Jakarta Sans', sans-serif;
    }
}

@layer components {
    .container-site {
        @apply mx-auto w-full max-w-site px-5 lg:px-8;
    }

    .section {
        @apply py-16 lg:py-24;
    }

    .section-header {
        @apply mx-auto mb-10 max-w-3xl text-center lg:mb-14;
    }

    .eyebrow {
        @apply mb-3 text-sm font-semibold uppercase tracking-[0.14em] text-primary-600;
    }

    .btn-primary {
        @apply inline-flex min-h-12 items-center justify-center rounded-xl
               bg-primary-600 px-6 py-3 font-semibold text-white
               transition hover:bg-primary-700
               focus:outline-none focus:ring-4 focus:ring-primary-100;
    }

    .btn-secondary {
        @apply inline-flex min-h-12 items-center justify-center rounded-xl
               border border-primary-600 px-6 py-3 font-semibold text-primary-700
               transition hover:bg-primary-50
               focus:outline-none focus:ring-4 focus:ring-primary-100;
    }

    .card {
        @apply rounded-2xl border border-gray-200 bg-white shadow-sm;
    }
}
```

---

# 25. Build Tailwind

Tambahkan script:

```json
{
    "scripts": {
        "dev": "tailwindcss -i ./assets/css/app.css -o ./public/css/app.css --watch",
        "build": "tailwindcss -i ./assets/css/app.css -o ./public/css/app.css --minify"
    }
}
```

Jika struktur deployment menggunakan folder `assets`, output dapat diarahkan ke:

```bash
npx tailwindcss \
    -i ./assets/css/app.css \
    -o ./assets/css/build.css \
    --minify
```

Production menggunakan:

```html
<link rel="stylesheet" href="/assets/css/build.css">
```

---

# 26. JavaScript

File:

```text
assets/js/app.js
```

Hanya gunakan Vanilla JS.

Fitur:

- mobile menu;
- sticky navbar;
- accordion;
- pricing tabs;
- gallery lightbox;
- scroll animation;
- active navigation;
- optional countdown.

Tidak membutuhkan framework JS.

---

# 27. Mobile Menu

HTML:

```html
<button
    id="mobile-menu-button"
    type="button"
    aria-label="Buka menu"
>
    ...
</button>
```

Menu:

```html
<nav id="mobile-menu" class="hidden">
    ...
</nav>
```

JavaScript:

```js
const button = document.getElementById('mobile-menu-button');
const menu = document.getElementById('mobile-menu');

button?.addEventListener('click', () => {
    menu.classList.toggle('hidden');
});
```

---

# 28. Accordion

HTML:

```html
<button
    class="faq-trigger flex w-full items-center justify-between"
    aria-expanded="false"
>
    <span>Pertanyaan?</span>
    <span>+</span>
</button>

<div class="faq-content hidden">
    Jawaban...
</div>
```

JavaScript menangani:

```text
open
close
aria-expanded
icon rotation
```

---

# 29. Pricing Tabs

Tab:

```text
PG/TKIT
SDIT
MTs
MA
I'DAD
MA'HAD ALY
```

Mobile:

```text
overflow-x-auto
```

JavaScript:

```text
click tab
↓
hide all content
↓
show selected content
↓
update active state
```

---

# 30. SEO

File:

```text
robots.txt
sitemap.xml
```

Meta:

```html
<title>PPDB Assunnah Cirebon 2027/2028</title>

<meta
    name="description"
    content="Informasi PPDB Assunnah Cirebon Tahun Ajaran 2027/2028."
>

<meta property="og:type" content="website">
<meta property="og:title" content="PPDB Assunnah Cirebon 2027/2028">
<meta property="og:description" content="Informasi Penerimaan Peserta Didik Baru Assunnah Cirebon.">
<meta property="og:image" content="/assets/images/hero/og-image.webp">
```

---

# 31. Structured Data

Tambahkan JSON-LD untuk organisasi/pendidikan.

Contoh:

```html
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "EducationalOrganization",
    "name": "Yayasan Assunnah Cirebon",
    "url": "https://ppdb.assunnahcirebon.com"
}
</script>
```

---

# 32. Performance

Karena landing page tidak menggunakan database, target performance harus tinggi.

Wajib:

- WebP/AVIF;
- lazy loading;
- width/height image;
- minified CSS;
- minified JS;
- preload hero image;
- font loading optimal;
- hindari library besar.

Image:

```html
<img
    src="/assets/images/programs/sdit.webp"
    alt="SDIT Assunnah Cirebon"
    width="640"
    height="400"
    loading="lazy"
>
```

Hero image:

```html
loading="eager"
fetchpriority="high"
```

---

# 33. Security

Walaupun tidak menggunakan database, tetap lakukan:

- escape output PHP;
- gunakan `htmlspecialchars()`;
- jangan menerima file upload;
- jangan menggunakan `eval()`;
- jangan menampilkan error PHP production;
- gunakan HTTPS;
- gunakan security headers;
- validasi semua query parameter jika digunakan.

Contoh:

```php
<?= htmlspecialchars($program['name'], ENT_QUOTES, 'UTF-8') ?>
```

---

# 34. Apache Configuration

Jika menggunakan Apache:

```apache
Options -Indexes

<IfModule mod_headers.c>
    Header always set X-Content-Type-Options "nosniff"
    Header always set X-Frame-Options "SAMEORIGIN"
    Header always set Referrer-Policy "strict-origin-when-cross-origin"
</IfModule>

<IfModule mod_rewrite.c>
    RewriteEngine On

    RewriteCond %{HTTPS} !=on
    RewriteRule ^ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
</IfModule>
```

---

# 35. Deployment

Karena PHP Native:

```text
Upload files
↓
Configure web server
↓
Point document root
↓
Upload assets
↓
Test PHP
↓
Test HTTPS
↓
Production
```

Tidak membutuhkan:

- migration;
- database;
- queue;
- worker;
- cron;
- authentication.

---

# 36. Local Development

Jika menggunakan PHP built-in server:

```bash
php -S localhost:8000
```

Kemudian:

```text
http://localhost:8000
```

Tailwind development:

```bash
npm run dev
```

Production:

```bash
npm run build
```

---

# 37. Recommended Development Workflow

## Step 1

Buat struktur folder.

## Step 2

Buat `config/site.php`.

## Step 3

Buat `config/content.php`.

## Step 4

Implementasi Tailwind.

## Step 5

Implementasi layout:

```text
head
header
footer
```

## Step 6

Implementasi hero.

## Step 7

Implementasi program.

## Step 8

Implementasi feature.

## Step 9

Implementasi registration flow.

## Step 10

Implementasi schedule.

## Step 11

Implementasi pricing.

## Step 12

Implementasi requirements.

## Step 13

Implementasi FAQ.

## Step 14

Implementasi brochure.

## Step 15

Implementasi gallery.

## Step 16

Implementasi final CTA.

## Step 17

Implementasi responsive.

## Step 18

SEO & performance.

## Step 19

Testing.

## Step 20

Deployment.

---

# 38. Component Rules

Setiap component:

- hanya menangani satu fungsi;
- tidak menyimpan data bisnis;
- menerima data dari section/config;
- tidak memiliki query database;
- tidak memiliki logic kompleks.

Contoh:

```text
config/content.php
        ↓
section
        ↓
component
        ↓
HTML
```

Bukan:

```text
component
   ↓
mengandung data
   ↓
mengandung logic
   ↓
mengandung HTML
   ↓
mengandung JavaScript
```

---

# 39. Content Management Tanpa Database

Karena website hanya landing page, update dilakukan pada:

```text
config/content.php
```

Contoh perubahan tahun:

```php
$site['year'] = '2027/2028';
```

Perubahan CTA:

```php
$site['registration_url'] = 'https://...';
```

Perubahan WhatsApp:

```php
$site['whatsapp'] = '628xxxxxxxxxx';
```

Perubahan jadwal:

```php
$schedules = [
    ...
];
```

Perubahan biaya:

```php
$pricing = [
    ...
];
```

Dengan demikian developer hanya perlu mengubah satu file untuk konten utama.

---

# 40. Recommended Final Structure

```text
ppdb-assunnah/
│
├── index.php
│
├── config/
│   ├── site.php
│   └── content.php
│
├── layouts/
│   ├── head.php
│   ├── header.php
│   ├── footer.php
│   └── scripts.php
│
├── sections/
│   ├── hero-section.php
│   ├── program-section.php
│   ├── about-section.php
│   ├── feature-section.php
│   ├── registration-section.php
│   ├── schedule-section.php
│   ├── pricing-section.php
│   ├── requirement-section.php
│   ├── faq-section.php
│   ├── brochure-section.php
│   ├── gallery-section.php
│   └── cta-section.php
│
├── components/
│   ├── section-header.php
│   ├── program-card.php
│   ├── feature-card.php
│   ├── quick-info.php
│   ├── timeline.php
│   ├── pricing.php
│   ├── requirement.php
│   ├── faq.php
│   ├── brochure.php
│   ├── gallery.php
│   └── whatsapp.php
│
├── assets/
│   ├── css/
│   │   ├── app.css
│   │   └── build.css
│   │
│   ├── js/
│   │   └── app.js
│   │
│   ├── images/
│   │   ├── logo/
│   │   ├── hero/
│   │   ├── programs/
│   │   └── gallery/
│   │
│   └── documents/
│       └── brosur.pdf
│
├── public/
│
├── package.json
├── tailwind.config.js
├── robots.txt
├── sitemap.xml
├── favicon.ico
└── README.md
```

---

# 41. Acceptance Criteria

- [ ] Website berjalan tanpa database.
- [ ] Website berjalan menggunakan PHP Native.
- [ ] Tailwind CSS digunakan sebagai styling utama.
- [ ] HTML menggunakan semantic markup.
- [ ] Homepage responsive.
- [ ] Mobile menu berfungsi.
- [ ] FAQ accordion berfungsi.
- [ ] Pricing tabs berfungsi.
- [ ] Gallery/lightbox berfungsi.
- [ ] WhatsApp CTA berfungsi.
- [ ] Brosur dapat dibuka/download.
- [ ] Semua konten utama dapat diubah dari `config/content.php`.
- [ ] Tidak ada query database.
- [ ] Tidak ada authentication.
- [ ] Tidak ada framework backend.
- [ ] CSS production sudah diminify.
- [ ] JavaScript production sudah diminify.
- [ ] Image sudah optimized.
- [ ] SEO dasar tersedia.
- [ ] Open Graph tersedia.
- [ ] JSON-LD tersedia.
- [ ] HTTPS aktif.
- [ ] Security headers tersedia.
- [ ] Lighthouse Performance ditargetkan >90.
- [ ] Website dapat di-deploy pada shared hosting PHP biasa.

---

# 42. Final Technical Direction

Stack final:

```text
PHP Native
    +
HTML5
    +
Tailwind CSS
    +
Vanilla JavaScript
    +
WebP/AVIF
    +
Apache/Nginx
```

Tidak digunakan:

```text
Laravel
Filament
MySQL
WordPress
CMS
React
Vue
jQuery
```

Untuk kebutuhan landing page PPDB, arsitektur ini lebih sederhana, murah untuk hosting, mudah dipindahkan, dan minim dependency.

Struktur tetap modular sehingga apabila suatu hari website berkembang menjadi sistem PPDB penuh, frontend ini dapat dipertahankan dan backend/database ditambahkan kemudian.

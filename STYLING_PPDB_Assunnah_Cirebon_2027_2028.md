# Styling & Design System
## Website PPDB Assunnah Cirebon 2027/2028

Dokumen ini menjadi acuan visual dan UI untuk implementasi website PPDB Assunnah Cirebon 2027/2028.

Tujuan utama design system:

- menjaga konsistensi visual seluruh halaman;
- mempercepat implementasi frontend;
- memastikan komponen memiliki pola yang sama;
- memudahkan maintenance;
- menjaga identitas visual tetap profesional, modern, islami, dan berorientasi pendidikan.

---

# 1. Design Direction

## 1.1 Visual Concept

**Modern Islamic Education**

Karakter visual:

- modern;
- bersih;
- profesional;
- hangat;
- akademis;
- islami secara subtle;
- tidak terlalu ornamental;
- menggunakan fotografi sebagai elemen emosional;
- whitespace cukup luas;
- rounded corner moderat;
- hierarchy typography jelas.

### Prinsip

> Trust first, information second, conversion third.

Pengunjung harus terlebih dahulu merasa website resmi dan terpercaya, kemudian menemukan informasi yang dibutuhkan, lalu diarahkan ke pendaftaran.

---

# 2. Brand Personality

Website harus terasa:

| Karakter | Implementasi |
|---|---|
| Terpercaya | Layout rapi, typography kuat, informasi jelas |
| Islami | Hijau sebagai warna utama, aksen gold |
| Modern | Card, grid, whitespace, subtle animation |
| Pendidikan | Foto siswa, guru, kelas, fasilitas |
| Ramah | Copywriting sederhana dan CTA jelas |
| Profesional | Konsistensi spacing dan komponen |

Hindari:

- terlalu banyak ornamen islami;
- gradient berlebihan;
- shadow terlalu berat;
- warna terlalu banyak;
- typography dekoratif untuk body text;
- animasi berlebihan;
- layout yang terlalu padat.

---

# 3. Color System

## 3.1 Primary

| Token | Hex | Penggunaan |
|---|---|---|
| Primary 900 | `#063B24` | Heading pada area hijau, dark section |
| Primary 800 | `#08472C` | Hover/dark state |
| Primary 700 | `#0A5A36` | Primary dark |
| Primary 600 | `#0F6B42` | Primary |
| Primary 500 | `#168653` | Interactive |
| Primary 400 | `#36A56F` | Accent ringan |
| Primary 100 | `#DDF3E7` | Background |
| Primary 50 | `#F1FAF4` | Surface |

Warna utama website adalah hijau.

---

## 3.2 Secondary / Gold

Gold hanya digunakan sebagai accent.

| Token | Hex | Penggunaan |
|---|---|---|
| Gold 700 | `#8A6A16` | Text accent |
| Gold 600 | `#A17B1E` | Icon/accent |
| Gold 500 | `#C8A951` | Primary accent |
| Gold 300 | `#E4D39A` | Border/accent soft |
| Gold 100 | `#F7F1DD` | Background |

Jangan menggunakan gold sebagai background utama halaman.

---

## 3.3 Neutral

| Token | Hex | Penggunaan |
|---|---|---|
| Black | `#101713` | Heading |
| Text | `#1D2922` | Body text |
| Text Muted | `#68756D` | Secondary text |
| Border | `#E2E8E4` | Border |
| Surface | `#FFFFFF` | Card |
| Background | `#F7F9F7` | Main background |
| Background Alt | `#EEF4F0` | Alternate section |
| Dark | `#0B2117` | Footer |

---

## 3.4 Semantic Colors

| Status | Color |
|---|---|
| Success | `#198754` |
| Warning | `#D39E00` |
| Danger | `#C0392B` |
| Info | `#2878A8` |

---

# 4. CSS Design Tokens

Gunakan CSS variables sebagai single source of truth.

```css
:root {
    --color-primary-900: #063B24;
    --color-primary-800: #08472C;
    --color-primary-700: #0A5A36;
    --color-primary-600: #0F6B42;
    --color-primary-500: #168653;
    --color-primary-400: #36A56F;
    --color-primary-100: #DDF3E7;
    --color-primary-50: #F1FAF4;

    --color-gold-700: #8A6A16;
    --color-gold-600: #A17B1E;
    --color-gold-500: #C8A951;
    --color-gold-300: #E4D39A;
    --color-gold-100: #F7F1DD;

    --color-black: #101713;
    --color-text: #1D2922;
    --color-text-muted: #68756D;
    --color-border: #E2E8E4;
    --color-surface: #FFFFFF;
    --color-background: #F7F9F7;
    --color-background-alt: #EEF4F0;
    --color-dark: #0B2117;

    --color-success: #198754;
    --color-warning: #D39E00;
    --color-danger: #C0392B;
    --color-info: #2878A8;

    --font-heading: "Plus Jakarta Sans", sans-serif;
    --font-body: "Inter", sans-serif;

    --radius-sm: 8px;
    --radius-md: 12px;
    --radius-lg: 18px;
    --radius-xl: 24px;
    --radius-pill: 999px;

    --shadow-sm: 0 2px 8px rgba(16, 23, 19, 0.06);
    --shadow-md: 0 8px 24px rgba(16, 23, 19, 0.08);
    --shadow-lg: 0 16px 40px rgba(16, 23, 19, 0.12);

    --container-width: 1200px;

    --space-1: 4px;
    --space-2: 8px;
    --space-3: 12px;
    --space-4: 16px;
    --space-5: 20px;
    --space-6: 24px;
    --space-8: 32px;
    --space-10: 40px;
    --space-12: 48px;
    --space-16: 64px;
    --space-20: 80px;
    --space-24: 96px;
}
```

---

# 5. Typography

## 5.1 Font

### Heading

**Plus Jakarta Sans**

Digunakan untuk:

- H1;
- H2;
- H3;
- navigation;
- card title;
- CTA.

### Body

**Inter**

Digunakan untuk:

- paragraph;
- description;
- table;
- FAQ;
- metadata.

---

# 6. Type Scale

| Element | Desktop | Mobile | Weight |
|---|---:|---:|---:|
| Display | 64px | 40px | 700 |
| H1 | 52px | 36px | 700 |
| H2 | 40px | 30px | 700 |
| H3 | 28px | 24px | 700 |
| H4 | 22px | 20px | 600 |
| Body Large | 18px | 17px | 400 |
| Body | 16px | 16px | 400 |
| Body Small | 14px | 14px | 400 |
| Caption | 12px | 12px | 500 |

---

# 7. Typography Rules

## Heading

Gunakan line-height sekitar:

```css
line-height: 1.15;
```

## Body

Gunakan:

```css
line-height: 1.7;
```

## Paragraph Width

Paragraph panjang maksimal:

```css
max-width: 720px;
```

Tujuannya menjaga readability.

---

# 8. Layout System

## Container

Desktop:

```css
max-width: 1200px;
margin-inline: auto;
padding-inline: 24px;
```

Mobile:

```css
padding-inline: 20px;
```

---

# 9. Section Spacing

Desktop:

```text
Section top/bottom
80px - 96px
```

Tablet:

```text
64px
```

Mobile:

```text
48px - 64px
```

Section jangan dibuat terlalu rapat.

---

# 10. Grid System

## Desktop

12-column grid.

```text
12 columns
24px gutter
```

## Tablet

6-column grid.

## Mobile

1-column grid.

---

# 11. Border Radius

Gunakan:

```text
Small       8px
Medium      12px
Large       18px
Extra Large 24px
Pill        999px
```

Jangan menggunakan radius berbeda-beda tanpa alasan.

---

# 12. Shadow

Gunakan shadow secara subtle.

### Small

```css
box-shadow: 0 2px 8px rgba(16, 23, 19, .06);
```

### Medium

```css
box-shadow: 0 8px 24px rgba(16, 23, 19, .08);
```

### Large

```css
box-shadow: 0 16px 40px rgba(16, 23, 19, .12);
```

Hindari shadow hitam pekat.

---

# 13. Navbar

## Desktop

Struktur:

```text
LOGO

Beranda
Profil
Program
PPDB
Biaya
Jadwal
FAQ

[ Daftar Sekarang ]
```

### Behavior

- sticky;
- background putih;
- border-bottom tipis;
- berubah menjadi compact saat scrolling.

### Height

```text
72px - 80px
```

---

# 14. Announcement Bar

Background:

```text
Primary 900
```

Text:

```text
White
```

Accent:

```text
Gold 500
```

Layout:

```text
PPDB 2027/2028 Telah Dibuka
[ Daftar Sekarang → ]
```

Tinggi:

```text
40px - 44px
```

---

# 15. Hero

## Layout

Desktop:

```text
50% content
50% visual
```

Mobile:

```text
content
visual
```

### Background

Gunakan:

- foto siswa;
- aktivitas sekolah;
- lingkungan sekolah.

Foto menggunakan overlay gradient.

### Headline

Ukuran desktop:

```text
52px - 64px
```

Mobile:

```text
36px
```

### CTA

Primary:

```text
Daftar Sekarang
```

Secondary:

```text
Lihat Program
```

---

# 16. Quick Info Cards

Empat card horizontal pada desktop.

Mobile:

2 x 2.

Card:

```text
Icon
Label
Value
Description
```

Contoh:

```text
🎓
6 Jenjang
Pendidikan
```

Background putih.

Border:

```text
1px solid var(--color-border)
```

---

# 17. Program Card

Card terdiri dari:

```text
Image
Badge
Title
Description
Meta
CTA
```

### Image

Aspect ratio:

```text
16 / 10
```

### Hover

- image scale 1.03;
- card naik 2-4px;
- shadow meningkat sedikit.

Durasi:

```text
200ms - 250ms
```

---

# 18. Feature Card

Feature card lebih sederhana.

```text
Icon
Title
Description
```

Tidak perlu image.

Gunakan icon dengan background:

```text
Primary 50
```

Icon:

```text
Primary 600
```

---

# 19. Section Header

Setiap section menggunakan pola:

```text
Eyebrow
Heading
Description
```

Contoh:

```text
PROGRAM PENDIDIKAN

Temukan Jenjang Pendidikan
yang Tepat

Pilih program pendidikan yang sesuai...
```

Eyebrow:

- uppercase;
- 12px-14px;
- letter spacing;
- gold atau primary.

---

# 20. Buttons

## Primary

```text
Background: Primary 600
Text: White
Radius: 10px
Height: 48px
Padding: 16px 24px
```

Hover:

```text
Primary 700
```

---

## Secondary

```text
Background: Transparent
Border: Primary 600
Text: Primary 700
```

Hover:

```text
Background: Primary 50
```

---

## Gold Accent

Digunakan secara terbatas.

```text
Background: Gold 500
Text: Primary 900
```

Jangan menggunakan gold sebagai CTA utama di seluruh halaman.

---

# 21. Button States

Semua button harus memiliki:

- default;
- hover;
- active;
- focus;
- disabled;
- loading jika melakukan request.

Focus:

```css
outline: 3px solid rgba(22, 134, 83, .25);
outline-offset: 2px;
```

---

# 22. Pricing Section

Gunakan tab berdasarkan jenjang.

```text
PG/TKIT | SDIT | MTs | MA | I'DAD | MA'HAD ALY
```

Active tab:

```text
Primary 600
White text
```

Inactive:

```text
Background transparent
Text muted
```

### Price Card

Tampilkan:

```text
Total Biaya Masuk

Rp XX.XXX.XXX

Biaya Pendaftaran
Rp XXX.XXX

SPP
Rp X.XXX.XXX

[ Lihat Rincian ]
```

Angka total harus menjadi visual paling dominan.

---

# 23. Accordion

Digunakan untuk:

- persyaratan;
- FAQ;
- rincian biaya.

Header:

```text
Question / Title                       +
```

Expanded:

```text
Question / Title                       −

Content...
```

Transition:

```text
200ms - 250ms
```

---

# 24. Registration Timeline

Desktop:

```text
01 ───── 02 ───── 03 ───── 04 ───── 05 ───── 06
```

Mobile:

```text
01
│
02
│
03
│
04
│
05
│
06
```

Circle:

```text
48px
```

Active:

```text
Primary 600
```

Completed:

```text
Primary 500
```

Upcoming:

```text
Border
```

---

# 25. Schedule Timeline

Gunakan vertical timeline.

Setiap event:

```text
Date
Title
Description
Status
```

Current event diberi accent.

---

# 26. Gallery

Desktop:

```text
4 columns
```

Tablet:

```text
3 columns
```

Mobile:

```text
2 columns
```

Image:

```text
aspect-ratio: 1 / 1;
object-fit: cover;
```

Hover:

- scale;
- overlay;
- zoom icon.

Klik:

Lightbox.

---

# 27. Brochure

Gunakan card besar.

```text
┌───────────────────────┐
│                       │
│     BROCHURE          │
│                       │
│       PREVIEW         │
│                       │
└───────────────────────┘

[ Lihat Brosur ]

[ Download PDF ]
```

Pada mobile, preview harus tetap mudah dibaca.

---

# 28. WhatsApp Floating Button

Position:

```text
fixed
right: 20px
bottom: 20px
```

Ukuran:

```text
56px
```

Desktop dapat menampilkan:

```text
💬 Tanya Admin
```

Mobile:

```text
icon only
```

Pastikan tidak menutupi CTA penting.

---

# 29. Final CTA

Gunakan background:

```text
Primary 900
```

Layout:

```text
Heading
Description

[ Daftar Sekarang ]
[ Hubungi Admin ]
```

Tambahkan elemen dekoratif sangat subtle, misalnya pattern geometris transparan.

---

# 30. Footer

Background:

```text
Dark
```

Text:

```text
White / White 70%
```

Layout desktop:

```text
Brand       Navigasi       Program       Kontak
```

Mobile:

```text
Brand
Navigasi
Program
Kontak
```

Bottom:

```text
Copyright                         Social Icons
```

---

# 31. Responsive Breakpoints

Gunakan Bootstrap-compatible breakpoint.

```text
XS   < 576px
SM   ≥ 576px
MD   ≥ 768px
LG   ≥ 992px
XL   ≥ 1200px
XXL  ≥ 1400px
```

Prioritas desain:

1. Mobile 360px
2. Mobile 390px
3. Tablet 768px
4. Desktop 1280px
5. Large desktop 1440px

---

# 32. Mobile Rules

Pada mobile:

- navbar menjadi hamburger;
- hero menjadi vertical;
- grid menjadi 1 column;
- quick info menjadi 2 column;
- pricing tab dapat horizontal scroll;
- timeline menjadi vertical;
- CTA tetap mudah dijangkau;
- font heading mengecil;
- section spacing dikurangi;
- tabel kompleks diganti card/accordion.

---

# 33. Animation

Animasi harus subtle.

Gunakan:

```text
fade-up
fade-in
scale
slide
```

Durasi:

```text
200ms - 500ms
```

Easing:

```text
ease-out
```

Jangan membuat setiap elemen bergerak ketika halaman dibuka.

### Recommended

Hero:

```text
fade-up
```

Card:

```text
fade-up stagger
```

Image:

```text
scale on hover
```

Accordion:

```text
height transition
```

---

# 34. Reduced Motion

Hormati:

```css
@media (prefers-reduced-motion: reduce) {
    *,
    *::before,
    *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        scroll-behavior: auto !important;
        transition-duration: 0.01ms !important;
    }
}
```

---

# 35. Iconography

Gunakan satu icon library secara konsisten.

Rekomendasi:

**Bootstrap Icons**

atau

**Lucide Icons**

Jangan mencampur banyak gaya icon.

Icon:

- outline;
- sederhana;
- stroke konsisten;
- tidak terlalu dekoratif.

---

# 36. Image Guidelines

Foto harus terasa:

- natural;
- profesional;
- terang;
- relevan dengan pendidikan;
- memperlihatkan aktivitas nyata.

Prioritas:

1. siswa;
2. guru;
3. pembelajaran;
4. fasilitas;
5. kegiatan pesantren;
6. kegiatan PPDB.

Hindari stock photo yang terlalu generik.

---

# 37. Image Treatment

Foto card:

```css
object-fit: cover;
border-radius: var(--radius-lg);
```

Hero:

```text
dark overlay
```

Gallery:

```text
minimal overlay
```

Jangan menggunakan filter warna yang membuat foto sekolah terlihat tidak natural.

---

# 38. Form Styling

Jika website terintegrasi dengan form pendaftaran:

Input:

```text
Height: 48px
Border: #E2E8E4
Radius: 10px
Padding: 12px 14px
```

Focus:

```text
Border: Primary 500
Ring: Primary 100
```

Label:

```text
14px
Weight 600
```

Error:

```text
Danger
```

Help text:

```text
12px - 14px
Muted
```

---

# 39. Table Styling

Untuk desktop:

- header background Primary 50;
- border subtle;
- row hover;
- angka biaya rata kanan.

Untuk mobile:

Jangan memaksakan tabel lebar.

Gunakan:

- card;
- accordion;
- horizontal scroll hanya jika benar-benar diperlukan.

---

# 40. Accessibility

Minimum:

- WCAG AA;
- contrast memadai;
- semua image memiliki alt;
- button memiliki label jelas;
- focus state terlihat;
- keyboard navigation;
- heading hierarchy benar;
- jangan menggunakan warna sebagai satu-satunya penanda status;
- ukuran touch target minimal sekitar 44px.

---

# 41. SEO Visual

Komponen halaman harus mendukung semantic HTML:

```html
<header>
<nav>
<main>
<section>
<article>
<footer>
```

Heading:

```text
1 H1
Multiple H2
H3 untuk subsection
```

Jangan menggunakan heading hanya untuk mendapatkan ukuran font tertentu.

---

# 42. Dark Section Rules

Dark section hanya digunakan untuk:

- Final CTA;
- Footer;
- section khusus tertentu.

Jangan membuat seluruh website dark.

---

# 43. Component Naming

Gunakan naming konsisten.

```text
Navbar
AnnouncementBar
Hero
SectionHeader
QuickInfoCard
ProgramCard
FeatureCard
Timeline
ScheduleTimeline
PricingTabs
PricingCard
RequirementAccordion
FaqAccordion
BrochureCard
Gallery
FinalCTA
Footer
WhatsAppButton
```

---

# 44. Suggested Blade Structure

Jika menggunakan Laravel Blade:

```text
resources/views/
├── layouts/
│   └── app.blade.php
│
├── components/
│   ├── navbar.blade.php
│   ├── announcement.blade.php
│   ├── hero.blade.php
│   ├── section-header.blade.php
│   ├── program-card.blade.php
│   ├── feature-card.blade.php
│   ├── pricing-card.blade.php
│   ├── timeline.blade.php
│   ├── faq.blade.php
│   ├── gallery.blade.php
│   ├── brochure.blade.php
│   ├── final-cta.blade.php
│   └── footer.blade.php
│
└── pages/
    └── home.blade.php
```

---

# 45. Suggested CSS Structure

```text
resources/css/
├── app.css
├── tokens.css
├── base.css
├── typography.css
├── components/
│   ├── navbar.css
│   ├── buttons.css
│   ├── cards.css
│   ├── hero.css
│   ├── timeline.css
│   ├── pricing.css
│   ├── accordion.css
│   ├── gallery.css
│   └── footer.css
└── utilities.css
```

---

# 46. Bootstrap Mapping

Jika menggunakan Bootstrap 5:

| Design System | Bootstrap |
|---|---|
| Container | `.container` |
| Grid | `.row`, `.col-*` |
| Spacing | `gap-*`, `py-*`, `my-*` |
| Button | `.btn` |
| Card | `.card` |
| Accordion | `.accordion` |
| Tabs | `.nav-tabs` |
| Modal | `.modal` |
| Navbar | `.navbar` |
| Responsive | Bootstrap breakpoints |

Custom CSS tetap diperlukan untuk brand identity.

Jangan mencoba memaksa seluruh desain menjadi Bootstrap default. Hasilnya akan terlihat seperti template admin yang sedang menyamar sebagai website PPDB.

---

# 47. Design Tokens Priority

Jika terjadi konflik antara nilai desain, gunakan prioritas:

```text
1. Accessibility
2. Brand consistency
3. Content readability
4. Responsive behavior
5. Visual decoration
```

Dekorasi tidak boleh mengalahkan readability.

---

# 48. Do & Don't

## DO

- Gunakan whitespace.
- Gunakan foto asli sekolah.
- Gunakan CTA konsisten.
- Gunakan hijau sebagai primary.
- Gunakan gold sebagai accent.
- Gunakan card dengan radius konsisten.
- Gunakan typography hierarchy.
- Gunakan responsive grid.

## DON'T

- Jangan gunakan terlalu banyak warna.
- Jangan gunakan terlalu banyak animasi.
- Jangan membuat semua section penuh warna hijau.
- Jangan menggunakan gold secara berlebihan.
- Jangan mencampur icon style.
- Jangan membuat teks terlalu panjang.
- Jangan membuat CTA berbeda-beda.
- Jangan membuat layout desktop kemudian sekadar mengecilkannya untuk mobile.

---

# 49. Visual Hierarchy

Setiap section harus memiliki urutan:

```text
1. Eyebrow
2. Heading
3. Description
4. Main content
5. Supporting content
6. CTA
```

Informasi terpenting harus memiliki:

- ukuran terbesar;
- contrast tertinggi;
- posisi paling strategis.

---

# 50. Conversion Rules

CTA **Daftar Sekarang** harus muncul pada:

1. Navbar
2. Hero
3. Setelah Program
4. Setelah Biaya
5. Final CTA

Tetapi jangan membuat CTA muncul setiap beberapa detik seperti salesman yang baru belajar tombol.

---

# 51. Content Density

Target:

```text
1 section = 1 primary message
```

Hindari:

```text
1 section =
headline +
paragraph +
table +
gallery +
FAQ +
CTA
```

Setiap section harus mempunyai fokus.

---

# 52. Final Visual Checklist

Sebelum production:

- [ ] Semua warna menggunakan design token.
- [ ] Tidak ada hardcoded warna yang tidak diperlukan.
- [ ] Font konsisten.
- [ ] Heading hierarchy benar.
- [ ] Border radius konsisten.
- [ ] Shadow konsisten.
- [ ] Button memiliki state lengkap.
- [ ] Mobile layout diuji.
- [ ] Tablet layout diuji.
- [ ] Desktop layout diuji.
- [ ] Semua gambar memiliki aspect ratio konsisten.
- [ ] Semua CTA menggunakan pola yang sama.
- [ ] FAQ menggunakan accordion yang sama.
- [ ] Pricing menggunakan pola tab yang sama.
- [ ] Accessibility diperiksa.
- [ ] Reduced motion tersedia.
- [ ] Tidak ada komponen dengan styling ad-hoc.

---

# 53. Final Design Direction

Website PPDB Assunnah Cirebon 2027/2028 harus terasa seperti:

**"Website institusi pendidikan yang modern, terpercaya, islami, dan mudah digunakan."**

Bukan:

**"Landing page promosi yang kebetulan berisi informasi sekolah."**

Fokus visual utama:

```text
GREEN
   +
WHITE
   +
SUBTLE GOLD
   +
REAL SCHOOL PHOTOGRAPHY
   +
STRONG TYPOGRAPHY
   +
GENERous WHITESPACE
```

Hasil akhir harus mengutamakan:

**Trust → Information → Clarity → Conversion**

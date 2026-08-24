# Product Requirements Document

## Website PPDB Assunnah Cirebon 2027/2028

### 1. Ringkasan Produk

Website PPDB Assunnah Cirebon merupakan website informasi dan pendaftaran calon peserta didik baru Yayasan Assunnah Cirebon.

Website bertujuan untuk:

- memberikan informasi PPDB secara cepat dan mudah dipahami;
- menampilkan pilihan jenjang pendidikan;
- menampilkan biaya pendidikan;
- menjelaskan persyaratan;
- menjelaskan tahapan pendaftaran;
- menampilkan jadwal penting;
- mengarahkan calon peserta didik/wali murid ke proses pendaftaran online;
- menyediakan akses komunikasi melalui WhatsApp;
- membangun kepercayaan terhadap Yayasan Assunnah Cirebon.

Website baru harus mempertahankan informasi inti dari website lama, tetapi memperbaiki struktur informasi, visual, UX, responsivitas, performa, dan pengelolaan konten.

---

## 2. Target Pengguna

### Primary User

Orang tua/wali calon peserta didik.

Karakteristik:

- menggunakan smartphone;
- membutuhkan informasi dengan cepat;
- lebih tertarik pada biaya, syarat, jadwal dan cara daftar;
- tidak ingin membaca halaman yang terlalu panjang;
- membutuhkan kontak yang mudah diakses.

### Secondary User

Calon peserta didik tingkat MTs, MA, I’dad Lughowi dan Ma’had Aly.

### Internal User

Admin PPDB dan Bidang Pendidikan yang mengelola:

- informasi PPDB;
- jenjang;
- biaya;
- jadwal;
- FAQ;
- brosur;
- dokumentasi;
- link pendaftaran.

---

# 3. Tujuan Produk

### Primary Goal

Meningkatkan conversion rate dari pengunjung website menjadi pendaftar PPDB.

### Secondary Goals

- Mengurangi pertanyaan berulang melalui WhatsApp.
- Mempermudah calon wali murid menemukan informasi.
- Menampilkan informasi PPDB secara terstruktur.
- Mempermudah admin memperbarui informasi setiap tahun.
- Menghasilkan website yang cepat dan mobile-first.

---

# 4. Prinsip UX

Website menggunakan prinsip:

### 4.1 Information First

Informasi yang paling dicari harus muncul lebih dahulu:

1. Jenjang
2. Jadwal
3. Biaya
4. Persyaratan
5. Cara daftar
6. Kontak

### 4.2 Mobile First

Mayoritas pengunjung diperkirakan menggunakan smartphone.

Desain harus dioptimalkan untuk:

- 360px
- 390px
- 414px
- tablet
- desktop

### 4.3 One Primary CTA

CTA utama:

**Daftar Sekarang**

CTA sekunder:

**Lihat Biaya**

**Hubungi Admin**

### 4.4 Minimal Cognitive Load

Jangan membuat calon wali murid membaca satu halaman penuh untuk menemukan biaya.

Informasi harus dibagi menjadi card, accordion, tab dan section.

---

# 5. Sitemap

```text
/
├── Home
│
├── Profil
│
├── Program Pendidikan
│   ├── PG & TKIT
│   ├── SDIT
│   ├── MTs
│   ├── MA
│   ├── I’dad Lughowi
│   └── Ma’had Aly
│
├── PPDB
│   ├── Informasi
│   ├── Persyaratan
│   ├── Biaya
│   ├── Jadwal
│   ├── Alur Pendaftaran
│   └── FAQ
│
├── Brosur
│
├── Dokumentasi
│
└── Daftar
```

Untuk versi MVP, halaman dapat tetap menggunakan single-page architecture dengan anchor navigation.

---

# 6. Struktur Homepage

## Section 1 — Announcement Bar

Contoh:

**PPDB 2027/2028 Telah Dibuka**

CTA:

**Daftar Sekarang →**

Announcement dapat berubah secara dinamis melalui admin.

---

## Section 2 — Navbar

Logo Yayasan Assunnah.

Menu:

- Beranda
- Profil
- Program
- PPDB
- Biaya
- Jadwal
- FAQ

CTA:

**Daftar Sekarang**

Navbar sticky ketika scrolling.

Mobile menggunakan hamburger menu.

---

# 7. Hero Section

Hero harus menjadi bagian paling kuat secara visual.

### Headline

**Penerimaan Peserta Didik Baru**

### Subheadline

**Tahun Ajaran 2027/2028**

### Supporting Copy

"Membentuk generasi yang berilmu, berakidah lurus, beribadah dengan benar dan berakhlak mulia."

CTA:

**Daftar Sekarang**

Secondary CTA:

**Lihat Program Pendidikan**

### Visual

Gunakan:

- foto lingkungan sekolah;
- siswa;
- aktivitas pembelajaran;
- masjid;
- kegiatan pesantren.

Gunakan overlay gradient agar teks tetap terbaca.

---

# 8. Quick Information

Segera setelah hero tampilkan empat informasi penting.

```text
┌────────────────┐
│  🎓 6 Jenjang  │
│ Pendidikan     │
└────────────────┘

┌────────────────┐
│  📅 PPDB       │
│ 2027/2028      │
└────────────────┘

┌────────────────┐
│  📝 Pendaftaran │
│ Online         │
└────────────────┘

┌────────────────┐
│  ☎️ Admin PPDB │
│ Hubungi Kami   │
└────────────────┘
```

Tujuannya agar pengunjung tidak perlu scroll panjang untuk mendapatkan orientasi.

---

# 9. Program Pendidikan

Judul:

**Temukan Jenjang Pendidikan yang Tepat**

Card:

### PG & TKIT

Full Day School

### SDIT

Full Day School

### MTs

Full Day & Boarding School

### MA

Boarding School

### I’dad Lughowi

Boarding School

### Ma’had Aly

Program S1

Setiap card memiliki:

- foto;
- nama program;
- deskripsi pendek;
- kuota;
- CTA "Lihat Detail".

---

# 10. Keunggulan Assunnah

Gunakan 6 feature card.

### Kurikulum Terpadu

Kurikulum Nasional dan kurikulum khas pesantren.

### Lingkungan Islami

Lingkungan pendidikan yang mendukung pembentukan karakter.

### Jenjang Terintegrasi

PG hingga Ma’had Aly.

### Fasilitas Pendukung

Masjid, lapangan, klinik, kantin dan fasilitas pendukung lainnya.

### SDM Profesional

Didukung pendidik dan tenaga kependidikan yang terseleksi.

### Lokasi Strategis

Lokasi mudah dijangkau dari pusat Kota Cirebon.

Informasi ini berasal dari konten website saat ini.

---

# 11. Visi & Misi

Desain tidak menggunakan blok teks panjang.

Gunakan layout:

```text
VISI

"Terwujudnya masyarakat yang taat beribadah
hanya kepada Allah Ta'ala berdasarkan
Al-Qur'an dan As-Sunnah..."
```

Kemudian tiga card misi.

---

# 12. Alur Pendaftaran

Ini adalah bagian yang perlu ditambahkan secara kuat pada clone.

```text
01
Pilih Jenjang
      ↓
02
Cek Persyaratan
      ↓
03
Bayar Biaya Pendaftaran
      ↓
04
Isi Formulir
      ↓
05
Ikuti Seleksi
      ↓
06
Pengumuman
      ↓
07
Daftar Ulang
```

Setiap step dapat memiliki detail ketika diklik.

---

# 13. Jadwal PPDB

Gunakan timeline.

Contoh:

```text
September 2026
Pendaftaran Dibuka

April 2027
Seleksi / Pemetaan

Mei 2027
Pengumuman

Juli 2027
Ta'aruf / MATSAMA
```

Jadwal harus dikelola dari database agar tidak perlu mengubah kode setiap tahun.

---

# 14. Biaya Pendidikan

Ini merupakan salah satu section paling penting.

Jangan menggunakan layout biaya lama yang terlalu panjang.

Gunakan tab:

```text
PG/TKIT | SDIT | MTs | MA | I'DAD | MA'HAD ALY
```

Kemudian tampilkan:

```text
Total Biaya Masuk
Rp XX.XXX.XXX

Biaya Pendaftaran
Rp XXX.XXX

SPP Bulanan
Rp X.XXX.XXX
```

Accordion:

**Rincian Biaya**

- Uang Pangkal
- Infaq Bangunan
- Administrasi
- Komite
- Penunjang KBM
- Seragam
- Buku
- Asrama
- dll.

Website lama sudah menyediakan rincian biaya untuk masing-masing jenjang.

---

# 15. Persyaratan

Gunakan accordion per jenjang.

```text
PG & TKIT                     >
SDIT                          >
MTs                            >
MA                             >
I'dad Lughowi                  >
Ma'had Aly                     >
```

Ketika dibuka:

- batas usia;
- dokumen;
- pembayaran;
- formulir;
- ketentuan khusus.

Ini jauh lebih baik daripada seluruh persyaratan ditumpuk dalam satu halaman.

---

# 16. FAQ

Gunakan accordion.

Kategori:

### Pendaftaran

- Kapan pendaftaran dibuka?
- Bagaimana cara mendaftar?
- Apakah bisa mendaftar offline?

### Seleksi

- Apakah semua jenjang mengikuti tes?
- Kapan tes dilakukan?
- Kapan hasil diumumkan?

### Pembayaran

- Berapa biaya pendaftaran?
- Bagaimana metode pembayaran?
- Apakah biaya bisa dicicil?

### Administrasi

- Dokumen apa yang harus dibawa?
- Apakah dokumen harus asli?
- Kapan seragam dibagikan?

---

# 17. Brosur

Tampilkan preview brosur.

```text
┌─────────────────────┐
│                     │
│      BROCHURE       │
│       PREVIEW       │
│                     │
└─────────────────────┘

[ Lihat Brosur ]

[ Download PDF ]
```

---

# 18. Dokumentasi

Gunakan masonry/grid gallery.

Kategori:

- Kegiatan belajar
- Pesantren
- Fasilitas
- Kegiatan siswa
- PPDB
- Asrama

Klik gambar membuka lightbox.

---

# 19. CTA Final

Sebelum footer:

### Siap Menjadi Bagian dari Assunnah?

"Daftarkan putra-putri Anda untuk mendapatkan pendidikan yang memadukan ilmu, akidah, ibadah dan akhlak."

CTA:

**Daftar Sekarang**

Secondary:

**Hubungi Admin PPDB**

---

# 20. Footer

Footer terdiri dari:

### Yayasan Assunnah Cirebon

Alamat.

### Navigasi

- Profil
- Program
- PPDB
- Biaya
- FAQ

### Kontak

- Telepon
- WhatsApp
- Email

### Lokasi

Google Maps.

### Copyright

Copyright © Yayasan Assunnah Cirebon.

---

# 21. Functional Requirements

## FR-01 Dynamic PPDB Year

Admin dapat mengubah:

- tahun ajaran;
- status PPDB;
- tanggal pembukaan;
- tanggal penutupan.

Contoh:

```text
PPDB 2027/2028
Status: Dibuka
```

---

## FR-02 Dynamic Program

Admin dapat CRUD:

- nama jenjang;
- slug;
- deskripsi;
- foto;
- jenis sekolah;
- kuota;
- status aktif.

---

## FR-03 Dynamic Fees

Admin dapat mengatur:

- biaya pendaftaran;
- uang pangkal;
- infaq bangunan;
- SPP;
- biaya seragam;
- biaya buku;
- biaya asrama;
- biaya lainnya.

Total dapat dihitung otomatis.

---

## FR-04 Dynamic Requirements

Admin dapat mengatur persyaratan berdasarkan jenjang.

---

## FR-05 Dynamic Schedule

Admin dapat CRUD:

- tanggal;
- judul kegiatan;
- deskripsi;
- jenjang;
- status.

---

## FR-06 Registration CTA

Semua tombol "Daftar Sekarang" diarahkan ke sistem pendaftaran PPDB.

Jika sistem pendaftaran internal sudah tersedia, gunakan URL tersebut.

---

## FR-07 WhatsApp

Floating WhatsApp button selalu tersedia pada mobile.

Pesan otomatis:

"Assalamu'alaikum, saya ingin mendapatkan informasi PPDB Assunnah Cirebon."

---

# 22. Non Functional Requirements

### Performance

Target:

- Lighthouse Performance > 90
- LCP < 2.5 detik
- CLS < 0.1

### Responsive

Support:

- Mobile
- Tablet
- Desktop

### SEO

Implementasi:

- title dynamic;
- meta description;
- Open Graph;
- canonical URL;
- sitemap;
- robots.txt;
- structured data.

### Accessibility

- contrast ratio memadai;
- alt text;
- keyboard navigation;
- semantic HTML;
- ukuran tombol minimal nyaman untuk touch.

---

# 23. Security

Website lama menunjukkan adanya link spam yang tidak relevan.

Clone baru sebaiknya **tidak mempertahankan WordPress setup lama secara mentah** jika tujuan utamanya adalah sistem PPDB yang dapat dikelola.

Minimum:

- HTTPS;
- admin authentication;
- CSRF protection;
- validation;
- upload validation;
- restricted file types;
- rate limiting;
- secure headers;
- backup;
- audit log admin.

Jika tetap menggunakan WordPress:

- hapus plugin tidak diperlukan;
- update WordPress;
- update theme;
- update plugin;
- ganti seluruh password;
- audit administrator;
- scan malware;
- cek database;
- cek scheduled tasks/cron;
- cek file PHP asing;
- cek `.htaccess`;
- cek injected scripts.

---

# 24. Recommended Tech Stack

Untuk kebutuhan Yayasan Assunnah:

### Frontend

- Laravel Blade
- Bootstrap 5
- Alpine.js
- AOS atau native CSS animation

### Backend

- Laravel
- Filament Admin

### Database

- MySQL

### Storage

- Laravel Storage

### Authentication

- Laravel authentication
- Spatie Permission jika diperlukan

Struktur ini cocok karena website PPDB nantinya tidak hanya menjadi landing page, tetapi juga dapat menjadi sumber data untuk sistem PPDB.

---

# 25. Database Concept

Minimal tabel:

```text
academic_years
    id
    name
    is_active

programs
    id
    academic_year_id
    name
    slug
    description
    quota
    image
    is_active

requirements
    id
    program_id
    title
    description
    sort_order

fees
    id
    program_id
    name
    amount
    type
    sort_order

schedules
    id
    academic_year_id
    program_id
    title
    event_date
    description

faqs
    id
    category
    question
    answer
    sort_order

galleries
    id
    title
    image
    category

documents
    id
    title
    file
    type

settings
    id
    key
    value
```

---

# 26. Admin Panel

Dashboard:

```text
PPDB 2027/2028

Status PPDB
[ DIBUKA ]

Program
6

Total Kuota
XXX

Jadwal Terdekat
5

Dokumen
12
```

Menu:

```text
Dashboard

PPDB
├── Tahun Ajaran
├── Program Pendidikan
├── Biaya
├── Persyaratan
├── Jadwal
├── FAQ
├── Brosur
└── Dokumentasi

Website
├── Hero
├── Visi Misi
├── Keunggulan
├── Kontak
└── Pengaturan
```

---

# 27. Acceptance Criteria

Website dianggap selesai apabila:

- [ ] Homepage responsive.
- [ ] Semua menu navigasi berfungsi.
- [ ] CTA pendaftaran berfungsi.
- [ ] Program pendidikan dapat dikelola admin.
- [ ] Biaya dapat dikelola admin.
- [ ] Persyaratan dapat dikelola admin.
- [ ] Jadwal dapat dikelola admin.
- [ ] FAQ dapat dikelola admin.
- [ ] Brosur dapat di-download.
- [ ] Gallery berfungsi.
- [ ] WhatsApp CTA berfungsi.
- [ ] SEO dasar tersedia.
- [ ] Tidak terdapat injected/spam link.
- [ ] Website dapat digunakan tanpa login oleh calon peserta.
- [ ] Admin dapat mengubah tahun ajaran tanpa mengubah kode program.
- [ ] Website dapat digunakan kembali untuk PPDB tahun berikutnya.

---

# 28. Prioritas Development

### Phase 1 — MVP

1. Homepage
2. Program
3. Biaya
4. Persyaratan
5. Jadwal
6. FAQ
7. CTA pendaftaran
8. WhatsApp
9. Admin CRUD

### Phase 2

1. Gallery
2. Brosur
3. SEO
4. Analytics
5. Search
6. Announcement

### Phase 3

1. Integrasi sistem PPDB
2. Dashboard pendaftar
3. Status pendaftaran
4. Pembayaran
5. Seleksi
6. Pengumuman
7. Notifikasi WhatsApp

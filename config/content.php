<?php
/**
 * Content Configuration
 * PPDB Assunnah Cirebon 2027/2028
 */

// 1. Quick Info Indicators
$quickInfos = [
    [
        'icon' => 'graduation-cap',
        'label' => 'Jenjang Pendidikan',
        'value' => '6 Program',
        'desc' => 'PG/TKIT hingga Ma\'had Aly',
        'color' => 'navy'
    ],
    [
        'icon' => 'calendar',
        'label' => 'Tahun Ajaran',
        'value' => '2027/2028',
        'desc' => 'Pendaftaran Dibuka',
        'color' => 'gold'
    ],
    [
        'icon' => 'file-text',
        'label' => 'Sistem Pendaftaran',
        'value' => '100% Online',
        'desc' => 'Mudah & Cepat via HP',
        'color' => 'navy'
    ],
    [
        'icon' => 'message-circle',
        'label' => 'Layanan Informasi',
        'value' => 'WhatsApp Admin',
        'desc' => 'Respon Cepat 08.00-16.00',
        'color' => 'gold'
    ]
];

// 2. Program Pendidikan (6 Jenjang)
$programs = [
    'tkit' => [
        'slug' => 'tkit',
        'name' => 'PG & TKIT Assunnah',
        'tagline' => 'Pendidikan Anak Usia Dini Islami',
        'type' => 'Full Day School',
        'accreditation' => 'Akreditasi A',
        'gender' => 'Putra & Putri',
        'description' => 'Membentuk karakter islami sejak dini dengan standar pendidikan tinggi, kurikulum holistik terstruktur, dan model pembelajaran sentra paralel.',
        'features' => [
            'Terakreditasi BAN-PAUD dan Kurikulum Terpadu: Standar pendidikan tinggi dengan kurikulum holistik dan terstruktur.',
            'Model Pembelajaran Sentra Paralel: Sentra Makro (bermain peran), Bahan Alam, Ibadah, Olah Tubuh, Masak, Balok, dan Seni.',
            'Menerapkan Pendidikan Karakter Nabawi Sejak Dini.'
        ],
        'quota' => '60 Santri',
        'target' => 'Hafal Juz 30 & Doa Harian',
        'image' => 'https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&w=800&q=80',
        'badge' => 'Full Day'
    ],
    'sdit' => [
        'slug' => 'sdit',
        'name' => 'SDIT Assunnah',
        'tagline' => 'Sekolah Dasar Islam Terpadu',
        'type' => 'Full Day School',
        'accreditation' => 'Akreditasi A',
        'gender' => 'Putra & Putri',
        'description' => 'Menggabungkan kurikulum nasional dan diniyah dengan pendekatan pemahaman Salafus Shalih serta program unggulan tahfidz.',
        'features' => [
            'Kurikulum Terpadu: Menggabungkan kurikulum nasional dan kurikulum diniyah dengan pendekatan pemahaman Salafus Shalih.',
            'Program Unggulan Tahfidz: Target minimal 2 Juz (capaian siswa hingga 13 Juz), plus Tahsin, Tasmi\', dan pembiasaan ibadah.',
            'Full Day School Islam Terpadu: Beragam ekstrakurikuler Islami dan akademik yang membangun akhlak, prestasi, dan keterampilan hidup (life skill).'
        ],
        'quota' => '120 Santri',
        'target' => 'Hafal 3-5 Juz & Dasar Arab',
        'image' => 'https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=800&q=80',
        'badge' => 'Full Day'
    ],
    'mts' => [
        'slug' => 'mts',
        'name' => 'MTs Assunnah',
        'tagline' => 'Madrasah Tsanawiyah Terpadu',
        'type' => 'Full Day & Boarding School',
        'accreditation' => 'Akreditasi A',
        'gender' => 'Putra & Putri (Terpisah)',
        'description' => 'Pendidikan menengah pertama dengan kurikulum terpadu, program coding islami kreatif, serta pendampingan ibadah harian.',
        'features' => [
            'Kurikulum Terpadu: Menggabungkan kurikulum nasional dan kurikulum diniyah dengan pendekatan pemahaman Salafus Shalih.',
            'Program Coding Islami & Kreatif: Membekali siswa dengan kemampuan teknologi terkini tanpa meninggalkan identitas keislaman.',
            'Pendampingan Ibadah Harian: Sholat berjamaah, sholat sunnah, murojaah hafalan, dzikir, dll yang terintegrasi dengan pembelajaran.'
        ],
        'quota' => '150 Santri',
        'target' => 'Hafal 6-10 Juz & Coding',
        'image' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=800&q=80',
        'badge' => 'Full Day & Asrama'
    ],
    'ma' => [
        'slug' => 'ma',
        'name' => 'MA Assunnah',
        'tagline' => 'Madrasah Aliyah',
        'type' => 'Boarding School (Asrama)',
        'accreditation' => 'Akreditasi UIM & BAN-S/M',
        'gender' => 'Putra & Putri (Terpisah)',
        'description' => 'Terakreditasi UIM dengan program tahfidz 30 juz diampu pengajar Timur Tengah serta lulusan yang mampu bersaing di 40+ universitas dalam/luar negeri.',
        'features' => [
            'Telah Terakreditasi UIM: Lembaga terakreditasi mendapatkan prioritas utama diterima di Universitas Islam Madinah (UIM).',
            'Program Tahfidz Khusus: Diampu langsung oleh pengajar dari Timur Tengah dengan target 30 Juz.',
            'Alumni Tersebar di PTN & Luar Negeri: Lulusan MA Assunnah mampu bersaing di 40 lebih universitas ternama dalam dan luar negeri.'
        ],
        'quota' => '100 Santri',
        'target' => 'Akreditasi UIM & 30 Juz',
        'image' => 'https://images.unsplash.com/photo-1546410531-bb4caa6b424d?auto=format&fit=crop&w=800&q=80',
        'badge' => 'Boarding / Asrama'
    ],
    'idad' => [
        'slug' => 'idad',
        'name' => 'I’dad Lughowi Assunnah',
        'tagline' => 'Persiapan Bahasa Arab & Dirasah Islamiyah',
        'type' => 'Boarding School (1-2 Tahun)',
        'accreditation' => 'Program Khusus',
        'gender' => 'Putra & Putri',
        'description' => 'Program intensif penguasaan Bahasa Arab aktif dan dasar-dasar ilmu syari\'at bagi lulusan SMP/MTs/SMA sederajat.',
        'features' => [
            'Penguasaan Bahasa Arab Intensif: Nahwu, Shorof, dan Muhadatsah secara aktif dan mendalam.',
            'Pendidikan Dirasah Islamiyah: Pembekalan ilmu syari\'at berlandaskan pemahaman Salafus Shalih.',
            'Pembinaan Karakter & Kemandirian Santri Asrama.'
        ],
        'quota' => '50 Santri',
        'target' => 'Fasih Bahasa Arab & Kitab Gundul',
        'image' => 'https://images.unsplash.com/photo-1532012197267-da84d127e765?auto=format&fit=crop&w=800&q=80',
        'badge' => 'Boarding / Asrama'
    ],
    'mahadaly' => [
        'slug' => 'mahadaly',
        'name' => 'Ma’had Aly Assunnah',
        'tagline' => 'Pendidikan Tinggi Islam (Setara S1)',
        'type' => 'Program S1 Takhashshus',
        'accreditation' => 'Terakreditasi Kemenag',
        'gender' => 'Putra & Putri',
        'description' => 'Pencetakan kader ulama dan da\'i yang mendalam dalam ilmu Fiqh, Usul Fiqh, Hadits, serta dakwah islamiyah berdasarkan Al-Qur\'an dan As-Sunnah.',
        'features' => [
            'Program S1 Takhashshus Ilmu Syar\'i.',
            'Pengampu Lulusan LIPIA, Al-Azhar, & Universitas Madinah.',
            'Fasilitas Beasiswa Pendidikan & Asrama Mahasantri.'
        ],
        'quota' => '40 Mahasantri',
        'target' => 'Kader Da\'i & Mutakhassis Fiqh',
        'image' => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=800&q=80',
        'badge' => 'Program S1'
    ]
];

// 3. Keunggulan Assunnah (6 Feature Cards)
$features = [
    [
        'icon' => 'book-open',
        'title' => 'Kurikulum Terpadu',
        'description' => 'Integrasi seimbang antara Kurikulum Nasional Kemenag/Kemdikbud dengan Kurikulum Khas Pesantren (Tahfizh & Dirasah Islamiyah).'
    ],
    [
        'icon' => 'heart-handshake',
        'title' => 'Lingkungan Islami',
        'description' => 'Pembiasaan ibadah sunnah, adab, akhlakul karimah, serta pengawasan lingkungan kondusif yang jauh dari pengaruh negatif.'
    ],
    [
        'icon' => 'layers',
        'title' => 'Jenjang Terintegrasi',
        'description' => 'Pendidikan berkesinambungan dari usia dini (PG/TKIT), sekolah dasar (SDIT), menengah (MTs/MA), hingga perguruan tinggi (Ma\'had Aly).'
    ],
    [
        'icon' => 'building-2',
        'title' => 'Fasilitas Lengkap',
        'description' => 'Masjid yang luas, ruang kelas ber-AC, laboratorium komputer & IPA, lapangan olahraga, asrama nyaman, serta sarana kesehatan.'
    ],
    [
        'icon' => 'award',
        'title' => 'SDM Berpengalaman',
        'description' => 'Tenaga pendidik teruji dari lulusan Perguruan Tinggi ternama dalam dan luar negeri (LIPIA, Al-Azhar, Madinah, PTN Terkemuka).'
    ],
    [
        'icon' => 'map-pin',
        'title' => 'Lokasi Strategis',
        'description' => 'Berada di pusat Kota Cirebon, mudah diakses kendaraan umum maupun pribadi, aman, serta dikelilingi sarana publik.'
    ]
];

// 4. Visi & Misi Yayasan
$visionMission = [
    'vision' => 'Terwujudnya masyarakat yang taat beribadah hanya kepada Allah Ta\'ala berdasarkan Al-Qur\'an dan As-Sunnah sesuai pemahaman Salafus Shalih.',
    'missions' => [
        [
            'title' => 'Dakwah Tashfiyah & Tarbiyah',
            'desc' => 'Menyebarkan dakwah Islamiyah melalui Tashfiyah (pemurnian ajaran islam) dan Tarbiyah (pembinaan berkesinambungan).'
        ],
        [
            'title' => 'Generasi Intelektual Muslim',
            'desc' => 'Mendidik generasi intelektual muslim yang berakidah lurus, beribadah dengan benar dan berakhlak mulia.'
        ],
        [
            'title' => 'Kemandirian & Kesejahteraan Umat',
            'desc' => 'Meningkatkan dan memberdayakan kemandirian umat dalam hal kesejahteraan lahir dan batin.'
        ]
    ]
];

// 5. Alur Pendaftaran (7 Steps)
$registrationSteps = [
    [
        'step' => '01',
        'title' => 'Pilih Jenjang',
        'desc' => 'Tentukan jenjang pendidikan yang sesuai dengan usia dan kriteria calon siswa.',
        'icon' => 'search'
    ],
    [
        'step' => '02',
        'title' => 'Cek Persyaratan',
        'desc' => 'Pelajari syarat usia, kualifikasi, dan dokumen administratif yang diperlukan.',
        'icon' => 'clipboard-check'
    ],
    [
        'step' => '03',
        'title' => 'Bayar Biaya Pendaftaran',
        'desc' => 'Transfer biaya pendaftaran sesuai kode bayar ke rekening resmi Yayasan.',
        'icon' => 'credit-card'
    ],
    [
        'step' => '04',
        'title' => 'Isi Formulir Online',
        'desc' => 'Lengkapi formulir pendaftaran serta unggah dokumen persyaratan di portal PPDB.',
        'icon' => 'edit-3'
    ],
    [
        'step' => '05',
        'title' => 'Ikuti Seleksi / Tes',
        'desc' => 'Mengikuti observasi (TK/SD) atau tes akademis, Al-Qur\'an, & wawancara (MTs/MA/Aly).',
        'icon' => 'user-check'
    ],
    [
        'step' => '06',
        'title' => 'Pengumuman Hasil',
        'desc' => 'Hasil kelulusan diumumkan secara transparan melalui Whatsapp.',
        'icon' => 'bell'
    ],
    [
        'step' => '07',
        'title' => 'Daftar Ulang',
        'desc' => 'Verifikasi berkas fisik dan penyelesaian pembiayaan awal masuk sekolah.',
        'icon' => 'check-circle-2'
    ]
];

// 6. Agenda & Jadwal PPDB T.A. 2027/2028 per Jenjang
$schedules = [
    'tkit' => [
        'name' => 'PG & TKIT Assunnah',
        'badge' => 'PG & TKIT',
        'icon' => 'sparkles',
        'items' => [
            [
                'date' => 'Selasa, 06 Juli 2027',
                'title' => 'Wawancara Wali Siswa Baru',
                'desc' => 'Sesi wawancara dan silaturahmi dengan wali siswa baru.'
            ],
            [
                'date' => 'Kamis, 08 Juli 2027',
                'title' => 'Sosialisasi Program',
                'desc' => 'Pemaparan program pembelajaran, tata tertib, dan kegiatan sekolah.'
            ],
            [
                'date' => 'Jum\'at, 09 Juli 2027',
                'title' => 'Bermain Satu Hari',
                'desc' => 'Kegiatan pengenalan lingkungan dan adaptasi awal bagi calon santri cilik.'
            ]
        ]
    ],
    'sdit' => [
        'name' => 'SDIT Assunnah',
        'badge' => 'SDIT',
        'icon' => 'book-open',
        'items' => [
            [
                'date' => 'Sabtu, 10 April 2027',
                'title' => 'Pemetaan Kompetensi Siswa',
                'desc' => 'Pelaksanaan observasi dan pemetaan kesiapan belajar calon siswa.'
            ],
            [
                'date' => 'Senin, 12 April 2027',
                'title' => 'Pengumuman Penerimaan Siswa Baru',
                'desc' => 'Pengumuman resmi hasil seleksi penerimaan siswa baru.'
            ],
            [
                'date' => 'Sabtu, 10 Juli 2027',
                'title' => 'Ta\'aruf Siswa Baru & Pembagian Kelas',
                'desc' => 'Orientasi siswa baru serta pembagian kelas dan bimbingan wali kelas.'
            ]
        ]
    ],
    'secondary' => [
        'name' => 'MTs, MA & I’dad Lughowi',
        'badge' => 'MTs / MA / I’dad',
        'icon' => 'building-2',
        'items' => [
            [
                'date' => 'Rabu, 07 Juli 2027',
                'title' => 'Kedatangan Santri Baru',
                'desc' => 'Kedatangan santri baru sekaligus pembagian asrama dan kelas.'
            ],
            [
                'date' => 'Kamis - Sabtu, 08 - 10 Juli 2027',
                'title' => 'MATSAMA (Masa Ta\'aruf Siswa Madrasah)',
                'desc' => 'Kegiatan MATSAMA (Masa Ta\'aruf Siswa Madrasah) khusus untuk jenjang MTs dan MA.'
            ]
        ]
    ],
    'mahadali' => [
        'name' => 'Ma\'had \'Aly & I\'dad Ma\'had Aly',
        'badge' => 'Ma\'had Aly',
        'icon' => 'graduation-cap',
        'items' => [
            [
                'date' => 'Rabu, 14 Juli 2027',
                'title' => 'Kedatangan Mahasiswa Baru',
                'desc' => 'Kedatangan mahasiswa baru Ma\'had Aly sekaligus pembagian asrama.'
            ],
            [
                'date' => 'Kamis - Jum\'at, 15 - 16 Juli 2027',
                'title' => 'Masa Perkenalan',
                'desc' => 'Kegiatan masa perkenalan mahasiswa baru dan orientasi perkuliahan.'
            ]
        ]
    ]
];

// 7. Biaya Pendidikan per Jenjang
$pricing = [
    'tkit' => [
        'name' => 'PG / TKIT',
        'badge' => 'Full Day',
        'total_entrance' => 'Rp 9.755.000',
        'registration' => 'Rp 300.000',
        'monthly_spp' => 'Rp 900.000',
        'note' => 'Termasuk foto, uang pangkal, infak bangunan, SPP bulan Juli, komite, penunjang KBM, alat makan, paket seragam dan buku.',
        'details' => [
            ['item' => 'Biaya Pendaftaran / Formulir', 'cost' => 'Rp 300.000'],
            ['item' => 'Total Biaya Masuk Awal (Termasuk SPP Juli)', 'cost' => 'Rp 9.765.000'],
            ['item' => 'SPP Bulanan', 'cost' => 'Rp 900.000']
        ]
    ],
    'sdit' => [
        'name' => 'SDIT Assunnah',
        'badge' => 'Full Day',
        'total_entrance' => 'Rp 17.050.000',
        'registration' => 'Rp 500.000',
        'monthly_spp' => 'Rp 1.050.000',
        'note' => 'Termasuk foto, uang pangkal, infak bangunan, SPP bulan Juli, komite, penunjang KBM, alat makan, paket seragam dan buku.',
        'details' => [
            ['item' => 'Biaya Pendaftaran / Formulir', 'cost' => 'Rp 500.000'],
            ['item' => 'Total Biaya Masuk Awal (Termasuk SPP Juli)', 'cost' => 'Rp 17.550.000'],
            ['item' => 'SPP Bulanan', 'cost' => 'Rp 1.050.000']
        ]
    ],
    'mts_boarding' => [
        'name' => 'MTS Boarding',
        'badge' => 'Asrama / Boarding',
        'total_entrance' => 'Rp 23.250.000',
        'registration' => 'Rp 550.000',
        'monthly_spp' => 'Rp 1.900.000',
        'note' => 'Termasuk foto, uang pangkal, infak bangunan, SPP bulan Juli, komite, penunjang KBM, alat makan, paket seragam dan buku.',
        'details' => [
            ['item' => 'Biaya Pendaftaran / Formulir', 'cost' => 'Rp 550.000'],
            ['item' => 'Total Biaya Masuk Awal (Termasuk SPP Juli)', 'cost' => 'Rp 23.800.000'],
            ['item' => 'SPP Bulanan (Termasuk Asrama & Makan)', 'cost' => 'Rp 1.900.000']
        ]
    ],
    'mts_fullday' => [
        'name' => 'MTS Fullday',
        'badge' => 'Full Day',
        'total_entrance' => 'Rp 19.500.000',
        'registration' => 'Rp 550.000',
        'monthly_spp' => 'Rp 1.100.000',
        'note' => 'Termasuk foto, uang pangkal, infak bangunan, SPP bulan Juli, komite, penunjang KBM, alat makan, paket seragam dan buku.',
        'details' => [
            ['item' => 'Biaya Pendaftaran / Formulir', 'cost' => 'Rp 550.000'],
            ['item' => 'Total Biaya Masuk Awal (Termasuk SPP Juli)', 'cost' => 'Rp 20.050.000'],
            ['item' => 'SPP Bulanan', 'cost' => 'Rp 1.100.000']
        ]
    ],
    'idad' => [
        'name' => 'Idad Lughoh',
        'badge' => 'Boarding / Asrama',
        'total_entrance' => 'Rp 22.600.000',
        'registration' => 'Rp 550.000',
        'monthly_spp' => 'Rp 1.900.000',
        'note' => 'Termasuk foto, uang pangkal, infak bangunan, SPP bulan Juli, komite, penunjang KBM, alat makan, paket seragam dan buku.',
        'details' => [
            ['item' => 'Biaya Pendaftaran / Formulir', 'cost' => 'Rp 550.000'],
            ['item' => 'Total Biaya Masuk Awal (Termasuk SPP Juli)', 'cost' => 'Rp 23.150.000'],
            ['item' => 'SPP Bulanan (Termasuk Asrama & Makan)', 'cost' => 'Rp 1.900.000']
        ]
    ],
    'ma' => [
        'name' => 'MA Assunnah',
        'badge' => 'Boarding / Asrama',
        'total_entrance' => 'Rp 24.100.000',
        'registration' => 'Rp 550.000',
        'monthly_spp' => 'Rp 1.900.000',
        'note' => 'Termasuk foto, uang pangkal, infak bangunan, SPP bulan Juli, komite, penunjang KBM, alat makan, paket seragam dan buku.',
        'details' => [
            ['item' => 'Biaya Pendaftaran / Formulir', 'cost' => 'Rp 550.000'],
            ['item' => 'Total Biaya Masuk Awal (Termasuk SPP Juli)', 'cost' => 'Rp 24.650.000'],
            ['item' => 'SPP Bulanan (Termasuk Asrama & Makan)', 'cost' => 'Rp 1.900.000']
        ]
    ],
    'idad_mahadaly' => [
        'name' => "I'dad Mahad Aly",
        'badge' => 'Persiapan Mahasantri',
        'total_entrance' => 'Rp 8.350.000',
        'registration' => 'Rp 500.000',
        'monthly_spp' => 'Rp 1.100.000',
        'note' => 'Tersedia pilihan Asrama (Total Masuk Rp 8.350.000, SPP Rp 1.100.000) dan Non-Asrama (Total Masuk Rp 5.200.000, SPP Rp 450.000). Rincian lengkap tertera pada brosur resmi.',
        'has_brochure' => true,
        'brochure_url' => 'assets/images/Brosur Idad V2.jpg',
        'details' => [
            ['item' => 'Biaya Pendaftaran / Formulir', 'cost' => 'Rp 500.000'],
            ['item' => 'Total Biaya Masuk Asrama', 'cost' => 'Rp 8.350.000'],
            ['item' => 'Total Biaya Masuk Non-Asrama', 'cost' => 'Rp 5.200.000'],
            ['item' => 'SPP Bulanan Asrama', 'cost' => 'Rp 1.100.000'],
            ['item' => 'SPP Bulanan Non-Asrama', 'cost' => 'Rp 450.000']
        ]
    ],
    'mahadaly' => [
        'name' => 'Mahad Aly',
        'badge' => 'Tersedia Beasiswa',
        'total_entrance' => 'Rp 8.900.000',
        'registration' => 'Rp 500.000',
        'monthly_spp' => 'Rp 1.100.000',
        'note' => 'Tersedia Jalur Beasiswa (Total Masuk Rp 500.000, SPP Gratis), Jalur Asrama (Total Masuk Rp 8.900.000, SPP Rp 1.100.000), dan Non-Asrama (Rp 6.750.000, SPP Rp 450.000). Rincian lengkap tertera pada brosur resmi.',
        'has_brochure' => true,
        'brochure_url' => 'assets/images/Brosur Mahad Aly V2.jpg',
        'details' => [
            ['item' => 'Biaya Pendaftaran / Formulir', 'cost' => 'Rp 500.000'],
            ['item' => 'Total Biaya Jalur Beasiswa', 'cost' => 'Rp 500.000'],
            ['item' => 'Total Biaya Masuk Asrama', 'cost' => 'Rp 8.900.000'],
            ['item' => 'Total Biaya Masuk Non-Asrama', 'cost' => 'Rp 6.750.000'],
            ['item' => 'SPP Bulanan Beasiswa', 'cost' => 'GRATIS'],
            ['item' => 'SPP Bulanan Asrama', 'cost' => 'Rp 1.100.000'],
            ['item' => 'SPP Bulanan Non-Asrama', 'cost' => 'Rp 450.000']
        ]
    ]
];

// 8. Persyaratan Pendaftaran per Jenjang
$requirements = [
    'tkit' => [
        'name' => 'PG & TKIT Assunnah',
        'age_limit' => 'PG: Min. 3 Tahun | TK-A: Min. 4 Tahun per Juli 2027',
        'items' => [
            'Mengisi formulir pendaftaran online',
            'Fotokopi Akta Kelahiran (2 lembar)',
            'Fotokopi Kartu Keluarga (2 lembar)',
            'Fotokopi KTP Kedua Orang Tua / Wali',
            'Pasfoto berwarna 3x4 (4 lembar)',
            'Mengikuti observasi tumbuh kembang anak'
        ]
    ],
    'sdit' => [
        'name' => 'SDIT Assunnah',
        'age_limit' => 'Minimal 6 Tahun per 1 Juli 2027',
        'items' => [
            'Mengisi formulir pendaftaran online',
            'Fotokopi Ijazah TK/RA (bila ada)',
            'Fotokopi Akta Kelahiran & KK (3 lembar)',
            'Fotokopi KTP Orang Tua / Wali',
            'Pasfoto berwarna 3x4 (4 lembar)',
            'Mengikuti pemetaan kesiapan belajar siswa & wawancara wali'
        ]
    ],
    'mts' => [
        'name' => 'MTs Assunnah',
        'age_limit' => 'Lulus SD/MI sederajat, Maksimal 15 Tahun',
        'items' => [
            'Mengisi formulir pendaftaran online',
            'Fotokopi Ijazah SD/MI dilegalisir (3 lembar)',
            'Fotokopi NISN (Nomor Induk Siswa Nasional)',
            'Fotokopi Akta Kelahiran & KK (3 lembar)',
            'Surat Keterangan Kelakuan Baik dari Sekolah Asal',
            'Mengikuti tes akademik (MTK, IPA, B. Indo), tes Al-Qur\'an, & wawancara'
        ]
    ],
    'ma' => [
        'name' => 'MA Assunnah',
        'age_limit' => 'Lulus MTs/SMP sederajat, Maksimal 18 Tahun',
        'items' => [
            'Mengisi formulir pendaftaran online',
            'Fotokopi Ijazah & SKHUN MTs/SMP dilegalisir',
            'Fotokopi NISN & Kartu Keluarga',
            'Surat Bebas Narkoba & Surat Keterangan Sehat Dokter',
            'Pasfoto berbusana muslim/muslimah background merah (4 lembar)',
            'Mengikuti seleksi akademik, Dirasah Islamiyah, Tahfizh, & wawancara'
        ]
    ],
    'idad' => [
        'name' => 'I’dad Lughowi',
        'age_limit' => 'Lulusan SMP/MTs/SMA sederajat',
        'items' => [
            'Mengisi formulir pendaftaran online',
            'Fotokopi Ijazah pendidikan terakhir dilegalisir',
            'Fotokopi KK & KTP/Kartu Pelajar',
            'Surat Rekomendasi dari Tokoh/Ustadz setempat',
            'Tes kemampuan membaca Al-Qur\'an & wawancara komitmen belajar'
        ]
    ],
    'mahadaly' => [
        'name' => 'Ma’had Aly Assunnah',
        'age_limit' => 'Lulusan MA/SMA/I\'dad Lughowi sederajat',
        'items' => [
            'Mengisi formulir pendaftaran online',
            'Fotokopi Ijazah SMA/MA/I\'dad dilegalisir',
            'Mampu membaca kitab gundul dasar (Nahwu Shorof)',
            'Surat rekomendasi lembaga / ulama',
            'Mengikuti ujian tulis Bahasa Arab, Syariat, & Wawancara'
        ]
    ]
];

// 9. FAQ Accordion per Kategori
$faqs = [
    'pendaftaran' => [
        'category' => 'Pendaftaran',
        'questions' => [
            [
                'q' => 'Kapan pendaftaran PPDB Assunnah 2027/2028 mulai dibuka?',
                'a' => 'Pendaftaran PPDB Assunnah dibuka secara resmi mulai 1 September 2026 hingga kuota terpenuhi. Pendaftaran dapat dilakukan 24 jam secara online melalui website ini.'
            ],
            [
                'q' => 'Apakah bisa mendaftar secara offline langsung ke sekolah?',
                'a' => 'Seluruh proses pengisian formulir dilakukan secara online. Namun, Panitia PPDB menyediakan Sekretariat Layanan Bantu Pendaftaran di Yayasan Assunnah Cirebon bagi wali murid yang memerlukan pendampingan.'
            ]
        ]
    ],
    'seleksi' => [
        'category' => 'Seleksi & Tes',
        'questions' => [
            [
                'q' => 'Materi apa saja yang diujikan pada saat tes seleksi?',
                'a' => 'Untuk TKIT/SDIT berupa observasi tumbuh kembang & kesiapan belajar. Untuk MTs, MA, I\'dad, dan Ma\'had Aly berupa tes akademis, membaca/hafalan Al-Qur\'an, Bahasa Arab dasar, serta wawancara santri dan orang tua.'
            ],
            [
                'q' => 'Apakah calon santri dari luar kota Cirebon wajib hadir langsung saat tes?',
                'a' => 'Panitia menyediakan opsi tes seleksi secara Online (Via Zoom / Video Call) khusus untuk calon santri yang berdomisili di luar Pulau Jawa atau kondisi khusus tertentu.'
            ]
        ]
    ],
    'pembayaran' => [
        'category' => 'Biaya & Pembayaran',
        'questions' => [
            [
                'q' => 'Apakah biaya masuk dapat dicicil/diangsur?',
                'a' => 'Ya, pembayaran uang pangkal dapat dilakukan secara bertahap dengan batas maksimal pelunasan H+7 setelah daftar ulang. Untuk informasi lebih lanjut mengenai mekanisme dan ketentuan pembayaran, silakan menghubungi Admin PPDB.'
            ],
            [
                'q' => 'Bagaimana metode pembayaran biaya pendaftaran?',
                'a' => 'Pembayaran dilakukan via Virtual Account (VA) Bank Syariah Indonesia (BSI).'
            ]
        ]
    ],
    'administrasi' => [
        'category' => 'Administrasi & Fasilitas',
        'questions' => [
            [
                'q' => 'Fasilitas apa saja yang didapatkan oleh santri asrama (Boarding)?',
                'a' => 'Santri boarding mendapatkan fasilitas kamar asrama, tempat tidur & lemari pribadi, makan 3x sehari, layanan kesehatan/klinik, perbaikan seragam, serta bimbingan pengasuh 24 jam.'
            ],
            [
                'q' => 'Kapan seragam dan buku pelajaran dibagikan?',
                'a' => 'Seragam dan buku pelajaran akan dibagikan saat pendaftaran ulang selesai dan saat kedatangan santri baru di pekan orientasi (Mei/Juli 2027).'
            ]
        ]
    ]
];

// 10. Dokumentasi & Galeri Foto
$galleries = [
    [
        'title' => 'Gedung Utama & Ruang Kelas',
        'category' => 'Fasilitas',
        'image' => 'assets/images/facility (1).webp'
    ],
    [
        'title' => 'Suasana Pembelajaran & Halaqah',
        'category' => 'Akademik',
        'image' => 'assets/images/facility (2).webp'
    ],
    [
        'title' => 'Fasilitas Laboratorium Komputer',
        'category' => 'Fasilitas',
        'image' => 'assets/images/facility (3).webp'
    ],
    [
        'title' => 'Kegiatan Tahfizh & Setoran Hafalan',
        'category' => 'Tahfizh',
        'image' => 'assets/images/facility (4).webp'
    ],
    [
        'title' => 'Lingkungan Asrama Santri',
        'category' => 'Asrama',
        'image' => 'assets/images/facility (5).webp'
    ],
    [
        'title' => 'Kajian Rutin & Dirasah Islamiyah',
        'category' => 'Kegiatan',
        'image' => 'assets/images/facility (6).webp'
    ],
    [
        'title' => 'Ruang Belajar & Diskusi Santri',
        'category' => 'Akademik',
        'image' => 'assets/images/facility (7).webp'
    ],
    [
        'title' => 'Masjid Jami\' Assunnah',
        'category' => 'Fasilitas',
        'image' => 'assets/images/facility (8).webp'
    ],
    [
        'title' => 'Aktivitas Ekstrakurikuler & Olahraga',
        'category' => 'Kegiatan',
        'image' => 'assets/images/facility (9).webp'
    ],
    [
        'title' => 'Kantin & Area Interaksi Santri',
        'category' => 'Fasilitas',
        'image' => 'assets/images/facility (10).webp'
    ],
    [
        'title' => 'Perpustakaan & Ruang Baca',
        'category' => 'Akademik',
        'image' => 'assets/images/facility (11).webp'
    ],
    [
        'title' => 'Sarana Asrama & Ruang Istirahat',
        'category' => 'Asrama',
        'image' => 'assets/images/facility (12).webp'
    ],
    [
        'title' => 'Kegiatan Kemandirian & Kedisiplinan',
        'category' => 'Kegiatan',
        'image' => 'assets/images/facility (13).webp'
    ],
    [
        'title' => 'Program Bimbingan & Mentoring',
        'category' => 'Tahfizh',
        'image' => 'assets/images/facility (14).webp'
    ],
    [
        'title' => 'Area Olahraga & Outdoor',
        'category' => 'Kegiatan',
        'image' => 'assets/images/facility (15).webp'
    ],
    [
        'title' => 'Ruang Kesehatan & Pelayanan Santri',
        'category' => 'Fasilitas',
        'image' => 'assets/images/facility (16).webp'
    ]
];

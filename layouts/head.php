<!DOCTYPE html>
<html lang="id" class="scroll-smooth scroll-pt-20">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($site['title']) ?></title>
    
    <!-- Meta SEO -->
    <meta name="description" content="<?= htmlspecialchars($site['description']) ?>">
    <meta name="keywords" content="PPDB Assunnah Cirebon, Pendaftaran Assunnah 2027 2028, TKIT SDIT MTs MA Assunnah, Sekolah Islam Cirebon, Pesantren Cirebon">
    <meta name="author" content="Yayasan Assunnah Cirebon">

    <!-- Open Graph / Social Media -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= htmlspecialchars($site['url']) ?>">
    <meta property="og:title" content="<?= htmlspecialchars($site['title']) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($site['description']) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($site['url']) ?>/assets/images/og-image.jpg">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">

    <!-- Google Fonts: Plus Jakarta Sans (Heading) & Inter (Body) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Tailwind CSS Play CDN with Navy Blue (Biru Dongker) Theme -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            900: '#0B192C',
                            800: '#122947',
                            700: '#183B68',
                            600: '#1E4E8C',
                            500: '#2563EB',
                            400: '#3B82F6',
                            100: '#DBEAFE',
                            50:  '#EFF6FF'
                        },
                        gold: {
                            700: '#8A6A16',
                            600: '#A17B1E',
                            500: '#D4AF37',
                            300: '#E8D595',
                            100: '#FDF8E8'
                        },
                        dark: '#07111D',
                        surface: '#FFFFFF',
                        bodytext: '#1E293B',
                        mutedtext: '#64748B',
                        bordercolor: '#E2E8F0'
                    },
                    fontFamily: {
                        heading: ['"Plus Jakarta Sans"', 'sans-serif'],
                        body: ['"Inter"', 'sans-serif']
                    }
                }
            }
        }
    </script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Custom App CSS -->
    <link rel="stylesheet" href="./assets/css/app.css?v=<?= file_exists(__DIR__ . '/../assets/css/app.css') ? filemtime(__DIR__ . '/../assets/css/app.css') : '1.1' ?>">
</head>
<body class="bg-[#F8FAFC] text-[#1E293B] font-body antialiased flex flex-col min-h-screen">

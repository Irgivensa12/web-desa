<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Default Title --}}
    <title inertia>Profil Dukuh Ploso | Desa Petir, Rongkop, Gunungkidul</title>

    {{-- SEO --}}
    <meta name="description"
        content="Website resmi Dukuh Ploso, Desa Petir, Kecamatan Rongkop, Kabupaten Gunungkidul. Menyajikan informasi profil dukuh, sejarah, potensi, galeri, data kependudukan, serta kegiatan masyarakat.">

    <meta name="keywords"
        content="Dukuh Ploso, Padukuhan Ploso, Desa Petir, Rongkop, Gunungkidul, Profil Dukuh, Website Desa, Potensi Desa">

    <meta name="author" content="KKN Universitas Sanata Dharma">

    <meta name="robots" content="index, follow">

    {{-- Canonical --}}
    <!-- <link rel="canonical" href="https://dukuhploso.my.id"> -->

    {{-- Theme Color --}}
    <meta name="theme-color" content="#15803d">

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <link
        rel="icon"
        type="image/png"
        sizes="32x32"
        href="/favicon-32x32.png" />

    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="/favicon-16x16.png" />

    <link
        rel="apple-touch-icon"
        sizes="180x180"
        href="/apple-touch-icon.png" />

    <link
        rel="manifest"
        href="/site.webmanifest" />
    {{-- Open Graph --}}
    <meta property="og:type" content="website">

    <meta property="og:title"
        content="Profil Dukuh Ploso | Desa Petir">

    <meta property="og:description"
        content="Website resmi Dukuh Ploso yang berisi sejarah, potensi, galeri, kependudukan, dan informasi masyarakat.">

    <meta property="og:image"
        content="/images/Logo Dukuh Ploso 2.png">

    <meta property="og:locale"
        content="id_ID">

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:title"
        content="Profil Dukuh Ploso">

    <meta name="twitter:description"
        content="Website resmi Dukuh Ploso">

    <meta name="twitter:image"
        content="/images/Logo Dukuh Ploso 2.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">

    <link
        href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
        rel="stylesheet" />

    <!-- Scripts -->
    @routes

    @vite([
    'resources/js/app.js',
    "resources/js/Pages/{$page['component']}.vue"
    ])

    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia
</body>

</html>
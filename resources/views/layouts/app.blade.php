<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- SEO --}}
    <meta name="description" content="Etilec designs, builds, and supports digital products - MVPs, SaaS, and custom software - with fast, reliable development and support.">    
    <meta name="copyright" content="Etilec">
    <!-- <meta name="author" content="Badni Abdelwahab" /> -->
    <meta name="keywords" content="Agence, Boite Developpement, entreprise, Estimation & Conseil de Projet, création site web, application web, application Mobile, Flutter, wordpress, Vuejs, Laravel, design moderne, Ui/Ux Algérie">
    <link rel="canonical" href="/" />
    <link rel="alternate" hreflang="en" href="/" />
    <link rel="alternate" hreflang="fr" href="/fr" />

    <!--  for indexing the page from the serchr engin -->
    <meta name="robots" content="index, follow" />

    <!-- for date of content -->
    <meta name="revised" content="Tuesday, July 20th, 2019, 10:15 am" /> 

    <!-- for social media websit -->
    <meta name="og:title" content="Etilec" />
    <meta name="og:type" content="teaching" />
    <meta name="og:image" content="assets/media/logo-image.png" />
    <meta name="og:description" content="Description About The Algorithm Article" />
    



    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
    <script src="resources/js/app.js" defer></script>

</head>
<body>

    @include('components.navbar.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer.footer')
    <a href="#" class="chat-button" target="_blank">
        <span class="chat-text">Contact us on WhatsApp</span>
        <i class="bi bi-whatsapp"></i>
    </a>
    
        <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

</body>
</html>
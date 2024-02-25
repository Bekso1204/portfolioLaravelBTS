<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="PELLIER Alexian">

    <title>Portfolio | PELLIER Alexian</title>

    <link href="{{url('css/app.css')}}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <script src="{{url('js/app.js')}}" defer></script>
    <script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>
</head>

<body>
    <div class="maintenance-nav-bar" style="display: none;">
        <p class="maintenance-logo"><i class="ri-error-warning-line" style="font-size:50px;"></i> Ce portfolio n'est pas complètement terminé, pour l'instant il n'est pas visualisable sur 
            téléphone mais le sera bientôt. De plus je n'ai pas terminé ma veille technologique et je travaille
        encore sur l'affichage de mes projets.</p>
    </div>
    <div class="nav-bar">
        <a href="{{ route('home') }}" class="logo">ALEXIAN.</a>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="{{ route('home') }}" class="{{ Request::routeIs('home') ? 'active' : ''}}">Accueil</a></li>
                <li><a href="{{ route('projects') }}" class="{{ Request::routeIs('projects') ? 'active' : ''}}">Projets</a></li>
                <li><a href="{{ route('about') }}" class="{{ Request::routeIs('about') ? 'active' : ''}}">À propos</a></li>
                <li><a href="{{ route('skills') }}" class="{{ Request::routeIs('skills') ? 'active' : ''}}">Livret de compétences</a></li>
                <li><a href="{{ route('tech-watch') }}" class="{{ Request::routeIs('tech-watch') ? 'active' : ''}}">Veille technologique</a></li>
            </ul>
        </nav>
    </div>

    @section('content')
    <hr class="separator">
    <section class="contact-container">
        <div class="contact-text">
            <h1 class="contact-title">
                Envie de me contacter ?
            </h1>
        </div>
        <div class="contact-btn">
            <a href="mailto:alexian.pellier2912@gmail.com">C'est par ici <i class="ri-send-plane-fill"></i></a>
        </div>
    </section>

    <hr style="display: none;" class="separator">
    <section style="display: none;" class="linkedin-container">
    <div class="badge-base LI-profile-badge" data-locale="fr_FR" data-size="large" data-theme="dark" data-type="HORIZONTAL" 
        data-vanity="alexian-pellier-613606251" data-version="v1"><a class="badge-base__link LI-simple-link" 
        href="https://fr.linkedin.com/in/alexian-pellier-613606251?trk=profile-badge">Alexian PELLIER</a></div>
    </section>

    <hr class="separator">
    <section class="cv-container">
        <div class="cv-text">
            <h1 class="cv-title">
                Mon CV à télécharger :
            </h1>
        </div>
        <div class="cv-btn">
            <a href="{{url('assets/CV_AlexianPellier.pdf')}}" target="_blank"> C'est ici <i class="ri-download-line"></i></a>
        </div>
    </section>

    @show

    @section('footer')
    <footer>
        <div class="footercontent">
            <div class="footer-section about">
                <h2 class="logo-text">Alexian.</h2>
                <p>Etudiant dans le développement informatique. Je me spécialise dans les langages web.</p></br>
                <p>Portfolio réalisé en Laravel 10 principalement.</p>
            </div>
            <div class="footer-section links">
                <h2>Liens</h2>
                <ul>
                    <li><a href="{{ route('home') }}">Accueil</a></li>
                    <li><a href="{{ route('projects') }}">Projets</a></li>
                    <li><a href="{{ route('about') }}">À propos</a></li>
                    <li><a href="{{ route('skills') }}">Livret de compétences</a></li>
                    <li><a href="{{ route('tech-watch') }}">Veille technologique</a></li>
                </ul>
            </div>
            <div class="footer-section contact">
                <h2>Contact</h2>
                <ul>
                    <li><a href="mailto:alexian.pellier2912@gmail.com"><i class="ri-mail-line"></i> alexian.pellier2912@gmail.com</a></li>
                    <li><a href="tel:+33643353328"><i class="ri-phone-fill"></i> 06.43.35.33.28</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p><i class="ri-copyright-line"></i> <?php
            echo date("Y") ?> Alexian Pellier - Tous droits réservés</p>
            <div class="footer-social">
                <a href="#" style="display: none;"><i class="ri-instagram-line"></i></a>
                <a href="#" style="display: none;"><i class="ri-threads-fill"></i></a>
                <a href="https://github.com/Bekso1204"><i class="ri-github-fill"></i></a>
                <a href="https://www.linkedin.com/in/alexian-pellier-613606251/"><i class="ri-linkedin-fill"></i></a>
            </div>
        </div>
    </footer>
    @show

</body>

</html>
<script>
    const navbar = document.querySelector('.navbar');
    const hamburger = document.querySelector('.hamburger')

    hamburger.addEventListener('click', () => {
        navbar.classList.toggle('active');
    });
</script>
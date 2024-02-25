@extends('templates.template')
@section('content')
<main class="page">
    <header class="head">
        <h1 class="title">
            Ma veille technologique
        </h1>
        <p class="desc">
            Découvrez la veille technologique réalisée dans le cadre de mon diplôme.
        </p>
    </header>

    <section class="techWatch-container">
        <h2 class="techWatch-subtitle">
            Veille technologique : c'est quoi ?
        </h2>
        <p class="techWatch-text">
            La veille technologique est un processus surveillance
            des évolutions technologiques. Elle vise à rester informé
            des dernières avancées, innovations, tendances et bonnes pratiques
            dans le domaine technologique. Tout cela dans le but de se démarquer
            dans son domaine.
        </p>
        <p class="techWatch-text">
            En effet, l'informatique est en constante évolution, et la veille est donc
            une partie essentielle de notre travail et peut prendre beaucoup de temps. C'est
            pour cela qu'il faut savoir organiser sa veille pour être toujours jour de l'actualité
            sans perdre de temps et sans se perdre dans les informations que l'on reçoit.
        </p>
        <p class="techWatch-text">
            Il existe deux méthodes pour la collecte d'informations
            dans le cadre d'une veille technologique.
        </p>
        <p class="techWatch-text">
            La méthode <b>PULL</b>. C’est quand l’utilisateur va aller chercher l’information de lui-même,
            avec des recherches précises et qui prennent du temps. Il va donc rechercher ces
            informations sur un moteur de recherche ou même sur les réseaux sociaux.
        </p>
        <p class="techWatch-text">
            La méthode <b>PUSH</b>. C’est quand l’utilisateur va utiliser des outils pour que l’information
            vienne à lui automatiquement. Il va mettre en place des outils de surveillance.
        </p>
    </section>

    <section class="techWatch-container">
        <h2 class="techWatch-subtitle">
            Mon sujet
        </h2>
        <h3 class="techWatch-subject">
            L'utilisation de Pub/Sub dans le développement informatique.
        </h3>
    </section>

    <section class="techWatch-container">
        <h2 class="techWatch-subtitle">
            Pub/Sub : qu'est-ce que c'est ?
        </h2>
        <p class="techWatch-text">

        </p>
    </section>

    <section class="techWatch-container">
        <h2 class="techWatch-subtitle">
            Ce qu'apporte l'utilisation de cette techno aux entreprises et développeurs
        </h2>
        <p class="techWatch-text">

        </p>
    </section>

    <section class="techWatch-container">
        <h2 class="techWatch-subtitle">
            Pourquoi j'ai choisis ce sujet ?
        </h2>
        <p class="techWatch-text">
            Dans le cadre du BTS SIO, la mise en place d'une veille technologique
            est imposée. Après réflexion, je me suis penché sur la techno Pub/Sub,
            une techno que j'avais vue lors de mon stage de première année et qui m'avait
            parue intéressante afin d'en apprendre plus et aussi de me démarquer de mes camarades.
        </p>
    </section>

    <section class="techWatch-container">
        <h2 class="techWatch-subtitle">
            Conclusion
        </h2>
        <p class="techWatch-text">

        </p>
    </section>

    <section class="techWatch-container">
        <h2 class="techWatch-subtitle">
            Les outils mis en place
        </h2>
        <p class="techWatch-text">
            Pour mener à bien mes recherches sur la technologie recherchée, j'ai
            choisi de mettre deux méthodes en œuvre.
        </p>
        <p class="techWatch-text">
            J'ai d'abord commencé par utiliser la méthode <b>PUSH</b>. J'ai donc mis en place l'outil
            de surveillance <b>Google Alerte</b> afin de recevoir des informations du sujet recherché. Ce qui
            était compliqué c'était le tri des ces alertes car beaucoup ne contenaient pas l'information recherchée.
            Le tri des ses alertes était donc nécessaire pour ne garder que les informations importantes.
        </p>
        <p class="techWatch-text">
            Après cela j'ai utilisé la méthode <b>PULL</b>. Je suis donc allé cherché les
            informations sur GoogleCloud, des forums et des sites de documentation. Pour ça je me suis aussi aidé de chatGPT et bard.
        </p>
    </section>

    <section class="techWatch-container">
        <h2 class="techWatch-subtitle">
            Mes sources
        </h2>
        <p class="techWatch-text">

        </p>
    </section>
</main>
<hr class="separator">
    <section class="techWatch-see-container">
        <div class="techWatch-see-text">
            <h1 class="techWatch-see-title">
                A voir ici aussi :
        </div>
        <div class="techWatch-see-btn">
            <a href="https://dynalist.io/d/LRxCbkLyN5A8Qt7IO1pbPSww" target="_blank"> Veille technologique <i class="ri-file-text-line"></i></a>
        </div>
    </section>
@parent
@stop
@section('footer')
@parent
@stop
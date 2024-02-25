@extends('templates.template')
@section('content')
<section class="home">
    <div class="home-content">
        <h1>Hi, I'm Alexian PELLIER</h1>
        <div class="tagline">
            <a><i class="ri-terminal-box-line"></i>Développeur web</a>
            <a><i class="ri-code-s-slash-line"> </i> Full-Stack</a>
            <a><i class="ri-graduation-cap-line"> </i> Etudiant</a>
        </div>
        <p>Je suis un jeune étudiant en BTS SIO option SLAM
            au lycée Pasteur-Mont-Roland à Dole.</p>
    </div>
</section>
<section class="atouts">
    <div class="atouts-box">
        <i class="ri-code-box-line"></i>
        <h3>Développeur Full-Stack</h3>
        <p>Pendant mon BTS SIO, je m'apprends au développement full-stack sur plusieurs technologies différentes.</p>
    </div>
    <div class="atouts-box">
        <i class="ri-question-mark"></i>
        <h3>Curieux</h3>
        <p>Je suis toujours curieux, à la recherche de nouvelles expériences et j'adore acquérir de nouvelles connaissances.</p>
    </div>
    <div class="atouts-box">
    <i class="ri-trophy-line"></i>
        <h3>Travail de groupe</h3>
        <p>Travailler en équipe et aider les personnes en difficultés sont des valeurs qui me tiennent à coeur.</p>
    </div>
</section>
@parent
@stop
@section('footer')
@parent
@stop
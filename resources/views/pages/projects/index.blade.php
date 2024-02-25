@extends('templates.template')
@section('content')
<main class="page">
    <header class="head">
        <h1 class="title">
            Mes projets
        </h1>
        <p class="desc">
            Découvrez les projets que j'ai pu réaliser durant mon parcours scolaire
        </p>
    </header>

    @foreach ($projects as $project)
    <div class="projects-container">
        <h2 class="project-title">{{ $project['title'] }}</h2>
        <div class="flex-container">
            <img src="{{ $project['photo'] }}" alt="{{ $project['photo_alt'] }}" class="project-img">
            <div class="desc-tags-container">
                <p class="project-desc">{{ $project['description'] }}</p>
                @foreach ($project['tags'] as $tag)
                <span class="project-tag">{{ $tag }}</span>
                @endforeach
            </div>
            <a href="{{ route('project', [$project['slug']]) }}" class="project-more">Voir plus <i class="ri-arrow-right-line"></i></a>
        </div>
    </div>
    @endforeach
</main>
@parent
@stop
@section('footer')
@parent
@stop
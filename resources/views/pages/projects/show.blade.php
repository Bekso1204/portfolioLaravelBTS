@extends('templates.template')
@section('content')

<main class="page">
    <header class="head">
        <h1 class="title">
            {{ $project['title'] }}
        </h1>
    </header>
    @foreach ($project['tags'] as $tag)
    <span class="project-tag">{{ $tag }}</span>
    @endforeach
    <div class="project-container">
        @foreach ($project['sections'] as $title => $text)
        <h1 class="project-part-title">{{ $title }}</h2>
        <p class="project-part-paragraph">{{ $text }}</p>
        <br><br>
        @endforeach
    </div>
</main>

@stop
@section('footer')
@parent
@stop
@extends('templates.template')
@section('content')
<main class="page">
    <header class="head">
        <h1 class="title">Mes compétences</h1>
        <p class="desc">Découvrez le livret de compétences et les preuves obtenus dans le cadre de mon diplôme.</p>
    </header>

    <section class="skills-container">
        <h3 class="skills-subtitle">Livret de compétences :</h3>
        <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSbqKS9rM-Gv9OjNGxG9lRE0l6KtBvXiOw9C22QiCIdQsfvtl6W5ZBRrMlghFhSDA/pubhtml?gid=425474395&amp;single=true&amp;widget=true&amp;headers=false" class="skills-booklet"></iframe>
        <h3 class="skills-subtitle">Preuves pour les compétences :</h3>
        <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vSIWw1DGybqWP3QGfubaox3pQTLV3P2a3xT5KTyYkETcRWkaMASktiGs2yFHR_oelxJOiWdNCiovK3-/embed?start=false&loop=true&delayms=3000" frameborder="0" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true" class="skills-proof"></iframe>
    </section>
</main>
@parent
@stop
@section('footer')
@parent
@stop
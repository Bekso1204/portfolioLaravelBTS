@extends('templates.template')
@section('content')
<section class="skills">
    <div class="skills-about">
        <h1>Mes compétences</h1>
        <p>Ici, le livret de compétences et les preuves obtenus dans le cadre de mon diplôme</p>
    </div>
    <h3>Livret de compétences :</h3>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSbqKS9rM-Gv9OjNGxG9lRE0l6KtBvXiOw9C22QiCIdQsfvtl6W5ZBRrMlghFhSDA/pubhtml?gid=425474395&amp;single=true&amp;widget=true&amp;headers=false" width="100%" height="500"></iframe>
    <h3>Preuves pour les compétences :</h3>
    <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vSIWw1DGybqWP3QGfubaox3pQTLV3P2a3xT5KTyYkETcRWkaMASktiGs2yFHR_oelxJOiWdNCiovK3-/embed?start=false&loop=true&delayms=3000" frameborder="0" width="50%" height="383" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
</section>
@stop
@section('footer')
@parent
@stop
<style>
    .skills{
        color: #fff;
        padding: 0 10%;
		animation-delay: 1.6s;
    }
    .skills-about{
        margin-top: 5rem;
        margin-bottom: 5rem;
		text-align: center;
    }
    .skills-about h1{
        font-size: 5rem;
		font-weight: 700;
    }
    .skills-about p{
        font-size: 2rem;
		font-weight: 500;
		color: #c3cadb;
    }
    .skills iframe{
        margin-bottom: 2rem;
    }
    .skills h3{
        font-size: 1.5rem;
		font-weight: 500;
		margin-bottom: 1rem;
    }
</style>

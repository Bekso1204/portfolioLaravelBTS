@extends('templates.template')
@section('content')
<section class="home">
    <div class="home-content">
        <h1>Hi, I'm Alexian PELLIER</h1>
        <div class="tagline">
            <a><i class='bx bx-code-alt' ></i>Développeur web</a>
            <a><i class='bx bx-code-alt' ></i>Full-Stack</a>
            <a><i class='bx bxs-graduation'></i>Etudiant</a>
        </div>
        <p>Je suis un jeune étudiant en BTS SIO option SLAM
            au lycée Pasteur-Mont-Roland à Dole.</p>
    </div>
</section>
<section class="atouts">
<div class="atouts-box">
<i class='bx bx-code-block'></i>
        <h3>Développeur Full-Stack</h3>
        <p>Pendant mon BTS SIO, je m'apprends au développement full-stack sur plusieurs technologies différentes.</p>
    </div>
    <div class="atouts-box">
    <i class='bx bx-question-mark'></i>
        <h3>Curieux</h3>
        <p>Je suis toujours curieux, à la recherche de nouvelles expériences et j'adore acquérir de nouvelles connaissances.</p>
    </div>
    <div class="atouts-box">
    <i class='bx bx-trophy'></i>
            <h3>Travail de groupe</h3>
        <p>Travailler en équipe et aider les personnes en difficultés sont des valeurs qui me tiennent à coeur.</p>    
    </div>
</section>
@stop
@section('footer')
@parent
@stop

<style>
    .home{
        height: 100vh;
        display: flex;
        align-items: top;
        padding: 0 10%;
    }
    .home-content{
        max-width: 600px;
    }
    .home-content h1{
        position: relative;
        font-size: 75px;
        font-weight: 700;
        line-height: 1.2;
        margin: 20px 0 40px;
        color: #fff;
    }
    .home-content p{
        position: relative;
        font-size: 30px;
        margin: 20px 0 40px;
        color: #fff;
    }
    .home-content .tagline{
        position: relative;
        display: flex;
        justify-content: space-between;
        width: 500px;
        height: 50px;
    }
    .tagline a{
        position: relative;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: auto;
        cursor: pointer;
        height: 100%;
        background: transparent;
        border: 1px solid #7611a6;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        border-radius: 4rem;
        font-size: 19px;
        color: #c3cadb;
        text-decoration: none;
        font-weight: 600;
        letter-spacing: 1px;
        z-index: 1;
        overflow: hidden;
        transition: .5s;
        padding: 25px 10px;
    }
    .tagline a:hover{
        color: #fff;
        background-color: #7611a6;
    }
    .atouts{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px,auto));
        align-items: center;
        gap: 0.5rem;
        text-align: center;
        justify-content: center;
        margin-top: 2.2rem;
        margin: 100px;
        border-radius: 1rem;
        border : 1px solid #c3cadb;
        cursor: pointer;
        transition: all ease .50s;
    }
    .atouts-box{
        padding: 55px 40px;
        text-align: left;      
    }
    .atouts-box h3{
        color: #fff; 
        font-size: 23px; 
        font-weight: 700;
        margin-bottom: 12px;
    }
    .atouts-box p{
        color: #c3cadb;
        margin-bottom: 1.5rem
    }
    .atouts-box i{
        font-size: 50px;
        margin-bottom: 10px;
        background: linear-gradient(to bottom right, #5211c1, #be5aef);
        -webkit-background-clip: text;
        color: transparent;  
    }
</style>


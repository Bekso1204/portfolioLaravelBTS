@extends('templates.template')
@section('content')
        <main class="about">
            <header>
                <h1>À propos</h1>
                <p>Découvrez mon parcours et mes compétences.</p>
            </header>

            <section>
                <h2>Expérience</h2>
                    <p>
                        Actuellement étudiant en BTS SIO (Service Informatique aux Organisations) option SLAM 
                        (Solutions Logicielles et Applications Métiers) en formation initiale, je me forme au métier de 
                        développeur web full-stack. J'acquiers de nouvelles compétences tout au long de ma formation
                        grâce à de nombreux tp (en C# ou laravel 10 par exemple) et aussi des projets assez conséquents, 
                        j'effectue aussi des stages pour me familiariser avec la vie en entreprise.
                    </p>
                    <br>
                    <p>
                        Le dernier stage en entreprise que j'ai réalisé a duré 4 mois (9 mai - 18 août) 
                        et s'est déroulé au département informatique de l'entreprise Delfingen, un équipementier 
                        automobile mondial spécialisé dans les solutions de protection des réseaux embarqués et 
                        les tubes techniques pour transfert de fluides. Lors de ce stage, j'ai travaillé avec une 
                        équipe basée en France et en Roumanie, donc toutes les réunions se faisaient en anglais. J'ai pu développer 
                        sur leur application interne avec le langage Java, j'ai pu, en plus de coder en Java apprendre 
                        à envoyer des messages Pub/Sub vers un topic sur googleCloud et créer des étiquettes en JRXML.
                    </p>
            </section>
			<section>
				<h2>Diplômes</h2>
					<p>
						2019-2022<br>
						Bac général avec les options : <b>NSI (Numériques et Sciences de l'Informatique)</b> et <b>Physique-Chimie</b>
					</p>
					<br>
					<p>
						2022-2024<br>
						BTS <b>SIO (Service Informatique aux Organisations)</b> option <b>SLAM (Solutions Logicielles et Applications Métiers)</b>
					</p>
			</section>
			<section>
				<h2>Atouts</h2>
					<p>Curieux, Autonome, Polyvalent, Travail d'équipe. </p>
			</section>
			<section>
				<h2>Langages</h2>
					<p>
						C#, Java, HTML, CSS, Javascript, PHP Laravel, JRXML, MySQL
					</p>
			</section>
			<section>
				<h2>Logiciels</h2>
					<p>Visual Studio Code, Visual Studio, IntellijIdea, PgAdmin, Laragon, Office 365, Suite Google</p>
			</section>
		</main>
@stop
@section('footer')
@parent
@stop
<style>
	.about{
		color: #fff;
        padding: 0 10%;
		animation-delay: 1.6s;
	}
	.about header{
		margin-top: 5rem;
		text-align: center;
	}
	.about header h1{
		font-size: 5rem;
		font-weight: 700;
	}
	.about header p {
		font-size: 2rem;
		font-weight: 500;
		color: #c3cadb;
	}
	.about section {
		margin-top: 2rem;
	}
	.about section:nth-child(odd){
		text-align: right;
	}
	.about section h2{
		font-size: 2rem;
		font-weight: 700;
		margin-bottom: 1rem;
	}
	.about section p {
		font-size: 1.5rem;
		color: #c3cadb;
	}
	.about section p:last-child{
		margin-bottom: 2rem;
	}
</style>

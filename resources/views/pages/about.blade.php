@extends('templates.template')
@section('content')
<main class="page">
	<header class="head">
		<h1 class="title">À propos</h1>
		<p class="desc">Découvrez mon parcours et mes compétences.</p>
	</header>

	<section class="about-section">
		<h2 class="about-subtitle">Expérience</h2>
		<p class="about-text">
			Actuellement étudiant en BTS SIO (Service Informatique aux Organisations) option SLAM
			(Solutions Logicielles et Applications Métiers) en formation initiale, je me forme au métier de
			développeur web full-stack. J'acquiers de nouvelles compétences tout au long de ma formation
			grâce à de nombreux tp (en C# ou laravel 10 par exemple) et aussi des projets assez conséquents,
			j'effectue aussi des stages pour me familiariser avec la vie en entreprise.
		</p>
		<br>
		<p class="about-text">
			Le dernier stage en entreprise que j'ai réalisé a duré 4 mois (9 mai - 18 août)
			et s'est déroulé au département informatique de l'entreprise Delfingen, un équipementier
			automobile mondial spécialisé dans les solutions de protection des réseaux embarqués et
			les tubes techniques pour transfert de fluides. Lors de ce stage, j'ai travaillé avec une
			équipe basée en France et en Roumanie, donc toutes les réunions se faisaient en anglais. J'ai pu développer
			sur leur application interne avec le langage Java, j'ai pu, en plus de coder en Java apprendre
			à envoyer des messages Pub/Sub vers un topic sur googleCloud et créer des étiquettes en JRXML.
		</p>
	</section>
	<section class="about-section">
		<h2 class="about-subtitle">Diplômes</h2>
		<p class="about-text">
			2019-2022<br>
			Bac général avec les options : <b>NSI (Numériques et Sciences de l'Informatique)</b> et <b>Physique-Chimie</b>
		</p>
		<br>
		<p class="about-text">
			2022-2024<br>
			BTS <b>SIO (Service Informatique aux Organisations)</b> option <b>SLAM (Solutions Logicielles et Applications Métiers)</b>
		</p>
	</section>
	<section class="about-section">
		<h2 class="about-subtitle">Atouts</h2>
		<p class="about-text">Curieux, Autonome, Polyvalent, Travail d'équipe. </p>
	</section>
	<section class="about-section">
		<h2 class="about-subtitle">Langages</h2>
		<p class="about-text">
			C#, Java, HTML, CSS, Javascript, Alpine.js, PHP, Laravel, JRXML, Markdown, MySQL
		</p>
	</section>
	<section class="about-section">
		<h2 class="about-subtitle">Les outils que j'utilise</h2>
		<p class="about-text">Visual Studio Code, Visual Studio, IntellijIdea, PgAdmin, Laragon, Office 365, Suite Google, Jira</p>
	</section>
	<section class="about-section">
		<h2 class="about-subtitle">Les IA à mon service</h2>
		<p class="about-text">BlackBox, Bard, ChatGPT, NightCafe</p>
	</section>
</main>
@parent
@stop
@section('footer')
@parent
@stop
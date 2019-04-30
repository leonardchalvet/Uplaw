<html>
	<head>

		<title>About</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="style/css/about.css">

		<script type="text/javascript" src="script/minify/jQuery.3.3.1-min.js"></script>

		<script type="text/javascript" src="script/minify/jquery.parallax-scroll-min.js"></script>

	</head>
	
	<body>

		<?php 
		$type = 'apropos';
		include('common-header.php') 
		?>

		<main>

			<section id="section-cover">
				<div class="wrapper">
					<div class="container-illu">
						<img src="img/about/cover-illu.svg">
					</div>
					<div class="container-text">
						<h1>
							À propos d'Uplaw
						</h1>
						<p>
							Chez Uplaw, nous apprécions la confiance que vous nous accordez lorsque vous nous remettez les clefs de votre royaume documentaire.
						</p>
						<a href="#" class="hover-left">
							<span class="btn-text">
								Nous recrutons
							</span>
							<svg class="btn-arrow" viewBox="0 0 13 6">
							   <use xlink:href="img/common/arrow-1.svg#arrow-1"></use>
							</svg>
						</a>
					</div>
				</div>
			</section>

			<section id="section-origin">
				<img class="obj-1" src="img/about/origin-obj-1.svg">
				<div class="wrapper">
					<img class="obj-2" src="img/about/origin-obj-2.svg">
					<div class="container-text">
						<div class="left">
							<h2>L'origine du projet.</h2>
							<div class="sep"></div>
							<h3>A la recherche du temps perdu</h3>
							<p>
								L'idée d'Uplaw est venue d'un constat de départ très simple et partagé par tous ceux qui interagissent avec la documentation juridique des entreprises (CEO, CFO, avocats, experts-comptable, CAC etc.) : aucune solution ne permet de répondre aux problématiques de gestion corporate de manière rapide et fiable.
							</p>
						</div>
						<div class="right">
							<p>
								En effet, les documents sont souvent éparpillés ou mal classés et les données sont dispersées entre diverses applications (drive, excel, outlook etc.) les rendant ainsi déconnectées de leur document source. Résultat, leur vérification est un processus aléatoire, chronophage et coûteux.
								Jusqu'à présent, personne ne prend réellement en charge ce besoin qui n'est pas perçu comme relevant de la sphère de l'avocat mais plutôt comme une tâche pensée à tort comme "administrative". C'est en réalité une zone grise... Nous nous sommes dit que cela ne pouvait plus durer !
								<span>Uplaw est né.</span>
							</p>
						</div>
					</div>
				</div>
			</section>

			<section id="section-team">
				<img class="obj" src="img/about/team-obj.svg">
				<div class="wrapper">
					<div class="container-text">
						<h2>Les fondateurs</h2>
						<div class="sep"></div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
						</p>
					</div>
					<div class="container-el">
						<div class="el">
							<div class="container-photo">
								<div class="bg" style="background-image: url(img/img-test/user-2.jpg);"></div>
							</div>
							<div class="name">
								Sophie Dupont
							</div>
							<div class="job">
								Juriste
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							</p>
						</div>
						<div class="el">
							<div class="container-photo">
								<div class="bg" style="background-image: url(img/img-test/user-2.jpg);"></div>
							</div>
							<div class="name">
								Sophie Dupont
							</div>
							<div class="job">
								Juriste
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							</p>
						</div>
						<div class="el">
							<div class="container-photo">
								<div class="bg" style="background-image: url(img/img-test/user-2.jpg);"></div>
							</div>
							<div class="name">
								Sophie Dupont
							</div>
							<div class="job">
								Juriste
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							</p>
						</div>
					</div>
				</div>
			</section>

			<section id="section-photos">
				<div class="photo" style="background-image: url('img/about/photo-1.png')"></div>
				<div class="photo" style="background-image: url('img/about/photo-2.png')"></div>
				<div class="photo" style="background-image: url('img/about/photo-3.png')"></div>
				<div class="photo" style="background-image: url('img/about/photo-4.jpg')"></div>
			</section>

			<section id="section-press">
				<img class="obj" src="img/about/press-obj.svg">
				<div class="wrapper">
					<h2>
						Ils parlents de nous dans la presse
					</h2>
					<div class="container-logos">
						<div class="logo">
							<img src="img/about/press-logo-1.svg">
						</div>
						<div class="logo">
							<img src="img/about/press-logo-2.svg">
						</div>
						<div class="logo">
							<img src="img/about/press-logo-3.svg">
						</div>
						<div class="logo">
							<img src="img/about/press-logo-4.svg">
						</div>
					</div>
				</div>
			</section>

		</main>

		<?php include('common-footer.php') ?>

		<script type="text/javascript" src="script/minify/common-min.js"></script>

		<script type="text/javascript" src="script/minify/about-min.js"></script>
	</body>
</html>
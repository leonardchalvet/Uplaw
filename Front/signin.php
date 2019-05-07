<html>
	<head>

		<title>Sign In</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="style/css/signin.css">

		<script type="text/javascript" src="script/minify/jQuery.3.3.1-min.js"></script>

		<script type="text/javascript" src="script/minify/jquery.parallax-scroll-min.js"></script>

	</head>
	
	<body>

		<?php 
		$type = 'signin';
		include('common-header.php') 
		?>

		<main>

			<section id="section-form">
				<img class="obj-1" src="img/signin/obj-1.svg">
				<img class="obj-2" src="img/signin/obj-2.svg">
				<div class="wrapper">
					<div class="container-text">
						<h1>
							Créez votre espace personnel
						</h2>
						<p>
							Vous n’avez pas encore de compte ?<br>
							Inscrivez-vous dès maintenant afin d’intéragir sur la plateforme
						</p>
					</div>
					<form method="post" action="#">
						<div class="row">
							<div class="input">
								<label>Nom*</label>
								<input type="text" name="lastname" placeholder="Votre nom">
								<div class="sep"></div>
								<span>Veuillez vérifier votre nom</span>
								<img class="cross" src="img/common/red-cross.svg">
								<img class="check" src="img/common/check.svg">
							</div>
							<div class="input">
								<label>Prénom*</label>
								<input type="text" name="firstname" placeholder="Votre prénom">
								<div class="sep"></div>
								<span>Veuillez vérifier votre prénom</span>
								<img class="cross" src="img/common/red-cross.svg">
								<img class="check" src="img/common/check.svg">
							</div>
						</div>
						<div class="row">
							<div class="input">
								<label>Adresse e-mail*</label>
								<input type="email" name="firstname" placeholder="Votre e-mail">
								<div class="sep"></div>
								<span>Veuillez vérifier votre email</span>
								<img class="cross" src="img/common/red-cross.svg">
								<img class="check" src="img/common/check.svg">
							</div>
							<div class="input">
								<label>Mot de passe*</label>
								<input type="password" name="lastname" placeholder="********">
								<div class="sep"></div>
								<span>Veuillez vérifier votre mot de passe</span>
								<img class="cross" src="img/common/red-cross.svg">
								<img class="check" src="img/common/check.svg">
							</div>
						</div>
						<div class="input">
							<label>Société*</label>
							<input type="password" name="lastname" placeholder="Votre société">
							<div class="sep"></div>
							<span>Veuillez vérifier votre société</span>
							<img class="cross" src="img/common/red-cross.svg">
							<img class="check" src="img/common/check.svg">
						</div>
						<label class="checkbox">
							<input type="checkbox">
							<span class="checkmark"></span>
							<div class="text">J'ai lu et j'accepte les <a href="mentions.php">Conditions générales</a></div>
						</label>
						<button class="hover-center">
							<span class="btn-text">
								Inscription
							</span>
							<svg class="btn-arrow" viewBox="0 0 13 6">
							   <use xlink:href="img/common/arrow-1.svg#arrow-1"></use>
							</svg>
						</button>
					</form>
				</div>
			</section>			
			
		</main>

		<?php include('common-footer.php') ?>

		<script type="text/javascript" src="script/minify/common-min.js"></script>

		<script type="text/javascript" src="script/minify/signin-min.js"></script>
	</body>
</html>
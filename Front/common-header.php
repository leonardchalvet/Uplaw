<header id="header-desktop">
	
	<div class="wrapper">
		
		<div class="container-link">
			<a href="index.php" class="logo">
				<img src="img/common/logo.svg" alt="">
			</a>
			<ul>
				<li <?php if($type == 'solutions'){ echo 'class="select"';}; ?>>
					<a>Solutions</a>
					<img src="img/common/arrow-down.svg">
				</li>
				<li <?php if($type == 'fonctionnalites'){ echo 'class="select"';}; ?>>
					<a href="features.php">Fonctionnalités</a>
				</li>
				<li <?php if($type == 'services'){ echo 'class="select"';}; ?>>
					<a href="services.php">Services</a>
				</li>
				<li <?php if($type == 'apropos'){ echo 'class="select"';}; ?>>
					<a href="about.php">À propos</a>
				</li>

				<div class="dropdown">
					<a href="solutions.php">Solutions fonds</a>
					<a href="solutions.php">Solutions entreprises</a>
					<a href="solutions.php">Solutions professionnels</a>
				</div>

			</ul>
		</div>

		<div class="container-action">
			<a class="signin">
				<img src="img/common/connect-icone.svg" alt="">
				<span>
					Connexion
				</span>
			</a>
			<div class="sep"></div>
			<a class="signup hover-left">
				<span class="btn-text">
					Contact
				</span>
				<svg class="btn-arrow" viewBox="0 0 13 6">
				   <use xlink:href="img/common/arrow-1.svg#arrow-1"></use>
				</svg>
			</a>

			<div class="lg-log-in">
				<img class="cross" src="img/common/cross.svg">
				<h3>Connextez-vous à votre espace</h3>
				<p>
					Entrez vos identifiants ci-dessous afin d'accéder à votre espace personnel
				</p>
				<form method="post" action="#">
					<div class="sep"></div>
					<div class="input">
						<label>Adresse e-mail*</label>
						<input type="email" name="mail" placeholder="Votre adresse e-mail">
					</div>
					<div class="sep"></div>
					<div class="input">
						<label>Mot de passe*</label>
						<input type="password" name="password" placeholder="********">
					</div>
					<div class="sep"></div>
					<a href="#">Mot de passe oublié ?</a>
					<button class="hover-center">
						<span class="btn-text">
							Connexion
						</span>
						<svg class="btn-arrow" viewBox="0 0 13 6">
						   <use xlink:href="img/common/arrow-1.svg#arrow-1"></use>
						</svg>
					</button>
				</form>
			</div>

		</div>

	</div>

</header>


<header id="header-mobile">
	
</header>

<div class="container-lg">
	<div class="lg-contact">
		<img class="cross" src="img/common/cross.svg">
		<img class="obj-1" src="img/contact/obj-1.svg">
		<img class="obj-2" src="img/contact/obj-2.svg">
		<div class="container-text">
			<h2>
				Contactez-nous dès maintenant
			</h2>
			<p>
				Réduisez vos coûts et gagnez en efficacité dans la gestion de votre documentation juridique
			</p>
		</div>
		<form method="post" action="#">
			<div class="row">
				<div class="input">
					<label>Prénom</label>
					<input type="text" name="firstname" placeholder="Votre prénom">
					<span>Veuillez vérifier votre prénom</span>
					<img class="cross" src="img/common/red-cross.svg">
					<img class="check" src="img/common/check.svg">
				</div>
				<div class="input">
					<label>Nom</label>
					<input type="text" name="lastname" placeholder="Votre nom">
					<span>Veuillez vérifier votre nom</span>
					<img class="cross" src="img/common/red-cross.svg">
					<img class="check" src="img/common/check.svg">
				</div>
			</div>
			<div class="row">
				<div class="input">
					<label>E-mail professionnel</label>
					<input type="email" name="firstname" placeholder="Votre e-mail">
					<span>Veuillez vérifier votre email</span>
					<img class="cross" src="img/common/red-cross.svg">
					<img class="check" src="img/common/check.svg">
				</div>
				<div class="input">
					<label>Numéro de téléphone</label>
					<input type="tel" name="lastname" placeholder="00 00 00 00 00">
					<span>Veuillez vérifier votre téléphone</span>
					<img class="cross" src="img/common/red-cross.svg">
					<img class="check" src="img/common/check.svg">
				</div>
			</div>
			<button class="hover-center">
				<span class="btn-text">
					Connexion
				</span>
				<svg class="btn-arrow" viewBox="0 0 13 6">
				   <use xlink:href="img/common/arrow-1.svg#arrow-1"></use>
				</svg>
			</button>
		</form>
	</div>
</div>
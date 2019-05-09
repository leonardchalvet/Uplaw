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
			<a class="login">
				<img src="img/common/connect-icone.svg" alt="">
				<span>
					Connexion
				</span>
			</a>
			<div class="sep"></div>
			<a class="contact hover-left">
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
					<div class="input">
						<label>Adresse e-mail*</label>
						<input type="email" name="mail" placeholder="Votre adresse e-mail">
						<div class="sep"></div>
					</div>
					<div class="input">
						<label>Mot de passe*</label>
						<input type="password" name="password" placeholder="********">
						<div class="sep"></div>
					</div>
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
	
	<div class="container-nav">
		<div class="wrapper">
			<div class="burger">
				<div class="line"></div>
				<div class="line"></div>
			</div>
			<a href="index.php" class="logo">
				<img src="img/common/logo.svg" alt="">
			</a>
			<div class="cta-log-in">
				<span>
					Connexion
				</span>
			</div>
		</div>
	</div>

	<div class="container-menu">
		<div class="wrapper">

			<ul class="container-link">
				<li>
					<a>Solutions</a>
					<img src="img/common/arrow-down.svg">
				</li>
				<div class="dropdown">
					<a href="solutions.php">Solutions fonds</a>
					<a href="solutions.php">Solutions entreprises</a>
					<a href="solutions.php">Solutions professionnels</a>
				</div>
				<li><a href="features.php">Fonctionnalités</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="about.php">À propos</a></li>
			</ul>

			<div class="container-action">
				<a class="contact hover-left">
					<span class="btn-text">
						Contact
					</span>
					<svg class="btn-arrow" viewBox="0 0 13 6">
					   <use xlink:href="img/common/arrow-1.svg#arrow-1"></use>
					</svg>
				</a>
				<a class="login">
					<img src="img/common/connect-icone.svg" alt="">
					<span>
						Connexion
					</span>
				</a>
			</div>

		</div>
	</div>

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
				<div class="sep"></div>
			</div>
			<div class="sep"></div>
			<div class="input">
				<label>Mot de passe*</label>
				<input type="password" name="password" placeholder="********">
				<div class="sep"></div>
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
					<div class="sep"></div>
					<span>Veuillez vérifier votre prénom</span>
					<img class="cross" src="img/common/red-cross.svg">
					<img class="check" src="img/common/check.svg">
				</div>
				<div class="input">
					<label>Nom</label>
					<input type="text" name="lastname" placeholder="Votre nom">
					<div class="sep"></div>
					<span>Veuillez vérifier votre nom</span>
					<img class="cross" src="img/common/red-cross.svg">
					<img class="check" src="img/common/check.svg">
				</div>
			</div>
			<div class="row">
				<div class="input">
					<label>E-mail professionnel</label>
					<input type="email" name="firstname" placeholder="Votre e-mail">
					<div class="sep"></div>
					<span>Veuillez vérifier votre email</span>
					<img class="cross" src="img/common/red-cross.svg">
					<img class="check" src="img/common/check.svg">
				</div>
				<div class="input">
					<label>Numéro de téléphone</label>
					<input type="tel" name="lastname" placeholder="00 00 00 00 00">
					<div class="sep"></div>
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
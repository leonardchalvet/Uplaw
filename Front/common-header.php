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

			<div class="lg-contact">
				
			</div>

		</div>

	</div>

</header>


<header id="header-mobile">
	
</header>
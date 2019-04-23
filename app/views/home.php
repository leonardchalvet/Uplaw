<?php 
use Prismic\Dom\RichText;
$document = $WPGLOBAL['document']->data;
?>
<html>
	<head>

		<title>Home</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="/style/css/home.css">

		<script type="text/javascript" src="/script/minify/jQuery.3.3.1-min.js"></script>

		<script type="text/javascript" src="/script/minify/jquery.parallax-scroll-min.js"></script>

	</head>
	
	<body>

		<?php include('common-header.php') ?>

		<main>

			<section id="section-home">
				<div class="wrapper">
					<div class="container-text">
						<h1 class="wrapLine">
							<?= RichText::asText($document->cover_title); ?>
						</h1>
						<p class="wrapLine">
							<?= RichText::asText($document->cover_text); ?>
						</p>
						<a href="<?=$document->cover_cta_link->url; ?>" class="hover-left">
							<span class="btn-text">
								<?= RichText::asText($document->cover_cta_text); ?>
							</span>
							<svg class="btn-arrow" viewBox="0 0 13 6">
							   <use xlink:href="/img/common/arrow-1.svg#arrow-1"></use>
							</svg>
						</a>
					</div>

					<div id="obj-desktop-1"></div>
					<div id="obj-desktop-2"></div>
					<div id="obj-desktop-3"></div>

					<img class="obj-mobile-1" src="<?= $document->cover_illu_mobile->url; ?>" alt="">
					
				</div>
			</section>

			<section id="section-logos">
				<div class="wrapper">
					<div class="container-text">
						<div class="line"></div>
						<?= RichText::asHtml($document->logos_title); ?>
						<div class="line"></div>
					</div>
					<div class="container-el">
						<?php 
							for($i=0;$i<6;$i++) { 
								echo '<div class="el">';
								foreach ($document->logos_all_parteners_logo as $logo) { ?>
									<img src="<?= $logo->logos_partner_logo->url; ?>" alt="">
						<?php 	}
								echo '</div>'; 
							} 
						?>
					</div>
				</div>
			</section>

			<section id="section-features">
				<div class="wrapper">
					<div class="container-text">
						<?= RichText::asHtml($document->features_title); ?>
						<div class="sep"></div>
						<?= RichText::asHtml($document->features_text); ?>
						<a href="<?=$document->features_cta_link->url; ?>">
							<span class="link-arrow">
								>
							</span>
							<span class="link-text">
								<?= RichText::asText($document->features_cta_text); ?>
							</span>
						</a>
					</div>
					<div class="container-features">
						<div class="container-el">
							<?php
								foreach ($document->features_functionalities as $functionality) { ?>
									<div class="el">
										<div class="icn">
											<img src="<?= $functionality->features_functionality_icon->url; ?>" alt="">
										</div>
										<?= RichText::asHtml($functionality->features_fonctionality_title); ?>
										<?= RichText::asHtml($functionality->features_fonctionality_text); ?>
									</div>
							<?php 
								}
							?>
						</div>
					</div>

					<img class="obj-1" src="/img/home/shape-lines.svg" alt="">
					<img class="obj-2" src="/img/common/common-shape-1.svg" alt="">
				</div>
			</section>

			<section id="section-pres">
				<img class="obj-1" src="/img/common/common-shape-1.svg" alt="">
				<div class="wrapper">
					<div class="container-text">
						<?= RichText::asHtml($document->pres_title); ?>
						<div class="sep"></div>
						<?= RichText::asHtml($document->pres_text); ?>
						<a href="<?=$document->pres_cta_link->url; ?>">
							<span class="link-arrow">
								>
							</span>
							<span class="link-text">
								<?= RichText::asText($document->pres_cta_text); ?>
							</span>
						</a>
					</div>
					<div class="container-el">
						<?php
							foreach ($document->pres_all_skills as $skill) { ?>
								<div class="el">
									<img src="<?= $skill->pres_illutration_skill->url; ?>" alt="">
									<?= RichText::asHtml($skill->pres_title_skill); ?>
									<?= RichText::asHtml($skill->pres_text_skill); ?>
								</div>
						<?php 
							}
						?>
					</div>
				</div>
			</section>

			<?php
			$showSectionQuotes = strtolower(trim($document->quotes_show_or_hide[0]->text));
			if($showSectionQuotes === 'true') { 
			?>

				<section id="section-quotes">
					<div class="wrapper">
						<div class="container-pp">
							<?php
							$i = 1;
							foreach ($document->quotes_peoples as $quote) { ?>
								<div style="background-image: url(<?= $quote->quotes_picture_people->url; ?>);" class="pp pp-<?php echo $i; ?>"></div>
							<?php 
								$i++; 
							} ?>
						</div>
						<div class="container-text">
							<div class="container-quotes">
								<?php
								$i = 1;
								foreach ($document->quotes_peoples as $quote) { ?>
									<div class="quote" data-pp="pp-<?php echo $i; ?>">
										<img class="obj" src="/img/common/quote.svg" alt="">
										<q>
											<?= RichText::asText($quote->quotes_quote_people); ?>
										</q>
										<div class="sep"></div>
										<div class="name">
											<?= RichText::asText($quote->quotes_name_people); ?>
										</div>
										<div class="job">
											<?= RichText::asText($quote->quotes_job_people); ?>
										</div>
									</div>
								<?php 
									$i++; 
								} ?>
							</div>
							<div class="nav">
								<div class="btn-nav">
									<svg class="btn-arrow" viewBox="0 0 13 6">
									   <use xlink:href="/img/common/arrow-1.svg#arrow-1"></use>
									</svg>
								</div>
								<div class="btn-nav">
									<svg class="btn-arrow" viewBox="0 0 13 6">
									   <use xlink:href="/img/common/arrow-1.svg#arrow-1"></use>
									</svg>
								</div>
							</div>
						</div>
					</div>
				</section>
			
			<?php
			}
			?>

			<section id="cm-section-demo">
				<div class="cover" style="background-image: url(img/home/demo-cover.png);"></div>
				<div class="wrapper">
					<div class="container-text">
						<h2>Une question ?</h2>
						<p>
							Bénéficiez de l'assistance de nos experts Uplaw. Notre objectif étant de vous faciliter la vie, nous serons toujours présents pour vous aider si vous rencontrez la moindre difficulté dans l'utilisation de notre solution.
						</p>
						<a href="#" class="style-white hover-center">
							<span class="btn-text">
								Demander une démo
							</span>
							<svg class="btn-arrow" viewBox="0 0 13 6">
							   <use xlink:href="img/common/arrow-1.svg#arrow-1"></use>
							</svg>
						</a>
					</div>
				</div>
			</section>
			
		</main>

		<?php include('common-footer.php') ?>

		<script type="text/javascript" src="/script/minify/index-min.js"></script>
	</body>
</html>
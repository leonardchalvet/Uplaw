<?php 
use Prismic\Dom\RichText;
$document = $WPGLOBAL['document']->data;
?>
<html>
	<head>

		<title>Features</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="/style/css/features.css">

		<script type="text/javascript" src="/script/minify/jQuery.3.3.1-min.js"></script>

		<script type="text/javascript" src="/script/minify/jquery.parallax-scroll-min.js"></script>

	</head>
	
	<body>

		<?php include('common-header.php') ?>

		<main>

			<section id="section-cover">
				<div class="wrapper">
					<div class="container-text">
						<?= RichText::asHtml($document->cover_title); ?>
					</div>
					<div class="container-illu">
						<img class="illu" src="<?= $document->cover_illutration_desktop->url; ?>" alt="">
						<img class="obj-1" src="/img/common/common-shape-lines-white.svg" alt="">
					</div>
				</div>
			</section>

			<section id="section-demo">
				<div class="wrapper">
					<div class="container-text">
						<h2>
							<?= RichText::asText($document->demo_title); ?>
						</h2>
						<div class="sep"></div>
						<?= RichText::asHtml($document->demo_text); ?>
						<a href="<?=$document->demo_cta_link->url; ?>" class="hover-left">
							<span class="btn-text">
								<?= RichText::asText($document->demo_cta_text); ?>
							</span>
							<svg class="btn-arrow" viewBox="0 0 13 6">
							   <use xlink:href="/img/common/arrow-1.svg#arrow-1"></use>
							</svg>
						</a>
					</div>
					<div class="container-el">

						<?php
							$i = 0;
							$arrayScreen = [ 2, 5, 1, 4, 3, 4, 1];
							foreach ($document->screen_all_screens as $screen) { ?>
								<div class="el">
									<img class="screen" src="<?= $screen->all_screens_screen->url; ?>" alt="">
									<img class="obj-1" src="/img/features/obj-screen-<?php echo $arrayScreen[$i]; ?>.svg" alt="">
									<div class="container-infos">
										<h3>
											<?= RichText::asText($screen->all_screens_title); ?>
										</h3>
										<p>
											<?= RichText::asText($screen->all_screens_text); ?>
										</p>
									</div>
								</div>
						<?php
								$i++;
								if($i > count($arrayScreen)) { $i = 0; }
							}
						?>

					</div>
				</div>
			</section>

			<section id="section-features">
				<div class="wrapper">
					<div class="container-text">
						<div class="container-title">
							<h1>
								<?= RichText::asText($document->features_title); ?>
							</h1>
						</div>
						<div class="container-paragraph">
							<p>
								<?= RichText::asText($document->features_text); ?>
							</p>
							<a href="<?=$document->features_cta_link->url; ?>">
								<span class="link-arrow">
									>
								</span>
								<span class="link-text">
									<?= RichText::asText($document->features_cta_text); ?>
								</span>
							</a>
						</div>
						
					</div>

					<div class="container-el">

						<?php
							foreach ($document->features_all_features as $feature) { ?>
								<div class="el">
									<div class="icn">
										<img src="<?= $feature->features_icon_feature->url; ?>" alt="">
									</div>
									<h3>
										<?= RichText::asText($feature->features_title_feature); ?>
									</h3>
									<p>
										<?= RichText::asText($feature->features_text_feature); ?>
									</p>
								</div>
						<?php
							}
						?>

					</div>
				</div>

				<img class="obj-1" src="/img/common/common-shape-lines-black.svg" alt="">
				<img class="obj-2" src="/img/common/common-shape-1.svg" alt="">
			</section>

			<?php 
				$sliceFooter = $document->body[0]->primary; ?>

				<section id="cm-section-demo">
					<div class="cover" style="background-image: url(<?= $sliceFooter->slice_demo_background->url; ?>);"></div>
					<div class="wrapper">
						<div class="container-text">
							<?= RichText::asHtml($sliceFooter->slice_demo_title); ?>
							<?= RichText::asHtml($sliceFooter->slice_demo_text); ?>
							<a href="<?=$sliceFooter->slice_demo_cta_link->url; ?>" class="style-white hover-center">
								<span class="btn-text">
									<?= RichText::asText($sliceFooter->slice_demo_cta_text); ?>
								</span>
								<svg class="btn-arrow" viewBox="0 0 13 6">
								   <use xlink:href="/img/common/arrow-1.svg#arrow-1"></use>
								</svg>
							</a>
						</div>
					</div>
				</section>

		</main>

		<?php include('common-footer.php') ?>

		<script type="text/javascript" src="/script/minify/common-min.js"></script>

		<script type="text/javascript" src="/script/minify/features-min.js"></script>
	</body>
</html>
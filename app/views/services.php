<?php 
use Prismic\Dom\RichText;
$document = $WPGLOBAL['document']->data;
?>
<html>
	<head>

		<title>Services</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="/style/css/services.css">

		<script type="text/javascript" src="/script/minify/jQuery.3.3.1-min.js"></script>

		<script type="text/javascript" src="/script/minify/jquery.parallax-scroll-min.js"></script>

		<script type="text/javascript" src="/script/minify/bodymovin-min.js"></script>

	</head>
	
	<body>

		<?php include('common-header.php') ?>

		<main>

			<section id="section-cover">
				<div class="wrapper">
					<div class="container-text">
						<h1>
							<?= RichText::asText($document->cover_title); ?>
						</h1>
						<p>
							<?= RichText::asText($document->cover_text); ?>
						</p>
					</div>
					<div class="container-illu">
						<img class="illu" src="<?= $document->cover_illutration_desktop->url; ?>" alt="">
						<img class="obj-1" src="/img/common/common-shape-lines-black.svg" alt="">
					</div>
				</div>
			</section>

			<section id="section-features">
				<div class="wrapper">
					<div class="container-text">
						<h2>
							<?= RichText::asText($document->features_title); ?>
						</h2>
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

					<div class="container-el">

						<?php
							foreach ($document->features_all_feature as $feature) { ?>
								<div class="el">
									<img src="<?= $feature->features_icon_feature->url; ?>" alt="">
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

					<img class="obj-1" src="/img/common/common-shape-1.svg" alt="">
				</div>
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

		<script type="text/javascript" src="/script/minify/services-min.js"></script>
	</body>
</html>
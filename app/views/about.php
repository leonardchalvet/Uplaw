<?php 
use Prismic\Dom\RichText;
$document = $WPGLOBAL['document']->data;
?>
<html>
	<head>

		<title>About</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="/style/css/about.css">

		<script type="text/javascript" src="/script/minify/jQuery.3.3.1-min.js"></script>

		<script type="text/javascript" src="/script/minify/jquery.parallax-scroll-min.js"></script>

	</head>
	
	<body>

		<?php 
		$type = 'about';
		include('common-header.php') 
		?>

		<main>

			<section id="section-cover">
				<div class="wrapper">
					<div class="container-illu">
						<img src="<?= $document->cover_illutration_desktop->url; ?>">
					</div>
					<div class="container-text">
						<h1>
							<?= RichText::asText($document->cover_title); ?>
						</h1>
						<p>
							<?= RichText::asText($document->cover_text); ?>
						</p>
						<a href="<?= $document->cover_cta_link->url; ?>" class="hover-left">
							<span class="btn-text">
								<?= RichText::asText($document->cover_cta_text); ?>
							</span>
							<svg class="btn-arrow" viewBox="0 0 13 6">
							   <use xlink:href="/img/common/arrow-1.svg#arrow-1"></use>
							</svg>
						</a>
					</div>
				</div>
			</section>

			<section id="section-origin">
				<img class="obj-1" src="/img/about/origin-obj-1.svg">
				<div class="wrapper">
					<img class="obj-2" src="/img/about/origin-obj-2.svg">
					<div class="container-text">
						<div class="left">
							<h2>
								<?= RichText::asText($document->origin_title); ?>
							</h2>
							<div class="sep"></div>
							<h3>
								<?= RichText::asText($document->origin_subtitle); ?>
							</h3>
							<p>
								<?= RichText::asHtml($document->origin_text_left); ?>
							</p>
						</div>
						<div class="right">
							<?= RichText::asHtml($document->orign_text_right); ?>
						</div>
					</div>
				</div>
			</section>

			<section id="section-team">
				<img class="obj" src="/img/about/team-obj.svg">
				<div class="wrapper">
					<div class="container-text">
						<h2>
							<?= RichText::asText($document->team_title); ?>
						</h2>
						<div class="sep"></div>
						<p>
							<?= RichText::asText($document->team_text); ?>
						</p>
					</div>
					<div class="container-el">
						<?php 
							foreach ($document->team_pictures as $el) { ?>
								<div class="el">
									<div class="container-photo">
										<div class="bg" style="background-image: url(<?= $el->team_pictures_people->url; ?>);"></div>
									</div>
									<div class="name">
										<?= RichText::asText($el->team_name_people); ?>
									</div>
									<div class="job">
										<?= RichText::asText($el->team_job_people); ?>
									</div>
									<p>
										<?= RichText::asText($el->team_text_people); ?>
									</p>
								</div>
						<?php
							} 
						?>
					</div>
				</div>
			</section>

			<section id="section-photos">
				<div class="container-photo">
					<?php 
						foreach ($document->pictures_all_pictures as $picture) { ?>
							<div class="photo" style="background-image: url(<?= $picture->pictures_picture->url; ?>)"></div>
					<?php 
						} 
					?>
				</div>
			</section>

			<?php 
			$slice = $document->body[0];
			if($slice != NULL) { ?>
			<section id="cm-section-management">
				<div class="wrapper">
					
					<h2>
						<?= RichText::asText($slice->primary->slice_management_title); ?>
					</h2>
					<div class="sep"></div>

					<div class="content">
						
						<div class="container-photo">
						     <div class="bg" style="background-image: url(<?= $slice->primary->slice_management_picture->url; ?>);"></div>
						</div>

						<div class="container-text">
							
							<p>
								<?= RichText::asText($slice->primary->slice_management_text); ?>
							</p>

							<div class="container-el">

								<?php
									foreach ($slice->items as $el) { ?>
										<div class="el">
											<h3>
												<?= RichText::asText($el->slice_management_subtitle); ?>
											</h3>
											<p>
												<?= RichText::asText($el->slice_management_text_subtitle); ?>
											</p>
										</div>
								<?php
									}
								?>
							</div>

							<a class="hover-left" onclick="openContact()">
								<span class="btn-text">
									<?= RichText::asText($slice->primary->slice_management_cta_text); ?>
								</span>
								<svg class="btn-arrow" viewBox="0 0 13 6">
								   <use xlink:href="/img/common/arrow-1.svg#arrow-1"></use>
								</svg>
							</a>

						</div>

					</div>
				</div>
			</section>
			<? } ?>			

			<section id="section-press">
				<img class="obj" src="/img/about/press-obj.svg">
				<div class="wrapper">
					<h2>
						<?= RichText::asText($document->talkaboutus_title); ?>
					</h2>
					<div class="container-logos">
						<?php 
							foreach ($document->talkaboutus_all_logos as $logo) { ?>
								<a href="<?= $logo->talkaboutus_url->url; ?>" class="logo">
									<img src="<?= $logo->talkaboutus_logo->url; ?>">
								</a>
						<?php 
							} 
						?>
					</div>
				</div>
			</section>

		</main>

		<?php include('common-footer.php') ?>

		<script type="text/javascript" src="/script/minify/common-min.js"></script>

		<script type="text/javascript" src="/script/minify/about-min.js"></script>
	</body>
</html>
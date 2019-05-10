<?php 
use Prismic\Dom\RichText;
$document = $WPGLOBAL['document']->data;
?>
<html>
	<head>

		<title>Solutions</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="/style/css/solutions.css">

		<script type="text/javascript" src="/script/minify/jQuery.3.3.1-min.js"></script>

		<script type="text/javascript" src="/script/minify/jquery.parallax-scroll-min.js"></script>

	</head>
	
	<body>

		<?php 
		$type = 'solutions';
		include('common-header.php') 
		?>

		<main>

			<section id="section-cover">

				<?php
				$n = rand(1, 3);
				switch(strtoupper($document->cover_color_tag)) {
					case '#59C7DD' : $n = 1; break;
					case '#F3C44F' : $n = 2; break;
					case '#00585E' : $n = 3; break;
				}
				echo('<img class="obj obj-'.$n.'" src="/img/solutions/cover-obj-'.$n.'.svg">');
				?>

				<div class="wrapper">

					<div class="container-title">
						<div class="container-illu">
							<img src="<?= $document->cover_first_illutration_desktop->url; ?>">
						</div>
						<div class="container-text">
							<div class="tag" style="background-color: <?= $document->cover_color_tag; ?>">
								<span>
									<?= RichText::asText($document->cover_tag); ?>
								</span>
							</div>
							<h1>
								<?= RichText::asText($document->cover_titile); ?>
							</h1>
						</div>
					</div>
					<div class="container-cta">
						<div class="container-text">
							<p>
								<?= RichText::asText($document->cover_text); ?>
							</p>
							<a class="hover-left style-white" onclick="openContact()">
								<span class="btn-text">
									<?= RichText::asText($document->cover_cta_text); ?>
								</span>
								<svg class="btn-arrow" viewBox="0 0 13 6">
								   <use xlink:href="/img/common/arrow-1.svg#arrow-1"></use>
								</svg>
							</a>
						</div>
						<div class="container-illu">
							<img src="<?= $document->cover_second_illutration_desktop->url; ?>">
						</div>
					</div>
				</div>
			</section>

			<section id="cm-section-management">
				<?php $slice = $document->body[0]; ?>
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

			<section id="section-cta">

				<img class="obj" src="/img/solutions/cta-obj.svg">

				<div class="wrapper">

					<div class="container-el">
						<div class="el">
							<div class="container-bg">
								<div class="bg" style="background-image: url(<?= $document->cta_picture_left->url; ?>)"></div>
								<div class="gradient"></div>
							</div>
							<a href="<?= $document->cta_link_left->url; ?>" class="hover-center style-transparent">
								<span class="btn-text">
									<?= RichText::asText($document->cta_text_left); ?>
								</span>
								<svg class="btn-arrow" viewBox="0 0 13 6">
								   <use xlink:href="/img/common/arrow-1.svg#arrow-1"></use>
								</svg>
							</a>
						</div>
						<div class="el">
							<div class="container-bg">
								<div class="bg" style="background-image: url(<?= $document->cta_picture_right->url; ?>)"></div>
								<div class="gradient"></div>
							</div>
							<a href="<?= $document->cta_link_right->url; ?>" class="hover-center style-transparent">
								<span class="btn-text">
									<?= RichText::asText($document->cta_text_right); ?>
								</span>
								<svg class="btn-arrow" viewBox="0 0 13 6">
								   <use xlink:href="/img/common/arrow-1.svg#arrow-1"></use>
								</svg>
							</a>
						</div>
					</div>

					<div class="container-cta">
						<a class="hover-center style-white" onclick="openContact()">
							<span class="btn-text">
								<?= RichText::asText($document->cta_text_button); ?>
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

		<script type="text/javascript" src="/script/minify/solutions-min.js"></script>
	</body>
</html>
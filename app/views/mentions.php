<?php 
use Prismic\Dom\RichText;
$document = $WPGLOBAL['document']->data;
?>
<html>
	<head>

		<title>Mentions légales</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="/style/css/mentions.css">

		<script type="text/javascript" src="/script/minify/jQuery.3.3.1-min.js"></script>

		<script type="text/javascript" src="/script/minify/jquery.parallax-scroll-min.js"></script>

	</head>
	
	<body>

		<?php 
		include('common-header.php') 
		?>

		<main>

			<section id="section-mentions">
				<img class="obj-1" src="/img/mentions/mentions-obj-1.svg">
				<img class="obj-2" src="/img/mentions/mentions-obj-2.svg">
				<div class="wrapper">
					
					<div class="container-text">
						<h1>
							<?= RichText::asText($document->content_title); ?>
						</h1>
						<div class="container-el">
							
							<?php 
								$i = 0;
								foreach ($document->all_text as $el) { 
									if($i > 0) {
										echo('<div class="sep"></div>');
									} ?>
									<div class="el">
										<h2>
											<?= RichText::asText($el->content_subtitle); ?>
											<img src="/img/common/arrow-down.svg">
										</h2>
										<?= RichText::asHtml($el->content_text); ?>
									</div>
							<?php $i++;
								} 
							?>
						</div>
					</div>

					<aside>
						<h2>
							<?= RichText::asText($document->sidebar_title); ?>
						</h2>
						<?= RichText::asHtml($document->sidebar_first_text); ?>
						<div class="container-links">
							<a href="<?= $document->sidebar_cta_link_mail->url; ?>">
								<img src="<?= $document->sidebar_icon_mail->url; ?>">
								<span>
									<?= RichText::asText($document->sidebar_cta_text_mail); ?>
								</span>
							</a>
							<a href="<?= $document->sidebar_cta_link_phone->url; ?>">
								<img src="<?= $document->sidebar_icon_phone->url; ?>">
								<span>
									<?= RichText::asText($document->sidebar_cta_text_phone); ?>
								</span>
							</a>
						</div>
						<?= RichText::asHtml($document->sidebar_second_text); ?>
					</aside>

				</div>
			</section>
			
		</main>

		<?php include('common-footer.php') ?>

		<script type="text/javascript" src="/script/minify/common-min.js"></script>

		<script type="text/javascript" src="/script/minify/mentions-min.js"></script>
	</body>
</html>
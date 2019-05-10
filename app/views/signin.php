<?php 
use Prismic\Dom\RichText;
$document = $WPGLOBAL['document']->data;
?>
<html>
	<head>

		<title>Sign In</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="/style/css/signin.css">

		<script type="text/javascript" src="/script/minify/jQuery.3.3.1-min.js"></script>

		<script type="text/javascript" src="/script/minify/jquery.parallax-scroll-min.js"></script>

	</head>
	
	<body>

		<?php 
		$type = 'signin';
		include('common-header.php');
		?>

		<main>

			<section id="section-form">
				<img class="obj-1" src="/img/signin/obj-1.svg">
				<img class="obj-2" src="/img/signin/obj-2.svg">
				<div class="wrapper">
					<div class="container-text">
						<h1>
							<?= RichText::asText($document->form_title); ?>
						</h2>
						<p>
							<?= RichText::asHtml($document->form_text); ?>
						</p>
					</div>
					<form method="post" action="#">
						<?php 
							$i = 1;
							foreach ($document->from_all_input as $input) { 
								if($i == 1 || $i == 3) { echo('<div class="row">'); } ?>
								<div class="input">
									<label>
										<?= RichText::asText($input->form_input_label); ?>
									</label>
									<input type="<?= $input->type_input; ?>" name="<?= RichText::asText($input->form_name_input); ?>" placeholder="<?= RichText::asText($input->form_placeholder_input); ?>">
									<div class="sep"></div>
									<span>
										<?= RichText::asText($input->form_error_message); ?>
									</span>
									<img class="cross" src="/img/common/red-cross.svg">
									<img class="check" src="/img/common/check.svg">
								</div>		
						<?php 
								if($i == 2 || $i == 4) { echo('</div>'); }
								$i++;
							} 
						?>
						<label class="checkbox">
							<input type="checkbox">
							<span class="checkmark"></span>
							<div class="text">
								<?= RichText::asHtml($document->from_valid_text); ?>
							</div>
						</label>
						<button class="hover-center">
							<span class="btn-text">
								<?= RichText::asText($document->from_cta_text); ?>
							</span>
							<svg class="btn-arrow" viewBox="0 0 13 6">
							   <use xlink:href="/img/common/arrow-1.svg#arrow-1"></use>
							</svg>
						</button>
					</form>
				</div>
			</section>			
			
		</main>

		<?php include('common-footer.php') ?>

		<script type="text/javascript" src="/script/minify/common-min.js"></script>

		<script type="text/javascript" src="/script/minify/signin-min.js"></script>
	</body>
</html>
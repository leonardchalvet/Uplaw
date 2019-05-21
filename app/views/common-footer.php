<?php
use Prismic\Dom\RichText;
$footer = $WPGLOBAL['footer']->data;
$allUrl = $WPGLOBAL['allUrl'];
?>
<footer>
	<div class="wrapper">
		<div class="container-text">
			<a href="" class="logo">
				<img src="<?= $footer->footer_logo->url; ?>" alt="">
			</a>
			<p>
				<?= RichText::asText($footer->footer_text); ?>
			</p>
			<div class="rights">
				<?= RichText::asText($footer->footer_copyright); ?>
			</div>
		</div>
		<div class="container-links">
			<h5>
				<?= RichText::asText($footer->footer_title_first_column); ?>
			</h5>
			<ul>
				<?php 
					foreach ($footer->footer_first_column as $li) { ?>
						<li><a href="<?=$li->footer_firstcolumn_cta_link->url; ?>">
							<?= RichText::asText($li->footer_firstcolumn_cta_text); ?>
						</a></li>
				<?php
					} 
				?>
			</ul>
		</div>
		<div class="container-links">
			<h5>
				<?= RichText::asText($footer->footer_title_second_column); ?>
			</h5>
			<ul>
				<?php 
					foreach ($footer->footer_second_column as $li) { ?>
						<li><a href="<?=$li->footer_secondcolumn_cta_link->url; ?>">
							<?= RichText::asText($li->footer_secondcolumn_cta_text); ?>
						</a></li>
				<?php
					} 
				?>
			</ul>
		</div>
		<div class="container-sn">
			<?php 
				foreach ($footer->footer_all_social_network as $sn) { ?>
					<a href="<?=$sn->footer_link_social_network->url; ?>" class="sn">
						<img src="<?= $sn->footer_logo_social_network->url; ?>">
					</a>
			<?php
				} 
			?>
		</div>
		<div class="container-lang">
			<?php 
				$i = 0;
				foreach ($footer->footer_all_languages as $lg) { 
					if($i == 0) { ?>
						<div class="lg">
							<img src="<?= $lg->footer_flag_language->url; ?>">
							<span>
								<?= RichText::asText($lg->footer_name_language); ?>
							</span>
							<img src="/img/footer/arrow-down.svg">
						</div>
					<?php } ?>
			<?php $i++;
				} 
			?>
			<div class="dropdown">
				<?php 
					$i = 0;
					foreach ($footer->footer_all_languages as $lg) { 

						$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
						$url = $actual_link;
						
						if($allUrl != NULL) {
							$link_explode = explode('/', $actual_link);
							$before_link = $link_explode[0].'//'.$link_explode[1].'/'.$link_explode[2].'/';

							foreach ($allUrl as $lgUrl) { 
								if($lgUrl[1] == $lg->footer_lang_name) {
									$url = $before_link.''.$lgUrl[1].'/'.$lgUrl[0];
								}
								if($link_explode[2] == $lg->footer_lang_name) {
									$url = $actual_link;
								}
							}
						}

						?>

						<a href="<?= $url; ?>" class="lg">
							<img src="<?= $lg->footer_flag_language->url; ?>">
							<span>
								<?= RichText::asText($lg->footer_name_language); ?>
							</span>
						</a>
				<?php $i++;
					} 
				?>
			</div>
		</div>
	</div>
</footer>
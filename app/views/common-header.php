<?php
use Prismic\Dom\RichText;
$header = $WPGLOBAL['header']->data;
?>
<header id="header-desktop">
	
	<div class="wrapper">
		
		<div class="container-link">
			<a href="<?=$header->nav_logo_link->url; ?>" class="logo">
				<img src="<?= $header->nav_logo->url; ?>" alt="">
			</a>
			<ul>
				<li>
					<a>
						<?= RichText::asText($header->nav_first_column_text); ?>
					</a>
				</li>
				<li>
					<a href="<?=$header->nav_second_column_link->url; ?>">
						<?= RichText::asText($header->nav_second_column_text); ?>
					</a>
				</li>
				<li>
					<a href="<?=$header->nav_third_column_link->url; ?>">
						<?= RichText::asText($header->nav_third_column_text); ?>
					</a>
				</li>
				<li>
					<a href="<?=$header->nav_fourth_column_link->url; ?>">
						<?= RichText::asText($header->nav_fourth_column_text); ?>
					</a>
				</li>
			</ul>
		</div>

		<div class="container-action">
			<a class="signin">

				<img src="<?= $header->action_icon_signup->url; ?>" alt="">
				<span>
					<?= RichText::asText($header->action_text_signup); ?>
				</span>
			</a>
			<div class="sep"></div>
			<a class="signup hover-left">
				<span class="btn-text">
					<?= RichText::asText($header->action_text_contact); ?>
				</span>
				<svg class="btn-arrow" viewBox="0 0 13 6">
				   <use xlink:href="/img/common/arrow-1.svg#arrow-1"></use>
				</svg>
			</a>
		</div>

	</div>

</header>


<header id="header-mobile">
	
</header>
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
				<li <?php if($type == 'solutions'){ echo 'class="select"';}; ?> >
					<a>
						<?= RichText::asText($header->nav_first_column_text); ?>
						<img src="/img/common/arrow-down.svg">
					</a>
				</li>
				<li <?php if($type == 'features'){ echo 'class="select"';}; ?> >
					<a href="<?=$header->nav_second_column_link->url; ?>">
						<?= RichText::asText($header->nav_second_column_text); ?>
					</a>
				</li>
				<li <?php if($type == 'services'){ echo 'class="select"';}; ?> >
					<a href="<?=$header->nav_third_column_link->url; ?>">
						<?= RichText::asText($header->nav_third_column_text); ?>
					</a>
				</li>
				<li <?php if($type == 'about'){ echo 'class="select"';}; ?> >
					<a href="<?=$header->nav_fourth_column_link->url; ?>">
						<?= RichText::asText($header->nav_fourth_column_text); ?>
					</a>
				</li>

				<div class="dropdown">
					<?php 
						foreach ($header->nav_dropdown_first_column as $a) { ?>
							<a href="<?=$a->dropdown_link->url; ?>">
								<?= RichText::asText($a->dropdown_text); ?>
							</a>
					<?php
						} 
					?>
				</div>
			</ul>
		</div>

		<div class="container-action">
			<a class="login" href="<?=$header->action_icon_signup_link->url; ?>" >

				<img src="<?= $header->action_icon_signup->url; ?>" alt="">
				<span>
					<?= RichText::asText($header->action_text_signup); ?>
				</span>
			</a>
			<div class="sep"></div>
			<a class="contact hover-left">
				<span class="btn-text">
					<?= RichText::asText($header->action_text_contact); ?>
				</span>
				<svg class="btn-arrow" viewBox="0 0 13 6">
				   <use xlink:href="/img/common/arrow-1.svg#arrow-1"></use>
				</svg>
			</a>

			<!--
			<div class="lg-log-in">
				<img class="cross" src="/img/common/cross.svg">
				<h3>
					<?= RichText::asText($header->action_text_signup); ?>
				</h3>
				<p>
					<?= RichText::asText($header->action_title_dropdown_signup); ?>
				</p>
				<form method="post" action="<?= $header->action_cta_link_dropdown_signup->url; ?>">
					<?php 
						foreach ($header->action_form_dropdown_signup as $input) { ?>
							<div class="input">
								<label>
									<?= RichText::asText($input->action_label_form_dropdown_signup); ?>
								</label>
								<input type="<?= $input->action_type_form_dropdown_signup; ?>" name="<?= RichText::asText($input->action_name_form_dropdown_signup); ?>" placeholder="<?= RichText::asText($input->action_placeholder_form_dropdown_signup); ?>">
								<div class="sep"></div>
								<span>
									<?= RichText::asText($input->action_form_error_message); ?>
								</span>
								<img class="cross" src="/img/common/red-cross.svg">
								<img class="check" src="/img/common/check.svg">
							</div>	
					<?php
						} 
					?>
					<a href="<?= $header->action_link_password_dropdown_signup->url; ?>">
						<?= RichText::asText($header->action_text_password_dropdown_signup); ?>
					</a>
					<button class="hover-center">
						<span class="btn-text">
							<?= RichText::asText($header->action_cta_text_dropdown_signup); ?>
						</span>
						<svg class="btn-arrow" viewBox="0 0 13 6">
						   <use xlink:href="/img/common/arrow-1.svg#arrow-1"></use>
						</svg>
					</button>
				</form>
			</div>
			-->

		</div>

	</div>

</header>

<header id="header-mobile">
	
	<div class="container-nav">
		<div class="wrapper">
			<div class="burger">
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
			</div>
			<a href="<?=$header->nav_logo_link->url; ?>" class="logo">
				<img src="<?= $header->nav_logo->url; ?>" alt="">
			</a>
			<div class="cta-log-in">
				<span>
					<?= RichText::asText($header->action_text_contact); ?>
				</span>
			</div>
		</div>
	</div>

	<div class="container-menu">
		<div class="wrapper">

			<ul class="container-link">
				<li>
					<a>
						<?= RichText::asText($header->nav_first_column_text); ?>
						<img src="/img/common/arrow-down.svg">
					</a>
				</li>
				<div class="dropdown">
					<?php 
						foreach ($header->nav_dropdown_first_column as $a) { ?>
							<a href="<?=$a->dropdown_link->url; ?>">
								<?= RichText::asText($a->dropdown_text); ?>
							</a>
					<?php
						} 
					?>
				</div>
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

			<div class="container-action">
				<a class="login" href="<?=$header->action_icon_signup_link->url; ?>" >
					<img src="<?= $header->action_icon_signup->url; ?>" alt="">
					<span>
						<?= RichText::asText($header->action_text_signup); ?>
					</span>
				</a>
			</div>
		</div>
	</div>

	<!--
	<div class="lg-log-in">
		<img class="cross" src="/img/common/cross.svg">
		<h3>
			<?= RichText::asText($header->action_text_signup); ?>
		</h3>
		<p>
			<?= RichText::asText($header->action_title_dropdown_signup); ?>
		</p>
		<form method="post" action="<?= $header->action_cta_link_dropdown_signup->url; ?>">
			<?php 
				foreach ($header->action_form_dropdown_signup as $input) { ?>
					<div class="input">
						<label>
							<?= RichText::asText($input->action_label_form_dropdown_signup); ?>
						</label>
						<input type="<?= $input->action_type_form_dropdown_signup; ?>" name="<?= RichText::asText($input->action_name_form_dropdown_signup); ?>" placeholder="<?= RichText::asText($input->action_placeholder_form_dropdown_signup); ?>">
						<div class="sep"></div>
						<span>
							<?= RichText::asText($input->action_form_error_message); ?>
						</span>
						<img class="cross" src="/img/common/red-cross.svg">
						<img class="check" src="/img/common/check.svg">
					</div>	
			<?php
				} 
			?>
			<a href="<?= $header->action_link_password_dropdown_signup->url; ?>">
				<?= RichText::asText($header->action_text_password_dropdown_signup); ?>
			</a>
			<button class="hover-center">
				<span class="btn-text">
					<?= RichText::asText($header->action_cta_text_dropdown_signup); ?>
				</span>
				<svg class="btn-arrow" viewBox="0 0 13 6">
				   <use xlink:href="/img/common/arrow-1.svg#arrow-1"></use>
				</svg>
			</button>
		</form>
	</div>
	-->

</header>

<div class="container-lg">
	<div class="background"></div>
	<div class="lg-contact">
		<img class="cross" src="/img/common/cross.svg">
		<img class="obj-1" src="/img/contact/obj-1.svg">
		<img class="obj-2" src="/img/contact/obj-2.svg">
		<div class="container-text">
			<h2>
				<?= RichText::asText($header->action_title_dropdown_contact); ?>
			</h2>
			<p>
				<?= RichText::asText($header->action_text_dropdown_contact); ?>
			</p>
		</div>
		<form method="post" action="/mail.php">
			<?php 
				$i = 1;
				foreach ($header->action_form_dropdown_contact as $input) { 
					if($i == 1 || $i == 3) { echo('<div class="row">'); }
					else if($i > 4) { echo('<div class="row">'); }            ?>
					<div class="input">
						<label>
							<?= RichText::asText($input->action_form_label_input_contact); ?>
						</label>
						<?php if($input->action_type_input_contact == 'textarea') { ?>
							<textarea name="<?= trim(RichText::asText($input->action_name_input_contact)); ?>" placeholder="<?= RichText::asText($input->action_placeholder_input_contact); ?>" required></textarea>
						<?php } else { ?>
							<input type="<?= $input->action_type_input_contact; ?>" name="<?= trim(RichText::asText($input->action_name_input_contact)); ?>" placeholder="<?= RichText::asText($input->action_placeholder_input_contact); ?>" required>
						<?php } ?>
						<div class="sep"></div>
						<span>
							<?= RichText::asText($input->action_error_message_contact); ?>
						</span>
						<img class="cross" src="/img/common/red-cross.svg">
						<img class="check" src="/img/common/check.svg">
					</div>		
			<?php 
					if($i == 2 || $i == 4) { echo('</div>'); }
					else if($i > 4) { echo('</div>'); }           
					$i++;
				} 

				$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

				echo '<textarea style="display:none" name="page">'.$actual_link.'</textarea>';


				echo '<textarea name="allMail" style="display:none">';
				foreach ($header->action_mails_dropdown_contact as $mail) {
					echo trim(RichText::asText($mail->action_mail_contact_dropdown_contact)).', ';
				}
				echo '</textarea>';


			?>
			<button class="hover-center">
				<span class="btn-text">
					<?= RichText::asText($header->action_cta_text_dropdown_contact); ?>
				</span>
				<svg class="btn-arrow" viewBox="0 0 13 6">
				   <use xlink:href="/img/common/arrow-1.svg#arrow-1"></use>
				</svg>
			</button>
		</form>
	</div>
</div>
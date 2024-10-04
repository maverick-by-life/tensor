<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<title>
		<?php post_type_archive_title() ?? the_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class($class) ?>>
	<header class="pt-8">
		<div class="main-container">
			<nav class="flex justify-between items-center py-5 px-[60px] bg-orange bg-opacity-20 rounded-twenty">
				<?php
				wp_nav_menu([
					'theme_location' => 'main-menu-left',
					'menu_class' => 'flex',
					'container' => 'ul'
				])
				?>
				<?php the_custom_logo() ?>
				<?php
				wp_nav_menu([
					'theme_location' => 'main-menu-right',
					'menu_class' => 'flex ',
					'container' => 'ul'
				])
				?>
			</nav>
		</div>
	</header>
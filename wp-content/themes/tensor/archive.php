<?php get_header(); ?>
<main>
	<div class="main-container">
		<h1 class="">
			<?php post_type_archive_title() ?>
		</h1>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="">
					<?php the_post_thumbnail() ?>
					<div>
						<h2><?= get_the_title($post) ?></h2>
						<?php the_content() ?>
					</div>
				</div>
			<?php endwhile; ?>
		<?php else : ?>
			<h3>Записи отсутствуют</h3>
		<?php endif;
		?>
	</div>
</main>
<?php get_footer(); ?>
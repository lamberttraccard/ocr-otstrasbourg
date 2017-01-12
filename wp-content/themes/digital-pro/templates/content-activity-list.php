<?php if ( have_rows( 'activity', 'option' ) ): ?>

	<?php while ( have_rows( 'activity', 'option' ) ): the_row();?>

		<div id="<?php echo 'activite-' . get_row_index() ?>" class="entry">
			<div class="row">
				<div class="col">
					<?php echo wp_get_attachment_image(get_sub_field('image'), array('200', '300'), "", array("class" => "post-image entry-image")); ?>
				</div>
				<div class="col">
					<header class="entry-title">
						<h2 itemprop="headline">
							<?php the_sub_field('title'); ?>
						</h2>
					</header>
					<div class="entry-content" itemprop="text">
						<p><?php the_sub_field('description_short') ?></p>
						<a class="button small alt show-description" href="#">En savoir plus</a>
						<a class="button small" href="<?php echo get_page_link(12); ?>">S'inscrire</a>
					</div>
				</div>
			</div>

			<div class="entry-description">
				<h4>En savoir plus</h4>
				<?php the_sub_field('description') ?>
			</div>
		</div>

	<?php endwhile; ?>
<?php endif; ?>
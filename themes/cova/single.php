<?php get_header(); ?>

			<section id="blog">
				<h2>Archivo<br />Personal</h2>
				<article>
					<h3><?php the_title(); ?></h3>
					<img src="<?php echo get_bloginfo('template_url'); ?>/images/pablocovarrubias.jpg">
					<?php the_content(); ?>

				</article>

				<div class="navigation">
					<?php next_post_link('%link', 'Siguiente') ?> | <?php previous_post_link('%link', 'Anterior') ?>
				</div>
			</section>

<?php get_footer(); ?>
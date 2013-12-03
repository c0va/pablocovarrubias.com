<?php get_header(); ?>
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
			<section id="blog">
				<h2>Archivo<br />Personal</h2>
				<article>
					<h3><?php the_title(); ?></h3>
					
					<?php
						$id = get_post_thumbnail_id( $post->ID );
						$img = wp_get_attachment_image_src( $id, 'blog', false );

						?>
						<img src="<?php echo $img[0];?>">
					<?php the_content(); ?>

				</article>

				<div class="navigation">
					<?php next_post_link('%link', 'Siguiente') ?> | <?php previous_post_link('%link', 'Anterior') ?>
				</div>
			</section>

		<?php endwhile; endif;  ?>
<?php get_footer(); ?>
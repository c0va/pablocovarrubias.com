<?php get_header(); ?>
			<?php $about = get_page_by_path('programador-docente-co-fundador-de-hc'); ?>
			<section id="about">
				<h1>Pablo<br />Covarrubias</h1>

				<!-- <h2>ESTA PÁGINA ESTÁ EN CONSTRUCCIÓN</h2> -->
				<h3><?php echo $about->post_title; ?></h3>
				<?php echo apply_filters('the_content', $about->post_content); ?>
			</section>
			<?php
					$args = array(
							'post_type' => 'post',
							'posts_per_page' => 1,
							'numberposts' => 1
						);
					$posts = get_posts($args);
					foreach ($posts as $post): setup_postdata($post);
				?>
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
			<?php endforeach; ?>
<?php get_footer(); ?>
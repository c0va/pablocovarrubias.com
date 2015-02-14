<?php get_header(); ?>
			<?php $about = get_page_by_path('programador-docente-co-fundador-de-hc'); ?>
			<section id="about" class="clearfix">
				<div class="titulo">
					<h1>Pablo<br />Covarrubias</h1>

					<!-- <h2>ESTA PÁGINA ESTÁ EN CONSTRUCCIÓN</h2> -->
					<h3><?php echo $about->post_title; ?></h3>
				</div>
				<article>
					<?php echo apply_filters('the_content', $about->post_content); ?>
				</article>
			</section>

			<section id="blog" class="clearfix">
				<div class="titulo">
					<h2>Archivo<br />Personal</h2>
				</div>

				<?php
					$args = array(
							'post_type' => 'post',
							'posts_per_page' => -1,
							'numberposts' => -1
						);
					$posts = get_posts($args);
					foreach ($posts as $post): setup_postdata($post);
				?>

				<article id="<?php echo $post->post_name; ?>">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

					<?php
						$id = get_post_thumbnail_id( $post->ID );
						$img = wp_get_attachment_image_src( $id, 'blog', false );

						?>
						<?php if(has_post_thumbnail( $post->ID )){ ?><!-- <img src="<?php echo $img[0];?>">--> <?php } ?>
					<?php the_content(); ?>

				</article>
				<?php endforeach; ?>

				<!--<div class="navigation">
					<?php next_post_link('%link', 'Siguiente') ?> | <?php previous_post_link('%link', 'Anterior') ?>
				</div>-->
			</section>


<?php get_footer(); ?>